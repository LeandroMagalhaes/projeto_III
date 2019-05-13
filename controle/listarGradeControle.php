<?php

    require "./class/Conexao.php";
    require "./class/Grade.php";

    echo "<pre>";

    $curso = "SELECT DISTINCT cr.cod_curso, cr.nome_curso, cr.carga_horaria, gr.num_periodo FROM curso AS cr INNER JOIN grade AS gr ON cr.cod_curso = gr.cod_curso";

    $consultar = new Conexao;
    $cursos = $consultar->getDados($curso);
    $idCurso = null;

    foreach($cursos as $chave => $curso){

        if($idCurso != $curso->cod_curso){
            echo "<div class='card'>
            <div class='card-header' id='".$curso->cod_curso."'><button class='btn btn-link btn-sm' type='button' data-toggle='collapse' data-target='#collapse_".$curso->cod_curso."' aria-expanded='true' aria-controls=''>".$curso->nome_curso."</button><div style='float: right;'><label style='margin-top: 5px; margin-right: 40px;'>Carga Horária: ".$curso->carga_horaria."</label><button style='float: right;' class='btn btn-link btn-sm' onclick=\"location.href='controle/gradeControle.php?acao=excluir&cod_curso=".$curso->cod_curso."'; \"><i class='fa fa-trash-o' aria-hidden='true'></i></button></div></div><div id='collapse_".$curso->cod_curso."' class='collapse' aria-labelledby='".$curso->cod_curso."' data-parent='#grade'><div class='card-body'>";
        
            $cursoId = $curso->cod_curso;              
            $qtdHoras = getSomaHoras($cursoId);
            $periodos = getPeriodo($cursoId);
            $periodo = null;

            foreach($periodos as $n => $valor){
                if($periodo != $valor->num_periodo){
                    $idPeriodo = $valor->num_periodo;
                    $materias = getMateria($cursoId, $idPeriodo);
                    echo "<ul>Período : ".$valor->num_periodo;

                    foreach($materias as $key => $value){

                        echo "<li><div><label> ".$value->nome_materia."</label><label style='float: right; margin-right: 70px;'>Carga Horária: ".$value->carga_horaria."</label></div></li>";
                    }                
                    echo "</ul>";
                    $periodo = $valor->num_periodo;
                }
                else{
                    continue;                
                }            
            }

            echo "<label style='float:right; margin-right: 60px;'>Total Horas: ". $qtdHoras[0]->credito ." </label></div></div></div>";
            $idCurso = $curso->cod_curso;
        }
        else{
            continue;
        }
} 
    

    function getPeriodo($cod_curso){
        
        $periodo = "SELECT DISTINCT num_periodo FROM grade WHERE cod_curso = '{$cod_curso}'";
    
        $consultar = new Conexao;
        $periodos = $consultar->getDados($periodo);

        return $periodos;
    }

    function getMateria($cod_curso, $num_periodo){
        
        $materia = "SELECT DISTINCT ma.cod_materia, ma.nome_materia, ma.carga_horaria FROM materia AS ma INNER JOIN grade AS gr ON gr.cod_materia = ma.cod_materia WHERE gr.cod_curso = '{$cod_curso}' AND gr.num_periodo = '{$num_periodo}'";

        $consultar = new Conexao;
        $materias = $consultar->getDados($materia);

        return $materias;
    }

    function getSomaHoras($cod_curso){
        
    $soma = "SELECT SUM(carga_horaria) AS credito  FROM materia AS ma INNER JOIN grade AS gr ON gr.cod_materia = ma.cod_materia WHERE gr.cod_curso = '{$cod_curso}'";

        $consultar = new Conexao;
        $resultado = $consultar->getDados($soma);

        return $resultado;
    }

    echo "</pre>";

?>