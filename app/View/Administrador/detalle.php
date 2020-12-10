<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
include '../../src/Layout/menu.php';
?>



<?php
$grupos = $database::table('grupos')->where('ProfesorId', $_GET['id'])->get();

?>
<div class="container">
    <h4 class="text-center mt-3">Detalle del profesor</h4>
    <div class="text-right">
        <a href="index.php" class="btn btn-danger text-right">Regresar al dashboard</a>
    </div>

    <h5 class="p-3">Mis grupos</h5>
    <div class="d-flex">
        <?php
        foreach ($grupos as $item) {
            echo '<div class="card ml-3" style="width: 15rem;">';
            echo '<img src="https://www.flaticon.es/svg/static/icons/svg/1045/1045033.svg" class="card-img-top" alt="cardimage" width="220" height="100">';
            echo '<div class="card-body">';

            echo '<h5 class="card-title"><b>Grado: </b>' . $item->GradoId . '</h5>';
            echo '<h5 class="card-title"><b>Grupo: </b>' . $item->Valor . '</h5>';
            echo '<a href="#" class="btn btn-primary">Ver alumnos</a>';
            echo '</div></div>';
        }

        ?>
    </div>
</div>