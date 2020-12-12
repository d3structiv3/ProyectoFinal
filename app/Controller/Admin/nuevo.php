<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
include_once '../../Model/tutor.php';
include_once '../../Model/usuarios.php';
include_once '../../Model/prefesor.php';

$rol = $_POST['rol'];

Usuarios::create([
    'Email' => $_POST['correo'],
    'Clave' => $_POST['clave'],
    'RolId' => $rol
]);

//$user = $database::table('usuarios')->where('Email', $_POST['correo'])->first();
//$id_usr = $user->UsuarioId;

switch ($rol) {
    case '1':
        
        echo "Admin";
        header('Location:../../View/Administrador/index.php');
        break;
    case '2':
        Tutor::create([
            'Nombre' => $_POST['nombre'],
            'Telefono' => $_POST['telefono'],
            'UsuarioId' => $id_usr,
        ]);
        header('Location:../../View/Administrador/index.php');
        break;
    case '3':
        echo "Profesor";
        Profesor::create([
            'Nombre' => $_POST['nombre'],
            'Apellidos' => $_POST['apellidos'],
            'Profesion' => $_POST['profesion'],
            'UsuarioId' => $id_usr,
        ]);
        header('Location:../../View/Administrador/index.php');
        break;
    case '4':
        echo "Alumno";
        header('Location:../../View/Administrador/index.php');
        break;

    case 'grupo':
        echo "Nuevo grupo";
        break;


    default:
        # code...
        header('Location:../../View/Administrador/index.php');
        break;
}
