<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
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
            'title' => $this->faker->sentence(3),
            'year' => $this->faker->year(),
            'track' => $this->faker->randomNumber(2),
            'audio_path' => $this->faker->url(),
            'filename' => $this->faker->word() . '.mp3',
            'duration' => $this->faker->time('i:s'),
            'lyrics' => $this->faker->paragraph(1),
            'cover' => $this->faker->imageUrl(),
            "album_id"=>Album::factory(),
            "artist_id"=>Artist::factory()
        ];
    }
}


