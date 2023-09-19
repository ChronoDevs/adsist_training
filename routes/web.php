<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OAuthController;
use App\Http\Controllers\RegistrationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
});

Route::middleware('guest')->group(function () {
    /*Social media login routes*/
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::get('/auth/{social_platform}/redirect', [OAuthController::class, 'redirect'])->name('redirect');
    Route::get('/auth/{social_platform}/callback', [OAuthController::class, 'loginUsingSocial']);

    /*Registration routes*/
    Route::get('/registration', [RegistrationController::class, 'showMainPage'])->name('register.main');
    Route::get('/registration/mail', [RegistrationController::class, 'showMailPage'])->name('register.mail');
    Route::post('/registration/mail', [RegistrationController::class, 'sendVerificationMail'])->name('register.send_email_verify');
    Route::get('/registration/mailcomplete', [RegistrationController::class, 'showMailCompletePage'])->name('register.mail_complete');
    Route::get('/registration/verified/{hash}', [RegistrationController::class, 'verifyEmail'])->name('register.email_verify');
    Route::get('/registration/form', [RegistrationController::class, 'showForm'])->name('register.show_form');
    Route::post('/registration/form', [RegistrationController::class, 'registerUser'])->name('register.create');
    Route::post('/registration/confirmdata', [RegistrationController::class, 'confirmData'])->name('register.confirm_data');
    Route::get('/registration/complete', [RegistrationController::class, 'registerComplete'])->name('register.complete');
    Route::get('/registration/login/{userId}', [RegistrationController::class, 'registerLogin'])->name('register.login');
});

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'postLogin'])->name('login');

Route::get('/faq', function () {
    return view('faq.faq');
});