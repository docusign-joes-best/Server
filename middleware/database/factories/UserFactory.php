<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName($gender = null),
            'lastName' => $this->faker->lastName,
            'email' => $this->faker->email(),
            'password' => $this->faker->password(), // password
            'isArcGisUser' => $this->faker->boolean(),
            'dateCreated' => date('Y-m-d H:i:s')
        ];
    }
}
