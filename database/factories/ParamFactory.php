<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Param>
 */
class ParamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone_number'=>$this->faker->phoneNumber,
            'country'=> $this->faker->country,
            'city'=> $this->faker->city,
            'street'=> $this->faker->streetName,
            'house_number'=> $this->faker->buildingNumber,
            'apartment_number'=> $this->faker->buildingNumber,
        ];
    }
}
