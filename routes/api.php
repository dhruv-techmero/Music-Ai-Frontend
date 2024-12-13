<?php

use App\Http\Controllers\MusicController;
use App\Http\Controllers\SongGeneratorController;
use App\Http\Controllers\Website\SongController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AICompositionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/song/web-prompt-mode', [SongController::class, 'webPromptMode']);
Route::get('token',[SongController::class,'getToken']);


Route::post('prompt-mode',[SongGeneratorController::class,'lyricalMode']);
Route::options('prompt-mode', ['POST']);

Route::post('custom-mode',[AICompositionController::class,'customMode']);
Route::options('custom-mode', ['POST']);



Route::get('/feed', [SongController::class, 'singleFeed']);
Route::options('/feed', ['GET']);

Route::get('/single-song/{id}', [SongController::class, 'getSingleSongApi']);
Route::options('/single-song/{id}', ['GET']);

Route::get('list', [SongController::class, 'songList']);
Route::get('generate-song', [SongController::class, 'songPage'])->name('song-generate-view');
