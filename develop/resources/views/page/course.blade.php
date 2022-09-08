@include('includes.language')
@extends('layouts.default', ['page_header' =>trans('dictionary.coach_course'),'page_parent' =>'Course','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'sub_banner.png'])
@section('content')
    <div class="container" style="margin-top:0px; min-height: 100vh;">
        <div class="" style="padding: 15px; margin-top: 2em;" id="events">
            <div>
                <p style="text-align: justify; line-height: 2em; font-size: 1.2em;" id="des"></p>
            </div>
            <div id="pics"></div>
            <div></div>
        </div>
    </div>

    <div style="margin-top:20px;"></div>

    </div>

    
@stop
@section('end_script')
    <script src="js/general.min.js?v={{Config::get('app.version')}}"></script>
    <script src="js/pcourse.min.js?v={{Config::get('app.version')}}"></script>
@stop