<html>

<head>
  <title>push student</title>
</head>

<body>
  <?php
    $conexion = mysqli_connect("localhost", "root", "", "php01taller") or die("Problemas con la conexión");

    mysqli_query($conexion, "insert into alumnos(nombre,mail,codCurso) values ('$_REQUEST[nombre]','$_REQUEST[email]','$_REQUEST[codigocurso]')") or die("Problemas en el select".mysqli_error($conexion));
    
    mysqli_close($conexion);

    echo "El alumno fue dado de alta.";
  ?>
  <form action="/Exercise01PHP/registrarAlumno.php" method="post">
    <input type="submit" value="registrar otro alumno">
  </form>
  <form action="../index.php" method="post">
    <input type="submit" value="regresar al inicio">
  </form>
</body>

</html>