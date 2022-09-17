<?php

use App\User;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = 'SystemDV';
        $usuario->nombres = 'DIEGO';
        $usuario->apellidos = 'VERA VILLANUEVA';
        $usuario->email = 'sistemasinjas@gmail.com';
        $usuario->password = bcrypt('DVVSystem');
        $usuario->save();

        $usuario2 = new User();
        $usuario2->name = 'MarketingAP';
        $usuario2->nombres = 'ANA PAULA';
        $usuario2->apellidos = 'OCHOA DIOSES';
        $usuario2->email = 'sistemasinjas@gmail.com';
        $usuario2->password = bcrypt('MarkAPOD');
        $usuario2->save();
    }
}
