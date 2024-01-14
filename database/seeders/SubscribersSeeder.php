<?php

namespace Database\Seeders;

use App\Models\Subscribers;
use Illuminate\Database\Seeder;

class SubscribersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscribers::factory()
        ->count(10)
        ->create();
    }
}
