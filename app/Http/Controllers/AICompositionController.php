<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Http\Controllers\SongGeneratorController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Models\ActivityLog;

class AICompositionController extends Controller
{

    public function customMode(Request $request)
    {
        try {
            $SongGeneratorController = new SongGeneratorController();
            // Get token using the existing getToken method
            $token = $SongGeneratorController->getTokenData()->token;
    
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
            $response = $SongGeneratorController->makeApiRequest($token, $data);
            // dd($response);
            if ($response->successful()) {
                return $SongGeneratorController->handleSuccessfulResponse($response, $token);
            }
            $this->logError(new Exception("Token validation failed."));
            return $SongGeneratorController->handleFailedResponse($request->input("prompt", "This is a random song"));
        } catch (\Exception $e) {
            $this->logError($e);
            return response()->json(["error" => "Failed to generate music", "message" => $e->getMessage()], 500);
        }
    }

    public function logError($exception)
    {
        ActivityLog::create([
            "api_url" => "https://suno-v2.chataiappgpt.workers.dev/generate",
            "error" => $exception->getMessage(),
            "user_id" => auth()->user()->id ?? 1,
        ]);
    }
}
