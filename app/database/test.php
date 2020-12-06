<?php

include_once '../../vendor/autoload.php';
include_once 'database.php';
include_once '../Model/roles.php';


// $email = 'ejemplo@ejemplo.com';
// $clave = '54321';

$rol = 'Tutor';

Roles::create([
    'Nombre' => $rol,
]);
$usuario = $database::table('roles')->get();
var_dump($usuario);
