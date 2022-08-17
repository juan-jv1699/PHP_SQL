<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clearTable</title>
    <link rel="stylesheet" href="../css/style00.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" style="size: cover;">
</head>
<body>
    <section class="registros">
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "php01taller") or
          die("Problemas con la conexión");

        mysqli_query($conexion, "delete from alumnos") or
          die("Problemas en el select:" . mysqli_error($conexion));

        echo "Se efectuó el borrado de todos los alumnos.";

        mysqli_close($conexion);
    ?>
    <form action="../index.html">
        <input type="submit" value="inicio">
    </form>
    </section>
</body>
</html>