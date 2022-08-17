<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style00.css">
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" style="size: cover;">
</head>
<body>
    <section class="registros">
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "php01taller") or die("Problemas con la conexión");
        
            $usuario = mysqli_query($conexion , "delete from alumnos WHERE mail='$_REQUEST[mail]'")
            or die("Problemas en el select" . mysqli_error($conexion));
            if($usuario){
                echo "Se elimino al alumno exitosamente";
            }
        
            mysqli_close($conexion);
        ?>
        <div class="btns">
            <form action="/Exercise01PHP/deleteRegistro.php" method="POST">
                  <input type="submit" value="eliminar otro registro" >
            </form>
            <form action="../index.html" method="POST">
                  <input type="submit" value="inicio" >
            </form>
        </div>
    </section>
    
</body>
</html>