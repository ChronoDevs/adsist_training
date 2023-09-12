<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <title>ログイン</title>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://###" />
    <meta property="og:image" content="https://###/img/###.png" />
    <meta property="og:title" content="ログイン" />
    <meta property="og:description" content=""/>
    <meta name="twitter:card" content="summary_large_image" />
    <link href="../img/###.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>
  <body>
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
            <li class="hdmn_login"><a href="../regist/index.html">新規登録</a></li>
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
              <a class="bottom_link red_ul_link" href="../regist/index.html">会員登録はこちら</a>
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
  </body>
</html>
