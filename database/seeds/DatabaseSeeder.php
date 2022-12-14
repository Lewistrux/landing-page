<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(SupervisorSeeder::class);
        $this->call(AsesorSeeder::class);
    }
}
