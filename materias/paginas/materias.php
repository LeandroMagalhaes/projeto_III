<?php

    $acao = $_GET['acao'];

    if($acao == 'listar'){
        include "materias - listar.php";   
    }
    else{
        include "materias - criar.php";
    }

?>