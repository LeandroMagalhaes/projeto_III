
<div class='row'>
    <div class='col-lg-12'>
        <br>
        <h5><label>Cadastro de Materias</label></h5>
        <br>
        <form action='' method='POST'>

            <div class='form-group'>
                <label>Curso</label>
                <select class='form-control' id='curso' name='curso'></select>
            </div>

            <div class='form-group'>
                <label>Matérias</label>
                <input type='text' class='form-control' id='nome' name='nome' placeholder='Materia'>                    
            </div>
            <div class='form-group'>
                <label>Carga Horária</label>
                <input type='text' class='form-control' id='cargaHoraria' name='cargaHoraria' placeholder='Carga Horária'>
            </div>
            <input type='button' class='btn btn-success' value='Incluir na Lista' onclick="incluirMateria()">                
            <input type='button' class='btn btn-primary' value="Cadastrar" id="cadastrar">
            <input type='button' class='btn btn-danger'  value='Voltar'>
            
            <table class='table' id='materias'>
                <thead>
                    <tr>
                        <th>Materia</th>
                        <th>Carga Horária</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id='tabela'></tbody>
            </table>
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
                formulario = "<option>Selecione</option>";
                resultado.forEach(x => {
                    formulario += "<option value="+ x.cod_curso +">"+ x.nome_curso +"</option>";
                });                
                document.getElementById('curso').innerHTML = formulario;
            }
        };
        xhttp.open("GET", "controle/cursoControle.php?acao=listar", true);
        xhttp.send();
    });

    function incluirMateria(){
        var materia = document.getElementById('nome').value;
        var cargaHoraria = document.getElementById('cargaHoraria').value;
        var linha = "<tr><td>"+ materia +"</td><td>"+ cargaHoraria +"</td><td><input type='button' value='remover' onClick=\"removerMateria(this.parentNode.parentNode.rowIndex)\"></td></tr>";
        document.getElementById('tabela').innerHTML += linha;
    }

    function removerMateria(id){
        document.getElementById('materias').deleteRow(id);
    }

</script>
