<html>

<head>
  <title>registro alumno</title>
  <link rel="stylesheet" href="<?= base_url?>/assets/css/style00.css">
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" style="size: cover;">
</head>

<body>
  <section class="registros">
    <?php if(isset($_SESSION['register'])){
        echo $_SESSION['register'];
    }
    ?>
    <h1>Alta de Alumnos</h1>
    <form action="index.php?controller=alumnos&action=save" method="post">
      Ingrese nombre:
      <input type="text" name="nombre" required><br>
      Ingrese mail:
      <input type="email" name="email" required><br>
      Ingrese la contraseña:
      <input type="password" name="password" required><br>
      Seleccione el curso:
        <select name="codigocurso">
          <?php
          $conexion= dataBase::connect();
          $registros = mysqli_query($conexion, "select * from cursos") or die("Problemas en el select:" . mysqli_error($conexion));
          while($reg=mysqli_fetch_array($registros)){
              echo "<option value=\"$reg[codigoCurso]\">$reg[nombreCurso]</option>";
            }
            ?>  
      
        </select>
        <br>
        Ingrese la fecha de nacimiento:
        <input type="date" name="date"><br>
        <input type="submit" value="Registrar">
    </form>
    <form action="index.php?controller=alumnos&action=menu" method="post">
      <input type="submit" value="Volver">
    </form>

  </section>
</body>

</html>