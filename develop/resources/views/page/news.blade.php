@include('includes.language')
@extends('layouts.default', ['page_header' =>'最新消息','page_parent' =>'News','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'sub_banner.png'])
@section('content')
    <div class="container" style="margin-top:50px; min-height: 100vh;">
    
    <ul class="nav nav-tabs" style="width: 100%">
        <li class="nav-item" id="device_tab">
            <a id="device_index" class="nav-link active" data-toggle="tab" href="#Device_content">{{trans('dictionary.event')}}</a>
        </li>
        <li class="nav-item nav-type slideHide" id="status_tab">
            <a id="device_index" class="nav-link" data-toggle="tab" href="#Status_content">{{trans('dictionary.p_blog')}}</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="Device_content">
            <div class="d-flex flex-wrap justify-content-center" style="padding: 15px;" id="events">
            </div>
        </div>
        <div class="tab-pane fade" id="Status_content">
            <div class="d-flex flex-wrap justify-content-center" style="padding: 15px;" id="blog">
            </div>
        </div>
    </div>

    <div style="margin-top:20px;"></div>

    </div>

    
@stop
@section('end_script')
    <script src="js/general.min.js?v={{Config::get('app.version')}}"></script>
    <script src="js/pnews.min.js?v={{Config::get('app.version')}}"></script>
@stop