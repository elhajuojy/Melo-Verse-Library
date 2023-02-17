<?php

namespace Database\Factories;

use App\Models\Song;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rate>
 */
class RateFactory extends Factory
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
            "song_id"=>fake()->numberBetween(1,10),
            "user_id"=>fake()->numberBetween(1,10),
            "rate"=>fake()->numberBetween(0,5)
        ];
    }
}
