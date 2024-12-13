<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suno_ai_songs', function (Blueprint $table) {
            $table->id();
            $table->string('song_id')->unique()->nullable();
            $table->string('account_id')->nullable();

            // URLs
            $table->text('audio_url')->nullable();
            $table->text('video_url')->nullable();
            $table->text('image_url')->nullable();
            $table->text('image_large_url')->nullable();

            // Metadata
            $table->string('major_model_version')->nullable();
            $table->string('model_name')->nullable();
            $table->json('metadata')->nullable();
            $table->string('status')->nullable();
            $table->string('title')->nullable();
            $table->text('lyrics')->nullable();

      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suno_ai_songs');
    }
};
