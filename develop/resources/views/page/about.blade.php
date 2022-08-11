@include('includes.language')
@extends('layouts.default', ['page_header' =>trans('dictionary.about_p'),'page_parent' =>'Teams','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'index5.jpg'])
@section('content')
    <div class="container" style="margin-top:0px; min-height: 100vh;">
        <div class="" style="padding: 15px; " id="events">
            <div>
                <p style="text-align: justify; line-height: 2em; font-size: 1.2em; margin: 2em 0;" id="des"></p>
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
    <script src="js/pabout.min.js?v={{Config::get('app.version')}}"></script>
@stop