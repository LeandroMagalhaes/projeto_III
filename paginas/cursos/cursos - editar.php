
<div class='row'>
    <div class='col-md-12'>
        <br>
        <h5><label>Alterar Curso</label></h5>
        <br>
        <form  method='POST' id="formulario">
            <input type='hidden' class='form-control' id='id' name='id'>
            <div class='form-group'>
                <label>Curso</label>
                <input type='text' class='form-control' id='nome' name='nome'>
            </div>

            <div class='form-group'>
                <label>Carga Horária</label>
                <input type='number' class='form-control' id='cargaHoraria' name='cargaHoraria'>
            </div>
            <input type='button' class='btn btn-sm btn-success' value='Editar' onclick='editarCurso()'>
            <input type='button' class='btn btn-sm btn-danger' value='Voltar' onclick="history.go(-1)">
        </form>        
    </div>   
</div>

<script>
    $(document).ready(function() {
        var xhttp = new XMLHttpRequest();
        var id = location.search.split("&cod_curso=");       

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);                
                resultado.forEach(x => {
                    document.getElementById('id').value = x.cod_curso;
                    document.getElementById('nome').value = x.nome_curso;
                    document.getElementById('cargaHoraria').value = x.carga_horaria;
                });                
            }
        };
        xhttp.open("GET", "controle/cursoControle.php?acao=buscar&cod_curso="+id[1], true);
        xhttp.send();
    });

    function editarCurso(){
        var curso = $('#nome').val();
        if(curso == null || curso == 0) {
            alert("Preencha o Curso");
            return false;
        }
        else{
            var id = location.search.split("&cod_curso=");
            var dados = $('#formulario').serialize();
            //Ajax
            $.post(
                "controle/cursoControle.php?acao=editar&cod_curso="+id[1],dados,
                function(data, status){
                    alert("Editado com Sucesso!");
                    window.location.href = "index.php?pagina=cursos&acao=listar";
            });
        }
    }
    
</script>
