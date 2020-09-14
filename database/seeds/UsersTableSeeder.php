<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create();
        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.
        $password = Hash::make('123123');
        User::create([
            'name' => 'cliente',
            'lastname' => 'Prueba',
            'email' => 'cliente@prueba.com',
            'address' => 'quito',
            'password' => $password,
        ]);
        // Generar algunos usuarios para nuestra aplicacion
        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'address' => $faker->address,
                'password' => $password,
            ]);

        }
    }
}
