<?php

use App\Asesor;
use Illuminate\Database\Seeder;

class AsesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supervisor1 = new Asesor();
        $supervisor1->nombres = 'ASESOR';
        $supervisor1->apellidos = 'PRUEBA';
        $supervisor1->supervisor_id = 1;
        $supervisor1->area_id = 1;
        $supervisor1->estado = 'ACTIVO';
        $supervisor1->activo = true;
        $supervisor1->save();

    }
}
