<?php

use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongGeneratorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('templates.layout');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user-profile', function(){
        echo "welcome";
    });
});

Route::get('/app', [SongGeneratorController::class, 'index'])->name('app');
