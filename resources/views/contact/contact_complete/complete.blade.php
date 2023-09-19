@extends('contact.layout.app')
@section('title', 'Complete')
@section('content')
      <div id="wrapper">
        <div class="container">
          <div class="title">
            <h2 class="page_title">お問い合わせ</h2>
            <p class="pgttl_eng">CONTACT</p>
          </div>
          <div class="complete_cont">
            <p class="redbig_message">
              お問い合わせ<br class="se">ありがとうございます！<br>
              メッセージが送信されました。
            </p>
            <p class="highsmall_message">
              折り返し担当より<br class="sp">ご連絡いたしますので恐れ入りますが<br>
              今しばらくお待ちください。<br><br>
              なお、ご入力いただいたメールアドレス宛に<br class="sp">受付メールを配信しております。<br>
              メールが届かない場合、<br class="sp">処理が正常に行われていない<br class="se">可能性があります。<br>
              大変お手数ですが、<br class="sp">再度お問い合わせのお手続きを<br class="se">お願いいたします。
            </p>
            <a class="btn btn_gray" href="../../index.html">TOPへ</a>
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
    <script src="../../js/common.js"></script>
  </body>
</html>
@stop
