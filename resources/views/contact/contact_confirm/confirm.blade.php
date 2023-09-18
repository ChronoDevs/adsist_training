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
    <link href="../../img/###.png" rel="icon" type="image/png">
    <link rel="stylesheet" href="../../css/index.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container flex_box">
        <div class="header_title">
          <h1>
            <a href="../../index.html"><img src="../../img/logo.png" alt="ADSIST"></a>
          </h1>
        </div>
        <div class="header_menu">
          <ul class="flex_box">
            <li class="hdmn_document"><a href="../../document/index.html">資料請求</a></li>
            <li class="hdmn_login"><a href="../../regist/index.html">新規登録</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main id="page_contact_confirm">
      <div id="wrapper">
        <div class="container">
          <div class="title">
            <h2 class="page_title">お問い合わせ</h2>
            <p class="pgttl_eng">CONTACT</p>
          </div>
          <form class="form_confirm" action="{{ route('sendEmail') }}" method="post">
          @csrf
            <p>
              ご入力内容をご確認ください。<br>
              「送信する」ボタンをを押すと<br class="sp">問い合わせ完了となります。
            </p>
            <table>
              <tr>
                <th>
                  お問い合わせ内容H
                </th>
                <td>
                  {{ $data['content'] }}
                </td>
              </tr>
              <tr>
                <th>
                  お名前
                </th>
                <td>
                  {{ $data['name'] }}
                </td>
              </tr>
              <tr>
                <th>
                  メールアドレス
                </th>
                <td>
                  {{ $data['email'] }}
                </td>
              </tr>
              <tr>
                <th>
                  電話番号
                </th>
                <td>
                  {{ $data['contact_number'] }}
                </td>
              </tr>
              <tr>
                <th>
                  会社名
                </th>
                <td>
                  {{ $data['company_name'] }}
                </td>
              </tr>
            </table>
            <div class="btns flex_box">
              <button class="btn btn_gray" type="button" onclick="history.back()" name="button">修正する</button>
              <button class="btn btn_red" type="submit" name="button">送信する</button>
            </div>
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
    <script src="../../js/common.js"></script>
  </body>
</html>
