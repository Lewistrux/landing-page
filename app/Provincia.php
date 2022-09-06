<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincia';

    protected $primaryKey = 'prov_ID';

    protected $fillable = [
        'prov_codigo', 'prov_nombre', 'prov_regionID','prov_estado'
    ];

    public $timestamps = false;

    // Relations
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function distritos()
    {
        return $this->hasMany(Distrito::class);
    }
}
