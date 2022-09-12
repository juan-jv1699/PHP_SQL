<?php
class alumno {
    private $codigoAlumn;
    private $nombre;
    private $mail;
    private $keyword;
    private $codCurso;
    private $fechaNac;
    private $db;

    public function __construct(){
        $this->db = dataBase::connect();
    }
    
    // codigoAlumn
    public function getCodigoAlumn()
    {
        return $this->codigoAlumn;
    }

    public function setCodigoAlumn($codigoAlumn)
    {
        $this->codigoAlumn = $this->db->real_escape_string($codigoAlumn);

        return $this;
    }

    // nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);

        return $this;
    }
   
    // mail
    public function getMail()
    {
        return $this->mail;
    }

   
    public function setMail($mail)
    {
        $this->mail = $this->db->real_escape_string($mail);

        return $this;
    }

    // keyword
    public function getKeyword()
    {
        return $this->keyword;
    }

    
    public function setKeyword($keyword)
    {
        $this->keyword = $this->db->real_escape_string($keyword);

        return $this;
    }

    // codCurso
    public function getCodcurso()
    {
        return $this->codCurso;
    }

  
    public function setCodcurso($codCurso)
    {
        $this->codCurso = $this->db->real_escape_string($codCurso);

        return $this;
    }

   
    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $this->db->real_escape_string($fechaNac);

        return $this;
    }

    public function save(){
        $sql="INSERT INTO alumnos VALUES(NULL,'{$this->getNombre()}','{$this->getMail()}','{$this->getKeyword()}','{$this->getCodcurso()}','{$this->getFechaNac()}')"; 
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }

        return $result;
    }
    public function update(){
        $sql="UPDATE alumnos SET nombre='{$this->getNombre()}', mail='{$this->getMail()}', codCurso={$this->getCodcurso()}, fechaNac='{$this->getFechaNac()}' WHERE codigoAlum={$this->getCodigoAlumn()}"; 
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }

        return $result;
    }
    public function delete($id){
        $sql ="DELETE FROM `alumnos` WHERE codigoAlum = {$id}";
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }

        return $result;
    }

} //end class