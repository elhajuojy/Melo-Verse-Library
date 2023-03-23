<?php

namespace Database\Seeders;

use App\Models\GenreSong;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;

class GenreSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        GenreSong::factory(100)->create();
    }
}
