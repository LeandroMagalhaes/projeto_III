<div class='row'>
    <div class='col-lg-12'>
        <br>
        <h5><center><label>Montar Grade</label></center></h5>
        <br>
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

                    <input type='button' class='btn btn-success' value='Incluir' onclick="montarLista()">
                    <input type='button' class='btn btn-primary' value="Salvar" id="cadastrar">
                    <input type='button' class='btn btn-danger' value='Voltar'>
                </div>

                <div class="col-md-8" style='margin-top:20px;'>
                    <div style='height: 500px; overflow: auto'>
                        <table class='table' id='grade'>
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
            "'></td><td><input type='button' class='btn btn-link' value='X' onclick=\"removerLinha(this.parentNode.parentNode.rowIndex)\"></td></tr>";
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
        } else {
            var dados = $('#formulario').serialize();
            //Ajax
            $.post('controle/gradeControle.php?acao=cadastrar', dados,
                function(data, status) {
                    alert("Cadastrado com Sucesso!");
                    window.location.reload();
            });
        }
    });
});
</script>