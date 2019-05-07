<?php

class Grade{
    
    private $idCurso;
    private $idMateria;

    public function getIdCurso(){
        return $this->idCurso;
    }

    public function getIdMateria(){
        return $this->idMateria;
    }

    public function setIdCurso($idCurso){
        $this->idCurso = $idCurso;
    }

    public function setIdMateria($idMateria){
        $this->idMateria = $idMateria;
    }

    public function novaGrade($idCurso, $idMateria){
        $this->idCurso = $idCurso;
        $this->idMateria = $idMateria;
    }
}

?>