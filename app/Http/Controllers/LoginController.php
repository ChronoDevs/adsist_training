<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('adsist.login.login_mail.index');
    }

    /**
     * Login
     * 
     * @param Request $request
     * @return response
     */
    public function postLogin(Request $request)
    {   
        $request->validate([
            'email' => ['required','email'],
            'password'=> ['required', ]
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->with('success', __('messages.success.logged'));
        }
        
         return redirect("login")->with('error', __('messages.errors.credentials'));
    }
}