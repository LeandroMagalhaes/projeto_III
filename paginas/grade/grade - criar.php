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
                        <label>Periodo</label>
                        <select class='form-control' id='periodo'></select>
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
                                    <th style='width:30%;'>Curso</th>
                                    <th style='width:30%;'>Período</th>
                                    <th style='width:30%;'>Matéria</th>
                                    <th style='width:10%;'>Ação</th>
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

//Curso
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


//Periodo
$(document).ready(function() {
    $("#curso").change(function(){
        var idCurso = document.getElementById('curso').value;

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);
                formulario = "<option>Selecione</option>";
                resultado.forEach(x => {
                    formulario += "<option value=" + x.num_periodo + ">" + x.num_periodo + "</option>";
                });
                document.getElementById('periodo').innerHTML = formulario;
            }
        };
        xhttp.open("GET", "controle/gradeControle.php?acao=consultar&cod_curso="+ idCurso, true);
        xhttp.send();
    });
});

//Materia
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
    var idxCurso = document.getElementById('curso').selectedIndex;    
    var idCurso = document.getElementById('curso').value;
    var curso = document.getElementById('curso')[idxCurso].label;
    var idPeriodo = document.getElementById('periodo').selectedIndex;
    var idxMateria = document.getElementById('materia').selectedIndex;
    var idMateria = document.getElementById('materia').value;
    var materia = document.getElementById('materia')[idxMateria].label;

    if (materia == 0 || materia == "Selecione" || curso == 0 || curso == "Selecione") {
        alert("Preencha os Campos!");
    } else {
        var linha = "<tr><td>" + curso + "<input type='hidden' name='idCurso[]' value='" + idCurso + "'></td><td>"+ idPeriodo +"<input type='hidden' name='idPeriodo[]' value='" + idPeriodo + "'></td><td>" +
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
        var dados = $('#formulario').serialize();

        if (dados == null || dados == undefined || dados == 0) {
            alert("Preencha a Lista!");
            return false;
        } 
        else {            
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