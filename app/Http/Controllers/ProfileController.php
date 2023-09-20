<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Profile information page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showProfile()
    {
        return view('profile.user_information', ['user' => Auth::user()]);
    }
}
