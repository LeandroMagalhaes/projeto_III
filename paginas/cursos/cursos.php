<?php

    $acao = $_GET['acao'];

    if($acao == 'listar'){
        include "cursos - listar.php";   
    }
    else if($acao == 'cadastro'){
        include "cursos - criar.php";
    }
    else{
        include "cursos - editar.php";
    }

?>