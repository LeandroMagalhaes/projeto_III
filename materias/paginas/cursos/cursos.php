<?php

    $acao = $_GET['acao'];

    if($acao == 'listar'){
        include "cursos - listar.php";   
    }
    else{
        include "cursos - criar.php";
    }

?>