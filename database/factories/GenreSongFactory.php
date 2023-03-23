<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GenreSong>
 */
class GenreSongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'genre_id' => fake()->numberBetween(1, 100),
            'song_id' => fake()->numberBetween(1, 10),
        ];
    }
}
