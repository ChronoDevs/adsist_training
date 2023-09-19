<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <title>よくあるご質問</title>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://###" />
    <meta property="og:image" content="https://###/img/###.png" />
    <meta property="og:title" content="よくあるご質問" />
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
    <main id="page_faq">
      <div id="wrapper">
        <div class="container">
          <div class="title">
            <h2 class="page_title">よくあるご質問</h2>
            <p class="pgttl_eng">Q&A</p>
          </div>
          <div class="faq_cont" id="faq_cont">
            <faq-accordion>
              <div slot="title">
                対応している広告媒体は何がありますか？
              </div>
              <div slot="body">
                こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。<br>
                こちらにアンサーが入ります。こちらにアンサーが入ります。
              </div>
            </faq-accordion>
            <faq-accordion>
              <div slot="title">
                料金発生タイミングはいつとなりますか？
              </div>
              <div slot="body">
                こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。<br>
              </div>
            </faq-accordion>
            <faq-accordion>
              <div slot="title">
                既存の運用内容があるのですが、引継ぐことは可能ですか？
              </div>
              <div slot="body">
                こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。<br>
                こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。<br>
                こちらにアンサーが入ります。こちらにアンサーが入ります。
              </div>
            </faq-accordion>
            <faq-accordion>
              <div slot="title">
                こちらにテキストが入りますこちらにテキストが入ります
              </div>
              <div slot="body">
                こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。<br>
                こちらにアンサーが入ります。こちらにアンサーが入ります。
              </div>
            </faq-accordion>
            <faq-accordion>
              <div slot="title">
                こちらにテキストが入りますこちらにテキストが入ります
              </div>
              <div slot="body">
                こちらにアンサーが入ります。こちらにアンサーが入ります。
              </div>
            </faq-accordion>
            <faq-accordion>
              <div slot="title">
                こちらにテキストが入りますこちらにテキストが入ります
              </div>
              <div slot="body">
                こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。<br>
                こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。
              </div>
            </faq-accordion>
            <faq-accordion>
              <div slot="title">
                こちらにテキストが入りますこちらにテキストが入ります
              </div>
              <div slot="body">
                こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。こちらにアンサーが入ります。<br>
                こちらにアンサーが入ります。こちらにアンサーが入ります。
              </div>
            </faq-accordion>
          </div>
          <div class="faq_bottom">
            <p>その他のご質問につきましては、<br class="sp">下記よりお気軽にご相談ください。</p>
            <a class="btn btn_red" href="{{ route('inquiry') }}">お問い合わせへ</a>
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
    <script src="../js/common.js"></script>
    <script src="../js/faq.js"></script>
  </body>
</html>
