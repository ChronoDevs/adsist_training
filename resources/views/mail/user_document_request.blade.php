@extends('mail.layout.mail')

@section('content')
# Adsist - Document Request.

Hello, {{ $data['name'] }}!<br>
You are receiving this email because you have sent a document request to our system. Our team will cater your request as quickly as possible.
Thank you!

@endsection
