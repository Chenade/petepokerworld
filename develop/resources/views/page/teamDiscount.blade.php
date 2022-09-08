@include('includes.language')
@extends('layouts.default', ['page_header' =>trans('dictionary.teams_discount'),'page_parent' =>'Team','page_parent_path' =>'/','page_path' =>'', 'page_banner' =>'sub_banner.png'])
@section('content')
    <div class="container" style="margin-top:50px; min-height: 100vh;">
        <div class="d-flex flex-wrap" style="padding: 15px;" id="events"></div>
        <div style="margin-top:20px;"></div>
    </div>

    <div class="modal fade" id="n8_modal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">N8戰隊優惠</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <p id="des" class="col-12"></p>
                    <div id="img-box">

                    </div>
                    <hr>
                    <p style="text-align: right;" class="nopadding">Updated At: <span id="updated_at"></span></p>
                    <p style="text-align: right;" class="nopadding">Created At: <span id="created_at"></span></p>
                </div>
            </div>
        </div>
    </div>

@stop
@section('end_script')
    <script src="/js/general.min.js?v={{Config::get('app.version')}}"></script>
    <script src="/js/pteams.min.js?v={{Config::get('app.version')}}"></script>
@stop