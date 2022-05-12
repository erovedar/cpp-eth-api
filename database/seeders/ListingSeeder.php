<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listings')->insert([
            'id' => '0',
            'seller_id' => '1',
            'title' => 'YMO NFT',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
            'picture' => 'https://www.rollingstone.com/wp-content/uploads/2018/06/rs-183629-84913661.jpg',
            'price' => '0.4',
        ]);
        DB::table('listings')->insert([
            'id' => '1',
            'seller_id' => '1',
            'title' => 'Throbbing Gristle NFT',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
            'picture' => 'https://thevinylfactory.com/wp-content/uploads/2015/05/tgcover21.png',
            'price' => '0.2',
        ]);
        DB::table('listings')->insert([
            'id' => '2',
            'seller_id' => '2',
            'title' => 'Other YMO NFT',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ',
            'picture' => 'https://musiconcd.eu/wp-content/uploads/2017/10/8718627222331.jpg',
            'price' => '0.6',
        ]);
    }
}
