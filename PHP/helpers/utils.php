<?php
class utils {
    public static function tablasMultiplicar($num){
        echo "La tabla de multiplicar de $num es: <br>";
        for ($i=1; $i <= 10; $i++) { 
            $resp = $i * $num;
            echo $resp."<br>";
        }
    }
}