<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //VACIAR TABLA
        Order::truncate();

        //faker para llenar tabla
        $faker = \Faker\Factory::create();

        //Crear pedidos
        for ($i = 0; $i < 5; $i++) {
            Order::create([
                'time' => $faker->time('H:i:s','now'),
                'quantity' => $faker->numberBetween(1, 50),
                'finalprice' => $faker->randomFloat( NULL,  0,  2),
            ]);
        }
    }
}
