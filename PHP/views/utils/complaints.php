<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Complaints</title>
  </head>
  <body>
        <section class="container">
            <header class="row mt-5 mb-2">
                <h2 class="col-6 offset-3 h1 title text-center card p-3">
                    Quejas o reclamos
                </h2>
            </header>
            <article class="row">
                <div class="col-6 offset-3 card mt-5">
                    <div class="d-flex flex-column p-5">
                        <?php if(isset($_SESSION['complaint'])):?>
                            <?php if($_SESSION['complaint'] == true):?>
                            <div class="alert alert-success">
                                <p>Hemos guardado su queja con exito!</p>
                            </div>
                            <?php else:?>
                            <div class="alert alert-warning">
                                <p>Error al intentar realizar el proceso!</p>
                            </div>
                            <?php endif?>
                        <?php endif?>
                        <!-- se elimina la session deseada -->
                        <?php utils::closeSession('complaint')?>

                        <form action="<?=base_url?>?controller=alumnos&action=complaints" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Ingrese su nombre:</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Ingrese aqui su reclamo</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="complaints"></textarea>
                            </div>
                            <input class="btn btn-outline-primary" type="submit" value="Enviar">
                        </form>
                        <form class="mt-3" action="<?=base_url?>?controller=alumnos&action=Allcomplaints" method="post">
                            <input class="btn btn-outline-primary" type="submit" value="Ver todas las quejas"></input>
                        </form>
                        <form class="form-label" action="<?=base_url?>controller=alumnos&action=menu">
                            <input class="btn btn-outline-primary mt-3" type="submit" value="regresar al inicio">
                        </form>
                    </div>
                </div>
            </article>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="./tryscript.js"></script>
  </body>
  </html>