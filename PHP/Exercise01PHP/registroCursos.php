<html>

<head>
  <title>alumnosRegistrados</title>
  <link rel="stylesheet" href="../css/style00.css">
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" style="size: cover;">
</head>

<body> 
  <section class="tablas">
    <?php
      if (isset($_REQUEST['pos'])){
        $inicio = $_REQUEST['pos'];
      }
      else{
        $inicio = 0;
      }
      $page = 2
    ?>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "php01taller") or
  die("Problemas con la conexión"); 
  $registros = mysqli_query($conexion, "select cur.codigoCurso, cur.nombreCurso, count(alu.codigoAlum) as cantidad,alu.nombre,alu.codCurso from cursos as cur 
  inner join alumnos as alu on cur.codigoCurso=alu.codCurso group by alu.codCurso limit $inicio, $page") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $impresos = 0;
  while ($reg = mysqli_fetch_array($registros) ) {
    $impresos++;
    echo "Codigo:" . $reg['codigoCurso'] . "<br>";
    echo "Nombre:". "<a href=cantidadAlumnos.php?codigocur=$reg[codigoCurso]>$reg[nombreCurso]</a><br>";
    echo "Cantidad alumnos:" . $reg['cantidad'] . "<br>";
    echo "<br>";
    echo "<hr>";
  }
  if ($inicio == 0)
    echo "anteriores ";
  else {
    $anterior = $inicio - $page;
    echo "<a href=\"registroCursos.php?pos=$anterior\">Anteriores </a>";
  }
  if ($impresos == $page) {
    $proximo = $inicio + $page;
    echo "<a href=\"registroCursos.php?pos=$proximo\">Siguientes</a>";
  } else
    echo "siguientes";
  mysqli_close($conexion);
  ?>
  <form action="../index.html" method="post">
    <input type="submit" value="Volver">
  </form>
  </section>
</body>

</html>