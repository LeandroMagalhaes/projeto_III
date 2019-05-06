<?php

class Aluno{
    
    private $id;
    private $nome;
    private $sexo;
    private $dataNascimento;
    //private $curso;

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

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }
}

?>