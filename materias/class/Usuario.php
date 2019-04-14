<?php

class Usuario{

    private $codUsuario;
    private $nomeUsuario;
    private $senhaUsuario;

    public function getCodUsuario(){
        return $this->codUsuario;
    }

    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }

    public function getSenhaUsuario(){
        return $this->senhaUsuario;
    }

    public function setCodUsuario($codigo){
        $this->codUsuario = $codigo;
    }

    public function setNomeUsuario($nome){
        $this->nomeUsuario = $nome;
    }

    public function setSenhaUsuario($senha){
        $this->senhaUsuario = $senha;
    }
}

?>