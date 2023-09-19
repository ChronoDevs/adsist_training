@extends('layout.app')
@section('title', 'Login')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', 'ログイン')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_login')

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
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2 class="page_title">ログイン</h2>
            <p class="pgttl_eng">LOGIN</p>
        </div>
        <div class="regist_cont">
            @if (Session::has('status'))
                <span>{{ Session::get('status') }}</span>
            @endif
            <a class="btn btn_red" href="{{ route('login.form') }}"><img class="btnimg" src="{{ asset('/img/icon_mail.png') }}">メールアドレスでログイン</a>
            <p class="regist_or">または</p>
            <a class="btn btn_fb" href="{{ route('redirect', 'facebook') }}"><img class="btnimg" src="{{ asset('/img/icon_fb.png') }}">facebookでログイン</a>
            <a class="btn btn_tw" href="{{ route('redirect', 'line') }}"><i class="fab fa-line btnimg"></i>Lineでログイン</a>
            <a class="btn btn_white" href="{{ route('redirect', 'google') }}"><img class="btnimg" src="{{ asset('/img/icon_ggl.png') }}">Googleでログイン</a>
            <a class="bottom_link red_ul_link" href="{{ route('register.main') }}">会員登録はこちら</a>
        </div>
    </div>
@endsection

@section('footer_content')
    <p>@2019 ADSIST All rights reserved.</p>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ asset('/js/common.js') }}"></script>
@endsection
