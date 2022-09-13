<?php
require_once('models/curso.php');
class cursocontroller{

    public function viewAllCur(){
        require_once('views/curso/allCursos.php');
    }
    public function viewregCurso(){
        require_once('views/curso/registerCur.php');
    }
    public function viewDelete(){
        require_once('views/curso/delete.php');
    }
    public function viewUpdate(){
        require_once('views/curso/update.php');
    }

    public function save(){
        if(isset($_POST)){
            $curso = new curso();
            $curso->setNombreCurso($_POST['nombre']);
            $save = $curso->save();
            if($save){
                $_SESSION['register']="complete";
            }else{
                $_SESSION['register']="failed";
            }
        }else {
            $_SESSION['register']="error";
        }
        header("location:".base_url."index.php?controller=curso&action=registerCur");
    }
    public function delete(){
        if(isset($_GET['delete'])){
            if($_GET['delete']==true){
                $curso = new curso();
                $curso->delete($_POST['deleteCod']);
            }
            header("location:".base_url."index.php?controller=curso&action=viewDelete&done=1");
        }

    }
    public function update(){
        // condicionar si existe algo en el formulario de origen
        if(isset($_POST)){
            // se generan las variables de nombre e id
            $nombre = $_POST['nombreCambio'];
            $id = $_POST['code'];
            // se inmstacnia el objeto curso
            $curso = new curso();
            // se setean los datos en el nuevo objeto
            $curso->setNombreCurso($nombre);
            $curso->setCodigoCurso($id);
            // se accede a la propiedad update
            $update = $curso->update();
            // se verifica el update
            if($update){
                $_SESSION['register'] = "complete";
            }else {
                $_SESSION['register'] = "failed";
            }
            header("location:".base_url."index.php?controller=curso&action=viewUpdate");
            
        }
    }

}//end class