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
          <li class="hdmn_login"><a href="{{ route('register.main') }}">新規登録</a></li>
        </ul>
      </div>
    </div>
</header>
<main id="page_login" class="main_circle">
    <div id="wrapper">
        <div class="container">
        <div class="regist_circle">
            <img src="{{ asset('/img/regist_circle.png') }}">
        </div>
        <div class="white_box">
            <div class="title">
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2 class="page_title">ログイン</h2>
                <p class="pgttl_eng">LOGIN</p>
            </div>
            <div class="regist_cont">
                <a class="btn btn_red" href="login_mail/index.html"><img class="btnimg" src="{{ asset('/img/icon_mail.png') }}">メールアドレスでログイン</a>
                <p class="regist_or">または</p>
                <a class="btn btn_fb" href="{{ route('redirect', 'facebook') }}"><img class="btnimg" src="{{ asset('/img/icon_fb.png') }}">facebookでログイン</a>
                <a class="btn btn_tw" href="{{ route('redirect', 'line') }}"><i class="fab fa-line btnimg"></i>Lineでログイン</a>
                <a class="btn btn_white" href="{{ route('redirect', 'google') }}"><img class="btnimg" src="{{ asset('/img/icon_ggl.png') }}">Googleでログイン</a>
                <a class="bottom_link red_ul_link" href="{{ route('register.main') }}">会員登録はこちら</a>
            </div>
        </div>
        </div>
    </div>
</main>
@endsection
