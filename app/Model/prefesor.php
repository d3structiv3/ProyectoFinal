<?php

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesor';

    protected $fillable = [
        'Nombre',
        'Apellidos',
        'Profesion',
        'UsuarioId',
    ];
}
