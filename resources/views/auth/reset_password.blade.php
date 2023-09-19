@extends('layout.app')
@section('title', 'パスワードをお忘れの方へ')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', 'パスワードをお忘れの方へ')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_reset_pass')

@section('header_content')
    <div class="header_title">
        <h1>
        <a href="../../index.html"><img src="{{ asset('/img/logo.png') }}" alt="ADSIST"></a>
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
        <h2 class="page_title">パスワードを<br class="sp">お忘れの方へ</h2>
        <p class="pgttl_eng">PASSWORD</p>
        </div>
        <div class="regist_cont mail_form">
        <p>
            再度パスワードをご入力ください。<br>
            登録を押すと再設定が完了いたします。
        </p>
        <form id="regist_form" class="regist_form" @submit="checkForm" action="{{ route('password.update') }}" method="post" novalidate="true">
            @csrf
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
            <div class="regist_input">
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="password" name="password" v-model="password" v-bind:placeholder="placeholder" v-bind:class="{ error: isError }">
            <p class="pass_rule">※半角英数字8~12桁にてご入力ください</p>
            </div>
            <button class="btn btn_red" type="submit" name="button">再設定する</button>
        </form>
        </div>
    </div>
@endsection

@section('footer_content')
    <p>@2019 ADSIST All rights reserved.</p>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ asset('/js/common.js') }}"></script>
    <script src="{{ asset('/js/reset_pass.js') }}"></script>
@endsection
