<div class='row'>
    <div class='col-md-12'><br>
        <h5><label>Grades</label></h5><br>
    </div>
</div>
<div class="accordion" id="grade">
    
</div>

<script>

    $(document).ready(function getGrade() {
               
        var html = "";
        $.get("controle/gradeControle.php?acao=cursos", (data, status) => {
            var cursos = JSON.parse(data);            
            cursos.forEach((curso) => {
                html += "<div class='card'><div class='card-header' id='"+curso.cod_curso+"'><h2 class='mb-0'><button class='btn btn-link btn-sm' data-toggle='collapse' data-target='#collapse_"+curso.cod_curso+"' aria-expanded='true'>" +curso.nome_curso+"</button></h2></div><div id='collapse_"+curso.cod_curso+"' class='collapse' aria-labelledby='"+curso.cod_curso+"' data-parent='#grade'>";
                $.get("controle/gradeControle.php?acao=materia&cod_curso=" + curso.cod_curso, (data, status) => {
                    html += "<div class='card-body'>";
                    var materias = JSON.parse(data);
                    materias.forEach((materia) => {
                        html += (materia.nome_materia + "<br>");
                    });
                    html += "</div>";
                });
                html += "</div></div></div>";
            });
            document.getElementById('grade').innerHTML = html;
        });

        // var xhttp = new XMLHttpRequest();

        // xhttp.onreadystatechange = function() {

        //     if(this.readyState == 4 && this.status == 200) {
        //         resultado = JSON.parse(this.responseText);            
        //             p = 1;
        //             materias = 1;
        //             lista = '';
        //             novoCurso = null;                    
        //             console.log(resultado);
        //             for(var i = 0; i < resultado.length; i++){                    
        //                 if(novoCurso == resultado[i].cod_curso){
        //                     continue;
        //                 }
        //                 else{
        //                     lista += "<div class='card'><div class='card-header' id='"+ resultado[i].cod_curso +"'><h2 class='mb-0'><button class='btn btn-link btn-sm' data-toggle='collapse' data-target='#collapse_"+p+"' aria-expanded='true' aria-controls='"+ p +"l'>"+ resultado[i].nome_curso +"</button></h2></div><div id='collapse_"+ p +"' class='collapse' aria-labelledby='"+ resultado[i].cod_curso +"' data-parent='#grade'></div></div>";
        //                     }
        //                 p++;
        //                 novoCurso = resultado[i].cod_curso;
        //             }                    
        //         document.getElementById('grade').innerHTML = lista;            
        //     }
        // };
        // xhttp.open("GET", "controle/gradeControle.php?acao=listar", true);
        // xhttp.send();
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