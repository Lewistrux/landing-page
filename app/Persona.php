<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
        'tipo_documento', 'documento', 'nombre', 'apellidos', 'departamento','distrito',
        'provincia', 'email', 'numero',
        'activo','estado'
    ];

    protected $casts = [
        'activo' => 'boolean'
    ];
}
