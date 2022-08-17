<html>
<html>

<head>
  <title>push student</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "php01taller") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into cursos(nombreCurso) values 
                       ('$_REQUEST[nombreCurso]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El curso fue ingresado";
  ?>
  <form action="../index.html" method="post">
    <input type="submit" value="regresar al inicio">
  </form>
</body>

</html>