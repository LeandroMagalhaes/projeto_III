
<div class='row'>
    <div class='col-lg-12'>
        <br>
        <h5><label>Cadastro de Materias</label></h5>
        <br>
        <form action='' method='POST'>

            <div class='form-group'>
                <label>Curso</label>
                <select class='form-control' id='curso'></select>
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

<script>

    //Carrega a função
    $(document).ready(function() {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);                
                formulario += "<option>Selecione</option>";
                resultado.forEach(x => {
                    formulario += "<option value="+ x.cod_curso +">"+ x.nome_curso +"</option>";
                });                
                document.getElementById('curso').innerHTML = formulario;
            }
        };
        xhttp.open("GET", "controle/cursoControle.php?acao=listar", true);
        xhttp.send();
    });

</script>
