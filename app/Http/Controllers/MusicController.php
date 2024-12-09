<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessMusicFeed;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Exception;
class MusicController extends Controller
{   public function __construct()
    {
        // Add CORS headers to all methods in this controller
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, x-csrf-token');
        header('Access-Control-Allow-Credentials: true');

    }
    public function getToken()
    {
        try {
            $response = Http::get('https://suno-v2.chataiappgpt.workers.dev/token', [
                'au' => null
            ]);

            if (!$response->successful()) {
                throw new Exception('Failed to get token');
            }

            return response()->json($response->json());
            
        } catch (Exception $e) {
            return response()->json([
                'error' => 'Failed to get token',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function lyricalMode(Request $request)
    {
        try {
            // Get token using the existing getToken method
            $tokenResponse = $this->getToken();
            $tokenData = json_decode($tokenResponse->getContent());
            $token = $tokenData->jwt ?? null;

            if (!$token) {
                throw new Exception('Failed to get valid token');
            }

            // Then make the main request with the token
            $response = Http::withHeaders([
                'Content-Type' => 'application/json; charset=utf-8',
                'Accept' => 'application/json',
                'Upload-Draft-Interop-Version' => '6',
                'Accept-Language' => 'en-US,en;q=0.9',
                'Accept-Encoding' => 'gzip, deflate',
                'X-Suno-Region' => 'US',
                'User-Agent' => 'suno/1 CFNetwork/1568.300.101 Darwin/24.2.0',
                'Upload-Complete' => '?1',
                'X-Suno-Client' => 'iOS 1.0.42-1',
                'Authorization' => 'Bearer ' . $token
            ])
            ->withBody(json_encode([
                'generation_type' => 'TEXT',
                'gpt_description_prompt' => $request->input('gpt_description_prompt', 'This is a some random song'),
                'make_instrumental' => false,
                'mv' => 'chirp-v3-5',
                'prompt' => $request->input('prompt', ''),
                'tags' => $request->input('tags', ''),
                'title' => $request->input('title', 'Using subscribed account'),
                'token' => null
            ]), 'application/json')
            ->post('https://suno-v2.chataiappgpt.workers.dev/generate');

            if (!$response->successful()) {
                throw new Exception('API request failed: ' . $response->body());
            }

            $responseData = $response->json();
            $songId = $responseData['clips'][0]['id'] ?? null;
            $accountId = $responseData['clips'][0]['user_id'] ?? null;
            // return response()->json($songId);
            if (!$songId || !$accountId) {
                throw new Exception('Invalid response format from API');
            }

            // return response()->json($responseData);
            ProcessMusicFeed::dispatch($songId, $accountId,$token);

            return response()->json([
                'message' => 'Music generation started',
                'song_id' => $songId,
                'account_id' => $accountId
            ]);

        } catch (\Exception $e) {
            Log::error('Music generation failed:', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'error' => 'Failed to generate music',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function singleFeed(Request $request)
    {
        try {
            // Get token using the existing getToken method
            $tokenResponse = $this->getToken();
            $tokenData = json_decode($tokenResponse->getContent());
            $token = $tokenData->jwt ?? null;

            if (!$token) {
                throw new Exception('Failed to get valid token');
            }

            $response = Http::withHeaders([
                'Accept-Encoding' => 'gzip, deflate',
                'Authorization' => 'Bearer ' . $token
            ])
            ->get('https://suno-v2.chataiappgpt.workers.dev/feed', [
                'ids' => $request->input('id')
            ]);

            if (!$response->successful()) {
                throw new Exception('Failed to fetch feed');
            }

            return response()->json($response->json());

        } catch (Exception $e) {
            Log::error('Feed fetch failed:', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'error' => 'Failed to fetch feed',
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

    public function songList(){
        try {
            // Retrieve all records from the Music model
            $records = Music::latest()->get();
    
            // Return success response with a proper structure
            return response()->json([
                'success' => true,
                'message' => 'Music records retrieved successfully.',
                'data' => $records
            ], 200);
        } catch (Exception $e) {
            // Log the exception for debugging
            Log::error('Error retrieving music records:', ['error' => $e->getMessage()]);
    
            // Return error response
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve music records.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
