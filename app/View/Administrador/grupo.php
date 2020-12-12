<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
$grupos = $database::table('grupos')->where('GradoId', $_GET['id'])->get();
$asignaturas = $database::table('asignatura')->where('GradoId', $_GET['id'])->get();


$grupos = $database::table('profesor')
    ->join('grupos', 'profesor.ProfesorId', '=', 'grupos.ProfesorId')
    ->where('GradoId', $_GET['id'])->get();

var_dump($database::table('grados')->get());
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle grupo</title>
    <link rel="stylesheet" href="http://localhost/escuela/app/src/css/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="text-center mt-3">Detalle del grado</h3>
        <div class="text-right">
            <a href="index.php" class="btn btn-danger text-right">Regresar al dashboard</a>
        </div>

        <h4 class="mb-3">Grupos en el grado: <?php echo $_GET['id']; ?></h4>

        <div class="d-flex">
            <?php
            foreach($grupos AS $item){
                echo'<div class="card ml-2" style="width: 15rem;">';
                echo ' <div class="card-header">';
                echo '<b>Nombre: </b>'.$item->Valor;
                echo '<br> <b>Profesor: </b>'.$item->Nombre.' '.$item->Apellidos;
                echo'</div>';
                echo '  <div class="card-body">';
                echo '  <a href="#" class="btn btn-primary">Alumnos...</a>';
                echo '</div></div>';
            }
            ?>
        </div>
        <h4 class="mt-2 mb-2">Asignaturas asociadas al grado:</h4>
        <?php
            foreach($asignaturas AS $item){
                echo '<div class="alert alert-primary" role="alert">';
                echo '<b>Clave: </b>'.$item->AsignaturaId.'<b> Nombre: </b>'.$item->Nombre;
                echo '</div>';
            }
        ?>
    </div>
</body>

</html>