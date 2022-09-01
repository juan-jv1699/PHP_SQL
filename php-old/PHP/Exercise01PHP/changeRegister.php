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
    
        $registros = mysqli_query($conexion, "update alumnos
                              set codCurso=$_REQUEST[codigocurso], nombre='$_REQUEST[nombreCambio]', mail='$_REQUEST[emailCambio]', fechaNac='$_REQUEST[dateCambio]'
                            where codigoAlum=$_REQUEST[codigoEstudiante]") or
            die("Problemas en el select:" . mysqli_error($conexion));

        header("location: updateDate.php?done=true&oldCode={$_REQUEST['codigoEstudiante']}");
        ?>
    </section>
</body>

</html>