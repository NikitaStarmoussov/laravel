<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Param;
use App\Models\Individual;

class ParamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Param::factory()
        ->count(100)
        ->for(Individual::factory())
        ->create();

        Param::factory()
        ->count(100)
        ->for(Business::factory())
        ->create();
    }
}
