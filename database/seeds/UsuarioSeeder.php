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
        $usuario->name = 'Administrador';
        $usuario->email = 'sistemasinjas@gmail.com';
        $usuario->password = bcrypt('DVVSystem');
        $usuario->save();
    }
}
