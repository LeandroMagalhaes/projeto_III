<?php

class Questoes{

    private $codQuestoes;
    private $codCurso;
    private $codMateria;
    private $questao;
    private $nivel;

    public function getCodQuestoes(){
        return $this->codQuestoes;
    }

    public function getCodCurso(){
        return $this->codCurso;
    }

    public function getCodMateria(){
        return $this->codMateria;
    }

    public function getQuestao(){
        return $this->questao;
    }

    public function getNivel(){
        return $this->nivel;
    }

    public function setCodQuestoes($codigo){
        $this->codQuestoes = $codigo;
    }

    public function setCodCurso($codigo){
        $this->codCurso = $codigo;
    }

    public function setCodMateria($codigo){
        $this->codMateria = $codigo;
    }

    public function setQuestao($questao){
        $this->questao = $questao;
    }

    public function setNivel($nivel){
        $this->nivel = $nivel;
    }
}