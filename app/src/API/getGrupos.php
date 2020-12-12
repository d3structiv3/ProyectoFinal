<?php 
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
$grupos = $database::table('grupos')->where('GradoId',$_POST['idgrado'])->get();

$cadena='<select id="grupo" name="grupo" class="form-control">';

foreach ($grupos as $item) {
    $cadena = $cadena.'<option value="' . $item->GrupoId . '">' . $item->Valor . '</option>';
}


echo  $cadena."</select>";
