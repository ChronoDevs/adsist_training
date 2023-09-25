@extends('layout.app')
@section('title', '登録情報 | ADSIST')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', '登録情報 | ADSIST')
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
        <a href="../index.html"><img src="{{ asset('/img/logo_w.png') }}" alt="ADSIST"></a>
        </h1>
    </div>
    <div class="header_menu">
        <ul class="flex_box">
        <li class="hdmn_logout pc"><a href="">ログアウト</a></li>
        <li class="sp hdmn_logout_sp"><a href=""><img src="{{ asset('/img/icon_logout_w.png') }}"></a></li>
        </ul>
    </div>
@endsection

@include(
    'templates.sidebar',
    [
        'dashboard' => false,
        'budgetmanage' => false,
        'admanage' => false,
        'information' => true,
        'contact' => false,
    ]
)

@section('main_content')
    <div id="maincont">
        <div class="chat_btn">
        <button type="button" name="button"><img src="{{ asset('/img/chat_btn.png') }}"></button>
        </div>
        <div class="dashboard_title">
        <h2>
            登録情報
        </h2>
        </div>
        <div class="container">
        <div class="content_block">
            <div class="item_block">
            <h3 class="content_ttl">基本・ブランド情報</h3>
            <dl>
                <dt>お名前</dt>
                <dd>{{ $user->name }}</dd>
            </dl>
            <dl>
                <dt>メールアドレス</dt>
                <dd>{{ $user->email }}</dd>
            </dl>
            <dl>
                <dt>会社名</dt>
                <dd>{{ $user->company_name? $user->company_name : 'None' }}</dd>
            </dl>
            <dl>
                <dt>ブランド名</dt>
                <dd>{{ $user->brand_name? $user->brand_name : 'None' }}</dd>
            </dl>
            <dl>
                <dt>業種</dt>
                <dd>{{ $user->industry? $user->industry : 'None' }}</dd>
            </dl>
            <dl>
                <dt>サイトURL</dt>
                <dd>
                <a href="" target="_blank">{{ $user->site_url? $user->site_url : 'None' }}</a>
                </dd>
            </dl>
            <div class="btn_more">
                <a href="{{ route('profile.edit', ['user' => $user->id]) }}" class="btn btn_red">
                変更する
                </a>
            </div>
            </div>
            <div class="item_block">
            <dl>
                <dt>パスワード</dt>
                <dd>
                **********
                <span class="ateniton">※セキュリティのためパスワードは非表示となっています。</span>
                </dd>
            </dl>
            <div class="btn_more">
                <a href="{{ route('profile.show_password_form') }}" class="btn btn_red">
                変更する
                </a>
            </div>
            </div>
        </div><!--content_block END-->
        </div><!-- END container -->
    </div><!-- END maincont -->
@endsection

@section('footer_class', 'footer_dashboard')
@section('footer_content')
    <div class="sp_dshbrd_menu sp">
        <ul class="flex_box">
        <li class="spmn_dashboard">
            <a href="../dashboard/index.html">
            <div class="sp_menu_icon flex_box"></div>
            ダッシュボード
            </a>
        </li>
        <li class="current spmn_budget">
            <a href="../budget/index.html">
            <div class="sp_menu_icon flex_box"></div>
            予算管理
            </a>
        </li>
        <li class="spmn_ad">
            <a href="../advertisement/index.html">
            <div class="sp_menu_icon flex_box"></div>
            広告管理
            </a>
        </li>
        <li class="spmn_account">
            <a href="#">
            <div class="sp_menu_icon flex_box"></div>
            登録情報
            </a>
        </li>
        <li class="spmn_contact">
            <a href="../contact/index.html">
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
    <script src="{{ asset('/js/common.js') }}"></script>
    <script src="{{ asset('/js/dashboard.js') }}"></script>
@endsection
