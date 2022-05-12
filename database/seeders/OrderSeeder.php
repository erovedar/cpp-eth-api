<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'id' => '0',
            'listing_id' => '0',
            'seller_id' => '1',
            'buyer_id' => '0',
            'price' => '0.4',
        ]);
        DB::table('orders')->insert([
            'id' => '1',
            'listing_id' => '2',
            'seller_id' => '2',
            'buyer_id' => '0',
            'price' => '0.6',
        ]);
        DB::table('orders')->insert([
            'id' => '2',
            'listing_id' => '1',
            'seller_id' => '1',
            'buyer_id' => '2',
            'price' => '0.6',
        ]);
    }
}
