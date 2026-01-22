<?php

namespace Database\Seeders;

use App\Models\UserBuy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserBuySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserBuy::factory(100)->create();
        
    }
}
