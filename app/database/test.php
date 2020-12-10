<?php

include_once '../../vendor/autoload.php';
include_once 'database.php';
include_once '../Model/roles.php';




// $email = 'ejemplo@ejemplo.com';
// $clave = '54321';

// $rol = 'Tutor';

// Roles::create([
//     'Nombre' => $rol,
// ]);
// $usuario = $database::table('roles')->get();
// var_dump($usuario);
?>

<tr>
    <?php
    $profesores = $database::table('profesor')->get();

    foreach ($profesores as $item) { ?>
        <td><?php echo $item->Nombre;?></td>
        <td><?php echo $item->ProfesorId;
        } ?></td>
</tr>