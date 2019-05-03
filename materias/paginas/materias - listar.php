<?php

$acao = $_GET['acao'];

if($acao == 'listar'){
echo 
    "<div class='row'>
        <div class='col-lg-12'>
            <br>
            <h5><label>Lista de Materias</label></h5>
            <br>

            <div class='form-group'>
                <label>Curso</label>
                <select class='form-control'>
                    <option>Selecione</option>
                </select>
            </div>

            <table class='table'>
                <tr>
                    <th>Materia</th>
                    <th>Carga Horária</th>
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
            <h5><label>Cadastro de Materias</label></h5>
            <br>
            <form action='' method='POST'>

                <div class='form-group'>
                    <label>Curso</label>
                    <select class='form-control'>
                        <option>Selecione</option>
                    </select>
                </div>

                <div class='form-group'>
                    <label>Matérias</label>
                    <input type='text' class='form-control' id='nomeMateria' name='nomeMateria' placeholder='Materia'>                    
                </div>
                <div class='form-group'>
                    <label>Carga Horária</label>
                    <input type='text' class='form-control' id='cargaHorariaMateria' name='cargaHorariaMateria' placeholder='Carga Horária'>
                </div>
                <input type='button' class='btn btn-success' value='Incluir na Lista'>                
                <button type='submit' class='btn btn-primary'>Cadastrar</button>
                <input type='button' class='btn btn-danger' value='Voltar'>                
            </form>        
        </div>   
    </div>";
}

?>