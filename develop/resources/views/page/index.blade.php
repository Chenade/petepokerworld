@include('includes.language')
@extends('layouts.default', ['page_header' =>'About','page_parent' =>'Home','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'sub_banner.png'])
@section('content')
    <div class="container" style="margin-top:130px; min-height: 100vh;">
        <!-- body -->
        <div class="carousel-container">
            <div class="owl-carousel owl-theme"></div>
        </div>

        <div class="col-12">
            <div class="section-heading text-center">
                <h6 class="tag">News </h6>
                <h2>{{trans('dictionary.news')}}</h2>
            </div>
        </div>

        <div class="d-flex flex-wrap align-items-center ">
            <div class="col-12 col-lg-9 col-sm-8" style="height: 650px; overflow-y: scroll; scrollbar-width: none;" id="news"></div>
            <div class="col-12 col-lg-3 col-sm-4 d-flex justify-content-center" style="height: 600px;" id="ads"></div>
        </div>

        <div style="margin-top:20px;"></div>

    </div>

    <div class="col-12" style="margin-top: 100px;">
        <div class="section-heading text-center">
            <h6 class="tag">Media </h6>
            <h2>{{trans('dictionary.media')}}</h2>
        </div>
    </div>
    
    <div class="d-flex flex-wrap justify-content-center" style="margin-bottom: 100px;" id="mediaBox">
    </div>
@stop
@section('end_script')
    <script src="js/general.min.js?v={{Config::get('app.version')}}"></script>
    <script src="js/pindex.min.js?v={{Config::get('app.version')}}"></script>
@stop