<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Individual;
// use App\Models\Param;

class IndividualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Individual::factory()
        ->count(1)
        // ->for(Param::factory())
        ->create();
    }
}
