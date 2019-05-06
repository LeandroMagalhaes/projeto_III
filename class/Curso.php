<?php

class Curso{
    
    private $id;
    private $nome;
    private $cargaHoraria;
    
    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCargaHoraria(){
        return $this->cargaHoraria;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCargaHoraria($cargaHoraria){
        $this->cargaHoraria = $cargaHoraria;
    }

    public function novoCurso($nome, $cargaHoraria){
        $this->cargaHoraria = $cargaHoraria;
        $this->nome = $nome;
    }
}

?>