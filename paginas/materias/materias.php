<?php

    $acao = $_GET['acao'];

    if($acao == 'listar'){
        include "materias - listar.php";   
    }
    else if($acao == 'cadastro'){
        include "materias - criar.php";
    }
    else{
        include "materias - editar.php";
    }

?>