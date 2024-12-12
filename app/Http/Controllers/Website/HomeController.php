<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       $songs = Song::inRandomOrder()->with('users')->take(10)->get();
    //    dd($songs);
        return view('home', compact('songs'));
    }
}
