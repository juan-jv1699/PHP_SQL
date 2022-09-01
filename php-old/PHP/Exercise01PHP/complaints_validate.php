<?php
    if($_POST){
        $complaint = fopen("datos.txt", "a") or
        die("Problemas en la creacion");
        fputs($complaint, $_POST['nombre']);
        fputs($complaint, "\n");
        fputs($complaint, $_POST['queja']);
        fputs($complaint, "\n");
        fputs($complaint, "Fecha y Hora:");
        $fecha = date("d/m/Y");
        fputs($complaint, $fecha);
        fputs($complaint, "  ");
        $hora = date("H:i:s");
        fputs($complaint, $hora);
        fputs($complaint, "\n");
        fputs($complaint, "------------------------------\n");
        fclose($complaint);
        echo "Los datos se cargaron correctamente.";

        header('location: ./complaintPush.php');
    }
?>