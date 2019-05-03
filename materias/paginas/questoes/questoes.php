<?php

    $acao = $_GET['acao'];

    if($acao == 'listar'){
        include "questoes - listar.php";   
    }
    else{
        include "questoes - criar.php";
    }

?>