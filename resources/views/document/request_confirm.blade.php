@extends('layout.app')
@section('title', '資料請求')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', '資料請求')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_contact_confirm')

@section('header_content')
    <div class="header_title">
        <h1>
        <a href="../index.html"><img src="{{ asset('/img/logo.png') }}" alt="ADSIST"></a>
        </h1>
    </div>
    <div class="header_menu">
        <ul class="flex_box">
        <li class="hdmn_document"><a href="../contact/index.html">お問い合わせ</a></li>
        <li class="hdmn_login"><a href="{{ route('register.main') }}">新規登録</a></li>
        </ul>
    </div>
@endsection

@section('main_content')
    <div class="title">
        <h2 class="page_title">資料請求</h2>
        <p class="pgttl_eng">REQUEST</p>
    </div>
    <form class="form_confirm" action="{{ route('document.send') }}" method="post">
        @csrf
        <p>
        「送信する」ボタンをを押すと<br class="sp">資料請求完了となります。
        </p>
        <table>
        <tr>
            <th>
            お名前
            </th>
            <td>
            {{ old('name') }}
            </td>
        </tr>
        <tr>
            <th>
            会社名
            </th>
            <td>
            {{ old('company') }}
            </td>
        </tr>
        <tr>
            <th>
            担当者名
            </th>
            <td>
            {{ old('in_charge') }}
            </td>
        </tr>
        <tr>
            <th>
            電話番号
            </th>
            <td>
            {{ old('telephone') }}
            </td>
        </tr>
        <tr>
            <th>
            メールアドレス
            </th>
            <td>
            {{ old('email') }}
            </td>
        </tr>
        <tr>
            <th>
            月刊広告予算
            </th>
            <td>
            {{ old('monthly_budget') }}
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
