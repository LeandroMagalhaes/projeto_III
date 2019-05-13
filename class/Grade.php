<?php

class Grade{
    
    private $idCurso;
    private $idMateria;
    private $NumPeriodo;

    public function getIdCurso(){
        return $this->idCurso;
    }

    public function getIdMateria(){
        return $this->idMateria;
    }

    public function getNumPeriodo(){
        return $this->NumPeriodo;
    }

    public function setIdCurso($idCurso){
        $this->idCurso = $idCurso;
    }

    public function setIdMateria($idMateria){
        $this->idMateria = $idMateria;
    }

    public function setNumPeriodo($periodo){
        $this->NumPeriodo = $periodo;
    }

    public function novaGrade($idCurso, $idMateria, $NumPeriodo){
        $this->idCurso = $idCurso;
        $this->idMateria = $idMateria;
        $this->NumPeriodo = $NumPeriodo;
    }
}

?>