<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $table = 'supervisores';

    protected $fillable = [
        'nombres', 'apellidos', 
        'activo','estado'
    ];

    protected $casts = [
        'activo' => 'boolean'
    ];
}
