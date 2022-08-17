<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "pruebasphp01") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update alumnos
                          set mail='$_REQUEST[mailnuevo]' 
                        where mail='$_REQUEST[mailviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El mail fue modificado con exito";

    $oldMails = mysqli_query($conexion, "select * from `emailantiguo` where emailOld='$_REQUEST[mailviejo]'")
    ?>
    <!-- <?php
    $conexion = mysqli_connect("localhost", "root", "", "pruebasphp01") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update alumnos
                          set mail='$_REQUEST[mailnuevo]' 
                        where mail='$_REQUEST[mailviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "El mail fue modificado con exito";
    echo $_REQUEST[mailnuevo];
    echo $oldMails
    ?> -->
</body>

</html>
