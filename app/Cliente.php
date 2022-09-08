<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'tipo_documento', 'documento', 'nombres', 'apellidos', 'departamento','distrito',
        'provincia', 'email', 'numero','area','tipo_servicio','plan',
        'activo','estado'
    ];

    protected $casts = [
        'activo' => 'boolean'
    ];
}
