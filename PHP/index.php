<?php
require_once('autoload.php');
require_once('config/db.php');
require_once('config/parameters.php');
require_once('helpers/utils.php');
session_start();
// Database conexion
dataBase::connect();

if(isset($_GET['controller'])){
    $controller_name = $_GET['controller'].'controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $controller_name = controler_default;
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
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $default = action_default;
        $controller->$default();
    }
    else{
        echo "la pagina que buscas no existe";
    }

}else {
    echo "la pagina que buscas no existe";
}   