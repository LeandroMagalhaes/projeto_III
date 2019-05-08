
<div class='row'>
    <div class='col-md-12'>
        <br>
        <h5><label>Cadastro de Materias</label></h5>
        <br>
        <form id='formulario' method='POST'>
            <div class='form-group'>
                <label>Matérias</label>
                <input type='text' class='form-control' id='nome' name='nome' placeholder='Matéria'>                    
            </div>
            <div class='form-group'>
                <label>Carga Horária</label>
                <input type='text' class='form-control' id='cargaHoraria' name='cargaHoraria' placeholder='Carga Horária'>
            </div>                            
            <input type='button' class='btn btn-primary' value="Cadastrar" id="cadastrar">
            <input type='button' class='btn btn-danger'  value='Voltar'>
        </form>        
    </div>   
</div>

<script>   
    $(document).ready(function() {
        $('#cadastrar').click(function() {
            var nome = $('#nome').val();
            
            if(nome == null || nome == 0) {
                alert("Preencha a Matéria");
                return false;
            }
            else{
                var dados = $('#formulario').serialize();                
                //Ajax
                $.post('controle/materiaControle.php?acao=cadastrar', dados,
                    function(data, status){
                        alert("Cadastrado com Sucesso!");
                        console.log(data);
                        //Limpando os campos do formulário
                        $('#formulario')[0].reset();
                });
            }
        });
    });

</script>
