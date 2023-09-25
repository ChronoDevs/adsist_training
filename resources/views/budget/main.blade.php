@extends('layout.app')
@section('title', '予算管理 | ADSIST')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', '予算管理 | ADSIST')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', 'header_dashboard')
@section('main_id', 'page_dashboard')
@section('main_class', 'under budget')
@section('main_cont_class', 'dashboard_cont flex_box')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/modal.css') }}">
@endsection

@section('header_content')
    <div class="header_title pc">
        <h1>
        <a href="../index.html"><img src="{{ asset('/img/logo_w.png') }}" alt="ADSIST"></a>
        </h1>
    </div>
    <div class="header_menu">
        <ul class="flex_box">
        <li class="hdmn_logout pc"><a href="">ログアウト</a></li>
        <li class="sp hdmn_logout_sp"><a href=""><img src="{{ asset('/img/icon_logout_w.png') }}"></a></li>
        </ul>
    </div>
@endsection

@include(
    'templates.sidebar',
    [
        'dashboard' => false,
        'budgetmanage' => true,
        'admanage' => false,
        'information' => false,
        'contact' => false,
    ]
)

@section('main_content')
    <div id="maincont">
        <div class="chat_btn">
        <button type="button" name="button"><img src="{{ asset('/img/chat_btn.png') }}"></button>
        </div>
        <div class="dashboard_title">
        <h2>
            予算管理
        </h2>
        </div>
        <div class="head_block">
        <div class="container list_head">
            <a class="btn btn_wide btn_red btn_chat mb40" href="{{ route('campaign.budget_form') }}" id="addBudget">
            +予算を追加する
            </a>
            <div class="flex">
            <div class="search_block">
                <input type="search" placeholder="絞り込み">
            </div>
            <div class="select_block pc">
                <button class="sort_btn" type="button" name="button">並べ替え</button>
                <ul class="sort_list">
                <li><button class="current" type="button" name="button">ブランド名：昇順</button></li>
                <li><button type="button" name="button">ブランド名：降順</button></li>
                <li><button type="button" name="button">追加日：新しい順</button></li>
                <li><button type="button" name="button">追加日：古い順</button></li>
                <li><button type="button" name="button">金額：高い順</button></li>
                <li><button type="button" name="button">金額：低い順</button></li>
                <li><button type="button" name="button">消化率：高い順</button></li>
                <li><button type="button" name="button">消化率：低い順</button></li>
                </ul>
            </div>
            </div><!--flex END-->
            <div class="brndbtns_wrap sp">
            <div class="brand_btns flex_box">
                <button class="current" type="button" name="button">ブランド名：昇順</button>
                <button type="button" name="button">ブランド名：降順</button>
                <button type="button" name="button">追加日：新しい順</button>
                <button type="button" name="button">追加日：古い順</button>
                <button type="button" name="button">金額：高い順</button>
                <button type="button" name="button">金額：低い順</button>
                <button type="button" name="button">消化率：高い順</button>
                <button type="button" name="button">消化率：低い順</button>
            </div>
            </div>
        </div>
        </div>
        <div class="content_block">
        <div class="container adlist_cont">
            <div class="table_head flex">
            <div class="col">
                媒体名
            </div>
            <div class="col">
                金額
            </div>
            <div class="col">
                追加日
            </div>
            <div class="col">
                消化率
            </div>
            <div class="col">
                &nbsp;
            </div>
            </div><!--table_head-->
            <div class="item_block flex">
            <div class="col brand_name">Facebook</div>
            <div class="col price">¥300,000</div>
            <div class="col date">2019/00/00<span class="sp">&nbsp;追加</span></div>
            <div class="col digest"><span class="sp">消化率&nbsp;</span>30%</div>
            <div class="col btn_more">
                <a href="../advertisement/detail/index.html" class="btn btn_red">詳細を見る</a>
            </div>
            </div>
            <div class="item_block flex">
            <div class="col brand_name">Instagram</div>
            <div class="col price">¥300,000</div>
            <div class="col date">2019/00/00<span class="sp">&nbsp;追加</span></div>
            <div class="col digest"><span class="sp">消化率&nbsp;</span>30%</div>
            <div class="col btn_more">
                <a href="../advertisement/detail/index.html" class="btn btn_red">詳細を見る</a>
            </div>
            </div>
            <div class="item_block flex">
            <div class="col brand_name">Facebook</div>
            <div class="col price">¥300,000</div>
            <div class="col date">2019/00/00<span class="sp">&nbsp;追加</span></div>
            <div class="col digest"><span class="sp">消化率&nbsp;</span>30%</div>
            <div class="col btn_more">
                <a href="../advertisement/index.html" class="btn btn_red">詳細を見る</a>
            </div>
            </div>
            <div class="item_block flex">
            <div class="col brand_name">Facebook</div>
            <div class="col price">¥300,000</div>
            <div class="col date">2019/00/00<span class="sp">&nbsp;追加</span></div>
            <div class="col digest"><span class="sp">消化率&nbsp;</span>30%</div>
            <div class="col btn_more">
                <a href="../advertisement/index.html" class="btn btn_red">詳細を見る</a>
            </div>
            </div>
            <div class="item_block flex">
            <div class="col brand_name">Facebook</div>
            <div class="col price">¥300,000</div>
            <div class="col date">2019/00/00<span class="sp">&nbsp;追加</span></div>
            <div class="col digest"><span class="sp">消化率&nbsp;</span>30%</div>
            <div class="col btn_more">
                <a href="../advertisement/index.html" class="btn btn_red">詳細を見る</a>
            </div>
            </div>
            <div class="item_block flex">
            <div class="col brand_name">Facebook</div>
            <div class="col price">¥300,000</div>
            <div class="col date">2019/00/00<span class="sp">&nbsp;追加</span></div>
            <div class="col digest"><span class="sp">消化率&nbsp;</span>30%</div>
            <div class="col btn_more">
                <a href="../advertisement/index.html" class="btn btn_red">詳細を見る</a>
            </div>
            </div>
            <div class="item_block flex">
            <div class="col brand_name">Facebook</div>
            <div class="col price">¥300,000</div>
            <div class="col date">2019/00/00<span class="sp">&nbsp;追加</span></div>
            <div class="col digest"><span class="sp">消化率&nbsp;</span>30%</div>
            <div class="col btn_more">
                <a href="../advertisement/index.html" class="btn btn_red">詳細を見る</a>
            </div>
            </div>
            <div class="item_block flex">
            <div class="col brand_name">Facebook</div>
            <div class="col price">¥300,000</div>
            <div class="col date">2019/00/00<span class="sp">&nbsp;追加</span></div>
            <div class="col digest"><span class="sp">消化率&nbsp;</span>30%</div>
            <div class="col btn_more">
                <a href="../advertisement/index.html" class="btn btn_red">詳細を見る</a>
            </div>
            </div>
        </div><!--container END-->
        </div><!--content_block END-->
        <!-- ページャー -->
        <ul class="pager flex_box">
        <li class="tostart_btn"><a href=""><img src="{{ asset('/img/arrow_left_double.png') }}"></a></li>
        <li class="prevbtn"><a href=""><img src="{{ asset('/img/arrow_left_g.png') }}"><span>前へ</span></a></li>
        <li class="current"><a class="futura" href="">3</a></li>
        <li><a class="futura" href="">4</a></li>
        <li><a class="futura" href="">5</a></li>
        <li class="nextbtn"><a href=""><span>次へ</span><img src="{{ asset('/img/arrow_right_g.png') }}"></a></li>
        <li class="toend_btn"><a href=""><img src="{{ asset('/img/arrow_right_double.png') }}"></a></li>
        </ul>
    </div><!-- END maincont -->
@endsection

@section('footer_class', 'footer_dashboard')
@section('footer_content')
    <div class="sp_dshbrd_menu sp">
        <ul class="flex_box">
        <li class="spmn_dashboard">
            <a href="../dashboard/index.html">
            <div class="sp_menu_icon flex_box"></div>
            ダッシュボード
            </a>
        </li>
        <li class="current spmn_budget">
            <a href="../budget/index.html">
            <div class="sp_menu_icon flex_box"></div>
            予算管理
            </a>
        </li>
        <li class="spmn_ad">
            <a href="../advertisement/index.html">
            <div class="sp_menu_icon flex_box"></div>
            広告管理
            </a>
        </li>
        <li class="spmn_account">
            <a href="#">
            <div class="sp_menu_icon flex_box"></div>
            登録情報
            </a>
        </li>
        <li class="spmn_contact">
            <a href="../contact/index.html">
            <div class="sp_menu_icon flex_box"></div>
            お問い合わせ
            </a>
        </li>
        </ul>
    </div>
    <p>@2019 ADSIST All rights reserved.</p>
@endsection

@section('modal')
    <!-- The Modal -->
    <div id="myModal" class="{{ Route::current()->getName() === 'campaign.budget_form'? 'modal' : 'modal_none' }}">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="content_block none_bg">
                @if(Session::has('success'))
                    <span>{{ Session::get('success') }}</span>
                @endif
                <form @submit="checkForm" action="{{ route('campaign.add_budget') }}" method="post">
                @csrf
                <p class="redbig_message">Add Budget</p>
                <dl>
                    <dt>
                    Service Name <span class="required">必須</span>
                    </dt>
                    <dd>
                    @if ($errors->has('name'))
                        <span>{{ $errors->first('name') }}</span>
                    @endif
                    <input type="text" class="input_text" name="name" v-model="name" :class="{ error: isError }" :placeholder="placeholder" value="{{ old('name') }}">
                    </dd>
                </dl>
                <dl>
                    <dt>
                    Budget <span class="required">必須</span>
                    </dt>
                    <dd>
                    @if ($errors->has('budget'))
                        <span>{{ $errors->first('budget') }}</span>
                    @endif
                    <input type="number" class="input_text" min="0" name="budget" v-model="budget" :class="{ error: isError }" :placeholder="placeholder" value="{{ old('budget') }}">
                    </dd>
                </dl>
                <dl>
                    <dt>
                    Daily budget <span class="required">必須</span>
                    </dt>
                    <dd>
                    @if ($errors->has('daily_budget'))
                        <span>{{ $errors->first('daily_budget') }}</span>
                    @endif
                    <input type="number" class="input_text" min="0" name="daily_budget" v-model="daily_budget" :class="{ error: isError }" :placeholder="placeholder" value="{{ old('daily_budget') }}">
                    </dd>
                </dl>
                <dl>
                    <dt>
                    Social platform <span class="required">必須</span>
                    </dt>
                    <dd>
                    @if ($errors->has('social_platform_id'))
                        <span>{{ $errors->first('social_platform_id') }}</span>
                    @endif
                        <select name="social_platform_id" id="">
                            <option value="" disabled selected hidden>Choose a social platform</option>
                            @isset($socialPlatforms)
                                @foreach ($socialPlatforms as $social)
                                    <option value="{{ $social->id }}" {{ old('social_platform_id') == $social->id? 'selected' : '' }}>{{ $social->name }}</option>
                                @endforeach
                            @endisset
                        </select>
                    </dd>
                </dl>
                <div class="btn_area">
                    <a class="btn btn_gray" href="{{ route('campaign.main') }}">Cancel</a>
                    <button class="btn btn_red" type="submit">Add</button>
                </div>
                </form>
            </div><!--content_block END-->
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/common.js') }}"></script>
    <script src="{{ asset('/js/sort.js') }}"></script>
    <script src="{{ asset('/js/modal.js') }}"></script>
@endsection
