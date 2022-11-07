@include('includes.language')
@extends('layouts.default', ['page_header' =>'小P社群','page_parent' =>'Social Media','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'sub_banner.png'])
@section('content')
    <div class="container" style="margin-top:50px; margin-bottom:50px; min-height: 100vh;" id="mediaBox">
        <!-- body -->

        <div style="margin-top:20px;"></div>

    </div>

    
@stop
@section('end_script')
    <script src="js/general.min.js?v={{Config::get('app.version')}}"></script>
    <script src="/js/pmedia.min.js?v={{Config::get('app.version')}}"></script>
@stop