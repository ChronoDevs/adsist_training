<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showLogin()
    {
        return view('auth.login_main');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showForm()
    {
        return view('auth.login_form');
    }

    /**
     * Login
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->with('success', __('messages.success.logged'));
        }
            return redirect("/login-form")->with('error', __('messages.errors.credentials'));
    }
}
