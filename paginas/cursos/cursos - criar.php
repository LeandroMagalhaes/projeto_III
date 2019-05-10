
<div class='row'>
    <div class='col-md-12'>
        <br>
        <h5><label>Cadastro de Cursos</label></h5>
        <br>
        <form  method='POST' id="formulario">
            <div class='form-group'>
                <label>Curso</label>
                <input type='text' class='form-control' id='nome' name='nome' placeholder='Curso'>                    
            </div>
            <div class='form-group'>
                <label>Carga Horária</label>
                <input type='number' class='form-control' id='cargaHoraria' name='cargaHoraria' placeholder='Carga Horária'>
            </div>
            <div class='form-group'>
                <label>Quantidade de Períodos</label>
                <select class='form-control' id='qtd_periodo' name='qtd_periodo'>
                    <option value=''>Selecione a Quantidade</option>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                </select>
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
            var curso = $('#nome').val();
            var cargaHoraria = $('#cargaHoraria').val();
            var periodo = $('#qtd_periodo').val();
            
            if(curso == null || curso == 0 || periodo == 0 || periodo == null || cargaHoraria == 0 || cargaHoraria == null) {
                alert("Preencha os Campos");
                return false;
            }
            else{
                var dados = $('#formulario').serialize();
                //Ajax
                $.post('controle/cursoControle.php?acao=cadastrar',dados,
                    function(data, status){
                        alert("Cadastrado com Sucesso!");
                        //Limpando os campos do formulário
                        $('#formulario')[0].reset();
                });
            }
        });
    });

</script>