@extends('mail.layout.mail')

@section('content')
# You are receiving this email because we received an inquiry.

<p>Content of Inquiry: {{ $data['content'] }}</p>
<p>Name: {{ $data['name'] }}</p> 
<p>Email: {{ $data['email'] }}</p>
<p>Telephone: {{ $data['contact_number'] }}</p>
<p>Company Name: {{ $data['company_name'] }}</p>
@endsection
