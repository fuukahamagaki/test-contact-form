<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' => $this->faker->randomElement($array=['男性','女性']),
            'email' => $this->faker->safeEmail,
            'postcode' => $this->faker->regexify('[1-9]{3}-[0-9]{4}'),
            'address' => $this->faker->address,
            'building_name' => $this->faker->streetAddress,
            'opinion' => $this->faker->realText,
        ];
    }
}
