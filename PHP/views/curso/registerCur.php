<?php
require_once('views/layouts/header.php');
?>
<body>
  <section class="registros">
    <?php if(isset($_SESSION['register'])):?>
      <div class="alert alert-success" role="alert">
        <strong>Registro exitoso</strong> Curso habilitado
      </div>
    <?php else:?>
    <p class="h1 mx-4 my-2">Alta de Cursos</p>
    <div class="container">
      <div class="row align-items-center">
        <div class="align-self-center">
          <div class="container card p-4">
            <form action="<?=base_url?>index.php/?controller=curso&action=save" method="POST">
              <div class="mb-3 row">
                <label for="nombre" class="col-4 col-form-label">Ingrese el nombre del curso</label>
                <div class="col-8">
                  <input type="text" class="form-control" name="nombre" placeholder="escribe tu nombre aqui">
                </div>
              </div>
             
              <div class="my-3 row">
                <div class="col-sm d-flex align-items-center justify-content-center">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </div>
            </form>
    <?php endif?>
            <form action="<?=base_url?>">
              <div class="mb-3 row">
                <div class="col-sm d-flex align-items-center justify-content-center">
                  <button type="submit" class="btn btn-outline-primary">Regresar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- scripts -->
    <script src="assets/js/utils.js"></script>

  </section>
</body>

</html> 