<?php

    $acao = $_GET['acao'];

    if($acao == 'listar'){
        include "usuarios - listar.php";   
    }
    else if($acao == 'cadastro'){
        include "usuarios - criar.php";
    }
    else{
        include "usuarios - editar.php";
    }

?>