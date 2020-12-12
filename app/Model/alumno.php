<?php

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';

    protected $fillable = [
        'Nombre',
        'Apellidos',
        'GrupoId',
        'TutorId',
        'RolId',
    ];
}