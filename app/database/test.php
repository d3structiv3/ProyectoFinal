<?php

include_once '../../vendor/autoload.php';
include_once 'database.php';
include_once '../Model/roles.php';
$query = $database::table('usuarios')->where('Email', 'mxdestructive@gmail.com')->where('Clave', '123456')->first();   
 $rol_name=$database::table('roles')->where('RolId', $query->RolId)->first();
 var_dump($rol_name->Nombre);



?>


   