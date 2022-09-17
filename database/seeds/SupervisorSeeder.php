<?php

use App\Supervisor;
use Illuminate\Database\Seeder;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supervisor2 = new Supervisor();
        $supervisor2->nombres = 'JESUS';
        $supervisor2->apellidos = 'MENDOZA GONZALES';
        $supervisor2->area_id = 1;
        $supervisor2->estado = 'FIJA Y MOVIL';
        $supervisor2->activo = true;
        $supervisor2->save();
        
        $supervisor1 = new Supervisor();
        $supervisor1->nombres = 'CARLO ANTONI ALEN';
        $supervisor1->apellidos = 'NARRO ARAUJO';
        $supervisor1->area_id = 2;
        $supervisor1->estado = 'FIJA Y MOVIL';
        $supervisor1->activo = true;
        $supervisor1->save();

        $supervisor3 = new Supervisor();
        $supervisor3->nombres = 'LUIS';
        $supervisor3->apellidos = 'PALOMINO JONDEC';
        $supervisor3->area_id = 3;
        $supervisor3->estado = 'EMPRESAS';
        $supervisor3->activo = true;
        $supervisor3->save();

        $supervisor1 = new Supervisor();
        $supervisor1->nombres = 'ALEJANDRO';
        $supervisor1->apellidos = 'POLO BRICEÑO';
        $supervisor1->area_id = 4;
        $supervisor1->estado = 'FIJA Y MOVIL';
        $supervisor1->activo = true;
        $supervisor1->save();
    }
}
