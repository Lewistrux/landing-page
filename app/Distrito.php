<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'distrito';

    protected $primaryKey = 'dist_ID';

    protected $fillable = [
        'dist_codigo', 'dist_nombre', 'dist_provinciaID','dist_estado'
    ];

    public $timestamps = false;

    // Relations
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }

    public function direcciones()
    {
        return $this->hasMany(Direccion::class);
    }
}
