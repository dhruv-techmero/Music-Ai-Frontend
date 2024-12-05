<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessMusicFeed;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MusicController extends Controller
{
    private function refreshAndGetToken()
    {
        $response = Http::post('https://aisuno.chataiappgpt.workers.dev/token');
        $token = $response->json()['access_token'];
        session(['access_token' => $token]);
        return $token;
    }
    public function lyricalMode(Request $request)
    {
        try {
            // Validate webhook URL if provided


            $token = $this->refreshAndGetToken();
            // return $token;

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token
            ])->post('https://aisuno.chataiappgpt.workers.dev/ex/music_api/generate', [
                'mv' => 'chirp-v3-5',
                'prompt' => $request->input('prompt'),
                'tags' => $request->input('tags'),
                'title' => $request->input('title'),
                'make_instrumental' => $request->input('make_instrumental', false),
            ]);
            Log::info('API Response:', ['response' => $response->body()]);

            // return $response->json();
            $songId = $response->json()['clips'][0]['id'];
            $accountId = $response->json()['account_id'];

            // Dispatch job to handle feed fetching and database storage
            ProcessMusicFeed::dispatch($songId, $accountId);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to generate music',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function singlePromptMode(Request $request)
    {
        try {
            // Validate request
            // $validated = $request->validate([
            //     'gpt_description_prompt' => 'required|string'
            // ]);
            // return response()->json($request->all());
            $token = $this->refreshAndGetToken();

            // Prepare request data matching lyricalMode format
            // $requestData = [
            //     'mv' => 'chirp-v3-5',
            //     'prompt' => $validated['gpt_description_prompt'],
            //     'make_instrumental' => false
            // ];

            // Log the request
            // Log::info('API Request Details:', [
            //     'raw_input' => $request->all(),
            //     'validated_data' => $validated,
            //     'final_request_data' => $requestData,
            // ]);
            
            // Make API call with authorization header
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ])->post('https://aisuno.chataiappgpt.workers.dev/ex/music_api/generate/description-mode', [
                'gpt_description_prompt' => 'test',
                'instrumental' => false,
                'model' => 'chirp-v3-5',
                'voice' => 'vocal female'
            ]);
            
            // Detailed response logging
            // Log::info('API Response Details:', [
            //     'status' => $response->status(),
            //     'headers' => $response->headers(),
            //     'body' => $response->body(),
            //     'request_data' => $requestData
            // ]);
            
            if (!$response->successful()) {
                throw new \Exception('API request failed: ' . $response->body());
            }

            $songId = $response->json()['clips'][0]['id'];
            $accountId = $response->json()['account_id'];

            // Dispatch job to handle feed fetching and database storage
            ProcessMusicFeed::dispatch($songId, $accountId);
            
            return response()->json([
                'success' => true,
                'data' => $response->json()
            ]);
            
        } catch (\Exception $e) {
            Log::error('Music generation failed:', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Failed to generate music',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function fetchFeed($songId = null, $accountId = null)
    {

        try {
            $token = $this->refreshAndGetToken();

            $feedId = $songId ?? 'd02c5618-8b34-43f3-8bc6-6cf6437e2fe7,9d954179-be1d-4dbe-97fd-22a9f7a99446';
            $idx = $accountId ?? 16;

            Log::info('Fetching feed with:', ['feedId' => $feedId, 'idx' => $idx]);

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token
            ])->get("https://aisuno.chataiappgpt.workers.dev/ex/music_api/v2/feed/{$feedId}", [
                'idx' => $idx
            ]);


            if ($response->successful()) {
                return response()->json($response->json());
            } else {
                Log::error('Feed API error:', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
                return response()->json([
                    'error' => 'Feed API returned an error',
                    'status' => $response->status()
                ], $response->status());
            }
        } catch (\Exception $e) {
            Log::error('Exception in fetchFeed:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'error' => 'Failed to fetch feed data',
                'message' => $e->getMessage()
            ], 500);
        }
    }


    public function song(Request $request)
    {
        $songId = $request->input('song_id');
        // $accountId = $request->input('account_id');
        try {
            $music = Music::where('song_id', $songId)->whereNotNull('audio_url')->first();

            if (!$music) {
                return response()->json(['message' => 'Music not found', 'status' => 'error'], 404);
            }
            return response()->json(['data' => $music, 'status' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage(), 'status' => 'error'], 500);
        }
    }
}
