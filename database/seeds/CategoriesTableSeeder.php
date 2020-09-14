<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //VACIAR TABLA
        Category::truncate();

        //faker para llenar tabla
        $faker = \Faker\Factory::create();

        //Crear 5 categorias
        for ($i = 0; $i < 3; $i++) {
            Category::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
            ]);
        }
    }
}
