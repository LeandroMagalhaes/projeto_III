<?php

    require "../class/Conexao.php";
    require "../class/Curso.php";

    @$nomeCurso = $_POST['nome'];
    @$cargaHorariaCurso = $_POST['cargaHoraria'];
    @$acao = $_GET['acao'];

    if($acao == 'listar'){  

        $sql = "SELECT * FROM curso";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($sql);
        echo @json_encode($resultado);

    }
    else if ($acao == 'cadastrar'){

        $curso = new Curso;
        $curso->novoCurso($nomeCurso, $cargaHorariaCurso);

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

        $sql = "UPDATE curso SET nome_curso = '{$nomeCurso}', carga_horaria = '{$cargaHorariaCurso}' WHERE cod_curso = {$cod_curso}";
        print_r($sql);

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