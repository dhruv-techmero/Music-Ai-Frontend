<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SongGeneratorController extends Controller
{
    public function index()
    {
        // if(session()->has('auth_token')){   
            return view('templates.layout');
        // }
        return redirect()->route('home');
    }

    public function home()
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