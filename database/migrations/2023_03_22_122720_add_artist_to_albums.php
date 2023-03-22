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
        Schema::table('albums', function (Blueprint $table) {
            //
            // $table->unsignedBigInteger("artist_id");
            $table->foreign("artist_id")->references("id")->on("artists");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('albums', function (Blueprint $table) {
            //
            // $table->dropForeign("artist_id");
            $table->dropColumn("artist_id");
        });
    }
};
