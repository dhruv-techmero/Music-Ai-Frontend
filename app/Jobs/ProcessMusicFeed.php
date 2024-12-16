<?php

namespace App\Jobs;

use App\Models\Music;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\Website\SongController;
use App\Models\Song;

class ProcessMusicFeed implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $songId;
        protected $accountId;
        protected $token;
    public function __construct($songId, $accountId,$token)
    {
        $this->songId = $songId;
        $this->accountId = $accountId;
        $this->token = $token;
    }

    public function handle(SongController $SongController)
    {
        $maxAttempts = 3;
        $attempt = 1;
       
        while ($attempt <= $maxAttempts) {
            try {
                $request = new \Illuminate\Http\Request();
                $request->merge([
                    'song_id' => $this->songId,
                    'account_id' => (int)$this->accountId,
                    'token' => $this->token
                ]);
                
                // Log request details
                \Log::debug("API Request attempt {$attempt}", [
                    'headers' => $request->headers->all(),
                    'parameters' => $request->all()
                ]);
                
                $response = $SongController->singleFeed($request);
                $data = json_decode($response->getContent(), true);
                
                if (isset($data['error'])) {
                    \Log::error('API returned error', ['error' => $data]);
                    throw new \Exception($data['message'] ?? 'Unknown API error');
                }
                
                // Check for actual MP3 URL before inserting into the database
                if (!empty($data['clips'][0]['audio_url'])) {
                $song =   Song::create([
                        'song_id' => $this->songId,
                        'user_id' => auth()->user()->id ?? 1,
                        'account_id' => (int)$this->accountId,
                        'title' => $data['clips'][0]['title'] ?? null,
                        'metadata' => $data['clips'][0] ?? [],
                        'audio_url' => $data['clips'][0]['audio_url'] ?? null,
                        'image_url' => $data['clips'][0]['image_url'] ?? null,
                        'video_url' => $data['clips'][0]['video_url'] ?? null,
                        'image_large_url' => $data['clips'][0]['image_large_url'] ?? null,
                    ]);
                    return $song; // Exit if successful
                }
                // If audio_url is not present, do not insert into the database
            } catch (\Exception $e) {
                if ($attempt === $maxAttempts) {
                    throw new \Exception("Failed to process music feed after {$maxAttempts} attempts: " . $e->getMessage());
                }
                
                sleep(5); // Wait 5 seconds before retrying
                $attempt++;
            }
        }
    }
} 