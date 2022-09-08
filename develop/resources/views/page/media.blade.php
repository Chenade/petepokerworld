@include('includes.language')
@extends('layouts.default', ['page_header' =>'小P社群','page_parent' =>'Media','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'sub_banner.png'])
@section('content')
    <div class="container" style="margin-top:50px; min-height: 100vh;">
        <!-- body -->

        <div class="d-flex flex-wrap align-items-center">
            <div class='box col-12 col-lg-4'>
                <img class="content" style="border-radius: 50%;" src="https://images.fonearena.com/blog/wp-content/uploads/2013/11/Lenovo-p780-camera-sample-10.jpg" alt="your_keyword"/>
            </div>
            <div class="col-12 col-lg-8 d-flex flex-column justify-content-around" style="white-sapce: break; margin-top: 20px;">
                <div class="col-12" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare blandit lorem in placerat. Sed dignissi. Aliquam et suscipit magna. Integer ac ipsum eu urna sagittis iaculis. Donec vehicula libero iaculis ipsum tristique ultricies. Donec rhoncus nulla lectus, et egestas lacus egestas a. Etiam bibendum pellentesque urna, vitae eleifend nulla dictum id. Donec semper mauris et lorem dapibus, a vulputate lacus efficitur. Aenean a fermentum dui, eu porttitor turpis. Morbi ornare vulputate viverra. Sed porttitor lacus ut laoreet mattis. Pellentesque in molestie nisl.</div>
                <div style="margin-top: 20px;">
                    <button class="btn btn-info">Facebook</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-wrap align-items-center flex-row-reverse">
            <div class='box col-12 col-lg-4'>
                <img class="content" style="border-radius: 50%;" src="https://images.fonearena.com/blog/wp-content/uploads/2013/11/Lenovo-p780-camera-sample-10.jpg" alt="your_keyword"/>
            </div>
            <div class="col-12 col-lg-8 d-flex flex-column justify-content-around" style="white-sapce: break; margin-top: 20px;">
                <div class="col-12" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare blandit lorem in placerat. Sed dignissi. Aliquam et suscipit magna. Integer ac ipsum eu urna sagittis iaculis. Donec vehicula libero iaculis ipsum tristique ultricies. Donec rhoncus nulla lectus, et egestas lacus egestas a. Etiam bibendum pellentesque urna, vitae eleifend nulla dictum id. Donec semper mauris et lorem dapibus, a vulputate lacus efficitur. Aenean a fermentum dui, eu porttitor turpis. Morbi ornare vulputate viverra. Sed porttitor lacus ut laoreet mattis. Pellentesque in molestie nisl.</div>
                <div style="margin-top: 20px;">
                    <button class="btn btn-info">Facebook</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-wrap align-items-center">
            <div class='box col-12 col-lg-4'>
                <img class="content" style="border-radius: 50%;" src="https://images.fonearena.com/blog/wp-content/uploads/2013/11/Lenovo-p780-camera-sample-10.jpg" alt="your_keyword"/>
            </div>
            <div class="col-12 col-lg-8 d-flex flex-column justify-content-around" style="white-sapce: break; margin-top: 20px;">
                <div class="col-12" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare blandit lorem in placerat. Sed dignissi. Aliquam et suscipit magna. Integer ac ipsum eu urna sagittis iaculis. Donec vehicula libero iaculis ipsum tristique ultricies. Donec rhoncus nulla lectus, et egestas lacus egestas a. Etiam bibendum pellentesque urna, vitae eleifend nulla dictum id. Donec semper mauris et lorem dapibus, a vulputate lacus efficitur. Aenean a fermentum dui, eu porttitor turpis. Morbi ornare vulputate viverra. Sed porttitor lacus ut laoreet mattis. Pellentesque in molestie nisl.</div>
                <div style="margin-top: 20px;">
                    <button class="btn btn-info">Facebook</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-wrap align-items-center flex-row-reverse">
            <div class='box col-12 col-lg-4'>
                <img class="content" style="border-radius: 50%;" src="https://images.fonearena.com/blog/wp-content/uploads/2013/11/Lenovo-p780-camera-sample-10.jpg" alt="your_keyword"/>
            </div>
            <div class="col-12 col-lg-8 d-flex flex-column justify-content-around" style="white-sapce: break; margin-top: 20px;">
                <div class="col-12" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ornare blandit lorem in placerat. Sed dignissi. Aliquam et suscipit magna. Integer ac ipsum eu urna sagittis iaculis. Donec vehicula libero iaculis ipsum tristique ultricies. Donec rhoncus nulla lectus, et egestas lacus egestas a. Etiam bibendum pellentesque urna, vitae eleifend nulla dictum id. Donec semper mauris et lorem dapibus, a vulputate lacus efficitur. Aenean a fermentum dui, eu porttitor turpis. Morbi ornare vulputate viverra. Sed porttitor lacus ut laoreet mattis. Pellentesque in molestie nisl.</div>
                <div style="margin-top: 20px;">
                    <button class="btn btn-info">Facebook</button>
                </div>
            </div>
        </div>
        

        <div style="margin-top:20px;"></div>

    </div>

    
@stop
@section('end_script')
    <script src="js/general.min.js?v={{Config::get('app.version')}}"></script>
    <!-- <script src="js/pindex.min.js?v={{Config::get('app.version')}}"></script> -->
@stop