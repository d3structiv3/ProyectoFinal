<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
session_start();

if ($_SESSION['rol_name'] != 'Profesor') {
    header('location:../../index.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4 class="text-center mt-5">Asignar calificiones</h4>
        <div class="text-right">
            <a href="index.php" class="btn btn-danger text-right mb-3">Regresar al dashboard</a>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <?php
                $query = $database::table('alumno')
                    ->where('AlumnoId', $_GET['id'])->first();
                $grado = $database::table('grupos')
                    ->where('GrupoId', $query->GrupoId)->first();

                $materias = $database::table('asignatura')
                    ->where('GradoId', $grado->GradoId)->get();

                ?>
                <form action="../../Controller/Profesor/calificar.php" method="POST">
                    <h4>Calificacion obtenida en:</h4>
                    <input type="hidden" name="id_alumno" value="<?php echo $_GET['id'];?>">
                    <input type="hidden" name="grado" value="<?php echo $grado->GradoId;?>">
                    <?php
                    foreach ($materias as $item) {
                        echo '<label for="asignatura" class="form-label mt-1">' . $item->Nombre . '</label>';
                        echo '<input type="number" class="form-control" aria-describedby="basic-addon3" name="' . $item->AsignaturaId . '">';
                    }
                    ?>
                    <input type="submit" class="btn btn-dark mt-2" value="Enviar">
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>