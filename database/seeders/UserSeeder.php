<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '0',
            'name' => 'user',
            'email' => 'user@test.com',
            'crypto_wallet_address' => '0xb794f5ea0ba39494ce839613fffba74279579268',
            'password' => '$2y$10$KgoULY70YY48tZcPTY2MRu8FSTfL5c75RfQkHI4HIbBscRl/saevq',
        ]);
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'sellerguy',
            'email' => 'sellerguy@test.com',
            'crypto_wallet_address' => '0xc494f5ea0ba39494ce839613fffba74279579268',
            'password' => '$2y$10$KgoULY70YY48tZcPTY2MRu8FSTfL5c75RfQkHI4HIbBscRl/saevq',
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'name' => 'sellerguy2',
            'email' => 'sellerguy2@test.com',
            'crypto_wallet_address' => '0xc994f5ea0ba39494ce839613fffba74279579268',
            'password' => '$2y$10$KgoULY70YY48tZcPTY2MRu8FSTfL5c75RfQkHI4HIbBscRl/saevq',
        ]);
    }
}
