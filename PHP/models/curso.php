<?php
class curso{
    private $codigoCurso;
    private $nombreCurso;

    public function getCodigoCurso()
    {
        return $this->codigoCurso;
    }

    public function setCodigoCurso($codigoCurso)
    {
        $this->codigoCurso = $codigoCurso;

        return $this;
    }

    public function getNombreCurso()
    {
        return $this->nombreCurso;
    }

    public function setNombreCurso($nombreCurso)
    {
        $this->nombreCurso = $nombreCurso;

        return $this;
    }

    public function save(){
        $db = dataBase::connect();
        $nameCur= $this->getNombreCurso();
        $sql = "INSERT INTO cursos VALUES (NULL,'{$nameCur}')";
        $save = $db->query($sql);
        $result=false;
        if($save){
            $result = true;
        }
        return $result;
    }
    public function delete($id){
        $db = dataBase::connect();
        $sql = "DELETE FROM cursos WHERE codigoCurso = {$id}";
        $delete = $db->query($sql);
        $result = false;
        if($delete){
            $result = true;
        }
        dataBase::closeConnect($db);
        return $result;
    }
    public function update(){
        $db = dataBase::connect();

        $sql="UPDATE `cursos` SET `nombreCurso`='{$this->getNombreCurso()}' WHERE codigoCurso = {$this->getCodigoCurso()}"; 
        $save = $db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        dataBase::closeConnect($db);
        return $result;
    }

}//end class