<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <title>お問い合わせ</title>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://###" />
    <meta property="og:image" content="https://###/img/###.png" />
    <meta property="og:title" content="お問い合わせ" />
    <meta property="og:description" content=""/>
    <meta name="twitter:card" content="summary_large_image" />
    <link href="../img/###.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container flex_box">
        <div class="header_title">
          <h1>
            <a href="../index.html"><img src="../img/logo.png" alt="ADSIST"></a>
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
    <main id="page_contact">
      <div id="wrapper">
        <div class="container">
          <div class="title">
            <h2 class="page_title">お問い合わせ</h2>
            <p class="pgttl_eng">CONTACT</p>
          </div>
          <form id="contact_form" class="form" action="{{ route('store') }}" method="POST">
            @csrf
            <div class="cntctfrm_top">
              <a class="red_ul_link" href="../document/index.html">資料請求をご希望の方はこちら</a>
            </div>
            <dl class="form_dl flex_box">
              <dt class="flex_box"><p>お問い合わせ内容<span class="required">必須</span></p></dt>
              <dd>
                <div class="frmdd_inner cntct_cont">
                  <textarea name="content" placeholder="Enter your Message"></textarea>
                </div>
              </dd>
              <dt class="flex_box"><p>お名前<span class="required">必須</span></p></dt>
              <dd>
                <div class="frmdd_inner">
                  <input type="text" name="name" value="">
                </div>
              </dd>
              <dt class="flex_box"><p>メールアドレス<span class="required">必須</span></p></dt>
              <dd>
                <div class="frmdd_inner">
                  <input type="email" name="email" value="">
                  <p class="error_text" v-bind:class="{ active: emailError2 }">メールアドレスが不正です。</p>
                </div>
              </dd>
              <dt class="flex_box"><p>電話番号</p></dt>
              <dd>
                <div class="frmdd_inner">
                  <input type="tel" name="contact_number" value="" placeholder="ハイフンなしでご入力ください">
                </div>
              </dd>
              <dt class="flex_box"><p>会社名<span class="required">必須</span></p></dt>
              <dd>
                <div class="frmdd_inner">
                  <input type="text" name="company_name" value="">
                </div>
              </dd>
            </dl>
            <button class="btn btn_red" type="submit" name="button">確認する</button>
          </form>
        </div>
      </div>
    </main>
    <footer>
      <div class="container">
        <p>@2019 ADSIST All rights reserved.</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="../js/common.js"></script>
    <script src="../js/contact_form.js"></script>
  </body>
</html>
