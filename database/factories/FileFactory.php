<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => function () {
                return Post::all()->random();
            },
            'name' => $this->faker->word,
            'description' => '',
            'url' => storage_path() . '\\posts\\' .  Str::random(10) . '.jpg'
        ];
    }
}
