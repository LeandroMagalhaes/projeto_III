<?php

class Curso{

    private $codCurso;
    private $nomeCurso;
    private $cargaHorariaCurso;

    public function getCodCurso(){
        return $this->codCurso;
    }

    public function getNomeCurso(){
        return $this->nomeCurso;
    }

    public function getCargaHorariaCurso(){
        return $this->cargaHorariaCurso;
    }

    public function setCodCurso($codigo){
        $this->codCurso = $codigo;
    }

    public function setNomeCurso($nome){
        $this->codCurso = $nome;
    }

    public function setCargaHorariaCurso($cargaHoraria){
        $this->cargaHorariaCurso = $cargaHoraria;
    }
}

?>