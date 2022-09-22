<?php 
if(isset($_POST['day'])){
    $day = $_POST['day']."/";
    $month = $_POST['month']."/";
    $year = $_POST['year']."/";
    $strDate = $month.$day.$year;
    $date = date_parse($strDate);
    $errores = array();
    $dateCheck = false;
    // var_dump($dateToValidate);
    $datetoValidate = "{$date['day']}/{$date['month']}/{$date['year']}";
    if(checkdate($date['day'],$date['month'],$date['year'])){
        $dateCheck = true;
    }else{
        if(empty($_POST['day']) || !is_numeric($_POST['day'])){
            $errores['day']="Error en el dia";
        }
        if(empty($_POST['month']) || !is_numeric($_POST['month'])){
            $errores['month']="Error en el mes";
        }
        if(empty($_POST['year']) || !is_numeric($_POST['year'])){
            $errores['year']="Error en el año";
        }
    }
}
?>
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
                    Consultar Fecha
                </h2>
            </header>
            <article class="row">
                <div class="col-6 offset-3 card mt-5">
                    <div class="d-flex flex-column p-5">
                        <form action="<?=base_url?>index.php?controller=alumnos&action=viewCalendar" method="post">
                            <div class="mb-3">
                                <label for="day" class="form-label">Ingrese el dia:</label>
                                <?php if(isset($errores['day'])){echo "<p class='alert alert-warning'>{$errores['day']}</p>"; } ?>
                                <input class="form-control" type="text" name="day">
                            </div>
                            <div class="mb-3">
                                <label for="month" class="form-label">Ingrese el mes:</label>
                                <?php if(isset($errores['month'])){echo "<p class='alert alert-warning'>{$errores['month']}</p>";}?>
                                <input class="form-control" type="text" name="month">
                            </div>
                            <div class="mb-3">
                                <label for="year" class="form-label">Ingrese el año:</label>
                                <?php if(isset($errores['year'])){echo "<p class='alert alert-warning'>{$errores['year']}</p>";}?>
                                <input class="form-control" type="text" name="year">
                            </div>
                            <input class="btn btn-outline-primary" type="submit" value="Enviar">
                        </form>
                        <div class="alert">
                            <?php 
                            $err = isset($errores) && sizeof($errores)!=0 ? "<p class='alert'>Corrige el formulario y vuelve a intenatarlo</p>" : "";
                            $dat = isset($dateCheck) && $dateCheck == true ? "<p>Formulario valido</p>" : "";
                            ?>
                            <?= $err?>
                            <?php unset($errores)?>
                            <?= $dat?>
                        </div>
                        <form class="form-label" action="<?=base_url?>controller=alumnos&action=menu">
                            <input class="btn btn-outline-primary" type="submit" value="regresar al inicio">
                        </form>
                    </div>
                </div>
            </article>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="./tryscript.js"></script>
  </body>
  </html>