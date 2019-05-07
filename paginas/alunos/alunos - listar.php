
<div class='row'>
    <div class='col-lg-12'><br>
        <h5><label>Lista de Alunos</label></h5><br>            
        <table class='table'id='alunos'></table>
    </div>
</div>

<script>
    $(document).ready(function getCursos(){
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {            
            lista = '<tr><th>Nome</th><th>Registro</th><th>Curso</th><th>Ações</th></tr>';

            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);
                
                if(resultado != null){
                    resultado.forEach(x => {
                        lista += "<tr><td>"+ x.nome_aluno +"</td><td>"+ x.registro + "</td><td>"+ x.nome_curso + "</td><td><button onclick=\"excluirAluno("+ x.cod_aluno +")\" class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button> <button onclick=\"editarAluno("+ x.cod_aluno +")\" class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button></td></tr>";
                    });                
                    document.getElementById('alunos').innerHTML = lista;
                }
                else{
                    lista += "<tr><td>Nenhum Registro Encontrado...</td></tr>";
                }
            }   
        };
        xhttp.open("GET", "controle/alunoControle.php?acao=listar", true);
        xhttp.send(); 
    });

    function excluirAluno(id){
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("Registro Excluido com Sucesso!")
                window.location.reload();
            }
        };
        xhttp.open("GET", "controle/alunoControle.php?acao=excluir&cod_aluno=" + id, true);
        xhttp.send();
    }

    function editarAluno(id){
        window.location.href = "index.php?pagina=alunos&acao=editar&cod_aluno=" + id;
    }
</script>