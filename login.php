<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <title>Projeto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <div class="container"><br>
        <center><h3> LOGIN DO USUÁRIO</h3></center><br>
        <div class="container">
            <form id="formulario" method="POST">
                <div class="form-group">
                    <label>LOGIN</label>
                    <input type="text" class="form-control" id="nome" name="nome" >
                </div>

                <div class="form-group">
                    <label>SENHA</label>
                    <input type="password" class="form-control" id="senha" name="senha" >
                </div>

                <input type='button' class='btn btn-primary' value="Login" id="login">
            </form><br>
            <label>Novo por aqui?<input type="button" class="btn btn-link"value='Cadastre-se...' onclick="cadastrarUsuario()"></label>
        </div>
    </div>

    <script>
        //Carrega a função
        $(document).ready(function() {
            //Se o botão for acionado
            $('#login').click(function() {
                var nome = $('#nome').val();
                var senha = $('#senha').val();
                
                if(nome == null || nome == 0 || senha == null || senha == 0) {
                    alert("Informe os dados do login");
                    return false;
                }
                else{
                    var dados = $('#formulario').serialize();
                    //Ajax
                    $.post('controle/loginControle.php',dados,
                        function(data, status){
                            var objJSON = $.parseJSON(data);

                            if(objJSON == null || objJSON == 0){
                                alert("Dados Inválidos!");
                                $('#formulario')[0].reset();
                            }
                            else{
                                $('#formulario')[0].reset();
                                window.location.href = "index.php";
                            }
                    });
                }
            });
        });
        
        function cadastrarUsuario(){
            window.location.href = "paginas/login/login - criar.php";
        }

    </script>
</body>
</html>
