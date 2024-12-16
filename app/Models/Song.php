<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Exception;

class Song extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
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
        'lyrics',
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
        'last_download_attempt',
        
    ];

    protected $casts = [
        'metadata' => 'object',
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
    public function users(){
        return $this->hasOne(User::class,'id','user_id');
    }
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


    public static function updateMp3()
    {
        $musicWithoutMp3Url = self::
            whereNotNull('audio_url')
            ->
            whereRaw('audio_url NOT LIKE "%.mp3"')
            ->get();

        foreach ($musicWithoutMp3Url as $audio) {
            try {
                // Get token
                $response = Http::get('https://suno-v2.chataiappgpt.workers.dev/token', [
                    'au' => null
                ]);
                
                if ($response->successful()) {
                    $tokenData = $response->json();
                    $token = $tokenData['jwt'] ?? null;

                    if ($token) {
                        $response = Http::withHeaders([
                            'Accept-Encoding' => 'gzip, deflate',
                            'Authorization' => 'Bearer ' . $token,
                            'Content-Type' => 'application/json',
                        ])
                        ->get('https://suno-v2.chataiappgpt.workers.dev/feed', [
                            'ids' => $audio->song_id
                        ]);
            
                        if ($response->successful()) {
                            $responseData = $response->json();
                            
                            // Check if clips exist and have data
                            if (!empty($responseData['clips']) && isset($responseData['clips'][0])) {
                                $clip = $responseData['clips'][0];
                                // dd($clip['metadata']['prompt']);
                                $updateData = [
                                    'audio_url' => $clip['audio_url'] ?? $audio->audio_url,
                                    'video_url' => $clip['video_url'] ?? $audio->video_url,
                                    'major_model_version' => $clip['major_model_version'] ?? $audio->major_model_version,
                                    'model_name' => $clip['model_name'] ?? $audio->model_name,
                                    'metadata' => $clip['metadata'] ?? $audio->metadata,
                                    'title' => $clip['title'] ?? $audio->title,
                                    'lyrics' => $clip['metadata'] ['prompt'] ?? $audio->prompt,
                                    'status' => $clip['status'] ?? $audio->status,
                                ];

                                // Update the audio record
                                $audio->update($updateData);

                                \Log::info("Updated song {$audio->song_id} with new URLs and metadata");
                            } else {
                                \Log::warning("No clips found for song ID: {$audio->song_id}");
                            }
                        } else {
                            \Log::error("Failed to fetch feed for song ID: {$audio->song_id}, Status: " . $response->status());
                        }
                    } else {
                        \Log::warning("No JWT token found for song ID: {$audio->song_id}");
                    }
                } else {
                    \Log::error("Failed to get token for song ID: {$audio->song_id}, Status: {$response->status()}");
                }
            } catch (\Exception $e) {
                \Log::error("Exception in updateMp3 for song ID {$audio->song_id}: " . $e->getMessage());
            }
        }
    }



    public static function insertSong($data, $accountId) {
        // Check if the user is authenticated
        $user_id = auth()->check() ? auth()->user()->id : 1; // Set user_id to null if not authenticated

        // Use updateOrCreate to avoid duplicate entry error
        $song = self::updateOrCreate(
            ['song_id' => $data['id']], // Condition to check for existing record
            [
                'user_id' => $user_id,
                'account_id' => (int) $accountId,
                'title' => $data['title'] ?? null,
                'metadata' => $data['metadata'] ?? [],
                'audio_url' => $data['audio_url'] ?? null,
                'image_url' => $data['image_url'] ?? null,
                'video_url' => $data['video_url'] ?? null,
                'image_large_url' => $data['image_large_url'] ?? null,
            ]
        );

        return $song;
    }


    public function convertJsonToObject()
    {
        self::get()->map(function ($song) {
            if (is_string($song->metadata)) {
                $decoded_object = json_decode($song->metadata);
                if ($decoded_object !== null) {
                    $song->metadata = $decoded_object;      
                    $song->save();
                }
            }
        });
    }
}
