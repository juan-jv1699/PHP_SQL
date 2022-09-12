<?php
require_once('views/layouts/header.php');
?>
<body>
  <section class="registros">
    <?php if(isset($_SESSION['register'])):?>
      <div class="alert alert-primary" role="alert">
        <strong>Registro exitoso</strong> usuario habilitado
      </div>
    <?php endif?>
    <p class="h1 mx-4 my-2">Alta de Alumnos</p>
    <div class="container">
      <div class="row align-items-center">
        <div class="align-self-center">
          <div class="container card p-4">
            <form action="<?=base_url?>index.php/?controller=alumnos&action=save" method="POST">
              <div class="mb-3 row">
                <label for="nombre" class="col-4 col-form-label">Ingrese el nombre</label>
                <div class="col-8">
                  <input type="text" class="form-control" name="nombre" placeholder="escribe tu nombre aqui">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">Ingresa tu email</label>
                <div class="col-8">
                  <input type="email" class="form-control" name="email" placeholder="example@example.com">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="password" class="col-4 col-form-label">Ingresar La contraseña</label>
                <div class="col-8">
                  <input type="password" class="form-control" name="password" placeholder="********">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="date" class="col-4 col-form-label">Seleccione la fecha de nacimiento</label>
                <div class="col-8">
                  <input type="date" class="form-control" name="date">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="codigocurso" class="col-4 col-form-label">Seleccione un curso</label>
                <select class="form-select" name="codigocurso">
                    <?php
                      $conexion= dataBase::connect();
                      $registros = mysqli_query($conexion, "select * from cursos") or die("Problemas en el select:" . mysqli_error($conexion));
                      while($reg=mysqli_fetch_array($registros)){
                          echo "<option value={$reg['codigoCurso']}>$reg[nombreCurso]</option>";
                        }
                    ?>
                </select>
              </div>
              <div class="my-3 row">
                <div class="col-sm d-flex align-items-center justify-content-center">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </div>
            </form>
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