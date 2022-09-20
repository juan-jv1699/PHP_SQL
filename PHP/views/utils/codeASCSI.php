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
    <!-- section to work -->
        <section class="container">
            <header class="row mt-5 mb-2">
                <!-- title  -->
                <h2 class="col-6 offset-3 h1 title text-center card p-3">
                    title
                </h2>
            </header>
            <!-- body -->
            <article class="row">
                <div class="col-6 offset-3 card mt-5">
                    <div class="d-flex flex-column p-5">
                        <!-- contenido -->
                        <form class="form-control" action="" method="post">
                            <div class="mb-3">
                                <label for="" class="form-label">Ingrese el codigo ascci</label>
                                <input type="text"
                                class="form-control" name="code" id="" aria-describedby="helpId" placeholder="">
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </div>
                        </form>
                        <form class="form-label" action="<?=base_url?>controller=alumnos&action=menu">
                            <input class="btn btn-outline-primary mt-3" type="submit" value="regresar al inicio">
                        </form>
                    </div>
                    <div class="my-5 d-flex flex-column p-5 card">
                        <?php if($_POST):?>
                            <article class="d-flex flex-column align-content-center justify-content-center">
                                <h2>El caracter acssi para el numero ingresado es:</h2>
                                <p class="h1"><?php printf("%02c",$_POST['code']) ?></p>
                            </article>
                        <?php endif?>
                    </div>
                </div>
            </article>
            <!-- footer -->
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="./tryscript.js"></script>
  </body>
  </html>