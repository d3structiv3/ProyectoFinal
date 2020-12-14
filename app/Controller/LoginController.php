<?php
include_once __DIR__ . '../../../vendor/autoload.php';
include_once __DIR__ . '../../database/database.php';

//error_reporting(E_ALL ^ E_NOTICE);

//administración se sesiones

session_start();



if (isset($_SESSION[$query = $database::table('roles')->value('RolId')])) {
    var_dump($query);
    switch ($query) {
        case '1':
            header('location:../View/Administrador/index.php');
            $query = $database::table('roles')->where('RolId', '1')->value('Nombre');
            break;
        case '2':
            header('location:../View/Tutor/index.php');
            $query = $database::table('roles')->where('RolId', '2')->value('Nombre');
            break;
        case '3':
            header('location:../View/Profesor/index.php');
            $query = $database::table('roles')->where('RolId', '3')->value('Nombre');
            break;
        case '4':
            header('location:../View/Alumno/index.php');
            $query = $database::table('roles')->where('RolId', '4')->value('Nombre');
            break;

        default:
    }
}






// Cerrar Sesión
if (isset($_GET['cerrar_sesion'])) {
    session_unset();

    session_destroy();
}


//Validar Inicio de sesión
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $database::table('usuarios')->where('Email', $email)->where('Clave', $password)->first();

    if ($query == null) {
        // no existe usuario
        echo "<script>;
         alert('Usuario o Contraseña incorrectos');  
     window.location.href='http://localhost/escuela/app/index.php'; 
</script>";
        header('Refresh:5; url= ../View/Login/login.php');
        echo '<div class="alert alert-danger" role="alert" >Usuario o Contraeña incorrectos <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
    } else {
        // valida el rol

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
