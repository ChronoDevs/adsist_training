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
    @yield('content')
    <footer>
        <div class="container">
          <p>@2019 ADSIST All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ asset('/js/common.js') }}"></script>
  </body>
</html>
