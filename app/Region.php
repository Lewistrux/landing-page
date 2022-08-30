<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = "region";
    protected $fillable = ['regi_codigo', 'regi_nombre', 'regi_estado'];

    public $timestamps = false;

    // Relations
    public function provincias()
    {
        return $this->hasMany(Provincia::class);
    }

    public function distritos()
    {
        return $this->hasMany(Distrito::class);
    }

}
