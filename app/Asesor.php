<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    protected $table = 'asesores';

    protected $fillable = [
        'nombres', 'apellidos', 'supervisor_id','area_id',
        'activo','estado'
    ];

    protected $casts = [
        'activo' => 'boolean'
    ];
}
