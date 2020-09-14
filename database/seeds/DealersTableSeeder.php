<?php

use App\Dealer;

use Illuminate\Database\Seeder;

class DealersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //VACIAR TABLA
        Dealer::truncate();

        //faker para llenar tabla
        $faker = \Faker\Factory::create();

        $users = App\User::all();
        foreach ($users as $user) {
            // iniciamos sesión con este usuario
            JWTAuth::attempt(['email' => $user->email, 'password' => '123123']);

            // Por cada usuario creamos 2 repartidores

            $num_dealers = 2;
            for ($j = 0; $j < $num_dealers; $j++) {
                Dealer::create([
                    'name' => $faker->name,
                    'lastname' => $faker->lastName,
                    'email' => $faker->email,
                    'phone' => $faker->numberBetween(0,999999999),
                    'user_id' => $user->id,

                ]);
            }
        }
    }
}
