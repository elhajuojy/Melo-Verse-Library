<?php

namespace Database\Factories;

use App\Models\Song;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
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
            'body' => $this->faker->paragraph(3),
            'user_id' => User::factory(),
            "song_id"=> Song::factory()
        ];
    }
}
