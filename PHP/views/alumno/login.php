<?php
    if($_POST){
        $conexion = dataBase::connect();
        $try= mysqli_query($conexion,"select nombre, mail, contraseñas from alumnos where mail='$_REQUEST[email]'");
        $tryarr = mysqli_fetch_array($try);
        // echo "<h1>$tryarr[]</h1>";
        if($tryarr){
            if($tryarr[1]==$_REQUEST['email'] && $tryarr[2]==$_REQUEST['key']){
                header("location: index.php?controller=alumnos&action=menu");
                $_SESSION['nombre'] = $tryarr[0];
            }
            else{
                echo "<h1>Datos incorrectos</h1>";
            }
        }
        else{
            echo "<h1>Datos incorrectos</h1>";
        };
    };
    if(isset($_SESSION['nombre'])){
        header("location:".base_url."index.php?controller=alumnos&action=menu");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        div.especial {
            background: wheat;
        }
    </style>
</head>
<body>
    <section class="container text-center p-5">
        <div class="row p-5">
            <div class="col container p-5">
                <form action="" method="post">
                    <!-- title -->
                    <div class="row align-items-center p-1">
                        <div class="col">
                            <h2>Login</h2>
                        </div>
                    </div>
                    <!-- User name -->
                    <div class="row align-items-center p-1">
                        <div class="col">
                            <p>Ingrese su contraseña</p>
                            <input class="email" type="email" placeholder="ingrese tu correo" name="email" required>
                        </div>
                    </div>
                    <!-- User email -->
                    <div class="row align-items-center p-1">
                        <div class="col">
                            <p>Ingrese su usuario</p>
                            <input class="keyword" type="password" placeholder="ingrese su contraseña" name="key" required>
                        </div>
                    </div>
                    <!-- btn submit -->
                    <div class="row align-items-center p-1 mt-2">
                        <div class="col">
                            <input class="btn-submit btn btn-primary" type="submit" value="ENTER">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>