@section('sidebar')
    <div id="sidebar">
        <ul>
        <li class="sdlink_dashboard {{ $dashboard? 'current' : '' }}">
            <a href="../dashboard/index.html"><img src="{{ asset('/img/icon_graph_w.png') }}">ダッシュボード</a>
        </li>
        <li class="sdlink_budgetmanage {{ $budgetmanage? 'current' : '' }}">
            <a href="{{ route('campaign.main') }}"><img src="{{ asset('/img/icon_yen_w.png') }}">予算管理</a>
        </li>
        <li class="sdlink_admanage {{ $admanage ? 'current' : '' }}">
            <a href="../advertisement/index.html"><img src="{{ asset('/img/icon_pc_w.png') }}">広告管理</a>
        </li>
        <li class="sdlink_information {{ $information? 'current' : '' }}">
            <a href="{{ route('profile.show') }}"><img src="{{ asset('/img/icon_userinfo_w.png') }}">登録情報</a>
        </li>
        <li class="sdlink_contact {{ $contact? 'current' : '' }}">
            <a href="../contact/index.html"><img src="{{ asset('/img/icon_mail.png') }}">お問い合わせ</a>
        </li>
        </ul>
    </div>
@endsection
