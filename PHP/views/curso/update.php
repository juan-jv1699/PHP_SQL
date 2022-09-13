<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>UpdateData</title>
  </head>
  <body>
        <section class="container">
            <header class="row mt-5 mb-2">
                <h2 class="col-6 offset-3 h1 title text-center card p-3">
                    <!-- tiotulo de la funcion -->
                    Cambiar Curso
                </h2>
            </header>
            <article class="row">
                <div class="col-6 offset-3 card mt-5">
                    <div class="d-flex flex-column p-5">
                        <!-- contenido -->
                            <!-- condicion para saber si se cambio exitosamente un archivo -->
                        <?php if(isset($_SESSION['register'])):?>
                            <?php if($_SESSION['register']='complete'):?>
                            <div class="alert alert-success">
                                <p>Cambios realizados con exito!</p>
                            </div>
                            <?php else:?>
                            <div class="alert alert-warning">
                                <p>Error al intentar realizar el proceso!</p>
                            </div>
                            <?php endif?>
                            <?php utils::closeSessions($_SESSION['register'])?>
                        <?php endif?>
                        <?php
                            $conexion=dataBase::connect();
                            if(isset($_GET['code'])){
                                $registros = mysqli_query($conexion, "select * from cursos where codigoCurso={$_GET['code']}") 
                                or die("Problemas en el select:" . mysqli_error($conexion));
                                if($registros){
                                    if ($answer= mysqli_fetch_array($registros)) {
                                        echo "Nombre: ".$answer[1]."<br>";
                                    }
                                }
                            }

                        ?>
                        <?php if(!isset($_SESSION['register'])):?>
                        <form action="<?=base_url?>index.php?controller=curso&action=update" method="POST">
                            <p>si desea cambiar de nombre ingrese el nombre deseado</p>
                            <input type="text" name="nombreCambio" value="<?php echo $answer[1] ?>">
                            <hr>
                            
                            <input type="hidden" name="code" value="<?=$answer[0]?>">                          
                            <input class="mt-3 btn btn-success" type="submit" value="Submit">
                        </form>
                        <?php endif?>
                        <form action="<?=base_url?>index.php?controller=curso&action=viewAllCur" method="post">
                            <input class="mt-3 btn btn-primary" type="submit" value="Back">
                        </form>
                    </div>
                </div>
            </article>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="./tryscript.js"></script>
  </body>
  </html>