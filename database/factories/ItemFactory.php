<?php

namespace Database\Factories;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->sentence(20),
            'priority' => $this->faker->numberBetween(1, 3),
            'type' => $this->faker->randomElement(['email', 'letter']),
            'thread_id' => function () {
                return Thread::all()->random();
            },
            'created_by' => function () {
                return User::all()->random();
            },
            'current_recipient' => function () {
                return User::all()->random();
            },
            'recipient' => function () {
                return User::all()->random();
            },

        ];
    }
}
