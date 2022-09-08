@include('includes.language')
@extends('layouts.default', ['page_header' =>'About','page_parent' =>'Home','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'sub_banner.png'])
@section('content')
    <div class="container" style="margin-top:130px; min-height: 100vh;">
        <!-- body -->

        <div class="col-12">
            <div class="section-heading text-center">
                <h6 class="tag" id="category">News </h6>
                <h2 id="title"></h2>
            </div>
        </div>

        
        <div class="carousel-container">
            <div class="owl-carousel owl-theme"></div>
        </div>
        
        <div class="" style="padding: 15px; " id="events">
            <div>
                <p style="text-align: justify; line-height: 2em; font-size: 1.2em;" id="des"></p>
            </div>
        </div>

        <div class="col-12 d-flex justify-content-end">
            <button class="btn-pete nopadding" id="link">Read more</button> 
        </div>
        <hr>
        <div class="col-12 d-flex">
            <p class="col-12 col-sm-6">Created At: <span id="created_at"></span></p>
            <p class="col-12 col-sm-6">Update At: <span id="updated_at"></span></p>
        </div>

        <div style="margin-top:20px;"></div>

    </div>

@stop
@section('end_script')
    <script src="js/general.min.js?v={{Config::get('app.version')}}"></script>
    <script src="js/pnew.min.js?v={{Config::get('app.version')}}"></script>
@stop