<?php

    require "../class/Conexao.php";
    require "../class/Grade.php";

    @$idCurso = $_POST['idCurso'];
    @$idMateria = $_POST['idMateria'];
    @$idPeriodo = $_POST['idPeriodo'];
    @$acao = $_GET['acao'];
    
    if($acao == 'listar'){  

        $sql = "SELECT cr.cod_curso, cr.nome_curso, ma.cod_materia, ma.nome_materia FROM curso AS cr INNER JOIN grade AS gr ON cr.cod_curso = gr.cod_curso INNER JOIN materia AS ma ON gr.cod_materia = ma.cod_materia";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($sql);
        echo @json_encode($resultado);

    }
    else if ($acao == 'cadastrar'){

        for($i = 0; $i < count($idMateria); $i++){

            $grade = new Grade;
            $grade->novaGrade($idCurso[$i], $idMateria[$i], $idPeriodo[$i]);

            $sql = "INSERT INTO grade (cod_materia, cod_curso, num_periodo) VALUES ('{$grade->getIdMateria()}', '{$grade->getIdCurso()}', '{$grade->getNumPeriodo()}')";

            $salvar = new Conexao;
            $salvar->postDados($sql);
        }

    } 
    else if($acao == 'excluir'){
    
        @$cod_curso = $_GET['cod_curso'];

        $sql = "DELETE FROM grade WHERE cod_curso = '{$cod_curso}'";

        $excluir = new Conexao;
        $excluir->deleteDados($sql);
        header('Location: ../index.php?pagina=grade&acao=listar');
    }   
    else if($acao == 'consultar'){

        @$cod_curso = $_GET['cod_curso'];

        $consulta = "SELECT cod_curso, num_periodo FROM periodo WHERE cod_curso = '{$cod_curso}'";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($consulta);
        echo @json_encode($resultado);

    }  

?>