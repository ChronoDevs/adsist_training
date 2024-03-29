@extends('layout.app')
@section('title', '登録情報 | ADSIST')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', 'ダッシュボード')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', 'header_dashboard')
@section('main_id', 'page_dashboard')
@section('main_class', 'under account')
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
                登録情報
              </h2>
            </div>
            <div class="container">
              <div class="content_block none_bg">
                <form action="{{ route('profile.complete') }}" method="POST">
                  @csrf  
                  <h3 class="content_ttl">基本・ブランド情報</h3>
                  @if (Session::has('error'))
                    <span class="text-danger">{{ Session::get('error') }}</span>
                  @endif
                  <dl>
                    <dt>お名前</dt>
                    <dd>
                        {{ $userData['name'] }}
                        <!-- <input type="text" name="name" value="{{ $userData['name'] }}"> -->
                    </dd>
                  </dl>
                  <dl>
                    <dt>メールアドレス</dt>
                    <dd>
                        {{ $userData['email'] }}
                        <!-- <input type="email" name="email" value="{{ $userData['email'] }}"> -->
                    </dd>
                  </dl>
                  <dl>
                    <dt>会社名</dt>
                    <dd>
                        {{ $userData['company_name'] }}
                        <!-- <input type="text" name="company_name" value="{{ $userData['company_name'] }}"> -->
                    </dd>
                  </dl>
                  <dl>
                    <dt>ブランド名</dt>
                    <dd>
                        {{ $userData['brand_name'] }}
                        <!-- <input type="text" name="brand_name" value="{{ $userData['brand_name'] }}"> -->
                    </dd>
                  </dl>
                  <dl>
                    <dt>業種</dt>
                    <dd>
                        {{ $userData['industry'] }}
                        <!-- <input type="text" name="industry" value="{{ $userData['industry'] }}"> -->
                    </dd>
                  </dl>
                  <dl>
                    <dt>サイトURL</dt>
                    <dd>
                      <a href="" target="_blank">{{ $userData['site_url'] }}</a>
                      <!-- <input type="text" name="site_url" value="{{ $userData['site_url'] }}"> -->
                    </dd>
                  </dl>
                  <dl>
                    <dt>カラーミーアカウント</dt>
                    <dd>カラーミーアカウントが入ります。</dd>
                  </dl>
                  <div class="btn_area">
                    <a href="../change_profile/index.html" class="btn btn_gray">修正する</a><!--リセットボタンとなる-->
                    <button type="submit" class="btn btn_red">登録する</button><!--サブミットボタンとなる-->
                  </div>
                </form>
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
