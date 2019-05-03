<?php

class Materia{

    private $nomeMateria;
    private $cargaHoraria;

    public function getNomeMateria(){
        return $this->nomeMateria;
    }

    public function getCargaHoraria(){
        return $this->cargaHoraria;
    }

    public function setNomeMateria($nome){
        $this->nomeMateria = $nome;
    }

    public function setCargaHoraria($cargaHoraria){
        $this->cargaHoraria = $cargaHoraria;
    }
}

?>