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
                    Drop all-registers
                </h2>
            </header>
            <article class="row">
                <div class="col-6 offset-3 card mt-5">
                    <div class="d-flex flex-column p-5">
                        <!-- contenido -->
                        <?php if(isset($_SESSION['drop'])):?>
                            <div class="alert alert-success">
                                <h4 class="alert-heading">Eliminado Exitoso</h4>
                                <p>Ya no hay vuelta atras, topdos los registros eliminados con exito</p>
                            </div>
                            <!-- se elimina la session deseada -->
                            <?php utils::closeSession('drop')?>
                        <?php else:?>
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">ALERTA!</h4>
                                <p>Esta seguro que desea eliminar todos los registros</p>
                                <hr>
                                <p class="mb-0">si realmente desea efectuar este procceso porfavor pulse el boton</p>
                                <form class="form" action="<?=base_url?>?controller=alumnos&action=drop" method="POST">
                                    <div>
                                        <input class="btn btn-danger" type="submit" value="SEGUIR">
                                    </div>
                                </form>
                            </div>
                        <?php endif?>

                        <form action="<?=base_url?>" method="post">
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