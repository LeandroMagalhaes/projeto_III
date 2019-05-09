<?php

    require "../class/Conexao.php";
    require "../class/Grade.php";

    @$idCurso = $_POST['idCurso'];
    @$idMateria = $_POST['idMateria'];    
    @$acao = $_GET['acao'];
    
    if($acao == 'materia'){  
        
        @$cod_curso = $_GET['cod_curso'];

        $sql = "SELECT  ma.cod_materia, ma.nome_materia FROM materia AS ma INNER JOIN grade AS gr ON gr.cod_materia = ma.cod_materia WHERE gr.cod_curso IN (" . $cod_curso . ")";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($sql);
        echo @json_encode($resultado);

    } 
    else if($acao == 'cursos'){  

        $sql = "SELECT DISTINCT cr.cod_curso, cr.nome_curso FROM curso AS cr INNER JOIN grade AS gr ON cr.cod_curso = gr.cod_curso";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($sql);
        echo @json_encode($resultado);

    } 
    else if($acao == 'listar'){  

        $sql = "SELECT cr.cod_curso, cr.nome_curso, ma.cod_materia, ma.nome_materia FROM curso AS cr INNER JOIN grade AS gr ON cr.cod_curso = gr.cod_curso INNER JOIN materia AS ma ON gr.cod_materia = ma.cod_materia";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($sql);
        echo @json_encode($resultado);

    }
    else if ($acao == 'cadastrar'){

        for($i = 0; $i < count($idMateria); $i++){
            $grade = new Grade;
            $grade->novaGrade($idCurso[$i], $idMateria[$i]);

            $sql = "INSERT INTO grade (cod_materia, cod_curso) VALUES ('{$grade->getIdMateria()}', '{$grade->getIdCurso()}')";

            $salvar = new Conexao;
            $salvar->postDados($sql);
        }

    } 
    else if($acao == 'excluir'){
    
        $cod_materia = $_GET['cod_materia'];

        $sql = "DELETE FROM grade WHERE cod_curso = '{$cod_curso}' AND cod_materia = {$cod_materia}";

        $excluir = new Conexao;
        $excluir->deleteDados($sql);

    }   
    else{

        @$cod_curso = $_GET['cod_curso'];

        $consulta = "SELECT * FROM materia WHERE cod_curso = '{$cod_curso}'";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($consulta);
        echo @json_encode($resultado);

    }  

?>