<div class='row'>
    <div class='col-md-12'><br>
        <h5><label>Montar Grade</label></h5><br>
        <form id='formulario' method='POST'>
            <div class="row">
                <div class="col-md-4">
                    <div class='form-group'>
                        <label>Curso</label>
                        <select class='form-control' id='curso'></select>
                    </div>

                    <div class='form-group'>
                        <label>Matérias</label>
                        <select class='form-control' id='materia'></select>
                    </div>

                    <input type='button' class='btn btn-sm btn-success' value='Incluir' onclick="montarLista()">
                    <input type='button' class='btn btn-sm btn-primary' value="Salvar" id="cadastrar">
                    <input type='button' class='btn btn-sm btn-danger' value='Voltar' onclick="history.go(-1)">
                </div>

                <div class="col-md-8" style='margin-top:31px;'>
                    <div style='height: 500px; overflow: auto'>
                        <table class='table table-striped table-sm' id='grade'>
                            <thead>
                                <tr>
                                    <th style='width:40%;'>Curso</th>
                                    <th style='width:40%;'>Matéria</th>
                                    <th style='width:20%;'>Ação</th>
                                </tr>
                            </thead>
                            <tbody id='linhas'></tbody>
                        </table>
                    </div>
                </div>
            </div>
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
                formulario += "<option value=" + x.cod_curso + ">" + x.nome_curso + "</option>";
            });
            document.getElementById('curso').innerHTML = formulario;
        }
    };
    xhttp.open("GET", "controle/cursoControle.php?acao=listar", true);
    xhttp.send();
});

$(document).ready(function() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            resultado = JSON.parse(this.responseText);
            formulario = "<option>Selecione</option>";
            resultado.forEach(x => {
                formulario += "<option value=" + x.cod_materia + ">" + x.nome_materia + "</option>";
            });
            document.getElementById('materia').innerHTML = formulario;
        }
    };
    xhttp.open("GET", "controle/materiaControle.php?acao=listar", true);
    xhttp.send();
});

function montarLista() {
    var idCurso = document.getElementById('curso').selectedIndex;
    var curso = document.getElementById('curso')[idCurso].label;  
    var idMateria = document.getElementById('materia').selectedIndex;
    var materia = document.getElementById('materia')[idMateria].label;

    if (materia == 0 || materia == "Selecione" || curso == 0 || curso == "Selecione") {
        alert("Preencha os Campos!");
    } else {
        var linha = "<tr><td>" + curso + "<input type='hidden' name='idCurso[]' value='" + idCurso + "'></td><td>" +
        materia + "<input type='hidden' name='idMateria[]' value='" + idMateria +
            "'></td><td><button class='btn btn-sm' onclick=\"removerLinha(this.parentNode.parentNode.rowIndex)\"><i class='fa fa-trash-o' aria-hidden='true'></i></button></td></tr>";
        document.getElementById('linhas').innerHTML += linha;
    }
}

function removerLinha(id) {
    document.getElementById('grade').deleteRow(id);
}

$(document).ready(function() {
    $('#cadastrar').click(function() {
        if (materia == 0 || materia == "Selecione" || curso == 0 || curso == "Selecione") {
            alert("Preencha os Campos!");
            return false;
        } 
        else {
            var dados = $('#formulario').serialize();
            console.log(dados);
            //Ajax
            $.post('controle/gradeControle.php?acao=cadastrar', dados,
                function(data, status) {                    
                    alert("Cadastrado com Sucesso!");
                    $('#formulario')[0].reset();
                    document.getElementById('linhas').innerHTML = null;
            });            
        }        
    });
});
</script>