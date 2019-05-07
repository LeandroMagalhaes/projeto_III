<?php

    $acao = $_GET['acao'];

    if($acao == 'listar'){
        include "grade - listar.php";   
    }
    else{
        include "grade - criar.php";
    }

?>