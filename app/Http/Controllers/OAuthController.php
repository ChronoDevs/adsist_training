<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OAuthController extends Controller
{
    /**
     * Redirect QAuth login
     * 
     * @param string $socialPlatform
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirect($socialPlatform)
    {
        return Socialite::driver($socialPlatform)->redirect();
    }

    /**
     * Updates/Creates user using social info and log in
     * 
     * @param string $socialPlatform
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginUsingSocial($socialPlatform)
    {
        $socialUser = Socialite::driver($socialPlatform)->user();

        if (!isset($socialUser->id)) {
            return redirect('/login')->withErrors("Missing social user id.");
        }

        $user  = User::updateOrCreate([
            'social_id' => $socialUser->id,
        ], [
            'name' => $socialUser->name,
            'email' => $socialUser->email,
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
