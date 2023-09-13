<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('adsist.login.login_mail.login');
    }

    /**
     * Login
     * 
     * @param LoginRequest $request
     * @return response
     */
    public function postLogin(LoginRequest $request)
    {   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->with('success', __('messages.success.logged'));
        }
        
         return redirect("login")->with('error', __('messages.errors.credentials'));
    }
}

