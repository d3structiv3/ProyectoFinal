<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
include_once '../../Model/calificaciones.php';


echo $_POST['id_alumno'];
echo $_POST['grado'];
echo "<br>";
$asignaturas = $database::table('asignatura')
    ->where('GradoId', $_POST['grado'])
    ->get();
echo 'Calificacion: ' . $_POST['1'] . '<br>';
foreach ($asignaturas as $item) {
    Calificaciones::create([
        'AsignaturaId' => $item->AsignaturaId,
        'AlumnoId' => $_POST['id_alumno'],
        'Calificacion' => $_POST[$item->AsignaturaId],
    ]);
    echo 'Id: ' . $item->AsignaturaId . ' Calificacion: ' . $_POST[$item->AsignaturaId] . '<br>';
}
header('location:../../View/Profesor/index.php');