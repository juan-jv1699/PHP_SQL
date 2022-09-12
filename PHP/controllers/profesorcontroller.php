<?php
require_once('models/alumnos.php');
class profesorescontroller{

    public function index(){
        require_once('views/alumno/login.php');
    }
    public function menu(){
        require_once('views/alumno/menu.php');
    }
    public function register(){
        require_once('views/alumno/register.php');
    }
    public function save(){
        if(isset($_POST)){
            $alumno = new alumno();
            $alumno->setNombre($_POST['nombre']);
            $alumno->setMail($_POST['email']);
            $alumno->setKeyword($_POST['password']);
            $alumno->setCodcurso($_POST['codigocurso']);
            $alumno->setFechaNac($_POST['date']);
            $save = $alumno->save();
            if($save){
                $_SESSION['register']="register complete";
            }else{
                $_SESSION['register']="register failed";
            }
        }else {
            $_SESSION['register']="error";
        }
        header("location: index.php?controller=alumnos&action=register");
    }
}