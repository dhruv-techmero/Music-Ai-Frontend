<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Music extends Model
{
    protected $fillable = [
        'song_id',
        'account_id',
        'audio_url',
        'video_url',
        'image_url',
        'image_large_url',
        'major_model_version',
        'model_name',
        'metadata',
        'is_liked',
        'is_trashed',
        'created_at',
        'status',
        'title',
        'play_count',
        'upvote_count',
        'is_public',
        'audio_downloaded',
        'video_downloaded',
        'image_downloaded',
        'large_image_downloaded',
        'local_audio_path',
        'local_video_path',
        'local_image_path',
        'local_large_image_path',
        'last_download_attempt'
    ];

    protected $casts = [
        'metadata' => 'array',
        'is_liked' => 'boolean',
        'is_trashed' => 'boolean',
        'is_public' => 'boolean',
        'play_count' => 'integer',
        'upvote_count' => 'integer',
        'created_at' => 'datetime',
        'audio_downloaded' => 'boolean',
        'video_downloaded' => 'boolean',
        'image_downloaded' => 'boolean',
        'large_image_downloaded' => 'boolean',
        'last_download_attempt' => 'datetime'
    ];

    public function downloadFiles()
    {
        $this->last_download_attempt = now();
        $songFolder = "songs/{$this->song_id}";
        $results = [];

        // Download audio if not already downloaded
        if (!$this->audio_downloaded && $this->audio_url) {
            $audioResult = $this->downloadFile($this->audio_url, "{$songFolder}/audio", 'mp3');
            if ($audioResult['status'] === 'success') {
                $this->audio_downloaded = true;
                $this->local_audio_path = $audioResult['path'];
            }
            $results['audio'] = $audioResult;
        }

        // Download video if not already downloaded
        if (!$this->video_downloaded && $this->video_url) {
            $videoResult = $this->downloadFile($this->video_url, "{$songFolder}/video", 'mp4');
            if ($videoResult['status'] === 'success') {
                $this->video_downloaded = true;
                $this->local_video_path = $videoResult['path'];
            }
            $results['video'] = $videoResult;
        }

        // Download image if not already downloaded
        if (!$this->image_downloaded && $this->image_url) {
            $imageResult = $this->downloadFile($this->image_url, "{$songFolder}/images", 'jpg');
            if ($imageResult['status'] === 'success') {
                $this->image_downloaded = true;
                $this->local_image_path = $imageResult['path'];
            }
            $results['image'] = $imageResult;
        }

        // Download large image if not already downloaded
        if (!$this->large_image_downloaded && $this->image_large_url) {
            $largeImageResult = $this->downloadFile($this->image_large_url, "{$songFolder}/images", 'jpg', 'large_');
            if ($largeImageResult['status'] === 'success') {
                $this->large_image_downloaded = true;
                $this->local_large_image_path = $largeImageResult['path'];
            }
            $results['large_image'] = $largeImageResult;
        }

        $this->save();
        return $results;
    }

    private function downloadFile($url, $folder, $extension, $prefix = '')
    {
        try {
            $fileName = $prefix . Str::random(20) . '.' . $extension;
            $fullPath = "{$folder}/{$fileName}";

            if (!Storage::exists($folder)) {
                Storage::makeDirectory($folder);
            }

            $response = Http::timeout(30)->get($url);

            if ($response->successful()) {
                Storage::put($fullPath, $response->body());
                return [
                    'status' => 'success',
                    'path' => $fullPath,
                    'url' => Storage::url($fullPath)
                ];
            }

            return [
                'status' => 'error',
                'message' => 'Failed to download file',
                'http_code' => $response->status()
            ];

        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }
    }
} 