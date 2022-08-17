<html>
<head>
  <title>Problema</title>
  <link rel="stylesheet" href="../css/style00.css">
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" style="size: cover;">
</head>
<body>
  <section class="tablas">
  <?php
  
  $conexion = mysqli_connect("localhost", "root", "", "php01taller") or
  die("Problemas con la conexión");
  
  $registros = mysqli_query($conexion, "select nombre from alumnos where codCurso = $_REQUEST[codigocur]") or
  die("Problemas en el select:" . mysqli_error($conexion));
  
  echo "Alumnos inscriptos a dicho curso<br>";
  while ($reg = mysqli_fetch_array($registros)) {
    echo $reg['nombre'] . " - ";
  }

  mysqli_close($conexion);
  ?>
  <form action="/Exercise01PHP/registroCursos.php">
    <input type="submit" value="regresar">
  </form>
  </section>
</body>

</html>