@extends('layout.app')
@section('content')
<header>
    <div class="container flex_box">
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
    </div>
  </header>
  <main id="page_regist" class="main_circle">
    <div id="wrapper">
      <div class="container">
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
      </div>
    </div>
  </main>
  <footer>
    <div class="container">
      <p>@2019 ADSIST All rights reserved.</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="{{ asset('/js/common.js') }}"></script>
  @endsection
