<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer("year");
            $table->string("track");
            $table->string("audio_path");
            $table->string("filename");
            $table->time("duration");
            $table->unsignedBigInteger("album_id");
            $table->unsignedBigInteger("artist_id");
            $table->text("lyrics");
            $table->string("cover");
            $table->timestamps();

            $table->foreign('album_id')->references('id')->on('albums');
            $table->foreign('artist_id')->references('id')->on('artists');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
