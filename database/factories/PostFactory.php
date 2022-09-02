<?php

namespace Database\Factories;

use App\Models\JrwaCategory;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
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
            'incoming' => $this->faker->randomElement([1, 0]),
            'format' => $this->faker->randomElement(['email', 'letter']),
            'jrwa_category_id' => function () {
                return  JrwaCategory::all()->random();
            },
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
