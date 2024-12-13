<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class SunoAiSong extends Model
{
    use HasFactory;
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
        'lyrics',
        
    ];

    protected $casts = [
        'metadata' => 'array',
    ];
    // public function download()
    // {
    //     $response = Http::get('https://suno-v2.chataiappgpt.workers.dev/explore');

    //     // Check if the response is successful
    //     if ($response->successful()) {
    //         $songs = $response->json() ?? [];
    

            
    //         if (is_array($songs)) {
    //             collect($songs)->take(1)->each(function ($data) { // `each` is better for iteration without transforming the collection
    //                 // \Log::info('Processing song:', ['song_data' => $data]); // Log the data for debugging
    //                 collect($data)->map(function($song){
    //                     collect($song['items'])->map(function($single_song){
    //                         // dd($single_song['id']);
    //                         dd();
    //                        if(!self::where('song_id',$single_song['id'])->exists()){
    //                         if(is_null($single_song['audio_url']))
    //                             continue;
                            
    //                         self::create([
    //                             'song_id' => $single_song['id'],
    //                             'title' => $single_song['title'] ?? null,
    //                             'account_id' => 3,
    //                             'metadata' => json_encode($single_song ?? []),
    //                             'audio_url' => $single_song['audio_url'] ?? null,
    //                             'image_url' => $single_song['image_url'] ?? null,
    //                             'video_url' => $single_song['video_url'] ?? null,
    //                             'image_large_url' => $single_song['image_large_url'] ?? null,
    //                             'lyrics' => $single_song['metadata']['prompt']
    //                         ]);

    //                         print_r($single_song['song_id']).PHP_EOL;
    //                        }
    //                     });
    //                 });
    //                 // Check if the song already exists in the database
                    
    //             });
    //         } else {
    //             // \Log::error('Expected an array of songs, but received: ', ['response' => $songs]);
    //         }
    //     } else {
    //         \Log::error('Failed to fetch songs, HTTP status: ' . $response->status());
    //     }
    // }
    public function download()
{
    $response = Http::get('https://suno-v2.chataiappgpt.workers.dev/explore');

    if ($response->successful()) {
        $songs = $response->json() ?? [];

        if (is_array($songs)) {
            collect($songs)->take(1)->each(function ($data) {
                if (is_array($data)) {
                    collect($data)->each(function ($song) {
                        collect($song['items'] ?? [])->each(function ($single_song) {
                            try {
                                if (empty($single_song['id']) || empty($single_song['audio_url'])) {
                                    return;
                                }

                                if (!self::where('song_id', $single_song['id'])->exists()) {
                                    self::create([
                                        'song_id' => $single_song['id'],
                                        'title' => $single_song['title'] ?? null,
                                        'account_id' => 3,
                                        'metadata' => json_encode($single_song),
                                        'audio_url' => $single_song['audio_url'],
                                        'image_url' => $single_song['image_url'] ?? null,
                                        'video_url' => $single_song['video_url'] ?? null,
                                        'image_large_url' => $single_song['image_large_url'] ?? null,
                                        'lyrics' => $single_song['metadata']['prompt'] ?? null
                                    ]);
                                    \Log::info('Song created', ['song_id' => $single_song['id']]);
                                }
                            } catch (\Exception $e) {
                                \Log::error('Error processing song: ' . $e->getMessage(), ['song' => $single_song]);
                            }
                        });
                    });
                } else {
                    \Log::error('Expected array data but received:', ['response' => $data]);
                }
            });
        } else {
            \Log::error('Expected songs array but received:', ['response' => $songs]);
        }
    } else {
        \Log::error('Failed to fetch songs, HTTP status: ' . $response->status());
    }
}

}
