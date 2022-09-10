<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    protected $fillable = [
        'nombre', 'activo'
    ];

    protected $casts = [
        'activo' => 'boolean'
    ];
}
