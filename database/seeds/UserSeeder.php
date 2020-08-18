<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'nombre' => 'admin', 
        'apellido' => 'adminin',
        'telefono' => '75654895', 
        'email' => 'admin@gmail.com', 
        'password' => 123456, 
        'tipo' => 'administrativo', 
      ]);
    }
}
