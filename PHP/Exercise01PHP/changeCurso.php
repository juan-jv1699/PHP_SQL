<?php
 require_once("../functions01.php");
 $conexion=retornarConexion();

 $registros = mysqli_query($conexion, "select * from cursos where codigoCurso={$_REQUEST['oldCode']}") 
 or die("Problemas en el select:" . mysqli_error($conexion));