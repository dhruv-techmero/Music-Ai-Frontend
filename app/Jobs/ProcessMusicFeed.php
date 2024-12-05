<?php

namespace App\Jobs;

use App\Models\Music;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\MusicController;

class ProcessMusicFeed implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $songId;
    protected $accountId;

    public function __construct($songId, $accountId)
    {
        $this->songId = $songId;
        $this->accountId = $accountId;
    }

    public function handle(MusicController $musicController)
    {
        $maxAttempts = 3;
        $attempt = 1;
        
        while ($attempt <= $maxAttempts) {
            $response = $musicController->fetchFeed($this->songId, $this->accountId);
            $data = json_decode($response->getContent(), true);

                Music::create([
                    'song_id' => $this->songId,
                    'account_id' => $this->accountId,
                    'title' => $data['clips'][0]['title'] ?? null,
                    'metadata' => json_encode($data['clips'][0])
                ]);
                return; // Exit if successful
            
            $attempt++;
            if ($attempt <= $maxAttempts) {
                sleep(5); // Wait 5 seconds before retrying
            }
        }
        
        throw new \Exception("Failed to find music URL after {$maxAttempts} attempts");
    }
} 