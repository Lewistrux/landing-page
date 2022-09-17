<?php

use App\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area1 = new Area();
        $area1->nombre = 'CAMPO';
        $area1->activo = true;
        $area1->save();

        $area2 = new Area();
        $area2->nombre = 'CALL MASIVO';
        $area2->activo = true;
        $area2->save();

        $area3 = new Area();
        $area3->nombre = 'CORPORATIVO';
        $area3->activo = true;
        $area3->save();

        $area4 = new Area();
        $area4->nombre = 'CALL PERÚ';
        $area4->activo = true;
        $area4->save();
    }
}
