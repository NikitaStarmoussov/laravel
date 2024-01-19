<?php

namespace Database\Factories;

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
}
