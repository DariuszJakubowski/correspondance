<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JrwaCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'class_number' => $this->faker->randomElement(['0100', '0110', '0120']),
            'jrwa_category_version_id' => 1
        ];
    }
}
