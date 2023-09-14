@extends('layout.app')
@section('content')
<header>
    <div class="container flex_box">
      <div class="header_title">
        <h1>
          <a href="../../index.html"><img src="../../img/logo.png" alt="ADSIST"></a>
        </h1>
      </div>
      <div class="header_menu">
        <ul class="flex_box">
          <li class="hdmn_document"><a href="../../document/index.html">資料請求</a></li>
          <li class="hdmn_login"><a href="../../login/index.html">ログイン</a></li>
        </ul>
      </div>
    </div>
  </header>
  <main id="page_regist_confirm">
    <div id="wrapper">
      <div class="container">
        <div class="title">
          <h2 class="page_title">利用開始前の設定</h2>
          <p class="pgttl_eng">SET UP</p>
        </div>
        <div class="regist_flow flex_box">
          <div class="rgflw_cont done">
            <div class="rgflw">
              <p class="rgflw_num"></p>
              <p class="rgflw_text">基本情報の入力</p>
            </div>
          </div>
          <div class="rgflw_cont active">
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
          <form action="{{ route('register.create') }}" method="post">
            @csrf
            <p>基本情報</p>
            <dl class="flex_box">
              <dt>お名前</dt>
              <dd>{{ old('name') }}</dd>
              <dt>メールアドレス</dt>
              <dd>{{ old('email') }}</dd>
              <dt>会社名</dt>
              <dd>{{ old('company_name') }}</dd>
            </dl>
            <input type="hidden" name="email" value="{{ old('email') }}">
            <input type="hidden" name="name" value="{{ old('name') }}">
            <input type="hidden" name="company_name" value="{{ old('company_name') }}">
            <input type="hidden" name="password" value="{{ old('password') }}">
            <div class="btns flex_box">
              <button class="btn btn_gray" type="button" onclick="history.back()" name="button">修正する</button>
              <button class="btn btn_red" type="submit" name="button">登録する</button>
            </div>
          </form>
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
  <script src="../../js/common.js"></script>
  @endsection
