@extends('layout.app')
@section('title', '資料請求')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', '資料請求')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', '')
@section('main_id', 'page_contact')
@section('main_class', 'main_circle')

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
    <form id="document_form" class="form" @submit="checkForm" action="{{ route('document.confirm') }}" method="post" novalidate="true">
        @csrf
        <div class="cntctfrm_top">
        <a class="red_ul_link" href="../contact/index.html">その他のお問い合わせはこちら</a>
        </div>
        <dl class="form_dl flex_box">
        <dt class="flex_box"><p>お名前<span class="required">必須</span></p></dt>
        <dd>
            <div class="frmdd_inner">
            @if ($errors->has('name'))
                <span>{{ $errors->first('name') }}</span>
            @endif
            <input type="text" name="name" v-model="name" v-bind:placeholder="placeholder_name" v-bind:class="{ error: nameError }" value="{{ old('name') }}">
            </div>
        </dd>
        <dt class="flex_box"><p>会社名<span class="required">必須</span></p></dt>
        <dd>
            <div class="frmdd_inner">
            @if ($errors->has('company'))
                <span>{{ $errors->first('company') }}</span>
            @endif
            <input type="text" name="company" v-model="company" v-bind:placeholder="placeholder_company" v-bind:class="{ error: companyError }" value="{{ old('company') }}">
            </div>
        </dd>
        <dt class="flex_box"><p>担当者名</p></dt>
        <dd>
            <div class="frmdd_inner">
            @if ($errors->has('in_charge'))
                <span>{{ $errors->first('in_charge') }}</span>
            @endif
            <input type="text" name="in_charge" value="{{ old('in_charge') }}" placeholder="ご担当者様名をご入力ください">
            </div>
        </dd>
        <dt class="flex_box"><p>電話番号</p></dt>
        <dd>
            <div class="frmdd_inner">
            @if ($errors->has('telephone'))
                <span>{{ $errors->first('telephone') }}</span>
            @endif
            <input type="tel" name="telephone" value="{{ old('telephone') }}" placeholder="ハイフンなしでご入力ください">
            </div>
        </dd>
        <dt class="flex_box"><p>メールアドレス<span class="required">必須</span></p></dt>
        <dd>
            <div class="frmdd_inner">
            @if ($errors->has('email'))
                <span>{{ $errors->first('email') }}</span>
            @endif
            <input type="email" name="email" v-model="email" v-bind:placeholder="placeholder_email" v-bind:class="{ error: emailError }" value="{{ old('email') }}">
            <p class="error_text" v-bind:class="{ active: emailError2 }">メールアドレスが不正です。</p>
            </div>
        </dd>
        <dt class="flex_box"><p>月刊広告予算<span class="required">必須</span></p></dt>
        <dd>
            <div class="frmdd_inner input_budget">
            @if ($errors->has('monthly_budget'))
                <span>{{ $errors->first('monthly_budget') }}</span>
            @endif
            <input type="text" name="monthly_budget" v-model="budget" v-bind:placeholder="placeholder_budget" v-bind:class="{ error: budgetError }" value="{{ old('monthly_budget') }}">
            <span>万円</span>
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
    <script src="{{ asset('/js/common.js') }}"></script>
    <script src="{{ asset('/js/document_form.js') }}"></script>
@endsection
