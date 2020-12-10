<?php

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos';

    protected $fillable = [
        'Valor',
        'GradoId',
        'ProfesorId',
    ];
}
