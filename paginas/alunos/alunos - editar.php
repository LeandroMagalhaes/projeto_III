
<div class='row'>
    <div class='col-lg-12'>
        <br>
        <h5><label>Alterar Aluno</label></h5>
        <br>
        <form  method='POST' id="formulario">
            <input type='hidden' class='form-control' id='id' name='id'>
            <div class='form-group'>
                <label>Nome</label>
                <input type='text' class='form-control' id='nome' name='nome'>
            </div>

            <div class='form-group'>
                <label>Data de Nascimento</label>
                <input type='date' class='form-control' id='dataNascimento' name='dataNascimento'>
            </div>

            <div class='form-group'>
                <label>Sexo</label>
                <div class='form-check'>
                    <input class='form-check-input' type='radio' name='sexo' id='sexo' checked>
                    <label class='form-check-label'>Masculino</label>
                </div>

                <div class='form-check'>
                    <input class='form-check-input' type='radio' name='sexo' id='sexo'>
                    <label class='form-check-label'>Feminino</label>
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
            <input type='button' class='btn btn-success' value='Editar' onclick='editarAluno()'>
            <input type='button' class='btn btn-danger' value='Voltar'>
        </form>        
    </div>   
</div>

<script>    

    $(document).ready(function() {
        var xhttp = new XMLHttpRequest();
        var id = location.search.split("&cod_aluno=");       

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);                
                resultado.forEach(x => {
                    document.getElementById('id').value = x.cod_aluno;
                    document.getElementById('nome').value = x.nome_aluno;
                    document.getElementById('dataNascimento').value = x.data_nascimento;
                    document.getElementById('sexo').value = x.sexo;
                    document.getElementById('dataMatricula').value = x.data_matricula;
                    document.getElementById('registro').value = x.registro;
                });
            }
        };
        xhttp.open("GET", "controle/alunoControle.php?acao=buscar&cod_aluno="+id[1], true);
        xhttp.send();
    });

    function editarAluno(){
        var aluno = $('#nome').val();
        if(aluno == null || aluno == 0) {
            alert("Preencha o Nome");
            return false;
        }
        else{
            var id = location.search.split("&cod_aluno=");
            var dados = $('#formulario').serialize();
            //Ajax
            $.post(
                "controle/alunoControle.php?acao=editar&cod_aluno="+id[1],dados,
                function(data, status){
                    alert("Editado com Sucesso!");
                    window.location.href = "index.php?pagina=alunos&acao=listar";
            });
        }
    }

    //Carrega a função
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
    
</script>
