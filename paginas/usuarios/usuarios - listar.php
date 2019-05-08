
<div class='row'>
    <div class='col-md-12'><br>
        <h5><label>Lista de Usuários</label></h5><br>            
        <table class='table' id='usuarios'></table>
    </div>
</div>

<script>
    $(document).ready(function getCursos(){
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            lista = '<tr><th>Nome</th><th>Ações</th></tr>';
            
            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);

                if(resultado != null){
                    resultado.forEach(x => {
                        lista += "<tr><td>"+ x.nome_usuario +"</td><td><button onclick=\"excluirUsuario("+ x.cod_usuario +")\" class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button> <button onclick=\"editarUsuario("+ x.cod_usuario +")\" class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button></td></tr>";
                    });                
                    document.getElementById('usuarios').innerHTML = lista;
                }
                else{
                    lista += "<tr><td>Nenhum Registro Encontrado...</td></tr>";
                }
            }
        };
        xhttp.open("GET", "controle/usuarioControle.php?acao=listar", true);
        xhttp.send(); 
    });

    function excluirUsuario(id){
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("Registro Excluido com Sucesso!")
                window.location.reload();
            }
        };
        xhttp.open("GET", "controle/usuarioControle.php?acao=excluir&cod_usuario=" + id, true);
        xhttp.send();
    }

    function editarUsuario(id){
        window.location.href = "index.php?pagina=usuarios&acao=editar&cod_usuario=" + id;
    }
</script>