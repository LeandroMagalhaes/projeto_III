<?php

    require "../class/Conexao.php";
    require "../class/Curso.php";

    @$nome = $_POST['nome'];
    @$cargaHoraria = $_POST['cargaHoraria'];
    @$acao = $_GET['acao'];

    if($acao == 'listar'){  

        $sql = "SELECT DISTINCT * FROM curso";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($sql);
        echo @json_encode($resultado);

    }
    else if ($acao == 'cadastrar'){

        $curso = new Curso;
        $curso->novoCurso($nome, $cargaHoraria);

        $sql = "INSERT INTO curso (nome_curso, carga_horaria) VALUES ('{$curso->getNome()}', '{$curso->getCargaHoraria()}')";

        $salvar = new Conexao;
        $salvar->postDados($sql);
    } 
    else if($acao == 'excluir'){
    
        $cod_curso = $_GET['cod_curso'];

        $sql = "DELETE FROM curso WHERE cod_curso = {$cod_curso}";

        $excluir = new Conexao;
        $excluir->deleteDados($sql);
    }
    else if($acao == 'editar'){

        @$cod_curso = $_GET['cod_curso'];

        $curso = new Curso;
        $curso->novoCurso($nome, $cargaHoraria);

        $sql = "UPDATE curso SET nome_curso = '{$curso->getNome()}', carga_horaria = '{$curso->getCargaHoraria()}' WHERE cod_curso = {$cod_curso}";      

        $editar = new Conexao;
        $editar->putDados($sql);        
    }
    else{

        @$cod_curso = $_GET['cod_curso'];

        $consulta = "SELECT * FROM curso WHERE cod_curso = {$cod_curso}";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($consulta);
        echo @json_encode($resultado);
    }  

?>