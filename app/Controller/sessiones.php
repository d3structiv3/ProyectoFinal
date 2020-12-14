<?php 


class Sessions {
    function valsesion($valor,$capa){
        if($capa == 1){
            $carp='.';
        }else{
            $carp='../..';
        }
        switch ($valor) {
            case '1':
                header('location:'.$carp.'/View/Administrador/index.php');
                break;
            case '2':
                header('location:'.$carp.'/View/Tutor/index.php');
                break;
            case '3':
                header('location:'.$carp.'/View/Profesor/index.php');
                break;
            case '4':
                header('location:'.$carp.'/View/Alumno/index.php');
                break;
    
            default:
        }
    }
}