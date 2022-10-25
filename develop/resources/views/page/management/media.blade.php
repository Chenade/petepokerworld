{{--@include('includes.language')--}}
@extends('layouts.manage', ['page_header' =>'最新消息'])
@section('content')

    <section id="manage_member">
            
        <table id="mediaTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>Order</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>Order</th>
                    <th>Operation</th>
                </tr>
            </tfoot>
        </table>

        </div>
    </section>

    <div class="modal fade" id="media_modal" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><span id="md-method">新增</span>社群資訊</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group">
                            <label class="col-form-label">{{trans('dictionary.type')}}:</label>
                            <select class="col-12 selectpicker nopadding" id="edit_type">
                                <option value="1">Facebook</option>
                                <option value="2">Instagram</option>
                                <option value="3">Line@</option>
                                <option value="4">Discord</option>
                                <option value="5">Line教學群</option>
                                <option value="6">Line Open chat</option>
                                <option value="7">Youtube</option>
                                <option value="8">Twitch</option>
                            </select>
                        </div>
                    </div>
                   
                    <div class="col-12">
                        <div class="form-group">
                            <label class="col-form-label">{{trans('dictionary.content')}}:</label>
                            <textarea style="white-space: pre-wrap;" id="edit_content" name="edit_content" rows="5" cols="33"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label class="col-form-label">{{trans('dictionary.link')}}:</label>
                            <input type="text" class="form-control" id="edit_link">
                        </div>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="col-6 d-flex flex-column justift-content-around">
                            <div class="form-group">
                                <label class="col-form-label">{{trans('dictionary.ord')}}:</label>
                                <input type="number" class="form-control" id="edit_ord" min="1" max="99" value="1">
                            </div>
                            <hr class="image-box">
                            <div class="form-group image-box">
                                <label class="col-form-label">{{trans('dictionary.uploadThumbnail')}}:</label>
                                <input type="file" id="file-t" name='file-t'>
                                <input type="hidden" id="file-tcount" value='0'>
                            </div>
                        </div>
                        <!-- <div class="col-5 image-box">
                            
                        </div> -->
                        <div class="col-6 image-box">
                            <div class="d-flex flex-wrap">
                                <div class="col-12 d-flex flex-column align-items-center" style="margin: 10px; padding: 10px; border-radius: 10px; background-color: #e5e5e5;">
                                    <h6>縮圖</h6>
                                    <div id="display-thumb" class="d-flex justify-content-center align-items-center" style="height: 180px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success save-btn" data-action="add" data-loading-text="<span class='spinner-grow spinner-grow-sm'></span>" data-dismiss="modal">{{trans('dictionary.save')}}</button>
                    <button type="button" class="btn btn-danger delete-btn" data-action="delete" data-loading-text="<span class='spinner-grow spinner-grow-sm'></span>">{{trans('dictionary.delete')}}</button>
                </div>
            </div>
        </div>
    </div>



@stop
@section('end_script')

<link rel="stylesheet" href="/lib/DataTables/datatables.min.css">
    <link rel="stylesheet" href="/lib/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/lib/datetimepicker/datetimepicker.min.css">

    <link rel="stylesheet" href="/lib/flatpickr/flatpickr.min.css">
    <script src="/lib/flatpickr/flatpickr.min.js"></script>

    <script src="/lib/DataTables/datatables.min.js"></script>
    <!-- <script src="js/lib/jquery.fileDownload.min.js"></script> -->
    <script src="/js/lib/moment.min.js"></script>
    <script src="/js/lib/moment-timezone.min.js"></script>

    <script src="/lib/daterangepicker/daterangepicker.js"></script>
    <script src="/lib/datetimepicker/moment-with-locales.min.js"></script>
    <script src="/lib/datetimepicker/datetimepicker.min.js"></script>
    <script src="/lib/jstree/jstree.min.js"></script>
    <script src="/lib/jstree/jstree-grid.js"></script>

    <script src="/js/lib/jquery-ui.min.js"></script>
    <script src="/js/lib/jquery.ui.touch-punch.min.js"></script>
    <script src="/lib/bootstrap/js/bootbox.min.js"></script>
    <script src="/js/general.min.js"></script>
    <script src="/js/manage/media.min.js"></script>
    

@stop
