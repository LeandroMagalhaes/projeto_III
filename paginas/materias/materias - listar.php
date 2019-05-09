
<div class='row'>
    <div class='col-md-12'><br>
        <h5><label>Lista de Materias</label></h5><br>            
        <table class='table table-striped table-sm' id='materias'></table>
    </div>
</div>

<script>
    $(document).ready(function getMaterias(){
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {            
            lista = '<tr><th>Matéria</th><th>Carga Horária</th><th>Ações</th></tr>';

            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);
                
                if(resultado != null){
                    resultado.forEach(x => {
                        lista += "<tr><td>"+ x.nome_materia +"</td><td>"+ x.carga_horaria + "</td><td><button onclick=\"excluirMateria("+ x.cod_materia +")\" class='btn btn-link btn-sm'><i class='fa fa-trash'></i></button> <button onclick=\"editarMateria("+ x.cod_materia +")\" class='btn btn-link btn-sm'><i class='fa fa-edit'></i></button></td></tr>";
                    });                
                    document.getElementById('materias').innerHTML = lista;
                }
                else{
                    lista += "<tr><td>Nenhum Registro Encontrado...</td></tr>";
                }
            }
        };
        xhttp.open("GET", "controle/materiaControle.php?acao=listar", true);
        xhttp.send(); 
    });

    function excluirMateria(id){
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("Registro Excluido com Sucesso!")
                window.location.reload();
            }
        };
        xhttp.open("GET", "controle/materiaControle.php?acao=excluir&cod_materia=" + id, true);
        xhttp.send();
    }

    function editarMateria(id){
        window.location.href = "index.php?pagina=materias&acao=editar&cod_materia=" + id;
    }
</script>