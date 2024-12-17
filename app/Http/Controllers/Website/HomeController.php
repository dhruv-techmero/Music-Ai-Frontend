<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;
use App\Models\Like;
class HomeController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id ?? null;
       $songs = Song::
    //    inRandomOrder()->
       with(['users','likes'])->take(10)->get()->map(function ($song) use ($user_id) {
            $song->likes_count = $song->likes()->count();
            $song->is_liked =  $song->isLikedByUser($user_id);
            return $song;
        });
       
        return view('home', compact('songs'));
    }


    public function playlist(){

        $likes = Like::where('user_id', auth()->user()->id)->get();
        $song_ids = $likes->pluck('song_id');
        $songs = Song::whereIn('id', $song_ids)->with(['users','likes'])->get()->map(function ($song) {
            $song->likes_count = $song->likes()->count();
            $song->is_liked =  $song->isLikedByUser(auth()->user()->id);
            return $song;
        }); 
        // dd($songs);
        return view('playlist', compact('songs'));
    }
}
