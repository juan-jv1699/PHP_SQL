<?php
class dataBase{
    public static function connect(){
        $conexion = mysqli_connect("localhost", "root", "", "php01taller") or die("Problemas con la conexión");
        return $conexion;
    }
}