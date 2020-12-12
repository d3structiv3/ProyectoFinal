<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
include_once '../../Model/alumno.php';


Alumno::create([
    'Nombre' => $_POST['nombre'],
    'Apellidos' => $_POST['apellidos'],
    'GrupoId' => $_POST['grupo'],
    'TutorId' => $_POST['idtutor'],
    'RolId' => $_POST['rol'],
]);
header('Location:../../View/Administrador/index.php');