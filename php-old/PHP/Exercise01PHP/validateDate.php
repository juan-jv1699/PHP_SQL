<?php
    if($_GET){
        $day = $_GET['day']."/";
        $month = $_GET['month']."/";
        $year = $_GET['year']."/";
        $strDate = $month.$day.$year;
        $date = date_parse($strDate);
        $errores = array();
        $dateCheck = false;
        // var_dump($dateToValidate);
        $datetoValidate = "{$date['day']}/{$date['month']}/{$date['year']}";
        if(checkdate($date['day'],$date['month'],$date['year'])){
            $dateCheck = true;
            header("location: ./searchDate.php?date={$dateCheck}");
        }else{
            if(empty($_GET['day']) || !is_numeric($_GET['day'])){
                $errores['day']="Error en el dia";
            }
            if(empty($_GET['month']) || !is_numeric($_GET['month'])){
                $errores['month']="Error en el mes";
            }
            if(empty($_GET['year']) || !is_numeric($_GET['year'])){
                $errores['year']="Error en el año";
            }
        }
        if(sizeof($errores)!=0){
            $errores = serialize($errores);
            $errores = urlencode($errores);
            header("location: ./searchDate.php?errores=".$errores);
        }
    }
?>