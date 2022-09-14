<?php
class utils {
    public static function tablasMultiplicar($num){
        echo "La tabla de multiplicar de $num es: <br>";
        for ($i=1; $i <= 10; $i++) { 
            $resp = $i * $num;
            echo $resp."<br>";
        }
    }
    public static function closeSession($name){
        if(isset($_SESSION[$name])){
            $_SESSION[$name]=null;
            unset($_SESSION[$name]);
        }
        return $name;
    }
}