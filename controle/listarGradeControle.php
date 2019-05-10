<?php

    require "./class/Conexao.php";
    require "./class/Grade.php";

    echo "<pre>";

    $curso = "SELECT DISTINCT cr.cod_curso, cr.nome_curso, cr.carga_horaria FROM curso AS cr INNER JOIN grade AS gr ON cr.cod_curso = gr.cod_curso";

    $consultar = new Conexao;
    $cursos = $consultar->getDados($curso);
    
    foreach($cursos as $chave => $valor){

        echo "<div class='card'>
        <div class='card-header' id='".$cursos[$chave]->cod_curso."'><button class='btn btn-link btn-sm' type='button' data-toggle='collapse' data-target='#collapse_".$cursos[$chave]->cod_curso."' aria-expanded='true' aria-controls=''>".$cursos[$chave]->nome_curso."</button><div style='float: right;'><label style='margin-top: 5px; margin-right: 40px;'>Carga Horária: ".$cursos[$chave]->carga_horaria."</label><button style='float: right;' class='btn btn-link btn-sm' onclick=\"location.href='controle/gradeControle.php?acao=excluir&cod_curso=".$cursos[$chave]->cod_curso."'; \"><i class='fa fa-trash-o' aria-hidden='true'></i></button></div></div><div id='collapse_".$cursos[$chave]->cod_curso."' class='collapse' aria-labelledby='".$cursos[$chave]->cod_curso."' data-parent='#grade'><div class='card-body'><ul>";
        $id = $cursos[$chave]->cod_curso;
        
        $materias = getMateria($id);

        foreach($materias as $key => $value){
            echo "<li><div><label> ".$materias[$key]->nome_materia."</label><label style='float: right; margin-right: 70px;'>Carga Horária: ".$materias[$key]->carga_horaria."</label></div></li>";
        }
        echo "</ul><label style='margin-left: 20px;'>Total Horas: </label></div></div></div>";
    }


    function getMateria($IdCurso){
        
        $materia = "SELECT DISTINCT ma.cod_materia, ma.nome_materia, ma.carga_horaria FROM materia AS ma INNER JOIN grade AS gr ON gr.cod_materia = ma.cod_materia WHERE gr.cod_curso = '{$IdCurso}'";

        $consultar = new Conexao;
        $materias = $consultar->getDados($materia);

        return $materias;
    }

    function getSomaHoras($IdCurso){
        
        $soma = "SELECT SUM(carga_horaria) AS credito  FROM materia AS ma INNER JOIN grade AS gr ON gr.cod_materia = ma.cod_materia WHERE gr.cod_curso = '{$IdCurso}'";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($soma);

        return $resultado;
    }

    $teste = getSomaHoras('1');
    print_r($teste);

    echo "</pre>";

?>