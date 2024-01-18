<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscribers>
 */
class SubscribersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $registrationType = $this->faker->randomElement(['i','b']);
        return [
            'phone_number'=>$this->faker->phoneNumber,
            'registration_type'=> $registrationType,
            'last_name' => $registrationType === 'i'? $this->faker->lastName : null,
            'first_name' => $registrationType === 'i'?  $this->faker->firstName: null,
            'middle_name' => $registrationType === 'i'?  $this->faker->firstName: null,
            'organization_name' => $registrationType === 'b'? $this->faker->company: null,
            'department_name' => $registrationType === 'b'? $this->faker->company: null,
            'country'=> $this->faker->country,
            'city'=> $this->faker->city,
            'street'=> $this->faker->streetName,
            'house_number'=> $this->faker->buildingNumber,
            'apartment_number'=> $this->faker->buildingNumber,
        ];
    }
}
