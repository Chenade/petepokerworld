@include('includes.language')
@extends('layouts.default', ['page_header' =>trans('dictionary.teams_line'),'page_parent' =>'Teams','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'sub_banner.png'])
@section('content')
    <div class="container" style="margin-top:0px; min-height: 100vh;">
        <div class="" style="margin-top:30px; padding: 15px;" id="events">
            <img src="/img/line.jpg" alt="line.jpg">
            <br>
            <br>
            <br>
            <div class="col-12 d-flex justify-content-center">
                <div>
                    <button class="btn-peter btn-lg" onclick="location.href='https://core.newebpay.com/Period/petepokerworld/2XCJbi';" target="_blank">購買連結</button>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:10px;"></div>

    </div>

    
@stop
@section('end_script')
    <script src="js/general.min.js?v={{Config::get('app.version')}}"></script>
    <!-- <script src="js/pnews.min.js?v={{Config::get('app.version')}}"></script> -->
@stop