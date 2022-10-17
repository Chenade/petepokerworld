@include('includes.language')
@extends('layouts.default', ['page_header' =>trans('dictionary.teams_join'),'page_parent' =>'Teams','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'sub_banner.png'])
@section('content')
    <div class="container" style="margin-top:0px; min-height: 100vh;">
        <div class="" style="padding: 15px;" id="events">
            <div class="col-12 d-flex justify-content-center"><h3><b>Natural 8 新手必看教學：從建立帳號到儲值，一步一步帶你玩！</b></h3></div>
            <!-- <h4>前言</h4> -->
            <!-- <h5 class="nopadding">首先你得先知道 Natural 8 的優勢在哪裡：&emsp;小P獨家戰隊福利有哪些？</h5> -->
            <!-- <hr> -->
            <div class="col-12 d-flex nopadding">
                <h5>要開始在 Natural 8 遊玩，必須先申請 Natural 8 帳號，而要申請帳號，則需要先加入戰隊，<a href="http://n8.gg/petechen" target="_blank">點擊連結加入小P戰隊。</a></h5>
            </div>
            <p>延伸閱讀：<a href="#" target="_blank">小P獨家戰隊福利有哪些？</a></p>
            <img src="/img/login_page.png" alt="login page">
            <br>
            <div class="d-flex flex-wrap">
                <div class="col-12 col-sm-6 col-lg-8 d-flex align-items-center"> <p style="line-height: 1.8em;">創立好帳號及加入戰隊後就可以進行儲值。要找到官方認證的幣商，請先加入「小P的撲克世界」官方 LINE，可以使用頁面上的 QR Code 或<a href="https://line.me/R/ti/p/@petepokerworld" target="_blank">點擊加入。</a></p> </div>
                <div class="col-12 col-sm-6 col-lg-4"> <img src="/img/line_qrcode.png" alt="line_qrcode"></div>
            </div>
            <hr>
            <div class="d-flex flex-wrap">
                <div class="col-12 col-sm-6" style="border-right: solid black 1px;">
                    <div class="d-flex justify-content-center"> <img src="/img/line_Screen1.png" alt="lineScreen_1" style="height: 600px;"></div>
                    <div> <p style="line-height: 1.8em;">加入好友後點選下面的【選單】，選擇【Natural8專區】，再選擇【N8儲值提款】服務，就會將您導入到官方幣商的 LINE 了。</p> </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="d-flex justify-content-center"> <img src="/img/line_Screen2.png" alt="lineScreen_2" style="height: 600px;"></div>
                    <div> <p style="line-height: 1.8em;">加入官方幣商的 LINE 後，點選選單中的【我要買幣】就可以進行儲值了。也可以在選單中找到不同的服務來選擇。</p> </div>
                </div>
            </div>
            <br>
            
            
            <h5>儲值完就可以在 Natural 8 進行遊戲囉！</h5>

            <h5>在 Natural 8 裡，你可以遊玩非常多種類型的撲克遊戲，低額到高額買入通通都有，註冊好及儲值完後依自己的喜好及能力去遊玩自己喜愛的遊戲，預祝各位遊戲都有很棒的遊戲體驗。</h5>

            <div class="col-12 d-flex justify-content-center">
                <div>
                    <button class="btn-peter btn-lg">立即加入小Ｐ戰隊</button>
                </div>
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