<html>

<head>
  <title>registro alumno</title>
  <link rel="stylesheet" href="../css/style00.css">
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" style="size: cover;">

</head>

<body>
  <section class="registros">
    <h1>Registro curso</h1>
    <form action="pushDataCurso.php" method="post">
      Ingrese nombre del curso:
      <input type="text" name="nombreCurso" required><br>
      
      <input type="submit" value="Registrar">
    </form>
    <form action="../menu.php" method="post">
          <input type="submit" value="Volver">
      </form>
  </section>
</body>

</html>