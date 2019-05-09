<?php

    require "../class/Conexao.php";
    require "../class/Materia.php";

    @$nome = $_POST['nome'];
    @$cargaHoraria = $_POST['cargaHoraria'];    
    @$acao = $_GET['acao'];

    if($acao == 'listar'){  

        $sql = "SELECT DISTINCT * FROM materia";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($sql);
        echo @json_encode($resultado);

    }
    else if ($acao == 'cadastrar'){

        $materia = new Materia;
        $materia->novaMateria($nome, $cargaHoraria);

        $sql = "INSERT INTO materia (nome_materia, carga_horaria) VALUES ('{$materia->getNome()}', '{$materia->getCargaHoraria()}')";

        $salvar = new Conexao;
        $salvar->postDados($sql);
        
    } 
    else if($acao == 'excluir'){
    
        $cod_materia = $_GET['cod_materia'];

        $delete = "DELETE FROM grade WHERE cod_materia = {$cod_materia}";

        $excluir = new Conexao;
        $excluir->deleteDados($delete);

        $sql = "DELETE FROM materia WHERE cod_materia = {$cod_materia}";

        $excluir = new Conexao;
        $excluir->deleteDados($sql);        
    }
    else if($acao == 'editar'){

        @$cod_materia = $_GET['cod_materia'];

        $materia = new Materia;
        $materia->novaMateria($nome, $cargaHoraria);

        $sql = "UPDATE materia SET nome_materia = '{$materia->getNome()}', carga_horaria = '{$materia->getCargaHoraria()}' WHERE cod_materia = {$cod_materia}";      

        $editar = new Conexao;
        $editar->putDados($sql);        
    }
    else{

        @$cod_materia = $_GET['cod_materia'];

        $consulta = "SELECT * FROM materia WHERE cod_materia = '{$cod_materia}'";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($consulta);
        echo @json_encode($resultado);
    }  

?>