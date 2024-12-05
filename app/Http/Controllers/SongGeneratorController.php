<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongGeneratorController extends Controller
{
    public function index()
    {
        return view('app.index');
    }

    public function test()
    {
        return "test";
    }
} 