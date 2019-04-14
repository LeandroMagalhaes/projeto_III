<?php

class Materia{

    private $codMateria;
    private $nomeMateria;
    private $cargaHoraria;

    public function getCodMateria(){
        return $this->codMateria;
    }

    public function getNomeMateria(){
        return $this->nomeMateria;
    }

    public function getCargaHoraria(){
        return $this->cargaHoraria;
    }

    public function setCodMateria($codigo){
        $this->codMateria = $codigo;
    }

    public function setNomeMateria($nome){
        $this->nomeMateria = $nome;
    }

    public function setCargaHoraria($cargaHoraria){
        $this->cargaHoraria = $cargaHoraria;
    }
}

?>