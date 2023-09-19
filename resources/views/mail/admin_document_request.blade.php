@extends('mail.layout.mail')

@section('content')
# Adsist - Document Request<br>

Name: {{ $data['name'] }}<br>
Company Name: {{ $data['company'] }}<br>
@isset($data['in_charge'])
    Person in charge: {{ $data['in_charge'] }}<br>
@endisset
@isset($data['telephone'])
    Person in charge: {{ $data['telephone'] }}<br>
@endisset
Email: {{ $data['email'] }}<br>
Monthly budget: {{ $data['monthly_budget'] }}<br>

@endsection
