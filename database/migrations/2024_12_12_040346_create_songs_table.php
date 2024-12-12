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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
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

            // Flags and counts
            $table->boolean('is_liked')->default(false);
            $table->boolean('is_trashed')->default(false);
            $table->boolean('is_public')->default(false);
            $table->integer('play_count')->default(0);
            $table->integer('upvote_count')->default(0);

            // Download tracking
            $table->boolean('audio_downloaded')->default(false);
            $table->boolean('video_downloaded')->default(false);
            $table->boolean('image_downloaded')->default(false);
            $table->boolean('large_image_downloaded')->default(false);

            // Local file paths
            $table->string('local_audio_path')->nullable();
            $table->string('local_video_path')->nullable();
            $table->string('local_image_path')->nullable();
            $table->string('local_large_image_path')->nullable();

            // Timestamps and download tracking
            $table->timestamp('last_download_attempt')->nullable();
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
        Schema::dropIfExists('songs');
    }
};
