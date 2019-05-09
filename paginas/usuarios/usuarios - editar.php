
<div class='row'>
    <div class='col-md-12'>
        <br>
        <h5><label>Alterar Usuario</label></h5>
        <br>
        <form  method='POST' id="formulario">
            <input type='hidden' class='form-control' id='id' name='id'>
            <div class='form-group'>
                <label>Nome</label>
                <input type='text' class='form-control' id='nome' name='nome'>
            </div>

            <div class='form-group'>
                <label>Senha</label>
                <input type='password' class='form-control' id='senha' name='senha'>
            </div>
            <input type='button' class='btn btn-sm btn-success' value='Editar' onclick='editarUsuario()'>
            <input type='button' class='btn btn-sm btn-danger' value='Voltar' onclick="history.go(-1)">
        </form>        
    </div>   
</div>

<script>
    $(document).ready(function() {
        var xhttp = new XMLHttpRequest();
        var id = location.search.split("&cod_usuario=");       

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);                
                resultado.forEach(x => {
                    document.getElementById('id').value = x.cod_usuario;
                    document.getElementById('nome').value = x.nome_usuario;
                    document.getElementById('senha').value = x.senha_usuario;
                });                
            }
        };
        xhttp.open("GET", "controle/usuarioControle.php?acao=buscar&cod_usuario="+ id[1], true);
        xhttp.send();
    });

    function editarUsuario(){
        var nome = $('#nome').val();
        if(nome == null || nome == 0) {
            alert("Preencha o Curso");
            return false;
        }
        else{
            var id = location.search.split("&cod_usuario=");
            var dados = $('#formulario').serialize();
            //Ajax
            $.post(
                "controle/usuarioControle.php?acao=editar&cod_usuario="+ id[1], dados,
                function(data, status){
                    alert("Editado com Sucesso!");
                    window.location.href = "index.php?pagina=usuarios&acao=listar";
            });
        }
    }
    
</script>
