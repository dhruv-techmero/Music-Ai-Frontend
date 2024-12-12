<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $songs = [
            'data' => [
                ['id' => 1, 'title' => 'Song 1', 'artist' => 'Artist 1','audio_url'=> '123','image_url' => '12',],
                ['id' => 2, 'title' => 'Song 2', 'artist' => 'Artist 2','audio_url' => 12,'image_url' => '12',],
                ['id' => 3, 'title' => 'Song 3', 'artist' => 'Artist 3','audio_url' =>12313,'image_url' => '12',],
            ],
        ];
        return view('home', compact('songs'));
    }
}
