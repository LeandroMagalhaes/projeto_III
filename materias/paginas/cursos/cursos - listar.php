
<div class='row'>
    <div class='col-lg-12'><br>
        <h5><label>Lista de Cursos</label></h5><br>            
        <table class='table'>
            <tr>
                <th>Curso</th>
                <th>Carga Horária</th>
                <th>Ações</th>
            </tr>
            <?php 
                require "./controle/cursoControle.php";

                foreach ($resultado as $key => $value){
                    echo "<tr><td>{$value->nm_curso}</td><td>{$value->qt_cargaHoraria}</td><td><button class='btn btn-success btn-sm'><i class='fa fa-edit'> x </i></button><button class='btn btn-danger btn-sm'><i class='fa fa-trash'> x </i></button></td></tr>";
                }
            ?>
        </table>
    </div>
</div>