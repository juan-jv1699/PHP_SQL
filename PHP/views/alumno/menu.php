<?php
echo "<h1>Bienvenido $_SESSION[nombre]</h1>";
unset($_SESSION['register']);
if($_POST){
    if ($_REQUEST['radio'] == "rojo"){
        setcookie("color", "#a52a2a", time() + 60 * 60 * 24 * 365, "/");
    }
    elseif ($_REQUEST['radio'] == "verde"){
        setcookie("color", "#00ff52", time() + 60 * 60 * 24 * 365, "/");
    }
    elseif ($_REQUEST['radio'] == "azul"){
        setcookie("color", "#00008b", time() + 60 * 60 * 24 * 365, "/");  
    }
    header("refresh:0,url = menu.php");
}
?>
<!DOCTYPE html>
<html lang="en" <?php if (isset($_COOKIE['color'])) echo " style=\"background:$_COOKIE[color]\"" ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="<?= base_url?>/assets/css/style00.css">
</head>
<style>
    section>div.colorSelect {
        display: flex;
        margin: 0;
        width: 100%;
    }
    div.colorSelect {
        display: flex;
        flex-wrap: wrap;
    }
    div.colorSelect form .colorbtn {
        position: relative;
        bottom: 22px;
    }
</style>
<body >
    <section>
        <div class="options">
            ingresar un alumno
            <button type="button" onclick="location.href='index.php?controller=alumnos&action=register'" value="enter">Ir
            </button>
        </div>
        <div class="options">
            ingrese un curso
            <button type="button" onclick="location.href='Exercise01PHP/registrarCurso.php'">Ir</button>
        </div>
        <div class="options">
            consultar cursos
            <button type="button" onclick="location.href='Exercise01PHP/registroCursos.php'">Ir</button>
        </div>
        <div class="options">
            consultar alumnos
            <button type="button" onclick="location.href='Exercise01PHP/registroAlumnos.php'">Ir</button>
        </div>
        <div class="options">
            consultar alumno por email
            <button type="button" onclick="location.href='Exercise01PHP/searchEmail.php'">Ir</button>
        </div>
        <div class="options">
            eliminar un unico registro(por email)
            <button type="button" onclick="location.href='Exercise01PHP/deleteRegistro.php'">Ir</button>
        </div>
        <div class="options">
            resetear tabla
            <button type="button" onclick="location.href='Exercise01PHP/deleteTable.php'" disabled>Ir</button>
        </div>
        <div class="options">
            Tablas de multiplicar
            <button type="button" onclick="location.href='Exercise01PHP/tableMultiply.php'">Ir</button>
        </div>
        <div class="options">
            Upload a Image
            <button type="button" onclick="location.href='Exercise01PHP/uploadImg.php'">Ir</button>
        </div>
    
        <div class="options">
            Complaints
            <button type="button" onclick="location.href='Exercise01PHP/complaints.php'">Ir</button>
        </div>
        <div class="options">
            Consultar Fechas
            <button type="button" onclick="location.href='Exercise01PHP/searchDate.php'">Ir</button>
        </div>
        <div class="options">
            Consultar codigo ASCII
            <button type="button" onclick="location.href='Exercise01PHP/readcodAscii.php'">Ir</button>
        </div>
        <div class="options">
            test
            <button type="button" onclick="location.href='Exercise02PHP/test01.php'">Ir</button>
        </div>
        <div class="options colorSelect">
            <form class="colorform" action="menu.php" method="POST">
                Seleccione de que color desea que sea la página de ahora en más:<br>
                <input class="option" type="radio" value="rojo" name="radio">Rojo<br>
                <input class="option" type="radio" value="verde" name="radio">Verde<br>
                <input class="option" type="radio" value="azul" name="radio">Azul<br>
                <div>
                    <input class="colorbtn" type="submit" value="Crear cookie" >
                </div>
              </form>
        </div>
    </section>
</body>
</html>