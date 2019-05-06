<?php

    require "../class/Conexao.php";
    require "../class/Curso.php";
    require "../class/Aluno.php";
    
    @$acao = $_GET['acao'];
    @$nome = $_POST['nome'];
    @$dataNascimento = $_POST['dataNascimento'];
    @$dataMatricula = $_POST['dataMatricula'];
    @$registro = $_POST['registro'];
    @$sexo = $_POST['sexo'];
    @$curso = $_POST['curso'];


    if($acao == 'listar'){  

        $sql = "SELECT * FROM aluno AS al INNER JOIN curso AS cr ON al.cod_curso = cr.cod_curso";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($sql);
        echo @json_encode($resultado);

    }
    else if ($acao == 'cadastrar'){

        $aluno = new Aluno;
        $aluno->novoAluno($nome, $sexo, $dataNascimento, $registro, $dataMatricula, $curso);

        $sql = "INSERT INTO aluno(nome_aluno, sexo, data_nascimento, registro, data_matricula, cod_curso) VALUES ('{$aluno->getNome()}','{$aluno->getSexo()}','{$aluno->getDataNascimento()}','{$aluno->getRegistro()}','{$aluno->getDataMatricula()}','{$aluno->getIdCurso()}')";

        $salvar = new Conexao;
        $salvar->postDados($sql);
    } 
    else if($acao == 'excluir'){
    
        $cod_aluno = $_GET['cod_aluno'];

        $sql = "DELETE FROM aluno WHERE cod_aluno = {$cod_aluno}";

        $excluir = new Conexao;
        $excluir->deleteDados($sql);
    }
    else if($acao == 'editar'){

        $cod_aluno = $_GET['cod_aluno'];

        $aluno = new Aluno;
        $aluno->novoAluno($nome, $sexo, $dataNascimento, $registro, $dataMatricula, $curso);

        $sql = "UPDATE aluno SET nome_aluno = '{$aluno->getNome()}',sexo = '{$aluno->getSexo()}',data_nascimento = '{$aluno->getDataNascimento()}',registro = '{$aluno->getRegistro()}',data_matricula = '{$aluno->getDataMatricula()}',cod_curso = '{$aluno->getIdCurso()}' WHERE cod_aluno = '{$cod_aluno}'";

        $editar = new Conexao;
        $editar->putDados($sql);        
    }
    else{

        @$cod_aluno = $_GET['cod_aluno'];

        $consulta = "SELECT * FROM aluno WHERE cod_aluno = {$cod_aluno}";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($consulta);
        echo @json_encode($resultado);
    }  

?>