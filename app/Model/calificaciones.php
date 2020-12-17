<?php

use Illuminate\Database\Eloquent\Model;

class Calificaciones extends Model
{
    protected $table = 'calificaciones';

    protected $fillable = [
        'AsignaturaId',
        'AlumnoId',
        'Calificacion',
    ];
}