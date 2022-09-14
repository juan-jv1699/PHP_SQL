<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>GetOne</title>
  </head>
  <body>
        <section class="container">
            <header class="row mt-5 mb-2">
                <h2 class="col-6 offset-3 h1 title text-center card p-3">
                    Getone
                </h2>
            </header>
            <article class="row">
                <div class="col-6 offset-3 card mt-5">
                    <div class="d-flex flex-column p-5">
                        <!-- contenido -->
                        <form action="?controller=alumnos&action=viewGetOne" class="form form-control" method="POST">
                            <div>
                                <label for="email">Ingresar el email a buscar</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="p-5 d-flex align-items-center justify-content-center">
                                <input type="submit" name="submit" class="form-control btn btn-outline-primary" value="Enter">
                            </div>
                            
                        </form>
                        <?php
                            $conexion=dataBase::connect();
                            if(isset($_POST['email'])){
                                $mail = $_POST['email'];
                                $registros = mysqli_query($conexion, "SELECT * FROM alumnos WHERE mail = '$mail'") 
                                or die("Problemas en el select:" . mysqli_error($conexion));
                                if($registros){
                                    if ($answer= mysqli_fetch_array($registros)):?> 
                                        <div class="card my-3">
                                            <div class="card-header">
                                                <h4 class="text-center">Usuario encontrado</h4>
                                            </div>
                                            <div class="card-body">
                                                <p class="text-start">Nombre: <?=$answer[1]?></p>
                                                <p class="text-start">Codigo: <?=$answer[0]?></p>
                                                <p class="text-start">Email: <?=$answer[2]?></p>
                                                <p class="text-start">Curso <?=$answer[3]?></p>
                                                <p class="text-start">Fecha Nacimiento: <?=$answer[4]?></p>
                                            </div>
                                        </div>
                                    <?php endif;?>
                                    <?php
                                }
                            }

                        ?>
                        
                        <form action="<?=base_url?> " method="post">
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