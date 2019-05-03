<?php

class Curso{
    
    private $nomeCurso;
    private $cargaHorariaCurso;
    
    public function getNomeCurso(){
        return $this->nomeCurso;
    }

    public function getCargaHorariaCurso(){
        return $this->cargaHorariaCurso;
    }

    public function setNomeCurso($nome){
        $this->nomeCurso = $nome;
    }

    public function setCargaHorariaCurso($cargaHoraria){
        $this->cargaHorariaCurso = $cargaHoraria;
    }
}

?>