<?php

    @$pagina = $_GET['pagina'];   

    switch($pagina){
        case "cursos":      include "paginas/cursos/cursos.php"; break;
        case "materias":    include "paginas/materias/materias.php"; break;
        case "prova":       include "paginas/provas/provas.php"; break;
        case "questoes":    include "paginas/questoes/questoes.php"; break;
        case "usuario":     include "paginas/usuarios/usuarios.php"; break;
        default:            include "paginas/home.php"; break;
    }

?>