@extends('layout.app')
@section('title', 'お問い合わせ')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', 'ログイン')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_contact')
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
@endsection

@section('footer_content')
  <p>@2019 ADSIST All rights reserved.</p>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="{{ asset('/js/common.js') }}"></script>
@endsection
