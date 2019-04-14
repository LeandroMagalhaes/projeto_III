<?php

$acao = $_GET['acao'];

if($acao == 'listar'){
echo 
    "<div class='row'>
        <div class='col-lg-12'>
            <br>
            <h5><label>Lista de Usuários</label></h5>
            <br>
            <table class='table'>
                <tr>
                    <th>Usuario</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td>Geografia</td>
                    <td>2500hrs</td>
                    <td>
                        <button class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button>						
                        <button class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Matemática</td>
                    <td>2500hrs</td>
                    <td>
                        <button class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button>						
                        <button class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Analise e Desenvolvimento de Sistemas</td>
                    <td>2500hrs</td>
                    <td>
                        <button class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button>						
                        <button class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>
                    </td>
                </tr>
            </table>        
        </div>    
    </div>";
} 
else{
echo 
    "<div class='row'>
        <div class='col-lg-12'>
            <br>
            <h5><label>Cadastro de Usuário</label></h5>
            <br>
            <form action='' method='POST'>
                <div class='form-group'>
                    <label>Nome</label>
                    <input type='text' class='form-control' id='nomeUsuario' placeholder='Nome'>                    
                </div>
                <div class='form-group'>
                    <label>Senha</label>
                    <input type='password' class='form-control' id='senhaUsuario' placeholder='Senha'>
                </div>                
                <button type='submit' class='btn btn-primary'>Cadastrar</button>
                <input type='button' class='btn btn-danger' value='Voltar'>
            </form>        
        </div>   
    </div>";
}

?>