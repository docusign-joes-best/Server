<?php

namespace Database\Factories;

use App\Models\Modification;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ModificationFactory extends Factory
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
            'statusID' => rand(1,2),
            'proposerUserID' => rand(1,30),
            'vectorPolygon' => '{"name": "keenan"}',
            'dateProposed' => date('Y-m-d H:i:s')
        ];
    }
}




