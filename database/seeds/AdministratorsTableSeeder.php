<?php

use App\Administrator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //VACIAR TABLA
        Administrator::truncate();

        //faker para llenar tabla
        $faker = \Faker\Factory::create();

        //password por defecto
        $password = Hash::make('123123');

        //Uusario por defecto para pruebas
        Administrator::create([
            'name' => 'admin',
            'lastname' => 'adminlastname',
            'email' => 'admin@prueba.com',
            'password' => $password
        ]);

        //Crear 5 usuarios administradores
        for ($i = 0; $i < 5; $i++) {
            Administrator::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'password' => $password
            ]);
        }
    }
}
