<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Tablas de multiplicar</title>
  </head>
  <body>
        <section class="container">
            <header class="row mt-5 mb-2">
                <h2 class="col-6 offset-3 h1 title text-center card p-3">
                 Tablas de multiplicar
                </h2>
            </header>
            <article class="row">
                <div class="col-6 offset-3 card mt-5">
                    <div class="d-flex flex-column p-5">
                        <!-- contenido -->
                        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="card">
                        <form class="form" href="tableMultiply.php" method="post">
                            <h5>digite el numero del que desea conocer la tabla de multiplicar</h5>
                            <input type="number" name="num">
                            <hr>
                            <input type="submit" name="operar">
                        </form>
                        <form action="<?=base_url?>">
                            <input type="submit" value="regresar al inicio">
                        </form>
                        <?php if($_POST){
                            utils::tablasMultiplicar($_POST['num']);}
                        ?>
                    </div>
                </div>
            </div>
        </div>
                    </div>
                </div>
            </article>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="./tryscript.js"></script>
  </body>
  </html>
    
    </section>
</body>
</html>