<?php
if (isset($_GET['pos'])){
  $inicio = $_GET['pos'];
}
else{
  $inicio = 0;
}
$page = 4

?>

<?php
require_once('views/layouts/header.php');
?>

<body>
  <section class="container">
  <?php
  require_once("config/db.php");
  $conexion=dataBase::connect();

  $registros = mysqli_query($conexion, "select alu.codigoAlum as  codigo,nombre,mail,codCurso, cur.nombreCurso from alumnos as alu inner join cursos as cur on cur.codigoCurso=alu.codCurso limit $inicio,$page") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $impresos = 0;
  while ($reg = mysqli_fetch_array($registros)):?>
    <?php $impresos++;?>
    <div class="card">
        <div class="card-header">
        <?= $reg['nombre']?>
        </div>
        <div class="card-body">
            <p class="card-text">Codigo: <?=$reg['codigo']?></p>
            <p class="card-text">Email: <?=$reg['mail']?></p>
            <p class="card-text">Curso: <?=$reg['nombreCurso']?></p>
            <a href="<?=base_url?>index.php?controller=alumnos&action=updateview&oldCode=<?=$reg['codigo']?>" class="btn btn-primary">✏️</a>
            <a href="<?=base_url?>index.php?controller=alumnos&action=deleteview&oldCode=<?=$reg['codigo']?>" class="btn btn-primary">❌</a>
        </div>
    </div>
    <hr>
    <?php endwhile;?>
    <nav aria-label="paginas">
        <ul class="pagination">
    <?php if ($inicio == 0):?>
        <li class="page-item disabled">
            <a class="page-link" href="" aria-disabled="true">Anteriores</a>
        </li>
    <?php else:?>
        <?php $anterior = $inicio - $page;?>
        <li class="page-item">
            <a class="page-link" href="index.php?controller=alumnos&action=allAlumnos&pos=<?=$anterior?>">Anteriores</a>
        </li>
    <?php endif?>
    <?php if ($impresos == $page):?>
        <?php $proximo = $inicio + $page;?>
        <li class="page-item">
            <a class="page-link" href="index.php?controller=alumnos&action=allAlumnos&pos=<?=$proximo?>">Siguientes</a>
        </li>
    <?php else:?>
        <li class="page-item disabled">
            <a class="page-link" href="" aria-disabled="true">Siguientes</a>
        </li>
    <?php endif?>
        <?= dataBase::closeConnect($conexion)?>
        </ul>
    </nav>

  <?php
    $conexionTblAlumn = mysqli_connect("localhost", "root", "", "php01taller") or
    die("Problemas con la conexión");
    $selectCount = mysqli_query($conexionTblAlumn, "select count(*) as cantidad from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));
    $respCount=mysqli_fetch_array($selectCount);
    echo "<div class='container card p-5 m-1'>
    <h2>La cantidad de alumnos inscritos es : {$respCount['cantidad']}</h2>
    </div>";
    mysqli_close($conexionTblAlumn)
  ?>

  
  <form action="<?=base_url?>" method="post">
    <input class="btn btn-primary" type="submit" value="Volver">
  </form>
  </section>
  

</body>

</html>