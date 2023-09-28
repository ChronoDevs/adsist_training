@extends('layout.app')
@section('title', '基本情報の変更 | ADSIST')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', 'ダッシュボード')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', 'header_dashboard')
@section('main_id', 'page_dashboard')
@section('main_class', '')
@section('main_cont_class', 'dashboard_cont flex_box')

@section('header_content')
        <div class="header_title pc">
          <h1>
            <a href="../../index.html"><img src="../../img/logo_w.png" alt="ADSIST"></a>
          </h1>
        </div>
        <div class="header_menu">
          <ul class="flex_box">
            <li class="hdmn_logout pc"><a href="">ログアウト</a></li>
            <li class="sp hdmn_logout_sp"><a href=""><img src="../../img/icon_logout_w.png"></a></li>
          </ul>
        </div>
@endsection

@include('templates.sidebar')

@section('main_content')
          <div id="maincont">
            <div class="chat_btn">
              <button type="button" name="button"><img src="../../img/chat_btn.png"></button>
            </div>
            <div class="dashboard_title">
              <h2>
                基本情報の変更
              </h2>
            </div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="container dashboard_done">
              <div class="content_block none_bg">
                <p class="redbig_message">基本情報を更新しました</p>
                <a class="btn btn_gray" href="{{ route('profile.show') }}">登録情報TOPへ</a>
              </div><!--content_block END-->
            </div><!-- END container -->
          </div><!-- END maincont -->
@endsection

@section('footer_class', 'footer_dashboard')
@section('footer_content')
        <div class="sp_dshbrd_menu sp">
          <ul class="flex_box">
            <li class="spmn_dashboard">
              <a href="../../dashboard/index.html">
                <div class="sp_menu_icon flex_box"></div>
                ダッシュボード
              </a>
            </li>
            <li class="spmn_budget">
              <a href="../../budget/index.html">
                <div class="sp_menu_icon flex_box"></div>
                予算管理
              </a>
            </li>
            <li class="spmn_ad">
              <a href="../../advertisement/index.html">
                <div class="sp_menu_icon flex_box"></div>
                広告管理
              </a>
            </li>
            <li class="current spmn_account">
              <a href="#">
                <div class="sp_menu_icon flex_box"></div>
                登録情報
              </a>
            </li>
            <li class="spmn_contact">
              <a href="../../ontact/index.html">
                <div class="sp_menu_icon flex_box"></div>
                お問い合わせ
              </a>
            </li>
          </ul>
        </div>
        <p>@2019 ADSIST All rights reserved.</p>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="../../js/common.js"></script>
    <script src="../../js/dashboard.js"></script>
@endsection
