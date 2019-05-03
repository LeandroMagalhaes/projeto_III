<?php

$acao = $_GET['acao'];

if($acao == 'listar'){
echo 
    "<div class='row'>
        <div class='col-lg-12'>
            <br>
            <h5><label>Lista de Questões</label></h5>
            <br>

            <div class='row'>
                <div class='col-lg-4'>
                    <div class='form-group'>
                        <label>Curso</label>
                        <select class='form-control'>
                            <option>Selecione</option>
                        </select>
                    </div>
                </div>

                <div class='col-lg-4'>
                    <div class='form-group'>
                        <label>Materia</label>
                        <select class='form-control'>
                            <option>Selecione</option>
                        </select>
                    </div>
                </div>

                <div class='col-lg-4'>
                    <div class='form-group'>
                        <label>Nivel</label>
                        <select class='form-control'>
                            <option>Selecione</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <table class='table'>
                <div class='accordion' id='accordionExample'>
                <tr>
                    <th>Questão</th>                   
                    <th>Ações</th>
                </tr>
                
                <tr>
                    <td>                        
                        <div id='headingOne' style='padding:0px;'>
                            <h2 class='mb-0'>
                                <button class='btn btn-sm collapsed' type='button' data-toggle='collapse' data-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>Quem Descobriu o Brasil</button>
                            </h2>
                        
                            <div id='collapseOne' class='collapse' aria-labelledby='headingOne' data-parent='#accordionExample'>
                                <div class='card-body'>
                                    <p><strong>Alternativa A</strong></p>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    
                                    <p><strong>Alternativa B</strong></p>
                                    <p>Food truck quinoa nesciunt laborum eiusmod. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    
                                    <p><strong>Alternativa C</strong></p>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                                    
                                    <p><strong>Alternativa D</strong></p>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                    </td>                    
                    <td>
                        <button class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button>						
                        <button class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div id='headingTwo' style='padding:0px;'>
                            <h2 class='mb-0'>
                                <button class='btn btn-sm collapsed' type='button' data-toggle='collapse' data-target='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'>Quantos Estados possui o Brasil?</button>
                            </h2>                            

                            <div id='collapseTwo' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionExample'>
                                <div class='card-body'>
                                    <p><strong>Alternativa A</strong></p>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    
                                    <p><strong>Alternativa B</strong></p>
                                    <p>Food truck quinoa nesciunt laborum eiusmod. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    
                                    <p><strong>Alternativa C</strong></p>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                                    
                                    <p><strong>Alternativa D</strong></p>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                    </td>                  
                    <td>                        
                        <button class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button>						
                        <button class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id='headingThree' style='padding:0px;'>
                            <h2 class='mb-0'>
                                <button class='btn btn-sm collapsed' type='button' data-toggle='collapse' data-target='#collapseThree' aria-expanded='false' aria-controls='collapseThree'>Quem é mais o mais forte?</button>
                            </h2>
                        
                            <div id='collapseThree' class='collapse' aria-labelledby='headingThree' data-parent='#accordionExample'>
                                <div class='card-body'>
                                    <p><strong>Alternativa A</strong></p>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    
                                    <p><strong>Alternativa B</strong></p>
                                    <p>Food truck quinoa nesciunt laborum eiusmod. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                    
                                    <p><strong>Alternativa C</strong></p>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                                    
                                    <p><strong>Alternativa D</strong></p>
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <button class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button>						
                        <button class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button>
                    </td>
                </tr>
                </div>
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
                <div class='row'>
                    <div class='col-lg-4'>
                        <div class='form-group'>
                            <label>Curso</label>
                            <select class='form-control'>
                                <option>Selecione</option>
                            </select>
                        </div>
                    </div>

                    <div class='col-lg-4'>
                        <div class='form-group'>
                            <label>Materia</label>
                            <select class='form-control'>
                                <option>Selecione</option>
                            </select>
                        </div>
                    </div>

                    <div class='col-lg-4'>
                        <div class='form-group'>
                            <label>Nivel</label>
                            <select class='form-control'>
                                <option>Selecione</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-12'>
                        <div class='form-group'>
                            <label>Questão</label>
                            <input type='text' class='form-control' id='questao' name='questao' placeholder='Questão'>                    
                        </div>
                    </div>                 

                    <div class='col-lg-6'>
                        <div class='form-group'>
                            <label>Alternativa A</label>
                            <textarea class='form-control' name='alternativa[]' placeholder='Alternativa'></textarea>
                        </div>

                        <div class='form-group'>
                            <label>Alternativa B</label>
                            <textarea class='form-control' name='alternativa[]' placeholder='Alternativa'></textarea>
                        </div>
                    </div>

                    <div class='col-lg-6'>
                        <div class='form-group'>
                            <label>Alternativa C</label>
                            <textarea class='form-control' name='alternativa[]' placeholder='Alternativa'></textarea>
                        </div>

                        <div class='form-group'>
                            <label>Alternativa D</label>
                            <textarea class='form-control' name='alternativa[]' placeholder='Alternativa'></textarea>
                        </div>
                    </div>                   
                    <input type='button' class='btn btn-success' value='Incluir na Lista'>
                    <button type='submit' class='btn btn-primary'>Cadastrar</button>
                    <input type='button' class='btn btn-danger' value='Voltar'>
                </div>
            </form>        
        </div>   
    </div>";
}

?>