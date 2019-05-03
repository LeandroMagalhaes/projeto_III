<?php

    @$pagina = $_GET['pagina'];   

    switch($pagina){
        case "cursos":      include "paginas/cursos.php"; break;
        case "materias":    include "paginas/materias.php"; break;
        case "prova":       include "paginas/provas.php"; break;
        case "questoes":    include "paginas/questoes.php"; break;
        case "usuario":     include "paginas/usuarios.php"; break;
        default:            include "paginas/home.php"; break;
    }

?>