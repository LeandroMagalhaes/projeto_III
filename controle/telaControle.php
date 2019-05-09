<?php

    @$pagina = $_GET['pagina'];   

    switch($pagina){
        case "cursos":      include "paginas/cursos/cursos.php"; break;
        case "materias":    include "paginas/materias/materias.php"; break;
        case "alunos":      include "paginas/alunos/alunos.php"; break;
        case "usuarios":    include "paginas/usuarios/usuarios.php"; break;
        case "grade":       include "paginas/grade/grade.php"; break;
        default:            include "paginas/home.php"; break;
    }

?>