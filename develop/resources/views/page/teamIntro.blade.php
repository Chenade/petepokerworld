@include('includes.language')
@extends('layouts.default', ['page_header' =>trans('dictionary.teams_intro'),'page_parent' =>'Teams','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'index5.jpg'])
@section('content')
    <div class="container" style="margin-top:0px; min-height: 100vh;">
        <div class="" style="padding: 15px;" id="events">
            <div class="col-12 d-flex justify-content-center"><h3><b>加入小P的 Natural8 戰隊會有什麼福利呢？</b></h3></div>
            <h5>【第一波】註冊即送大賽門票</h5>
                <p style="padding-left: 5em;">只要加入戰隊，馬上就會送出 3 美金的每日大賽門票</p>

            <h5>【第二波】KYC 認證加碼送</h5>
                <p style="padding-left: 5em;">註冊後，再完成 KYC 認證，就會加碼送出「5.25 美金獵人賽」及「2.1 美金獵人賽」門票，還可以免費加入「小P教學 Line 群組」一個月，讓你可以盡情在群組內跟小P討論手牌提升經驗值。</p>

            <h5>【第三波】最優惠戰隊回饋賽</h5>
                <p style="padding-left: 5em;">每週四的晚上八點，都會固定舉辦小P免費戰隊回饋賽，保底高達 100 美金！小P戰隊限定、外面是找不到的！（重複買入 1 美金會直接投入獎池）</p>

            <h5>【第三波】教學群組免費續籍</h5>
                <p style="padding-left: 5em;">加入戰隊後，每個月只要錦標賽報名費超過 800 美金，即可自動延續「小P教學 Line 群組」的會籍，讓你手牌問到飽、功力大增，每年還有不定期聚餐及活動優惠價。</p>
                
            <h4> 教學群組詳細福利、不打N8怎麼加入？請點此 </h4>
            <h4> 還有 Natural 8 的大賽期間都會有期間內專屬活動！</h4>

            <hr>
            <h4>【歷史活動】</h4>
                <ol>
                    <li>GGOC Leaderboard 戰隊專屬排行榜獎金</li>
                </ol>
        </div>
    </div>

    <div style="margin-top:20px;"></div>

    </div>

    
@stop
@section('end_script')
    <script src="js/general.min.js?v={{Config::get('app.version')}}"></script>
    <!-- <script src="js/pnews.min.js?v={{Config::get('app.version')}}"></script> -->
@stop