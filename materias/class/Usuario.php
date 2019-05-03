<?php

class Usuario{

    private $nomeUsuario;
    private $senhaUsuario;

    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }

    public function getSenhaUsuario(){
        return $this->senhaUsuario;
    }

    public function setNomeUsuario($nome){
        $this->nomeUsuario = $nome;
    }

    public function setSenhaUsuario($senha){
        $this->senhaUsuario = $senha;
    }
}

?>