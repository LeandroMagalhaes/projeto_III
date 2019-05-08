
<div class='row'>
    <div class='col-md-12'>
        <br>
        <h5><label>Cadastro de Usuários</label></h5>
        <br>
        <form  method='POST' id="formulario">
            <div class='form-group'>
                <label>Nome</label>
                <input type='text' class='form-control' id='nome' name='nome' placeholder='Nome'>                    
            </div>
            <div class='form-group'>
                <label>Senha</label>
                <input type='password' class='form-control' id='senha' name='senha' placeholder='Senha'>
            </div>                
            <input type='button' class='btn btn-primary' value="Cadastrar" id="cadastrar">
            <input type='button' class='btn btn-danger' value='Voltar' onclick="history.go(-1)">>
        </form>
    </div>   
</div>

<script>
    //Carrega a função
    $(document).ready(function() {
        //Se o botão for acionado
        $('#cadastrar').click(function() {
            var nome = $('#nome').val();
            
            if(nome == null || nome == 0) {
                alert("Preencha o Nome");
                return false;
            }
            else{
                var dados = $('#formulario').serialize();
                //Ajax
                $.post('controle/usuarioControle.php?acao=cadastrar',dados,
                    function(data, status){
                        alert("Cadastrado com Sucesso!");
                        //Limpando os campos do formulário
                        $('#formulario')[0].reset();
                });
            }
        });
    });

</script>