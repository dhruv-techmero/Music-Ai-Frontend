<?php

use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongGeneratorController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\SongController;
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

Route::get('',[HomeController::class,'index'])->name('home');
Route::get('/{provider}', [AuthController::class, 'redirectToProvider'])
->whereIn('provider', ['google', 'facebook', 'github']);

Route::get('/{provider}/callback', [AuthController::class, 'handleProviderCallback'])
    ->whereIn('provider', ['google', 'facebook', 'github'])
    ->name('social.auth.callback');



Route::group(['prefix' => 'website'],function(){
Route::get('logout',[AuthController::class,'logout'])->name('logout');
   
    Route::group(['prefix' => 'song'], function () {
        Route::controller(SongController::class)->group(function () {
            Route::get('/', 'song');
            Route::get('/search', 'search');
    
            Route::post('/web-prompt-mode', 'lyricalMode');
            Route::options('/web-prompt-mode', ['POST']);
    
            Route::get('/feed', 'singleFeed');
            Route::options('/feed', ['GET']);
            Route::get('list','songList');
            Route::get('generate-song','songPage')->name('song-generate-view');
            
        });
    });
    
    });



// Route::get('')