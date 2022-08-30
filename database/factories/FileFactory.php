<?php

namespace Database\Factories;

use App\Models\Item;
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
            'item_id' => function () {
                return Item::all()->random();
            },
            'name' => $this->faker->word,
            'description' => '',
            'url' => storage_path() . '\\items\\' .  Str::random(10) . '.jpg'
        ];
    }
}
