<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
        
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialiteUser = Socialite::driver($provider)->user();

            $user = User::where('email', $socialiteUser->email)->first();

            if (!$user) {
                $user = User::create([
                    'name' => $socialiteUser->getName() ?? $socialiteUser->getNickname(),
                    'email' => $socialiteUser->getEmail(),
                    'password' => Hash::make(Str::random(16)),
                    'avatar' => $socialiteUser->getAvatar(),
                ]);
            } else {
                $user->update([
                    'name' => $socialiteUser->getName() ?? $user->name,
                    'avatar' => $socialiteUser->getAvatar() ?? $user->avatar,
                ]);
            }
       
            auth()->login($user);
            return redirect()->route('song-generate-view');
          
        } catch (\Exception $e) {
            \Log::error('OAuth Authentication Error: ' . $e->getMessage());
            
            return redirect()->route('login')->with('error', 'Authentication failed. Please try again.');
        }
    }
    
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
