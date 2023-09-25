<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <title>@yield('title')　|　{{ config('app.name', 'Adsist') }}</title>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="@yield('meta_url')" />
    <meta property="og:image" content="@yield('meta_image')" />
    <meta property="og:title" content="@yield('meta_title')" />
    <meta property="og:description" content="@yield('meta_description')"/>
    <meta name="twitter:card" content="@yield('meta_card')" />
    <link href="@yield('head_icon_link')" rel="icon" type="image/png">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    @yield('css')
  </head>
  <body>
    <header class="@yield('header_class')">
        <div class="container flex_box">
            @yield('header_content')
        </div>
    </header>
    <main id="@yield('main_id')" class="@yield('main_class')">
        <div id="wrapper">
            <div class="container @yield('main_cont_class')">
                @yield('sidebar')
                @yield('main_content')
            </div>
        </div>
        @yield('modal')
    </main>
    <footer class="@yield('footer_class')">
        <div class="container">
          @yield('footer_content')
        </div>
    </footer>
    @yield('script')
  </body>
</html>
