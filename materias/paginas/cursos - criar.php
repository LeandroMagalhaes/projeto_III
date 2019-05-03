
<div class='row'>
    <div class='col-lg-12'>
        <br>
        <h5><label>Cadastro de Cursos</label></h5>
        <br>
        <form  method='POST' id="formulario">
            <div class='form-group'>
                <label>Curso</label>
                <input type='text' class='form-control' id='nomeCurso' name='nomeCurso' placeholder='Curso'>                    
            </div>
            <div class='form-group'>
                <label>Carga Horária</label>
                <input type='number' class='form-control' id='cargaHorariaCurso' name='cargaHorariaCurso' placeholder='Carga Horária'>
            </div>                
            <input type='button' class='btn btn-primary' value="Cadastrar" id="cadastrar">
            <input type='button' class='btn btn-danger' value='Voltar'>
        </form>        
    </div>   
</div>
<script>
    //Carrega a função
    $(document).ready(function() {
        //Se o botão for acionado
        $('#cadastrar').click(function() {
            var curso = $('#nomeCurso').val();
            
            if(curso == null || curso == 0) {
                alert("Preencha o Curso");
                return false;
            }
            else{
                var dados = $('#formulario').serialize();
                //Ajax
                $.post(
                    'controle/cursoControle.php?acao=cadastrar',
                    dados,
                    function(data, status){
                        alert("Cadastrado com Sucesso!");
                        //Limpando os campos do formulário
                        $('#formulario')[0].reset();
                });
            }
        });
    });

</script>