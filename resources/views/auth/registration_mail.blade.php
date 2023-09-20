@extends('layout.app')
@section('title', '会員登録')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', '会員登録')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_regist_mail')
@section('main_class', 'main_circle')

@section('header_content')
    <div class="header_title">
        <h1>
        <a href="../../index.html"><img src="{{ asset('/img/logo.png') }}" alt="ADSIST"></a>
        </h1>
    </div>
    <div class="header_menu">
        <ul class="flex_box">
        <li class="hdmn_document"><a href="{{ route('document.request') }}">資料請求</a></li>
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
        <div class="regist_cont mail_form">
        <form id="regist_form" class="regist_form" @submit="checkForm" action="{{ route('register.send_email_verify') }}" method="post">
            @csrf
            <div class="regist_input">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            @endif
            <input type="email" name="email" v-bind:placeholder="placeholder" v-model="email" v-bind:class="{ error: isError }">
            <p class="error_text" v-bind:class="{ active: isError2 }">メールアドレスが不正です。</p>
            </div>
            <button class="btn btn_red" type="submit" name="button">送信</button>
        </form>
        <p>
            ※仮登録メールをお送りします。<br>
            24時間以内に確認可能な<br class="se">アドレスをご記入ください。<br>
            受信制限を設けている場合は、<br>
            @test.jp への許可をお願いいたします。
        </p>
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
    <script src="{{ asset('/js/regist_mail.js') }}"></script>
@endsection
