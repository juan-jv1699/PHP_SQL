<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplier</title>
    <link rel="stylesheet" href="../css/style00.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" style="size: cover;">
</head>
<body>
    <section class="tablas">
    <h1>Tablas de multiplicar</h1>
    <form href="tableMultiply.php" method="post">
        <h4>digite el numero del que desea conocer la tabla de multiplicar</h4>
        <input type="number" name="num">
        <hr>
        <input type="submit" name="operar">
    </form>
    <form action="../menu.php">
        <input type="submit" value="regresar al inicio">
    </form>
    <?php if($_POST){
        utils::tablasMultiplicar($_POST['num']);
        ?>
        <form action="/index.html" method="post">
            <input type="submit" value="inicio">
        </form>
        <?php
        
    }
    ?>
    
    </section>
</body>
</html>