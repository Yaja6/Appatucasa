<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdministratorsTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DealersTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(FeedbacksTableSeeder::class);
    }
}
