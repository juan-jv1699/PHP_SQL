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
                    Update Data
                </h2>
            </header>
            <article class="row">
                <div class="col-6 offset-3 card mt-5">
                    <div class="d-flex flex-column p-5">
                        <!-- contenido -->
                        <?php if(isset($_GET['done'])):?>
                        <div class="alert alert-success">
                                <p>Cambios realizados con exito!</p>
                        </div>
                        <?php endif?>
                        <?php
                            require_once("../functions01.php");
                            $conexion=retornarConexion();

                            $registros = mysqli_query($conexion, "select * from cursos where codigoCurso={$_REQUEST['oldCode']}") 
                            or die("Problemas en el select:" . mysqli_error($conexion));
                            $reg = mysqli_fetch_array($registros);
                        ?>
                        <form action="changeCurso.php" method="post">
                            <input type="hidden" name="codigoCurso" value="<?php echo $_REQUEST['oldCode'] ?>">
                            <hr>
                            <p>si desea cambiar de nombre ingrese el nombre deseado</p>
                            <input type="text" name="nombreCambio" value="<?php echo $reg['nombreCurso'] ?>">
                            <hr>                          
                            <input class="mt-3 btn btn-success" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </article>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="./tryscript.js"></script>
  </body>
  </html>