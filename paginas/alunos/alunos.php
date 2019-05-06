<?php

    $acao = $_GET['acao'];

    if($acao == 'listar'){
        include "alunos - listar.php";   
    }
    else if($acao == 'cadastro'){
        include "alunos - criar.php";
    }
    else{
        include "alunos - editar.php";
    }

?>