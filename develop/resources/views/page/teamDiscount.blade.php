@include('includes.language')
@extends('layouts.default', ['page_header' =>trans('dictionary.teams_discount'),'page_parent' =>'Team','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'index5.jpg'])
@section('content')
    <div class="container" style="margin-top:50px; min-height: 100vh;">
        <div class="d-flex flex-wrap" style="padding: 15px;" id="events"></div>
        <div style="margin-top:20px;"></div>
    </div>
@stop
@section('end_script')
    <script src="/js/general.min.js?v={{Config::get('app.version')}}"></script>
    <script src="/js/pteams.min.js?v={{Config::get('app.version')}}"></script>
@stop