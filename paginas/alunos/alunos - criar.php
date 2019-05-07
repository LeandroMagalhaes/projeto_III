
<div class='row'>
    <div class='col-lg-12'>
        <br>
        <h5><label>Cadastro de Aluno</label></h5>
        <br>
        <form  method='POST' id="formulario">
            <div class='form-group'>
                <label>Nome</label>
                <input type='text' class='form-control' id='nome' name='nome' placeholder='Nome Completo'>                    
            </div>
            <div class='form-group'>
                <label>Data de Nascimento</label>
                <input type='date' class='form-control' id='dataNascimento' name='dataNascimento'>
            </div>

            <div class='form-group'>
                <label>Sexo</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="1" checked>
                    <label class="form-check-label">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="2">
                    <label class="form-check-label">
                        Feminino
                    </label>
                </div>
            </div>

            <div class='form-group'>
                <label>Data de Matricula</label>
                <input type='date' class='form-control' id='dataMatricula' name='dataMatricula'>
            </div>

            <div class='form-group'>
                <label>Registro</label>
                <input type='number' class='form-control' id='registro' name='registro'>
            </div>

            <div class='form-group'>
                <label>Curso</label>
                <select class='form-control' id='curso' name='curso'></select>
            </div>   
            <input type='button' class='btn btn-primary' value="Cadastrar" id="cadastrar">
            <input type='button' class='btn btn-danger' value='Voltar'>
        </form>        
    </div>   
</div>

<script>

    $(document).ready(function() {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);                
                formulario += "<option>Selecione</option>";
                resultado.forEach(x => {
                    formulario += "<option value="+ x.cod_curso +">"+ x.nome_curso +"</option>";
                });                
                document.getElementById('curso').innerHTML = formulario;
            }
        };
        xhttp.open("GET", "controle/cursoControle.php?acao=listar", true);
        xhttp.send();
    });

    $(document).ready(function() {
        $('#cadastrar').click(function() {
            var curso = $('#nome').val();
            
            if(curso == null || curso == 0) {
                alert("Preencha o Nome");
                return false;
            }
            else{
                var dados = $('#formulario').serialize();
                //Ajax
                $.post('controle/alunoControle.php?acao=cadastrar',dados,
                    function(data, status){
                        alert("Cadastrado com Sucesso!");
                        //Limpando os campos do formulário
                        $('#formulario')[0].reset();
                });
            }
        });
    });

</script>