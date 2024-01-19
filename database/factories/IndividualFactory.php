<?php

namespace Database\Factories;

use App\Models\Individual;
use App\Models\Param;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Individual>
 */
class IndividualFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registration_type' => 'Individual',
            'last_name' => $this->faker->lastName ,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Individual $individual) {
            $individual->params()->save(Param::factory()->make());
        });
    }
}
