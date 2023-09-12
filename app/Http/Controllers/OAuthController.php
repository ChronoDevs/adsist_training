<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OAuthController extends Controller
{
    public function redirect($socialPlatform) {
        return Socialite::driver($socialPlatform)->redirect();
    }

    public function loginUsingSocial($socialPlatform) {
        $socialUser = Socialite::driver($socialPlatform)->user();

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
