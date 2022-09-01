<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "pruebasphp01") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "update alumnos
                          set codigocurso=$_REQUEST[codigocurso], nombre='$_REQUEST[nombreCambio]', mail='$_REQUEST[emailCambio]'
                        where codigo='$_REQUEST[codigoEstudiante]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "Los cambios se realizaron con exito";
    ?>
</body>

</html>