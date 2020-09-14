<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call(UsersTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DealersTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(FeedbacksTableSeeder::class);
        Schema::enableForeignKeyConstraints();

    }
}
