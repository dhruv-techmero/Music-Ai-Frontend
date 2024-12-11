<?php

use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongGeneratorController;
use Illuminate\Http\Request;

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
Route::get('/logout', function(){
    session()->forget('auth_token');
    session()->save();
    return redirect()->route('home');
})->name('logout');

// Public routes
Route::get('/', [SongGeneratorController::class, 'home'])->name('home');

Route::get('/auth/callback/', function(Request $request) {    
    $token = $request->query('token');
    session(['auth_token' => $token]);
    session()->save();
    return redirect('/song-generator');
})->name('auth.callback');

// These routes were previously protected, now public
Route::get('/song-generator', [SongGeneratorController::class, 'index'])->name('song-generator');
Route::get('/music-generator', [MusicController::class, 'index'])->name('music-generator');


Route::group(['prefix' => 'song'], function () {
    Route::controller(MusicController::class)->group(function () {
        Route::post('/web-prompt-mode', 'lyricalMode');
        Route::options('/web-prompt-mode', ['POST']);

        Route::get('/feed', 'singleFeed');
        Route::options('/feed', ['GET']);
        Route::get('list','songList');
    });
});