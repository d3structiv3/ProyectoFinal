<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
include_once '../../Model/grupo.php';


switch ($_POST['operacion']) {
    case 'addgrupo':
        # code...
        echo "nuevo grupo";
        Grupo::create([
            'Valor'=>$_POST['valor'],
            'GradoId'=> $_POST['grado'],
            'ProfesorId'=>$_POST['profesor'],
        ]);

        break;

    default:
        # code...
        break;
}
