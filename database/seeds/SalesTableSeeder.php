<?php

use App\Sale;
use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::truncate();

        //faker para llenar tabla
        $faker = \Faker\Factory::create();

        //obtengo tiendas


        //Crear ventas
        for ($i = 0; $i < 50; $i++) {
             Sale::create([
                'date' => $faker->dateTime,
                'store_id' => $faker->numberBetween(1,3),


            ]);

        }
    }
}
