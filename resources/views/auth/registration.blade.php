@extends('layout.app')
@section('title', '会員登録')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', '会員登録')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_regist')

@section('header_content')
    <div class="header_title">
        <h1>
        <a href="../index.html"><img src="{{ asset('/img/logo.png') }}" alt="ADSIST"></a>
        </h1>
    </div>
    <div class="header_menu">
        <ul class="flex_box">
        <li class="hdmn_document"><a href="../document/index.html">資料請求</a></li>
        <li class="hdmn_login"><a href="{{ route('login') }}">ログイン</a></li>
        </ul>
    </div>
@endsection

@section('main_content')
    <div class="regist_circle">
        <img src="{{ asset('/img/regist_circle.png') }}">
    </div>
    <div class="white_box">
        <div class="title">
        <h2 class="page_title">会員登録</h2>
        <p class="pgttl_eng">SIGN UP</p>
        </div>
        <div class="regist_cont">
        <a class="btn btn_red" href="{{ route('register.mail') }}"><img class="btnimg" src="{{ asset('/img/icon_mail.png') }}">メールアドレスで登録</a>
        <p class="regist_or">または</p>
        <a class="btn btn_fb" href="{{ route('redirect', 'facebook') }}"><img class="btnimg" src="{{ asset('/img/icon_fb.png') }}">facebookで登録</a>
        <a class="btn btn_tw" href="{{ route('redirect', 'line') }}"><i class="fab fa-line btnimg"></i>Lineで登録</a>
        <a class="btn btn_white" href="{{ route('redirect', 'google') }}"><img class="btnimg" src="{{ asset('/img/icon_ggl.png') }}">Googleで登録</a>
        <a class="bottom_link red_ul_link" href="{{ route('login') }}">すでに会員の方はこちらからログイン</a>
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
