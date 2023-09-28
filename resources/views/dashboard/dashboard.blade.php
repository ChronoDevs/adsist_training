@extends('layout.app')
@section('title', 'ダッシュボード | ADSIST')
@section('meta_url', 'https://###')
@section('meta_image', 'https://###/img/###.png')
@section('meta_title', 'ダッシュボード')
@section('meta_description', '')
@section('meta_card', 'summary_large_image')
@section('head_icon_link', '../img/###.png')
@section('header_class', 'header_dashboard')
@section('main_id', 'page_dashboard')
@section('main_class', '')
@section('main_cont_class', 'dashboard_cont flex_box')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

@section('header_content')
        <div class="header_title pc">
          <h1>
            <a href="../index.html"><img src="../img/logo_w.png" alt="ADSIST"></a>
          </h1>
        </div>
        <div class="header_menu">
          <ul class="flex_box">
            <li class="hdmn_logout pc"><a href="">ログアウト</a></li>
            <li class="sp hdmn_logout_sp"><a href=""><img src="../img/icon_logout_w.png"></a></li>
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
              <button type="button" name="button"><img src="../img/chat_btn.png"></button>
            </div>
            <div class="dashboard_title">
              <h2>
                ダッシュボード
              </h2>
              <h3>
                <span>サマリー</span>
              </h3>
            </div>
            <div class="brndbtns_wrap">
              <div class="brand_btns_cont">
                <div class="brand_btns flex_box">
                  <form action="{{ route('dashboard') }}" method="get">
                    @csrf
                    <input type="hidden" name="soc_id" value="1"> 
                    <button class="current" type="submit">Facebook</button>
                  </form>
                  <form action="{{ route('dashboard') }}" method="get">
                    @csrf 
                    <input type="hidden" name="soc_id" value="2">
                    <button type="submit">Instagram</button>
                  </form>
                  <form action="{{ route('dashboard') }}" method="get">
                    @csrf 
                    <input type="hidden" name="soc_id" value="3">
                    <button type="submit">Twitter</button>
                  </form>
                  <form action="{{ route('dashboard') }}" method="get">
                    @csrf 
                    <input type="hidden" name="soc_id" value="4">
                    <button type="submit">Tiktok</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="results white_cont">
                <ul class="flex_box">
                  <li class="total_amount">
                    <div class="result">
                      <h4>利用金額合計</h4>
                      <div class="result_amount">
                        <p class="futura">
                          <span>¥</span>123,445
                        </p>
                      </div>
                      <div class="mom flex_box">
                        <p>+¥23,445/前月比</p>
                      </div>
                    </div>
                  </li>
                  <li class="impressions">
                    <div class="result">
                      <h4>表示回数</h4>
                      <div class="result_amount">
                        <p class="futura">
                            {{ $totalViews }}
                        </p>
                      </div>
                      <div class="mom flex_box">
                        <p>+123,456/前月比</p>
                        <div class="helpballoon_cont">
                          <button class="balloon_btn" type="button" name="button"></button>
                          <!-- 説明文の吹き出し -->
                          <div class="helpballoon hlpblln_1">
                            <p>クリックすると項目に関する簡単な説明文が吹き出しで表示される形を想定しております。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="clicks">
                    <div class="result">
                      <h4>クリック数</h4>
                      <div class="result_amount">
                        <p class="futura">
                            {{ $totalClicks }}
                        </p>
                      </div>
                      <div class="mom flex_box">
                        <p>+1,345/前月比</p>
                        <div class="helpballoon_cont">
                          <button class="balloon_btn" type="button" name="button"></button>
                          <!-- 説明文の吹き出し -->
                          <div class="helpballoon hlpblln_2">
                            <p>クリックすると項目に関する簡単な説明文が吹き出しで表示される形を想定しております。</p>
                          </div>
                        </div>
                      </div>
                      <div class="unit_cost flex_box">
                        <p class="untcst">クリック単価：¥267</p>
                        <p class="untcst_gap"><span><img src="../img/icon_triangle_bottom.png"></span>+122</p>
                      </div>
                    </div>
                  </li>
                  <li class="conversions">
                    <div class="result">
                      <h4>獲得数</h4>
                      <div class="result_amount">
                        <p class="futura">
                            {{ $totalAcquisition }}
                        </p>
                      </div>
                      <div class="mom flex_box">
                        <p>+345/前月比</p>
                        <div class="helpballoon_cont">
                          <button class="balloon_btn" type="button" name="button"></button>
                          <!-- 説明文の吹き出し -->
                          <div class="helpballoon hlpblln_3">
                            <p>クリックすると項目に関する簡単な説明文が吹き出しで表示される形を想定しております。</p>
                          </div>
                        </div>
                      </div>
                      <div class="unit_cost flex_box">
                        <p class="untcst">獲得単価：¥2,054</p>
                        <p class="untcst_gap"><span><img src="../img/icon_triangle_top.png"></span>+822</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div><!-- END results -->
              <div class="result_graph white_cont">
                <div class="notice_scroll sp">
                  <img src="../img/scroll_hand.png">
                  <p>横スクロールできます</p>
                </div>
                <div class="rsltgraph_cont">
                  <canvas id="myChart"></canvas>
                </div>
              </div>
              <div class="budget_status white_cont">
                <ul class="flex_box">
                  <li>
                    <div class="result">
                      <h4>設定予算</h4>
                      @foreach ($campaigns as $campaign)
                        <div class="result_amount">
                          <p class="futura">
                              <span>¥</span>{{ $campaign->budget }}
                          </p>
                        </div>
                      @endforeach
                    </div>
                  </li>
                  <li>
                    <div class="result">
                      <h4>配信済み</h4>
                      <div class="result_amount">
                        <p class="futura">
                          <span>¥</span>45,000<span class="done_ratio">(90%)</span>
                        </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div><!-- END budget_status -->
              <div class="new_notice white_cont">
                <h4>最新のお知らせ</h4>
                <dl>
                  <dt>2019/02/15<span>NEW</span></dt>
                  <dd>
                    <a href="../notice/notice_detail/index.html">
                      2019年1月のレポートが確認できます
                    </a>
                  </dd>
                  <dt>2019/02/15</dt>
                  <dd>
                    <a href="../notice/notice_detail/index.html">
                      残り予算が減少しています。追加をご検討ください。
                    </a>
                  </dd>
                  <dt>2019/01/15</dt>
                  <dd>
                    <a href="../notice/notice_detail/index.html">
                      2018年12月のレポートが確認できます
                    </a>
                  </dd>
                </dl>
                <a class="btn btn_red" href="../notice/index.html">一覧を見る</a>
              </div>
            </div><!-- END container -->
          </div><!-- END maincont -->
@endsection

@section('footer_class', 'footer_dashboard')
@section('footer_content')
        <div class="sp_dshbrd_menu sp">
          <ul class="flex_box">
            <li class="current spmn_dashboard">
              <a href="#">
                <div class="sp_menu_icon flex_box"></div>
                ダッシュボード
              </a>
            </li>
            <li class="spmn_budget">
              <a href="budget/index.html">
                <div class="sp_menu_icon flex_box"></div>
                予算管理
              </a>
            </li>
            <li class="spmn_ad">
              <a href="advertisement/index.html">
                <div class="sp_menu_icon flex_box"></div>
                広告管理
              </a>
            </li>
            <li class="spmn_account">
              <a href="account/index.html">
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

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="../js/common.js"></script>
    <script src="../js/graph.js"></script>
    <script src="../js/balloon.js"></script>
@endsection
