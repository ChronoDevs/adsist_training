@extends('contact.layout.app')
@section('title', 'Confirm')
@section('content')
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
@stop
