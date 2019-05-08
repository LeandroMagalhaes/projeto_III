<?php

    require "../class/Conexao.php";
    require "../class/Usuario.php";

    @$nome = $_POST['nome'];
    @$senha = $_POST['senha'];
    @$acao = $_GET['acao'];

    if($acao == 'listar'){  

        $sql = "SELECT cod_usuario, nome_usuario FROM usuario";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($sql);
        echo @json_encode($resultado);

    }
    else if ($acao == 'cadastrar'){

        $usuario = new Usuario;
        $usuario->novoUsuario($nome, $senha);

        $sql = "INSERT INTO usuario (nome_usuario, senha_usuario) VALUES ('{$usuario->getNome()}', '{$usuario->getSenha()}')";

        $salvar = new Conexao;
        $salvar->postDados($sql);
    } 
    else if($acao == 'excluir'){
    
        $cod_usuario = $_GET['cod_usuario'];

        $sql = "DELETE FROM usuario WHERE cod_usuario = {$cod_usuario}";

        $excluir = new Conexao;
        $excluir->deleteDados($sql);
    }
    else if($acao == 'editar'){

        @$cod_usuario = $_GET['cod_usuario'];

        $usuario = new usuario;
        $usuario->novoUsuario($nome, $senha);

        $sql = "UPDATE usuario SET nome_usuario = '{$usuario->getNome()}', senha_usuario = '{$usuario->getSenha()}' WHERE cod_usuario = '{$cod_usuario}'";

        $editar = new Conexao;
        $editar->putDados($sql);
    }
    else{

        @$cod_usuario = $_GET['cod_usuario'];

        $consulta = "SELECT * FROM usuario WHERE cod_usuario = {$cod_usuario}";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($consulta);
        echo @json_encode($resultado);
    }  

?>