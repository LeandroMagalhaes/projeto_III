<?php

    $acao = $_GET['acao'];

    if($acao == 'listar'){
        include "usuarios - listar.php";   
    }
    else{
        include "usuarios - criar.php";
    }

?>