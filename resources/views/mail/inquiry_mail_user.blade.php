@extends('mail.layout.mail')

@section('content')
    # You are receiving this email because you have sent us an inquiry.
    <h2>Thank you for your Interest {{ $data['name'] }}</h2>
    <p>We will get back to you as soon as possible</p>
@endsection
