@extends('layout.app')
@section('title', 'ログイン')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', 'ログイン')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_login_mail')

@section('header_content')
    <div class="header_title">
        <h1>
        <a href="{{ route('dashboard') }}"><img src="{{ asset('/img/logo.png') }}" alt="ADSIST"></a>
        </h1>
    </div>
    <div class="header_menu">
        <ul class="flex_box">
        <li class="hdmn_document"><a href="{{ route('document.request') }}">資料請求</a></li>
        <li class="hdmn_login"><a href="{{ route('register.main') }}">新規登録</a></li>
        </ul>
    </div>
@endsection

@section('main_content')
    <div class="regist_circle">
        <img src="{{ asset('/img/regist_circle.png') }}">
    </div>
    <div class="white_box">
        <div class="title">
        <h2 class="page_title">ログイン</h2>
        <p class="pgttl_eng">LOGIN</p>
        </div>

        <div class="regist_cont mail_form">
            @if (Session::has('error'))
                <!-- <p class="error_text">メールアドレスが間違っています</p> -->
                <span class="text-danger">{{ Session::get('error') }}</span>
            @endif
        <form id="regist_form" class="regist_form" @submit="checkForm" action="{{ route('login.auth') }}" method="POST" novalidate="true">
            @csrf
            <div class="regist_input">
            @if ($errors->has('email'))
                <!-- <p class="error_text">メールアドレスが間違っています</p> -->
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <input type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}">
            </div>
            <div class="regist_input">
            @if ($errors->has('password'))
                <!-- <p class="error_text">パスワードが間違っています</p> -->
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <input type="password" name="password" placeholder="Enter Password">
            </div>
            <button class="btn btn_red" type="submit" name="button">ログイン</button>
        </form>
        <a class="bottom_link red_ul_link" href="{{ route('password.request') }}">パスワードをお忘れの方へ</a>

        </div>
    </div>
@endsection

@section('footer_content')
    <p>@2019 ADSIST All rights reserved.</p>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ asset('/js/common.js') }}"></script>
    <script src="{{ asset('/js/login_mail.js') }}"></script>
@endsection
