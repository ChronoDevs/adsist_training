@extends('layout.app')
@section('title', 'パスワードをお忘れの方へ')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', 'パスワードをお忘れの方へ')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_forget_pass')

@section('header_content')
<div class="header_title">
    <h1>
      <a href="../../index.html"><img src="{{ asset('/img/logo.png') }}" alt="ADSIST"></a>
    </h1>
</div>
<div class="header_menu">
    <ul class="flex_box">
      <li class="hdmn_document"><a href="../../document/index.html">資料請求</a></li>
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
        登録時のメールアドレスをご入力ください。<br>
        パスワード再設定URLが送信されます。
      </p>
      <form id="regist_form" class="regist_form" @submit="checkForm" action="{{ route('password.email') }}" method="post" novalidate="true">
        @csrf
        <div class="regist_input">
          @if (Session::has('status'))
            <span class="text-danger">{{ Session::get('status') }}</span>
          @endif
          @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
          <input type="email" name="email" v-bind:placeholder="placeholder" v-model="email" v-bind:class="{ error: isError }">
          <p class="error_text" v-bind:class="{ active: isError2 }">メールアドレスが不正です。</p>
        </div>
        <button class="btn btn_red" type="submit" name="button">送信</button>
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
    <script src="{{ asset('/js/forget_pass.js') }}"></script>
@endsection
