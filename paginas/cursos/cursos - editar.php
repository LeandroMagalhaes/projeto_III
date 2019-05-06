
<div class='row'>
    <div class='col-lg-12'>
        <br>
        <h5><label>Alterar Curso</label></h5>
        <br>
        <form  method='POST' id="formulario">
            <div id='editar'></div>
            <input type='button' class='btn btn-success' value='Editar' onclick='editarCurso()'>
            <input type='button' class='btn btn-danger' value='Voltar'>
        </form>        
    </div>   
</div>
<script>
    //Carrega a função
    $(document).ready(function() {
        var xhttp = new XMLHttpRequest();
        var id = location.search.split("&cod_curso=");       

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                resultado = JSON.parse(this.responseText);                
                resultado.forEach(x => {
                    formulario = "<input type='hidden' class='form-control' id='id' name='id' value='"+ x.cod_curso +"'><div class='form-group'><label>Curso</label><input type='text' class='form-control' id='nome' name='nome' value='"+ x.nome_curso +"'></div><div class='form-group'><label>Carga Horária</label><input type='number' class='form-control' id='cargaHoraria' name='cargaHoraria' value='"+ x.carga_horaria +"'></div>";
                });                
                document.getElementById('editar').innerHTML = formulario;
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