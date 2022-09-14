<?php 
require_once("views/layouts/header.php");
?>
</head>
<body>
<html>

<head>
  <title>Upload</title>
</head>

<body>
    <section class="registros container p-5">
    <section class="container">
            <header class="row mt-5 mb-2">
                <h2 class="col-6 offset-3 h1 title text-center card p-3">
                Seleccione el archivo que desea subir
                </h2>
            </header>
            <article class="row">
                <div class="col-6 offset-3 card mt-5">
                    <div class="d-flex flex-column p-5">
                        <form action="answerUpload.php" method="post" enctype="multipart/form-data" class="p-2 g-2">
                            <div class="input-group mb-3 mt-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                            <input type="submit" value="Enviar" class="btn btn-outline-primary">
                        </form>
                        <form action="<?=base_url?>">
                            <input type="submit" value="regresar al inicio" class="btn btn-outline-primary mt-3">
                        </form>
                        
                    </div>
                </div>
            </article>
        </section>
        <div class="row">
            <div class="col-6 offset-3">
            
            </div>
        </div>
<?php require_once("views/layouts/footer.php")?>