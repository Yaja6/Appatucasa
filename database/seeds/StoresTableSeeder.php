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

        //faker para llenar tabla
        $faker = \Faker\Factory::create();

        //Crear 1 local por cada administrador
        for ($i = 0; $i < 6; $i++) {
            Store::create([
                'name' => $faker->name,
                'location' => $faker->sentence,
            ]);
        }
    }
}
