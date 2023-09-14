<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailVerify;
use App\Models\User;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\auth\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    /**
     * Registration page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showMainPage()
    {
        return view('auth.registration');
    }

    /**
     * Registration mail page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showMailPage()
    {
        return view('auth.registration_mail');
    }

    /**
     * Mail complete page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showMailCompletePage()
    {
        return view('auth.registration_mail_complete');
    }

    /**
     * Registration form
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showForm()
    {
        return view('auth.registration_form');
    }

    /**
     * Send verification mail to verify user email
     *
     * @param App\Http\Requests\auth\RegisterRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendVerificationMail(RegisterRequest $request)
    {
        $hash = Hash::make($request->email);
        $noSlashHash = str_replace('/', '7', $hash);
        $data = EmailVerify::updateOrCreate([
            'email' => $request->email,
        ], [
            'hash' => $noSlashHash
        ]);

        if ($data) {
            $url = 'http://localhost:8000/registration/verified/'. $noSlashHash;
            Mail::to($data)->send(new EmailVerification($url));
            return redirect()->route('register.mail_complete');
        }
    }

    /**
     * Verify Email
     *
     * @param string $hash
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verifyEmail($hash)
    {
        $data = EmailVerify::where('hash', $hash)->first();

        if ($data && !$data->is_verified) {
            $data->is_verified = true;
            $data->save();
            return redirect()->route('register.show_form')->with([
                'message' => __('messages.register.verified'),
                'email' => $data->email
            ]);
        } elseif ($data) {
            $user = User::where('email', $data->email)->first();
            if ($user) {
                return redirect()->route('login')
                        ->with('message', __('messages.register.account_exist'));
            }
            return redirect()->route('register.show_form')->with([
                'message' => __('messages.register.already_verified'),
                'email' => $data->email
            ]);
        }

        return redirect()->route('register.mail')->withErrors([
            __('messages.register.re_enter_email')
        ]);
    }

    /**
     * Register User
     *
     * @param App\Http\Requests\auth\RegisterRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerUser(RegisterRequest $request)
    {
        $request->flash();
        $user = User::create($request->validated());

        if ($user) {
            Auth::login($user);
            return redirect('/');
        }

        return redirect()->back()->withErrors([__('messages.register.try_again')]);
    }
}
