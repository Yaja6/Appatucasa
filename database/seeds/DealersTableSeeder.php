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

        //Crear 5 repartidores
        for ($i = 0; $i < 3; $i++) {
            Dealer::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'phone' => $faker->numberBetween(0,999999999)
            ]);
        }
    }
}
