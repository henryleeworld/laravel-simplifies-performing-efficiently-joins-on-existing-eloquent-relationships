<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create(['id' => 1, 'user_id' => 1, 'city_id' => 1, 'type' => 'seller']);
        Profile::create(['id' => 2, 'user_id' => 1, 'city_id' => 2, 'type' => 'buyer']);
    }
}
