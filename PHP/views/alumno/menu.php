<?php
require_once('config/parameters.php');
require_once('config/db.php');
if($_POST){
    if ($_POST['coloSelect']){
        $color= $_POST['coloSelect'];
        echo $color;
        setcookie("color", "{$color}", time() + 60 * 60 * 24 * 365, "/");
        header("location:".base_url);
    }
}
if(!isset($_SESSION['nombre'])){
    header("location:".base_url);
}
?>
<!DOCTYPE html>
<html lang="en" <?php if (isset($_COOKIE['color'])) echo " style='background:$_COOKIE[color]'" ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .not-active {
            cursor: not-allowed;
            pointer-events: none;
        }
        div.card {
            height: 10rem;
        }
        div.big-card{
            height: 14rem;
        }
    </style>
</head>
<style>
    .bgColor {
        background-color: grey;
    }
   
</style>
<body class="bgColor">
    <?=
        "<div class='title h1 p-2 m-3'>Bienvenido $_SESSION[nombre]</div>";
        unset($_SESSION['register']);
    ?>
    <div class="container-fluid">
            <!-- Primera fila -->
            <div class="row m-3 p-1">
                <!-- col  -->
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Ingresar un alumno</h5>
                            <h6 class="card-subtitle mb-2 text-muted">aqui registras un alumno</h6>
                            <a href="index.php?controller=alumnos&action=register" class="card-link btn btn-outline-primary">Enter</a>
                        </div>
                    </div>
                </div>

                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Consultar Alumnos</h5>
                            <h6 class="card-subtitle mb-2 text-muted">aqui puedes ver todos los alumnos</h6>
                            <a href="index.php?controller=alumnos&action=allAlumnos" class="card-link btn btn-outline-primary">Enter</a>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Ingresar un curso</h5>
                            <h6 class="card-subtitle mb-2 text-muted">aqui registras un curso</h6>
                            <a href="Exercise01PHP/registrarCurso.php" class="card-link btn btn-outline-primary">Enter</a>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Consultar cursos</h5>
                            <h6 class="card-subtitle mb-2 text-muted">aqui consultas todos los cursos</h6>
                            <a href="index.php?controller=alumnos&action=register" class="card-link btn btn-outline-primary">Enter</a>
                        </div>
                    </div>
                </div>  

                
            </div>
            <!-- segunda fila -->
            <div class="row m-3 p-1">

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Consultar un alumno</h5>
                            <h6 class="card-subtitle mb-2 text-muted">aqui puedes buscar alumno por email</h6>
                            <a href="index.php?controller=alumnos&action=register" class="card-link btn btn-outline-primary">Enter</a>
                        </div>
                    </div>
                </div>

                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Eliminar un solo registro</h5>
                            <h6 class="card-subtitle mb-2 text-muted">aqui puedes eliminar un unico registro por su email</h6>
                            <a href="index.php?controller=alumnos&action=register" class="card-link btn btn-outline-primary">Enter</a>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Resetear la tabla</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Ten cuidado con esta fucion!!</h6>
                            <a href="Exercise01PHP/registrarCurso.php" class="card-link btn btn-outline-primary not-active">Enter</a>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Tablas de multiplicar</h5>
                            <h6 class="card-subtitle mb-2 text-muted">divertida utilidad para ver las tablas de multiplicar 😁</h6>
                            <a href="index.php?controller=alumnos&action=register" class="card-link btn btn-outline-primary">Enter</a>
                        </div>
                    </div>
                </div>  

            </div>
            <!-- Tercera fila -->
            <div class="row m-3 p-1">
                <!-- col  -->
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Cargar una imagen</h5>
                            <h6 class="card-subtitle mb-2 text-muted">aqui puedes subir una imagen</h6>
                            <a href="index.php?controller=alumnos&action=register" class="card-link btn btn-outline-primary">Enter</a>
                        </div>
                    </div>
                </div>

                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Quejas y Reclamos</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Aqui puede depositar cualquier queja, reclamo o solicitud</h6>
                            <a href="index.php?controller=alumnos&action=register" class="card-link btn btn-outline-primary">Enter</a>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Consultar Fechas</h5>
                            <h6 class="card-subtitle mb-2 text-muted">aqui puede revisar el calendario</h6>
                            <a href="Exercise01PHP/registrarCurso.php" class="card-link btn btn-outline-primary">Enter</a>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Consultar codigo ASCII </h5>
                            <h6 class="card-subtitle mb-2 text-muted">divertida utilidad para ver los codigos ASCSI</h6>
                            <a href="index.php?controller=alumnos&action=register" class="card-link btn btn-outline-primary">Enter</a>
                        </div>
                    </div>
                </div>  

                
            </div>
            <!-- Cuarta fila -->
            <div class="row m-3 p-1">
                <!-- col  -->
                <div class="col">
                    <div class="card big-card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Color fondo</h5>
                            <h6 class="card-subtitle mb-2 text-muted">selecione un color para personalizar la pagina</h6>
                            <form class="colorform" action="<?=base_url?>index.php?controller=alumnos&action=menu&sientro" method="POST">
                                <input type="color" class="form-control form-control-color" name="coloSelect" value="#ff0000" title="Choose your color">
                                <div>
                                    <input class="btn btn-outline-primary m-3" type="submit" value="Crear cookie" >
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>