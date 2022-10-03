<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    protected $table = 'postulantes';

    protected $fillable = [
        'nombres', 'apellidos', 'puesto','area',
        'numero', 'nombre_archivo', 'ruta','activo','estado'
    ];

    protected $casts = [
        'activo' => 'boolean'
    ];
}
