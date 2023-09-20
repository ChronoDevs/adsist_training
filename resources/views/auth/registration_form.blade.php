@extends('layout.app')
@section('title', '利用開始前の設定')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', '利用開始前の設定')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_regist_form')
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
    <div class="title">
        @if (Session::has('message'))
        <b>{{ Session::get('message') }}</b>
        @endif
        <h2 class="page_title">利用開始前の設定</h2>
        <p class="pgttl_eng">SET UP</p>
    </div>
    <div class="regist_flow flex_box">
        <div class="rgflw_cont active">
        <div class="rgflw">
            <p class="rgflw_num">1</p>
            <p class="rgflw_text">基本情報の入力</p>
        </div>
        </div>
        <div class="rgflw_cont">
        <hr>
        <div class="rgflw">
            <p class="rgflw_num">2</p>
            <p class="rgflw_text">内容確認</p>
        </div>
        </div>
        <div class="rgflw_cont">
        <hr>
        <div class="rgflw">
            <p class="rgflw_num">3</p>
            <p class="rgflw_text">完了</p>
        </div>
        </div>
    </div>
    <div class="regist_cont">
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form id="regist_form" class="regist_form" @submit="checkForm" action="{{ route('register.confirm_data') }}" method="post" novalidate="true">
        @csrf
        <dl class="form_dl flex_box">
            <dt class="flex_box"><p>お名前<span class="required">必須</span></p></dt>
            <dd>
            <div class="regist_input">
                <input class="input_name" type="text" name="name" v-model="name" v-bind:placeholder="placeholder_name" v-bind:class="{ error: nameError }" value="{{ old('name') }}">
            </div>
            </dd>
            <dt class="flex_box"><p>メールアドレス<span class="required">必須</span></p></dt>
            <dd>
            <div class="regist_input">
                <input type="email" name="email" v-model="email" v-bind:placeholder="placeholder_email" v-bind:class="{ error: emailError }" value="{{ Session::has('email')? Session::get('email') : old('email') }}">
                <p class="error_text" v-bind:class="{ active: emailError2 }">メールアドレスが不正です。</p>
            </div>
            </dd>
            <dt class="flex_box"><p>会社名</p></dt>
            <dd>
            <div class="regist_input">
                <input class="input_company" type="text" name="company_name" placeholder="会社名" value="{{ old('company_name') }}">
            </div>
            </dd>
            <dt class="flex_box"><p>パスワード<span class="required">必須</span></p></dt>
            <dd>
            <div class="regist_input">
                <input type="password" name="password" v-model="password" v-bind:placeholder="placeholder_password" v-bind:class="{ error: passwordError }">
                <p class="pass_rule">※半角英数字8~12桁にてご入力ください</p>
            </div>
            </dd>
        </dl>
        <button class="btn btn_red" type="submit" name="button">登録情報確認へ</button>
        </form>
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
