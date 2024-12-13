<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Jobs\ProcessMusicFeed;
use App\Models\ActivityLog;
use App\Models\Song;
use App\Models\SunoAccount;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Notifications\Action;

class SongController extends Controller
{
    public function __construct()
    {
        // Add CORS headers to all methods in this controller
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, x-csrf-token');
        header('Access-Control-Allow-Credentials: true');

    }


    public function songPage(){
        return view('templates.layout');
    }
    public function getToken()
    {
        try {
            $accounts = SunoAccount::all();
            foreach ($accounts as $account) {
        
                $response = Http::withHeaders([
                    'x-suno-authorization' => $account->authorization,
                    'sessionId' => $account->session_id,
                    'nativeDeviceId' => $account->device_id,
                    'clerkClientId' => $account->client_id
                ])->get('https://suno-v2.chataiappgpt.workers.dev/token');

                // Log the response for debugging
            //  dd($response->json()['jwt']);

                if ($response->successful()) {
                    return response()->json([
                        'token' => $response->json()['jwt'] ?? null,
                        'account_id' => $account->id
                    ]);
                } else {
                    // Update the status of the account to indicate failure
                    $account->update(['status' => 2]); // Assuming 'status' is a field in your SunoAccount model
                }
            }
            throw new Exception('Failed to get token from all accounts');
            
        } catch (Exception $e) {

            ActivityLog::create([
                'api_url' => 'https://suno-v2.chataiappgpt.workers.dev/token',
                'error' => $e->getMessage(),
                'user_id' => auth()->user()->id
            ]);

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
            $token = $tokenData->token ?? null;
// dd($token);
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
            Log::info('Token request response:', [
                'response' => $response->json(),
                'status' => $response->status()
            ]);
            if (!$response->successful()) {
                throw new Exception('API request failed: ' . $response->body());
            }

            $responseData = $response->json();
            $songId = $responseData['clips'][0]['id'] ?? null;
            $accountId = $tokenData->account_id ?? null;
            // return response()->json($songId);
            if (!$songId || !$accountId) {
                throw new Exception('Invalid response format from API');
            }

            // return response()->json($responseData);
            ProcessMusicFeed::dispatch($songId, $accountId,$token);

            return response()->json([
                'message' => 'Music generation started',
                'song_id' => $songId,
                'account_id' => $accountId,
                'data' => $responseData
            ]);

        } catch (\Exception $e) {

            ActivityLog::create([
                'api_url' => 'https://suno-v2.chataiappgpt.workers.dev/generate',
                'error' => $e->getMessage(),
                'user_id' => auth()->user()->id
            ]);
            // Log::error('Music generation failed:', [
            //     'error' => $e->getMessage(),
            //     'trace' => $e->getTraceAsString()
            // ]);
            
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
            $token = $tokenData->token ?? null;

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
            $music = Song::where('song_id', $songId)->whereNotNull('audio_url')->first();

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
            $records = Song:: where('user_id',auth()->user()->id)->latest()->get();
    
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

       public function search(Request $request)
    {
      try{

        $title = $request->input('title');
        $songs  = Song::where('title', 'like', '%' . $title . '%')->where('user_id',auth()->user()->id)->latest()->get();
        return response()->json(['data' => $songs, 'status' => 'success']);
      }catch(\Exception $e){
        return response()->json([
            'error' => 'Failed to search music data',
            'message' => $e->getMessage()
        ], 500);
      }
    }
}
