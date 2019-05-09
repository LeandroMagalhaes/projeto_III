<?php

    require "./class/Conexao.php";
    require "./class/Grade.php";

    echo "<pre>";

    $curso = "SELECT DISTINCT cr.cod_curso, cr.nome_curso FROM curso AS cr INNER JOIN grade AS gr ON cr.cod_curso = gr.cod_curso";

    $consultar = new Conexao;
    $cursos = $consultar->getDados($curso);
    
    foreach($cursos as $chave => $valor){

        echo "<div class='card'>
        <div class='card-header' id='".$cursos[$chave]->cod_curso."'><button class='btn btn-link' type='button' data-toggle='collapse' data-target='#collapse_".$cursos[$chave]->cod_curso."' aria-expanded='true' aria-controls=''>".$cursos[$chave]->nome_curso."</button><button style='float: right;' class='btn btn-link btn-sm' onclick=\"location.href='controle/gradeControle.php?acao=excluir&cod_curso=".$cursos[$chave]->cod_curso."'; \"><i class='fa fa-trash-o' aria-hidden='true'></i></button></div><div id='collapse_".$cursos[$chave]->cod_curso."' class='collapse' aria-labelledby='".$cursos[$chave]->cod_curso."' data-parent='#grade'><div class='card-body'><ul>";
        $id = $cursos[$chave]->cod_curso;
        
        $materias = getMateria($id);

        foreach($materias as $key => $value){
            echo "<li> ".$materias[$key]->nome_materia."</li>";
        }
        echo "</ul></div></div></div>";
    }


    function getMateria($IdCurso){
        
        $materia = "SELECT  ma.cod_materia, ma.nome_materia FROM materia AS ma INNER JOIN grade AS gr ON gr.cod_materia = ma.cod_materia WHERE gr.cod_curso = '{$IdCurso}'";

        $consultar = new Conexao;
        $materias = $consultar->getDados($materia);

        return $materias;
    }

    echo "</pre>";

?>