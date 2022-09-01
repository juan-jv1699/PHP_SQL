<html>
<head>
    <title>answer</title>
    <link rel="stylesheet" href="../css/style00.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" style="size: cover;">
</head>
<body>
    <?php
        require_once("../functions01.php");
        $conexion=retornarConexion();

        $registros = mysqli_query($conexion, "select * from alumnos inner join cursos on cursos.codigoCurso = alumnos.codCurso where mail='$_REQUEST[mail]'") 
        or die("Problemas en el select:" . mysqli_error($conexion));

        if ($answer= mysqli_fetch_array($registros)) {
            echo "Nombre: ".$answer[1]."<br>";
            echo "Codigo: ".$answer[0]."<br>";
            echo "Email: ".$answer[2]."<br>";
            echo "Curso: ".$answer[4]."<br>";
            echo "Nombre curso: ". $answer['nombreCurso']."<br>";
            echo "Codigo curso: ". $answer['codigocurso']."<br>";
        }
        else {

        }
    ?>
    <hr>
    <form action="changeRegister.php" method="post">
        <p>si desea cambiar de curso seleccione el curso deseado</p>
        <input type="hidden" name="mailviejo" value="<?php echo $answer['mail'] ?>">
        <input type="hidden" name="codigoEstudiante" value="<?php echo $answer[0] ?>">
        <select name="codigocurso">
        <?php
          $registros = mysqli_query($conexion, "select * from cursos") or
            die("Problemas en el select:" . mysqli_error($conexion));
          while ($reg = mysqli_fetch_array($registros)) {
            if ($answer['codigocurso'] == $reg['codigoCurso'])
              echo "<option value=\"$reg[codigoCurso]\" selected>$reg[nombreCurso]</option>";
            else
              echo "<option value=\"$reg[codigoCurso]\">$reg[nombreCurso]</option>";
          }
          ?>
      </select>
      <br>
      <hr>
      <p>si desea cambiar de nombre ingrese el nombre deseado</p>
      <input type="text" name="nombreCambio" value="<?php echo $answer[1] ?>">
      <br>
      <hr>
      <p>si desea cambiar de email ingrese el email deseado</p>
      <input type="email" name="emailCambio" value="<?php echo $answer[2] ?>">
      <br>
      <hr>
      <p>si desea cambiar la fecha de nacimiento ingrese la fecha</p>
      <input type="date" name="dateCambio" value="<?php echo $answer[5] ?>">
      <br>
      <input type="submit" value="Modificar">
    </form>
    <form action="/Exercise01PHP/searchEmail.php" method="POST">
      <input type="submit" value="buscar de nuevo" >
    </form>
    <form action="../index.html" method="POST">
      <input type="submit" value="inicio" >
    </form>

</body>
</html>