@extends('layout.app')
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
  <main id="page_regist_complete">
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
          <div class="rgflw_cont done">
            <hr>
            <div class="rgflw">
              <p class="rgflw_num"></p>
              <p class="rgflw_text">内容確認</p>
            </div>
          </div>
          <div class="rgflw_cont active">
            <hr>
            <div class="rgflw">
              <p class="rgflw_num">3</p>
              <p class="rgflw_text">完了</p>
            </div>
          </div>
        </div>
        <div class="regist_cont">
          <div class="rgstdn_message">
            <p class="redbig_message">設定が完了いたしました！</p>
            <p class="highsmall_message">
              各種設定が完了いたしました。<br>
              今すぐ、広告配分のご相談が可能です。<br>
              手軽で自由な新しい広告配信体験を<br class="sp">お楽しみください。
            </p>
          </div>
          <a class="btn btn_gray" href="{{ route('dashboard') }}">ダッシュボードへ</a>
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
