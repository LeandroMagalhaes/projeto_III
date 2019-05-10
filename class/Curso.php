<?php

class Curso{
    
    private $id;
    private $nome;
    private $cargaHoraria;
    private $quantidadePeriodo;
    
    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCargaHoraria(){
        return $this->cargaHoraria;
    }

    public function getQuantidadePeriodo(){
        return $this->quantidadePeriodo;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setCargaHoraria($cargaHoraria){
        $this->cargaHoraria = $cargaHoraria;
    }

    public function setQuantidadePeriodo($quantidade){
        $this->quantidadePeriodo = $quantidade;
    }


    public function novoCurso($nome, $cargaHoraria, $quantidade){
        $this->cargaHoraria = $cargaHoraria;
        $this->nome = $nome;
        $this->quantidadePeriodo = $quantidade;
    }
}

?>