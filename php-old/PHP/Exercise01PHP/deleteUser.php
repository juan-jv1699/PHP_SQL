<?php
    $conexion = mysqli_connect("localhost", "root", "", "php01taller") or die("Problemas con la conexión");
    $usuario = mysqli_query($conexion , "delete from alumnos WHERE codigoAlum =$_REQUEST[oldCode]")
    or die("Problemas en el select" . mysqli_error($conexion));
    if($usuario){
        echo "Se elimino al alumno exitosamente";
    }
    else {
        echo "Error en la solicitud";
    }
    header("refresh:4, url = registroAlumnos.php");
    mysqli_close($conexion);
?>