<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Param;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'organization_name' => $this->faker->company,
            'department_name' => $this->faker->company,
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Business $business) {
            $business->params()->save(Param::factory()->make());
        });
    }
}
