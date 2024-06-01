<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create(['id' => 1, 'name' => __('Taiwan')]);
        Country::create(['id' => 2, 'name' => __('United States of America')]);
    }
}
