<?php
if (isset($_REQUEST['pos'])){
  $inicio = $_REQUEST['pos'];
}
else{
  $inicio = 0;
}
$page = 4

?>
<html>

<head>
  <title>alumnosRegistrados</title>
  <link rel="stylesheet" href="../css/style00.css">
</head>

<body>
  <section class="tablas">
  <?php
  require_once("../functions01.php");
  $conexion=retornarConexion();

  $registros = mysqli_query($conexion, "select alu.codigoAlum as  
                                               codigo,
                                               nombre,
                                               mail,
                                               codCurso, 
                                               cur.nombreCurso 
		                                      from alumnos as alu
                                          inner join cursos as cur on cur.codigoCurso=alu.codCurso
                                          limit $inicio,$page") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $impresos = 0;
  while ($reg = mysqli_fetch_array($registros)) {
    $impresos++;
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['mail'] . "<br>";
    echo "Curso:" . $reg['nombreCurso'] . "<br>";
    echo "<hr>";
  }
  if ($inicio == 0)
    echo "anteriores ";
  else {
    $anterior = $inicio - $page;
    echo "<a href=\"registroAlumnos.php?pos=$anterior\">Anteriores </a>";
  }
  if ($impresos == $page) {
    $proximo = $inicio + $page;
    echo "<a href=\"registroAlumnos.php?pos=$proximo\">Siguientes</a>";
  } else
    echo "siguientes";
  mysqli_close($conexion);
  ?>

  <?php
    $conexionTblAlumn = mysqli_connect("localhost", "root", "", "php01taller") or
    die("Problemas con la conexión");
    $selectCount = mysqli_query($conexionTblAlumn, "select count(*) as cantidad from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));
    $respCount=mysqli_fetch_array($selectCount);
    echo "<h2>La cantidad de alumnos inscritos es : \"$respCount[cantidad]\"</h2>";
    mysqli_close($conexionTblAlumn)
  ?>

  
  <form action="../index.html" method="post">
    <input type="submit" value="Volver">
  </form>
  </section>
  

</body>

</html>