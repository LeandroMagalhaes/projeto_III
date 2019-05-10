<?php

    require "../class/Conexao.php";
    require "../class/Curso.php";

    @$nome = $_POST['nome'];
    @$cargaHoraria = $_POST['cargaHoraria'];
    @$qtd_periodo = $_POST['qtd_periodo'];
    @$acao = $_GET['acao'];

    if($acao == 'listar'){  

        $sql = "SELECT DISTINCT * FROM curso";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($sql);
        echo @json_encode($resultado);

    }
    else if ($acao == 'cadastrar'){

        $curso = new Curso;
        $curso->novoCurso($nome, $cargaHoraria, $qtd_periodo);

        $sql = "INSERT INTO curso (nome_curso, carga_horaria, qtd_periodo) VALUES ('{$curso->getNome()}', '{$curso->getCargaHoraria()}', '{$curso->getQuantidadePeriodo()}')";

        $salvar = new Conexao;
        $salvar->postDados($sql);

        $consulta = "SELECT cod_curso FROM curso WHERE nome_curso = '{$curso->getNome()}' LIMIT 1";

        $resultado = $salvar->getDados($consulta);

        for($i = 1; $i <= $qtd_periodo; $i++){

            $periodos = "INSERT INTO curso_periodo (num_periodo, cod_curso) VALUES ('{$i}', '{$resultado[0]->cod_curso}')";
            
            $salvar = new Conexao;
            $salvar->postDados($periodos);
        }

    } 
    else if($acao == 'excluir'){
    
        $cod_curso = $_GET['cod_curso'];

        $sql = "DELETE FROM curso WHERE cod_curso = {$cod_curso}";

        $excluir = new Conexao;
        $excluir->deleteDados($sql);

        $periodo = "DELETE FROM curso_periodo WHERE cod_curso = {$cod_curso}";

        $excluir->deleteDados($periodo);
    }
    else if($acao == 'editar'){

        @$cod_curso = $_GET['cod_curso'];

        $curso = new Curso;
        $curso->novoCurso($nome, $cargaHoraria, $qtd_periodo);

        $sql = "UPDATE curso SET nome_curso = '{$curso->getNome()}', carga_horaria = '{$curso->getCargaHoraria()}', qtd_periodo = '{$curso->getQuantidadePeriodo()}' WHERE cod_curso = {$cod_curso}";      

        $editar = new Conexao;
        $editar->putDados($sql);

        $periodo = "DELETE FROM curso_periodo WHERE cod_curso = '{$cod_curso}'";

        $editar->deleteDados($periodo);

        for($i = 1; $i <= $qtd_periodo; $i++){

            $periodos = "INSERT INTO curso_periodo (num_periodo, cod_curso) VALUES ('{$i}', '{$cod_curso}')";
            
            $salvar = new Conexao;
            $salvar->postDados($periodos);
        }
    }
    else{

        @$cod_curso = $_GET['cod_curso'];

        $consulta = "SELECT * FROM curso WHERE cod_curso = {$cod_curso}";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($consulta);
        echo @json_encode($resultado);
    }  

?>