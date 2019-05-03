
<div class='row'>
    <div class='col-lg-12'>
        <br>
        <h5><label>Cadastro de Questões</label></h5>
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
</div>
