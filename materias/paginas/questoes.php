<?php

$acao = $_GET['acao'];

if($acao == 'listar'){
echo 
    "<div class='row'>
        <div class='col-lg-12'>
            <br>
            <h5><label>Lista de Questões</label></h5>
            <br>

            <div class='form-group'>
                <label>Curso</label>
                <select class='form-control'>
                    <option>Selecione</option>
                </select>
            </div>

            <div class='form-group'>
                <label>Materia</label>
                <select class='form-control'>
                    <option>Selecione</option>
                </select>
            </div>

            <table class='table'>
                <tr>
                    <th>Questão</th>
                    <th>Alternativa A</th>
                    <th>Alternativa B</th>
                    <th>Alternativa C</th>
                    <th>Alternativa D</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td>Geografia</td>
                    <td>2500hrs</td>
                    <td>2500hrs</td>
                    <td>2500hrs</td>
                    <td>2500hrs</td>
                    <td>
                        <button class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button>						
                        <button class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Matemática</td>
                    <td>2500hrs</td>
                    <td>2500hrs</td>
                    <td>2500hrs</td>
                    <td>2500hrs</td>
                    <td>
                        <button class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button>						
                        <button class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Analise e Desenvolvimento de Sistemas</td>
                    <td>2500hrs</td>
                    <td>2500hrs</td>
                    <td>2500hrs</td>
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
            <h5><label>Cadastro de Cursos</label></h5>
            <br>
            <form action='' method='POST'>

                <div class='form-group'>
                    <label>Curso</label>
                    <select class='form-control'>
                        <option>Selecione</option>
                    </select>
                </div>

                <div class='form-group'>
                    <label>Materia</label>
                    <select class='form-control'>
                        <option>Selecione</option>
                    </select>
                </div>

                <div class='form-group'>
                    <label>Questão</label>
                    <input type='text' class='form-control' id='questao' placeholder='Curso'>                    
                </div>

                <div class='form-group'>
                    <label>Alternativa A</label>
                    <input type='text' class='form-control' name='alternativa[]' placeholder='Carga Horária'>
                </div>

                <div class='form-group'>
                    <label>Alternativa B</label>
                    <input type='text' class='form-control' name='alternativa[]' placeholder='Carga Horária'>
                </div>

                <div class='form-group'>
                    <label>Alternativa C</label>
                    <input type='text' class='form-control' name='alternativa[]' placeholder='Carga Horária'>
                </div>

                <div class='form-group'>
                    <label>Alternativa D</label>
                    <input type='text' class='form-control' name='alternativa[]' placeholder='Carga Horária'>
                </div>

                <div class='form-group'>
                    <label>Nivel</label>
                    <select class='form-control'>
                        <option>Selecione</option>
                    </select>
                </div>

                <button type='submit' class='btn btn-primary'>Cadastrar</button>
                <input type='button' class='btn btn-danger' value='Voltar'>
            </form>        
        </div>   
    </div>";
}

?>