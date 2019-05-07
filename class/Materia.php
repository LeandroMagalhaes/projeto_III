<?php

class Materia{

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

    public function novaMateria($nome, $cargaHoraria){
        $this->nome = $nome;
        $this->cargaHoraria = $cargaHoraria;
    }
}

?>