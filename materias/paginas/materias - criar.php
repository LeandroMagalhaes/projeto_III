
<div class='row'>
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
</div>