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
                    Eliminar Alumno
                </h2>
            </header>
            <article class="row">
                <div class="col-6 offset-3 card mt-5">
                    <div class="d-flex flex-column p-5">
                        <!-- contenido -->
                        <?php if(isset($_GET['done'])):?>
                        <div class="alert alert-success">
                            <p>Usuario eliminado con exito!</p>
                        </div>
                        <?php else:?>
                            <?php
                                $conexion=dataBase::connect();

                                $registros = mysqli_query($conexion, "select * from alumnos where codigoAlum={$_GET['oldCode']}") 
                                or die("Problemas en el select:" . mysqli_error($conexion));

                                if ($answer= mysqli_fetch_array($registros)) {
                                    echo "Nombre: ".$answer[1]."<br>";
                                    echo "Codigo: ".$answer[0]."<br>";
                                    echo "Email: ".$answer[2]."<br>";
                                    echo "Curso: ".$answer[4]."<br>";
                                    echo "Fecha de nacimiento: {$answer[5]}";
                                }
                                else {
                                
                                }
                            ?>
                        <hr>
                        <form action="<?=base_url?>index.php?controller=alumnos&action=delete&delete=true" method="POST">
                            <input type="hidden" name="deleteCod" value="<?=$answer[0]?>">
                            <label for="submit">Realmente desea eliminar el usuario ?</label>
                            <br>
                            <input class="btn btn-outline-primary" type="submit" name="submit" value="Continuar">
                        </form>
                        <br>
                        <?php endif?>

                        <form class="form" action="<?=base_url?>">
                            <input class="btn btn-primary" type="submit" name="submit" value="Inicio">
                        </form>
                    </div>
                </div>
            </article>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="./tryscript.js"></script>
  </body>
  </html>