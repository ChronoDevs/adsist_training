@section('sidebar')
    <div id="sidebar">
        <ul>
        <li class="sdlink_dashboard">
            <a href="{{ route('dashboard') }}"><img src="../img/icon_graph_w.png">ダッシュボード</a>
        </li>
        <li class="sdlink_budgetmanage">
            <a href="../budget/index.html"><img src="../img/icon_yen_w.png">予算管理</a>
        </li>
        <li class="sdlink_admanage">
            <a href="../advertisement/index.html"><img src="../img/icon_pc_w.png">広告管理</a>
        </li>
        <li class="sdlink_information current">
            <a href="#"><img src="../img/icon_userinfo_w.png">登録情報</a>
        </li>
        <li class="sdlink_contact">
            <a href="../contact/index.html"><img src="../img/icon_mail.png">お問い合わせ</a>
        </li>
        </ul>
    </div>
@endsection
