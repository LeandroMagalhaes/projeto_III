<div class='row'>
    <div class='col-md-12'><br>
        <h5><label>Grades</label></h5><br>
    </div>
</div>
<div class="accordion" id="grade">
    
</div>

<script>
    
    $(document).ready(function getGrade() {

        $.get("controle/gradeControle.php?acao=cursos", false, (data, status) => {
            var cursos = JSON.parse(data);            
            cursos.forEach(curso => {
                html = "<div class='card'><div class='card-header' id='"+curso.cod_curso+"'><button class='btn btn-link btn-sm' data-toggle='collapse' data-target='#collapse_"+curso.cod_curso+"' aria-expanded='true' aria-controls=''>" +curso.nome_curso+"</button></div><div id='collapse_"+curso.cod_curso+"' class='collapse' aria-labelledby='"+curso.cod_curso+"' data-parent='#grade'><div class='card-body'>";
                id = curso.cod_curso;              
                html += listaMateria(id);
            });
            html += "</div></div>";
            document.getElementById('grade').innerHTML = html;
        });        
    });

    function listaMateria(id){
        var lista = "";
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);

                resultado.forEach(materia => {
                    lista += materia.nome_materia +"<br>";
                });
                lista += "</div>";                
            }
            
        };
        xhttp.open("GET", "controle/gradeControle.php?acao=materia&cod_curso=" + id, false);
        xhttp.send();

        return lista;
    }

</script>