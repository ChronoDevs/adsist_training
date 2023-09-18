<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\auth\PasswordResetRequest;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class PasswordController extends Controller
{
    /**
     * Password forgot page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showForgotPassForm()
    {
        return view('auth.forgot_password');
    }

    /**
     * Send reset email
     *
     * @param App\Http\Requests\Auth\PasswordResetRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendEmail(PasswordResetRequest $request)
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    /**
     * Password reset page
     *
     * @param string $email
     * @param string $token
     * @return \Illuminate\Contracts\View\View
     */
    public function showResetPassword($email, $token)
    {
        return view('auth.reset_password', ['email' => $email,'token' => $token]);
    }

    /**
     * Reset password
     *
     * @param App\Http\Requests\Auth\PasswordResetRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetPassword(PasswordResetRequest $request)
    {
        $status = Password::reset(
            $request->only('email', 'password', 'password', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' =>$password
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
}
