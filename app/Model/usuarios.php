<?php

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'Email',
        'Clave',
        'RolId'
    ];
}
