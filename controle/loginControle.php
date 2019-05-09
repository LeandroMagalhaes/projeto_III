<?php
	session_start();

	require_once "../class/Conexao.php";

	$nome = @$_POST["nome"];
	$senha = @$_POST["senha"];
	
	$sql = "SELECT DISTINCT nome_usuario FROM usuario WHERE nome_usuario = '{$nome}' AND senha_usuario = '{$senha}'";

    $login = new Conexao;
    $resultado = $login->getDados($sql);

	#Verificando se é verdade	
	if($resultado > 0){			
        $_SESSION["logado"] = $nome;
        echo @json_encode($resultado);
	}
	else{
        $_SESSION["Erro"] = $erro;
        echo @json_encode(0);
	}				
?>