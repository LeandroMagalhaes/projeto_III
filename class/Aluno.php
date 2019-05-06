<?php

class Aluno{
    
    private $id;
    private $nome;
    private $sexo;
    private $dataNascimento;
    private $registro;
    private $dataMatricula;    
    private $curso;

    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function getRegistro(){
        return $this->registro;
    }

    public function getDataMatricula(){
        return $this->dataMatricula;
    }

    public function getIdCurso(){
        return $this->curso;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function setRegistro($registro){
        $this->registro = $registro;
    }

    public function setDataMatricula($dataMatricula){
        $this->dataMatricula = $dataMatricula;
    }

    public function setIdCurso($curso){
        $this->curso = $curso;
    }

    public function novoAluno($nome, $sexo, $dataNascimento, $registro, $dataMatricula, $curso){
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->dataNascimento = $dataNascimento;
        $this->registro = $registro;
        $this->dataMatricula = $dataMatricula;
        $this->curso = $curso;
    }
}

?>