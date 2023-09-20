@extends('layout.app')
@section('title', 'お問い合わせ')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', 'お問い合わせ')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_contact_confirm')
@section('main_class', 'main_circle')

@section('header_content')
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
@endsection

@section('main_content')
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
@endsection

@section('footer_content')
  <p>@2019 ADSIST All rights reserved.</p>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="../js/common.js"></script>
    <script src="../js/faq.js"></script>
@endsection
