@include('includes.language')
@extends('layouts.default', ['page_header' =>trans('dictionary.teams_intro'),'page_parent' =>'Teams','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'sub_banner.png'])
@section('content')
    <div class="container" style="margin-top:0px; min-height: 100vh;">
        <div class="" style="padding: 15px;" id="events">
            <div class="col-12 d-flex justify-content-center"><h3><b>加入小P的 Natural8 戰隊會有什麼福利呢？</b></h3></div>

            <div class="d-flex justify-content-center">
                <div class="col-7">
                    <h5>【第一波】註冊即送大賽門票</h5>
                        <p style="padding-left: 5em;">只要加入戰隊，馬上就會送出 3 美金的每日大賽門票</p>

                    <h5>【第二波】KYC 認證加碼送</h5>
                        <p style="padding-left: 5em;">註冊後，再完成 KYC 認證，就會加碼送出「5.25 美金獵人賽」及「2.1 美金獵人賽」門票，還可以免費加入「小P教學 Line 群組」一個月，讓你可以盡情在群組內跟小P討論手牌提升經驗值。</p>

                    <h5>【第三波】教學群組免費續籍</h5>
                        <p style="padding-left: 5em;">加入戰隊後，每個月只要錦標賽報名費超過 800 美金，即可自動延續「小P教學 Line 群組」的會籍，讓你手牌問到飽、功力大增，每年還有不定期聚餐及活動優惠價。</p>
                        <p style="padding-left: 5em;">> 教學群組詳細福利、不打 N8 怎麼加入？請<a href="/teams/discount" target="_blank">點此</a></p>
                    
                    <h5>【第四波】週三幸運賽</h5>
                        <p style="padding-left: 5em;">每週三晚上八點，都會固定舉辦免費回饋賽，總獎池 T$100，所有戰隊成員都可以免費報名進去抽獎！</p>
                        
                    <h5>【第五波】週四戰隊回饋賽</h5>
                        <p style="padding-left: 5em;">每週四晚上八點，都會固定舉辦小P免費戰隊回饋賽，保底高達 100 美金！小P戰隊限定、外面是找不到的！（重複買入 1 美金會直接投入獎池）</p>
                    
                    <h5>【第六波】週五超級幸運賽</h5>
                        <p style="padding-left: 5em;">每週五晚上八點，都會固定舉辦免費加碼回饋賽，總獎池更高達 T$300，只要是小P戰隊成員並且前一週（星期四 00:00－星期三 23:59）有報名錦標賽至少 $1 以上的玩家都會換算成一定比例的籌碼進入翻牌賽，報名費越多，換算的籌碼越多，越高機會中大獎！</p>
                </div>
                <div class="col-5">
                    <img src="/img/teamIntro.jpg" style="margin-top: 5em;"/>
                </div>
            </div>

            <div class="d-flex justify-content-center" style="background-color:#E7A60A">
                <h4>還有各種不定期 Natural8 大賽期間的專屬加碼活動，最優惠的福利只留給小P戰隊成員！</h4>
            </div>

        </div>
    </div>

    <div style="margin-top:20px;"></div>

    </div>

    
@stop
@section('end_script')
    <script src="js/general.min.js?v={{Config::get('app.version')}}"></script>
    <!-- <script src="js/pnews.min.js?v={{Config::get('app.version')}}"></script> -->
@stop