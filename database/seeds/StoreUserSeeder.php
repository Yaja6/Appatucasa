<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get array of id

        $userIds = App\User::all();
        $storeIds = App\Store::all();
        // store_user
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                DB::table('store_user')->insert(
                    [
                        'store_id' => $storeIds[$i]->id,
                        'user_id' => $userIds[$j]->id,
                        'created_at' => $userIds[$j]->created_at,
                        'updated_at' => $userIds[$j]->updated_at
                    ]
                );
            }
        }
    }
}
