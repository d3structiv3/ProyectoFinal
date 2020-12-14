<?php
include_once __DIR__ . '../../../vendor/autoload.php';
include_once __DIR__ . '../../database/database.php';

//error_reporting(E_ALL ^ E_NOTICE);

//administración se sesiones

session_start();


// Cerrar Sesión
if (isset($_GET['end'])) {
    session_unset();
    session_destroy();
    header('location:../index.php');
}


//Validar Inicio de sesión
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $database::table('usuarios')->where('Email', $email)->where('Clave', $password)->first();

    if ($query == null) {
        // no existe usuario

        $msj ="Usuario o clave incorrectas";
        header('location:../View/Login/login.php?msj='.$msj);
    } else {
        // valida el rol
        $rol_name=$database::table('roles')->where('RolId', $query->RolId)->first();
        $_SESSION['user_id']=$query->UsuarioId ;
        $_SESSION['rol']=$query->RolId;
        $_SESSION['rol_name'] = $rol_name->Nombre;
        switch ($query->RolId) {
            case '1':
                header('location:../View/Administrador/index.php');
                break;
            case '2':
                header('location:../View/Tutor/index.php');
                break;
            case '3':
                header('location:../View/Profesor/index.php');
                break;
            case '4':
                header('location:../View/Alumno/index.php');
                break;

            default:
        }
    }
}
