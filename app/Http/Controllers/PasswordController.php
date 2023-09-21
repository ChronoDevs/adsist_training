<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\auth\PasswordResetRequest;
use App\Http\Requests\auth\PasswordChangeRequest;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                    'password' => $password
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }

    /**
     * Profile change password page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showChangePasswordForm()
    {
        return view('profile.user_change_password_form');
    }

    /**
     * Profile change password complete page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function completedPasswordChange()
    {
        return view('profile.user_change_password_complete');
    }

    /**
     * Change password
     *
     * @param App\Http\Requests\Auth\PasswordChangeRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(PasswordChangeRequest $request)
    {
        $userId= Auth::user()->id;
        $user = User::find($userId);

        if ($user) {
            if (Hash::check($request->cur_password, $user->password)) {
                $user->password = $request->new_password;
                $user->save();

                return redirect()->route('profile.change_password_complete');
            }

            return redirect()->back()->withErrors(['cur_password' => __('messages.errors.wrong_password')]);
        }

        return redirect()->back()->withErrors(['cur_password' => __('messages.register.try_again')]);
    }
}
