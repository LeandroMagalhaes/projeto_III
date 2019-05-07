
<div class='row'>
    <div class='col-lg-12'><br>
        <h5><label>Grades</label></h5><br>        
    </div>
</div>

<div class="accordion" id="grade">
  <div class='card'>
    <div class='card-header' id='primeiro'>
      <h2 class='mb-0'>
        <button class='btn btn-link btn-sm' data-toggle='collapse' data-target='#um' aria-expanded='true' aria-controls=''>
          Tema 1 - - - - fa-rotate-180
        </button>
      </h2>
    </div>

    <div id='um' class='collapse' aria-labelledby='primeiro' data-parent='#grade'>
      <div class='card-body'>
        teste
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function getGrade() {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            lista = '<tr><th>Cursos</th><th>Matéria</th><th>Ações</th></tr>';

            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);

                if (resultado != null) {
                    resultado.forEach(x => {
                        lista += 
                    });
                    document.getElementById('grade').innerHTML = lista;
                } else {
                    lista += "<tr><td>Nenhum Registro Encontrado...</td></tr>";
                }
            }
        };
        xhttp.open("GET", "controle/gradeControle.php?acao=listar", true);
        xhttp.send();
    });

    function excluirGrade(id) {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("Registro Excluido com Sucesso!")
                window.location.reload();
            }
        };
        xhttp.open("GET", "controle/gradeControle.php?acao=excluir&cod_curso=" + id, true);
        xhttp.send();
    }
</script>