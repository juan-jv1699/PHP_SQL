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
  $conexion=dataBase::connect();

  $registros = mysqli_query($conexion, "SELECT `codigoCurso`, `nombreCurso` FROM `cursos` LIMIT {$inicio}, {$page}") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $impresos = 0;
  while ($reg = mysqli_fetch_array($registros)):?>
    <?php $impresos++;?>
    <div class="card">
        <div class="card-header">
        <?= $reg[1]?>
        <p class="card-text">Codigo: <?=$reg['codigoCurso']?></p>
        </div>
        <div class="card-body">
           <a href="<?=base_url?>index.php?controller=curso&action=viewDelete&code=<?=$reg[0]?>">❌</a>
           <a href="<?=base_url?>index.php?controller=curso&action=viewUpdate&code=<?= $reg[0]?>">✏️</a>
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
            <a class="page-link" href="index.php?controller=curso&action=viewAllCur&pos=<?=$anterior?>">Anteriores</a>
        </li>
    <?php endif?>
    <?php if ($impresos == $page):?>
        <?php $proximo = $inicio + $page;?>
        <li class="page-item">
            <a class="page-link" href="index.php?controller=curso&action=viewAllCur&pos=<?=$proximo?>">Siguientes</a>
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
    $selectCount = mysqli_query($conexionTblAlumn, "select count(*) as cantidad from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));
    $respCount=mysqli_fetch_array($selectCount);
    echo "<div class='container card p-5 m-1'>
    <h2>La cantidad de Cursos existentes es : {$respCount['cantidad']}</h2>
    </div>";
    mysqli_close($conexionTblAlumn)
  ?>

  
  <form action="<?=base_url?>" method="post">
    <input class="btn btn-primary" type="submit" value="Volver">
  </form>
  </section>
  

</body>

</html>