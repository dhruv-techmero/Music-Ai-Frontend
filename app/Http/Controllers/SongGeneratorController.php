<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Website\SongController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Exception;

use App\Jobs\ProcessMusicFeed;
use App\Models\ActivityLog;
use App\Models\Song;
use App\Models\SunoAccount;
use Illuminate\Support\Facades\Log;
class SongGeneratorController extends Controller
{
    
    public function lyricalMode(Request $request)
    {
        try {
            // Get token using the existing getToken method
            $token = $this->getTokenData()->token;
    
            if (!$token) {
                throw new Exception("Failed to get valid token");
            }
    
            // Prepare request data
            $data = [
                "generation_type" => "TEXT",
                "gpt_description_prompt" => $request->input("gpt_description_prompt", "This is a random song"),
                "make_instrumental" => false,
                "mv" => "chirp-v3-5",
                "prompt" => $request->input("prompt", ""),
                "tags" => $request->input("tags", ""),
                "title" => $request->input("title", "Using subscribed account"),
                "token" => null,
            ];
    
            // Main request with token
            $response = $this->makeApiRequest($token, $data);
    // dd($response->json());
            if ($response->successful()) {
                return $this->handleSuccessfulResponse($response, $token);
            }
            $this->logError(new Exception("Token validation failed."));
            return $this->handleFailedResponse($request->input("gpt_description_prompt", "This is a random song"));
        } catch (\Exception $e) {
            $this->logError($e);
            return response()->json(["error" => "Failed to generate music", "message" => $e->getMessage()], 500);
        }
    }
    
    private function getTokenData()
    {
        
        $songController = new SongController();
        // Get token using the existing getToken method
        $tokenResponse = $songController->getToken();
        return json_decode($tokenResponse->getContent());
    }
    
    private function makeApiRequest($token, $data)
    {
        return Http::withHeaders([
            "Content-Type" => "application/json; charset=utf-8",
            "Accept" => "application/json",
            "Authorization" => "Bearer " . $token,
        ])->withBody(json_encode($data), "application/json")
          ->post("https://suno-v2.chataiappgpt.workers.dev/generate");
    }
    
    private function handleSuccessfulResponse($response, $token)
    {
        $responseData = $response->json();
        $songId = $responseData["clips"][0]["id"] ?? null;
        $accountId = $this->getTokenData()->account_id ?? null;
    
        if (!$songId || !$accountId) {
            throw new Exception("Invalid response format from API");
        }
    
        // Process music feed asynchronously
        ProcessMusicFeed::dispatch($songId, $accountId, $token);
    
        return response()->json([
            "message" => "Music generation started",
            "song_id" => $songId,
            "account_id" => $accountId,
            "data" => $responseData,
        ]);
    }
    
    private function handleFailedResponse($prompt)
    {
        $generateResponse = $this->generateSong($prompt);
        $responseData = json_decode($generateResponse->getContent(), true);
        $singleRecord = $responseData["result"]["public_song"]["result"][0];
        $accountId = $this->getTokenData()->account_id ?? null;
    
        // Insert the song into the database
        $create_response = Song::insertSong($singleRecord, $accountId);
    
        return response()->json([
            "message" => "Music generation started",
            "song_id" => $create_response->id,
            "account_id" => $accountId,
            "data" => $singleRecord,
        ]);
    }
    
    private function generateSong($prompt)
    {
        try {
            $response = $this->callSongGenerationApi($prompt);
    
            if (!$response->successful()) {
                throw new Exception("API request failed: " . $response->body());
            }
    
            $rawText = $this->extractRawText($response->json());
    
            $songSearchTerm = $this->getSongSearchTerm($rawText);
            $token = $this->getTokenData()->token;
    
            return $this->fetchSongDetails($songSearchTerm, $token);
        } catch (\Exception $e) {
            Log::error("Error generating song:", ["error" => $e->getMessage(), "trace" => $e->getTraceAsString()]);
            return response()->json(["error" => "Failed to generate song", "message" => $e->getMessage()], 500);
        }
    }
    
    private function callSongGenerationApi($prompt)
    {
        return Http::withHeaders(["Content-Type" => "application/json"])
            ->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-8b:generateContent?key=" . env("GOOGLE_API_KEY"), [
                "contents" => [["role" => "user", "parts" => [["text" => $prompt]]]],
                "systemInstruction" => [
                    "role" => "user",
                    "parts" => [["text" => 'Respond with a JSON object containing only the key "SongSearchTerm" and its value, without any additional formatting or code blocks.']]
                ],
                "generationConfig" => ["maxOutputTokens" => 100, "responseMimeType" => "text/plain"]
            ]);
    }
    
    private function extractRawText($responseData)
    {
        $rawText = $responseData["candidates"][0]["content"]["parts"][0]["text"] ?? null;
        if (!$rawText) {
            throw new Exception("No text found in the response");
        }
        return trim(str_replace(["```json", "```"], "", $rawText));
    }
    
    private function getSongSearchTerm($rawText)
    {
        $decodedResponse = json_decode($rawText, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("JSON decode error: " . json_last_error_msg());
        }
    
        $songSearchTerm = $decodedResponse["SongSearchTerm"] ?? null;
        if (!$songSearchTerm) {
            throw new Exception('No "SongSearchTerm" found in the decoded response');
        }
    
        return $songSearchTerm;
    }
    
    private function fetchSongDetails($songSearchTerm, $token)
    {
        $response = Http::withHeaders([
            "Content-Type" => "application/json",
            "Authorization" => "Bearer " . $token,
        ])->post("https://suno-v2.chataiappgpt.workers.dev/category", [
            "search_queries" => [
                [
                    "name" => "public_song",
                    "search_type" => "public_song",
                    "term" => $songSearchTerm,
                    "from_index" => 0,
                    "rank_by" => "most_relevant",
                ],
            ],
        ]);
    
        if (!$response->successful()) {
            throw new Exception("Second API request failed: " . $response->body());
        }
    
        return response()->json($response->json());
    }
    
    private function logError($exception)
    {
        ActivityLog::create([
            "api_url" => "https://suno-v2.chataiappgpt.workers.dev/generate",
            "error" => $exception->getMessage(),
            "user_id" => auth()->user()->id ?? 1,
        ]);
    }
    
} 