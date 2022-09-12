<?php
require_once('models/alumnos.php');
class alumnoscontroller{
    
    public function index(){
        require_once('views/alumno/login.php');
    }
    public function menu(){
        require_once('views/alumno/menu.php');
    }
    public function register(){
        require_once('views/alumno/register.php');
    }
    public function allAlumnos(){
        require_once('views/alumno/allALumnos.php');
    }
    public function updateview(){
        require_once('views/alumno/updateAlum.php');
    }
    public function deleteview(){
        require_once('views/alumno/deleteAlum.php');
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

    public function delete(){
        if(isset($_GET['delete'])){
            if($_GET['delete']==true){
                $alum = new alumno();
                $alum->delete($_POST['deleteCod']);
            }
            header("location:".base_url."index.php?controller=alumnos&action=deleteview&done=1");
        }

    }

    public function update(){
        if(isset($_POST)){
            $alumno = new alumno();
            $alumno->setNombre($_POST['nombreCambio']);
            $alumno->setMail($_POST['emailCambio']);
            $alumno->setCodcurso($_POST['codigocurso']);
            $alumno->setFechaNac($_POST['dateCambio']);
            $alumno->setCodigoAlumn($_POST['code']);
            $save = $alumno->update();
            if($save){
                $_SESSION['register']="complete";
            }else{
                $_SESSION['register']="failed";
            }
        }else {
            $_SESSION['register']="error";
        }
        header("location: index.php?controller=alumnos&action=updateview");
    }

    public function tablasMultiplicar(){
        require_once('views/utils/tableMultiply.php');
    }


}