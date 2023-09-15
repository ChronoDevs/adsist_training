@extends('mail.layout.mail')

@section('content')
# Email Verification.

Welcome to Adsist!<br>
To continue with setting up your account, please verify your email by clicking the button below.
@component('mail::button', ['url' => $link])
Verify Email
@endcomponent

@endsection
