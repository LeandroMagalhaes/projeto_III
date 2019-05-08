
<div class='row'>
    <div class='col-md-12'><br>
        <h5><label>Lista de Cursos</label></h5><br>            
        <table class='table' id='cursos'></table>
    </div>
</div>

<script>
    $(document).ready(function getCursos(){
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            lista = '<tr><th>Curso</th><th>Carga Horária</th><th>Ações</th></tr>';
            
            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);

                if(resultado != null){
                    resultado.forEach(x => {
                        lista += "<tr><td>"+ x.nome_curso +"</td><td>"+ x.carga_horaria + "</td><td><button onclick=\"excluirCurso("+ x.cod_curso +")\" class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button> <button onclick=\"editarCurso("+ x.cod_curso +")\" class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button></td></tr>";
                    });                
                    document.getElementById('cursos').innerHTML = lista;
                }
                else{
                    lista += "<tr><td>Nenhum Registro Encontrado...</td></tr>";
                }
            }
        };
        xhttp.open("GET", "controle/cursoControle.php?acao=listar", true);
        xhttp.send(); 
    });

    function excluirCurso(id){
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("Registro Excluido com Sucesso!")
                window.location.reload();
            }
        };
        xhttp.open("GET", "controle/cursoControle.php?acao=excluir&cod_curso=" + id, true);
        xhttp.send();
    }

    function editarCurso(id){
        window.location.href = "index.php?pagina=cursos&acao=editar&cod_curso=" + id;
    }
</script>