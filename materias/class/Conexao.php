<?php

class Conexao{

    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "materias";
    private $conexao;   

    public function conectar(){
        try{            
            $this->conexao = new PDO("mysql:host=".$this->host.";dbname=".$this->banco, $this->usuario, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $erro){
            die("Erro na conexão ".$erro->getMessage());
        }
        return $this->conexao;
    }

    public function getDados($query){
        $sql = $this->conectar()->prepare($query);
        $sql->execute();

        return $sql->fetchAll(PDO::FETCH_OBJ);
        $this->conexao = null;
    }

    public function postDados($query){
        $sql = $this->conectar()->prepare($query);
        $sql->execute();
                
        $this->conexao = null;
    }

    public function putDados($query){
        $sql = $this->conectar()->prepare($query);
        $sql->execute();
        
        return $sql->rowCount();
        $this->conexao = null;
    }

    public function deleteDados($query){
        $sql = $this->conectar()->prepare($query);
        $sql->execute();
        
        return $sql->rowCount();
        $this->conexao = null;
    }
}

?>