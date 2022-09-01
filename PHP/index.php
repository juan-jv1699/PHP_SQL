<?php
require_once('autoload.php');

if(isset($_GET['controller'])){
    $controller_name = $_GET['controller'].'controler';
}
else {
    echo "La pagina que buscas no existe";
    exit();
}
if(class_exists($controller_name)){
    $controller = new $controller_name();
    if(isset($_GET['action']) && method_exists($controller,$_GET['action'])){
        $action =  $_GET['action'];
        $controller->$action();
    }
    else{
        echo "la pagina que buscas no existe";
    }

}else {
    echo "la pagina que buscas no existe";
}   