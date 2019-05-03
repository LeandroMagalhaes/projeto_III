<?php

@$nomeCurso = $_POST['nomeCurso'];
@$cargaHorariaCurso = $_POST['cargaHorariaCurso'];
@$acao = $_GET['acao'];

require "../class/Conexao.php";
require "../class/Curso.php";

if($acao == 'listar'){

    $sql = "SELECT * FROM tb_curso";

    $consultar = new Conexao;
    $resultado = $consultar->getDados($sql);

}
else{  

    $curso = new Curso;
    $curso->setNomeCurso($nomeCurso);
    $curso->setCargaHorariaCurso($cargaHorariaCurso);

    $sql = "INSERT INTO tb_curso (nm_curso, qt_cargaHoraria) VALUES ('{$curso->getNomeCurso()}', '{$curso->getCargaHorariaCurso()}')";

    $salvar = new Conexao;
    $salvar->postDados($sql);
} 

?>