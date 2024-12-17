<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Song;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Song $song)
    {
        $like = Like::create([
            'user_id' => auth()->id() ?? 1,
            'song_id' => $song->id
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Song liked successfully',
            'likes_count' => $song->likes()->count()
        ]);
    }

    public function unlike(Song $song)
    {
        Like::where('user_id', auth()->id() ?? 1)
            ->where('song_id', $song->id)
            ->delete();

        return response()->json([
            'success' => true,
            'message' => 'Song unliked successfully',
            'likes_count' => $song->likes()->count()
        ]);
    }
}
