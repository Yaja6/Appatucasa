<?php

use App\Offer;
use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //VACIAR TABLA
        Offer::truncate();

        //faker para llenar tabla
        $faker = \Faker\Factory::create();

        //Crear ofertas
        for ($i = 0; $i < 5; $i++) {
            Offer::create([
                'description' => $faker->sentence
            ]);
        }
    }
}
