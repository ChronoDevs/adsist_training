@extends('layout.app')
@section('title', '会員登録')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', '会員登録')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_regist_mail_complete')
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
        <div class="regist_cont">
        <p class="redbig_message">仮登録が<br class="se">完了いたしました！</p>
        <p class="highsmall_message">
            ご入力いただいたメールアドレスへ<br>
            仮登録受付のメールを<br class="se">送らせていただきました。<br>
            メールの記載内容に沿って<br class="sp">本登録へとお進みください。<br><br>
            なお、受付メールが<br class="se">届かない場合はお手数ですが<br>
            ご入力のメールアドレスをご確認の上、<br class="sp">再度お申し込みください。<br>
        </p>
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
