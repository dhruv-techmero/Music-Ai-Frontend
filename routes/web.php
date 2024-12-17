<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongGeneratorController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\SongController;
use App\Models\SunoAiSong;
use Illuminate\Http\Request;
use App\Http\Controllers\AICompositionController;
use App\Http\Controllers\LikeController;

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

Route::get('',[HomeController::class,'index'])->name('home');
Route::get('/{provider}', [AuthController::class, 'redirectToProvider'])
->whereIn('provider', ['google', 'facebook', 'github']);

Route::get('/{provider}/callback', [AuthController::class, 'handleProviderCallback'])
    ->whereIn('provider', ['google', 'facebook', 'github'])
    ->name('social.auth.callback');


Route::group(['prefix' => 'website'], function() {
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
   
    Route::group(['prefix' => 'song'], function () {
        
        Route::post('web-prompt-mode', [SongGeneratorController::class,'lyricalMode']);
        Route::post('custom-mode',[AICompositionController::class,'customMode']);

        Route::options('/web-prompt-mode', ['POST']);
        Route::controller(SongController::class)->group(function () {
            Route::get('/play/{id?}', 'song');
            Route::get('/search', 'search');
    
            Route::get('/feed', 'singleFeed');
            Route::options('/feed', ['GET']);
            Route::get('list','songList');
            Route::get('generate-song','songPage')->name('song-generate-view');
            
        });
        
        // Like Routes
        Route::post('/like/{song}', [LikeController::class, 'like'])->name('like.song');
        Route::delete('/like/{song}', [LikeController::class, 'unlike'])->name('unlike.song');
        Route::get('playlist',[HomeController::class,'playlist'])->name('playlist');
    });
    
    });



Route::get('suno-songs', function() {
    (new SunoAiSong())->download();
})->name('suno.songs.download');