<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignaciones';

    protected $fillable = [
        'cliente_id', 'supervisor_id', 'area_id','created_by','updated_by',
        'activo','estado'
    ];

    protected $casts = [
        'activo' => 'boolean'
    ];
}
