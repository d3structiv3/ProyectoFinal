<?php

use Illuminate\Database\Eloquent\Model;

class Tutor  extends Model
{
    protected $table = 'tutor';

    protected $fillable = [
        'Nombre',
        'Telefono',
        'UsuarioId',
    ];
}
