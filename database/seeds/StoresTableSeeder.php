<?php

use App\Store;
use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //VACIAR TABLA
        Store::truncate();

        $faker = \Faker\Factory::create();
        // Obtenemos la lista de todos los usuarios creados e
        // iteramos sobre cada uno y simulamos un inicio de
        // sesión con cada uno para crear tiendas en su nombre

        $users = App\User::all();
        foreach ($users as $user) {
            // iniciamos sesión con este usuario
            JWTAuth::attempt(['email' => $user->email, 'password' => '123123']);

            // Por cada usuario creamos 1 tienda

            $num_store = 1;
            for ($j = 0; $j < $num_store; $j++) {
                Store::create([
                    'name' => $faker->sentence,
                    'location' => $faker->address,

                ]);
            }
        }
    }
}
