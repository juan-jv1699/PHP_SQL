<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php

    $conexion = mysqli_connect("localhost", "root", "", "pruebasphp01") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from alumnos
                        where mail='$_REQUEST[mail]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
         $reg['mail']
    ?>
    <form action="pag03.php" method="post">
      <h1>Ingrese nuevo mail:</h1>
      <input type="email" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
      <br>
      <input type="hidden" name="mailviejo" value="<?php echo $reg['mail'] ?>">
      <input type="submit" value="Modificar">
    </form>
    <?php
  } else
    echo "No existe alumno con dicho mail";
  mysqli_close($conexion);
  ?>
</body>

</html>