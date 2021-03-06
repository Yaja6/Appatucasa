<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //VACIAR TABLA
        Product::truncate();

        //faker para llenar tabla
        $faker = \Faker\Factory::create();

        //Crear productos
        for ($i=0; $i<=50 ; $i++) {
             Product::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 2),
                'stock' => $faker->numberBetween(1, 20),
                'store_id' => $faker->numberBetween(1,10),
                'offer_id' => $faker->numberBetween(1,3),
                'order_id' => $faker->numberBetween(1,3),
                'category_id'=>$faker->numberBetween(1,3),

            ]);

        }
    }
}
