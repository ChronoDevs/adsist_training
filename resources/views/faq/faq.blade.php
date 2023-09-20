@extends('layout.app')
@section('title', 'よくあるご質問')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', 'よくあるご質問')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_faq')

@section('header_content')
        <div class="header_title">
          <h1>
            <a href="../index.html"><img src="../img/logo.png" alt="ADSIST"></a>
          </h1>
        </div>
        <div class="header_menu">
          <ul class="flex_box">
            <li class="hdmn_document"><a href="{{ route('document.request') }}">資料請求</a></li>
            <li class="hdmn_login"><a href="{{ route('register.main') }}">新規登録</a></li>
          </ul>
        </div>
@endsection

@section('main_content')
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
@endsection
@section('footer_content')
        <p>@2019 ADSIST All rights reserved.</p>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="../js/common.js"></script>
    <script src="../js/faq.js"></script>
@endsection
