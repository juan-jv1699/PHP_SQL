<?php
require_once('models/alumnos.php');
class alumnoscontroller{
    // vistas
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
    public function viewGetOne(){
        require_once("views/alumno/getOne.php");
    }
    public function viewDeleteOne(){
        require_once("views/alumno/deleteOne.php");
    }
    public function dropAll(){
        require_once('views/alumno/drop.php');
    }
    public function Allcomplaints(){
        require_once('views/utils/Allcomplaints.php');
    }
   

    // metodos funcionales
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

    public function closeSs(){
        utils::closeSession('nombre');
        header("location:".base_url);
    }

    public function delete(){
        if(isset($_GET['delete'])){
            if($_GET['delete']==true){
                $alum = new alumno();
                $alum->delete($_POST['deleteCod']);
                $_SESSION['deleteOne'] = true;
            }
            if($_GET['one']== true){
                header("location:".base_url."index.php?controller=alumnos&action=viewDeleteOne&done=1");
            }else {
                header("location:".base_url."index.php?controller=alumnos&action=deleteview&done=1");

            }
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

    public function drop(){
        $alumno = new alumno();
        $save = $alumno->drop();
        if($save){
            $_SESSION['drop']= true;
        }
        header("location:".base_url."?controller=alumnos&action=dropAll");

    }
 

    // utils
    public function complaints(){
        if($_POST){
            $complaint = fopen("datos.txt", "a") or
            die("Problemas en la creacion");
            fputs($complaint, $_POST['name']);
            fputs($complaint, "\n");
            fputs($complaint, $_POST['complaints']);
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

            $_SESSION['complaint'] = true; 
    
            header('location:'.base_url."?controller=alumnos&action=viewComplaint");
        }
    }

    public function tablasMultiplicar(){
        require_once('views/utils/tableMultiply.php');
    }

    public function viewChargeImg(){
        require_once("views/utils/chargeImg.php");
    }

    public function viewComplaint(){
        require_once("views/utils/complaints.php");
    }

    public function viewCalendar(){
        require_once("views/utils/calendar.php");
    }

    public function viewASCSI(){
        require_once("views/utils/codeASCSI.php");
    }
}