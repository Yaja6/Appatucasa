<?php

use App\Feedback;
use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //VACIAR TABLA
        Feedback::truncate();

        //faker para llenar tabla
        $faker = \Faker\Factory::create();

        //obtengo ventas
        $sales = App\Sale::all();

        //Crear feedback
        for ($i = 0; $i < 6; $i++) {
            Feedback::create([
                'text' => $faker->text,
                'value' => $faker->numberBetween(1, 5),
                'sale_id' => $faker->numberBetween(1,50),
            ]);
        }
    }
}
