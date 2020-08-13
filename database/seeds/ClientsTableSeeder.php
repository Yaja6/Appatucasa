<?php

use App\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //VACIAR TABLA
        Client::truncate();

        //faker para llenar tabla
        $faker = \Faker\Factory::create();

        //password por defecto
        $password = Hash::make('123123');

        //Usario por defecto para pruebas
        Client::create([
            'name' => 'client',
            'lastname'=>'lastnc',
            'email' => 'client@prueba.com',
            'address'=>'quito',
            'password' => $password
        ]);

        //Crear 5 usuarios clientes
        for ($i = 0; $i < 5; $i++) {
            Client::create([
                'name' => $faker->name,
                'lastname'=>$faker->lastName,
                'email' => $faker->email,
                'address'=>$faker->address,
                'password' => $password
            ]);
        }
    }
}
