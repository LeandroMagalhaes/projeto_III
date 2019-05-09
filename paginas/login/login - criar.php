<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>Projeto</title>
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
        <script src="../../js/jquery.min.js"></script>
    </head>
<body>
    <div class="container"><br>        
        <div class="container">
            <h5><label>Cadastro</label></h5>
            <form  method='POST' id="formulario">
                <div class='form-group'>
                    <label>Nome</label>
                    <input type='text' class='form-control' id='nome' name='nome' placeholder='Nome'>                    
                </div>
                <div class='form-group'>
                    <label>Senha</label>
                    <input type='password' class='form-control' id='senha' name='senha' placeholder='Senha'>
                </div>                
                <input type='button' class='btn btn-sm btn-primary' value="Cadastrar" id="cadastrar">
                <input type='button' class='btn btn-sm btn-danger' value='Voltar' onclick="history.go(-1)">
            </form>
        </div>
    </div>

    <script>
        //Carrega a função
        $(document).ready(function() {
            //Se o botão for acionado
            $('#cadastrar').click(function() {
                var nome = $('#nome').val();
                var senha = $('#senha').val();
                
                if(nome == null || nome == 0) {
                    alert("Preencha os Campos!");
                    return false;
                }
                else{
                    var dados = $('#formulario').serialize();
                    //Ajax
                    $.post('../../controle/usuarioControle.php?acao=cadastrar',dados,
                        function(data, status){
                            alert("Cadastrado com Sucesso!");
                            //Limpando os campos do formulário
                            $('#formulario')[0].reset();
                            window.location.href = "../../login.php";
                    });
                }
            });
        });

    </script>
</body>
