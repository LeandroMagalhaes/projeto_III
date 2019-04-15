<?php

const DBSERVER = "localhost";
const DBUSER = "root";
const DBPASS = "";
const DBNAME = "materias";

abstract class Conexao{

    private $conexao;   

    private function conectar(){
        try{
            $conectar = $this->conexao;
            $conectar = new PDO("mysql:host=".DBSERVER.";dbname=".DBNAME.";", DBUSER, DBPASS);
            $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $erro){
            die("Erro na conexão ".$erro->getMessage());
        }
        return $conectar;
    }

    public function getDados($query, $parametros = Null){
        $sql = $this->conectar()->prepare($query);
        $sql->execute($parametros);

        $dados = $sql->fetchAll(PDO::FETCH_OBJ);
        return $dados;
    }

    public function postDados($query, $parametros = Null){
        $sql = $this->conectar()->prepare($query);
        $sql->execute($parametros);

        $dados = $sql->lastInsertId();
        return $dados;
    }

    public function putDados($query, $parametros = Null){
        $sql = $this->conectar()->prepare($query);
        $sql->execute($parametros);

        $dados = $sql->rowCount();
        return $dados;
    }

    public function deleteDados($sql, $parametros = Null){
        $sql = $this->conectar()->prepare($sql);
        $sql->execute($parametros);

        $dados = $sql->rowCount();
        return $dados;
    }
}

?>