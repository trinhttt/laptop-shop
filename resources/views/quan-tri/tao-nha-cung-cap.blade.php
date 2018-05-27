
@extends('main')
@section('content3')
<<<<<<< HEAD
    <title>Danh sách khách hàng</title>
@endsection
@section('content')
        <style>
            .custom-btn {
                padding: 10px 5px;
                min-width: 80px;
                height: 55px;
            }
            .custom-chk {
                padding-left: 15px;
            }
            .menu-button {
                background-color: #fcf9f9; 
                margin-top: 20px;
                padding-top:20px;
                padding-right:25px;
            }
			.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
                margin: 0;
                padding: 0;
                border: none;
                box-shadow: none;
                text-align: center;
            }
            .kv-avatar {
                display: inline-block;
            }
            .kv-avatar .file-input {
                display: table-cell;
                width: 213px;
                padding-top: 25px;
            }
            .kv-reqd {
                color: red;
                font-family: monospace;
                font-weight: normal;
            }
        </style>
=======
    <title>Danh sách nhà cung cấp</title>
@endsection
@section('content')
    <style>
        .custom-btn {
            padding: 10px 5px;
            min-width: 80px;
            height: 55px;
        }
        .custom-chk {
            padding-left: 15px;
        }
        .menu-button {
            background-color: #fcf9f9;
            margin-top: 20px;
            padding-top:20px;
            padding-right:25px;
        }
        .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
            margin: 0;
            padding: 0;
            border: none;
            box-shadow: none;
            text-align: center;
        }
        .kv-avatar {
            display: inline-block;
        }
        .kv-avatar .file-input {
            display: table-cell;
            width: 213px;
            padding-top: 25px;
        }
        .kv-reqd {
            color: red;
            font-family: monospace;
            font-weight: normal;
        }
    </style>
>>>>>>> aed40939bbbbfd1b184b184dd50b8fd156a1b164
    </head>
@endsection

@section('content1')


<<<<<<< HEAD
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="phanphoi_index.html"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                        <li>Danh sách nhà cung cấp</li>
                        <li><a href="phanphoi_cungcap_tao-nha-cung-cap.html">Thêm nhà cung cấp</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">                            
                                <div class="box-header with-border text-center menu-button">

                                    <a class="btn btn-app custom-btn" target="_blank" href="phanphoi_cungcap_tao-nha-cung-cap.html" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom">
                                        <i class="fa fa-plus-square text-green"></i>
                                        <span>
                                            <strong>Tạo Mới</strong>
                                        </span>
                                    </a>

                                    <a class="btn btn-app custom-btn " data-toggle="modal" title="Lưu" data-placement="bottom" data-target=
                                       "#confirm-delete">
                                        <i class="fa fa-save text-yellow"></i>
                                        <span>
                                            <strong>Lưu</strong>
                                        </span>
                                    </a>

                                </div>

                                <hr>

                                <h3 style="text-align: center; font-weight: 600;">THÊM NHÀ CUNG CẤP</h3>

                                <div class="box-body" style="padding-bottom: 50px">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!--<div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>-->
                                            <form class="form form-vertical">
                                                <div class="row">
                                                    <div class="col-md-3 text-center">
                                                        <div class="kv-avatar">
                                                            <div class="file-loading">
                                                                <input id="avatar-2" name="avatar-2" type="file" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9" style="padding-top: 0px">
                                                        <div class="row" >
                                                            <div class="col-md-6">
                                                                <label>Đơn vị</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-user"></i>
                                                                    </span>
                                                                    <input class="form-control" placeholder="Tên nhà cung cấp...">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Số điện thoại</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-phone"></i>
                                                                    </span>
                                                                    <input class="form-control" placeholder="Số điện thoại..." type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 10px;">
                                                            <div class="col-md-6">
                                                                <label>Địa chỉ nhận hóa đơn</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-address-book"></i>
                                                                    </span>
                                                                    <input class="form-control" placeholder="Địa chỉ nhận hóa đơn..." type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Địa chỉ giao hàng</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-address-book"></i>
                                                                    </span>
                                                                    <input class="form-control" placeholder="Địa chỉ giao hàng..." type="text">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row" style="margin-top: 10px;">
                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </span>
                                                                    <input class="form-control" placeholder="Email..." type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>MST</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-bank"></i>
                                                                    </span>
                                                                    <input class="form-control" placeholder="Mã số thuế..." type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>    
=======
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="phanphoi_index.html"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li>Danh sách nhà cung cấp</li>
                <li><a href="phanphoi_cungcap_tao-nha-cung-cap.html">Thêm khách hàng</a></li>
            </ol>
        </section>
        @if($errors->has('TenNhaCC'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                        {{--                                                {{Session::get('error')}}--}}
                        {{$errors->first('TenNhaCC')}}

                    </div>
                </div>
            </div>
        @endif
        @if($errors->has('DiaChiWebsite'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                        {{--                                                {{Session::get('error')}}--}}
                        {{$errors->first('DiaChiWebsite')}}

                    </div>
                </div>
            </div>
        @endif
        @if(Session::has('success'))

            <div class="row" >
                <div class="col-md-12">
                    <div class="alert"style="background-color: #dff0d8;width: 97%;margin-left: 14px">
                        {{Session::get('success')}}
                    </div>
                </div>
            </div>
    @endif
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form action="{{url('insert_NhaCungCap')}}" method="post"enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border text-center menu-button">

                            <a class="btn btn-app custom-btn" target="_blank" href="TaoMoi_NhaCungCap" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom">
                                <i class="fa fa-plus-square text-green"></i>
                                <span>
                                            <strong>Tạo Mới</strong>
                                        </span>
                            </a>

                            <BUTTON class="btn btn-app custom-btn " data-toggle="modal" title="Lưu" data-placement="bottom" data-target=
                            "#confirm-delete">
                                <i class="fa fa-save text-yellow"></i>
                                <span>
                                            <strong>Lưu</strong>
                                        </span>
                            </BUTTON>
                        </div>

                        <hr>

                        <h3 style="text-align: center; font-weight: 600;">THÊM NHÀ CUNG CẤP</h3>

                        <div class="box-body" style="padding-bottom: 50px">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--<div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>-->
                                    {{--<form class="form form-vertical"style="margin-left: 300px"action="insert_product" method="post">--}}
                                        {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}

                                        <div class="row" >
                                            


                                            <div class="col-md-9" style="padding-top: 35px">

                                                <div class="row" >

                                                    <div class="col-md-6">
                                                        <label>Tên Nhà cung cấp</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-laptop"></i>
                                                                    </span>
                                                            <input  name="TenNhaCC"  id="TenNhaCC"class="form-control" placeholder="Nhập tên nhà cung cấp" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Số điện thoại</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-handshake-o"></i>
                                                                    </span>
                                                                    <input type="text" name="SDTNhaCC" class="form-control" placeholder="Số điện thoại" id="SDTNhaCC">    
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Địa Chỉ Nhà Cung Cấp</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-gg-circle"></i>
                                                                    </span>
                                                                <input name="DiaChiNhaCC"  id="DiaChiNhaCC"class="form-control" placeholder="nhập địa chỉ" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Địa chỉ website</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-anchor"></i>
                                                                    </span>
                                                            <input class="form-control" name="DiaChiWebsite"  id="DiaChiWebsite"placeholder="Nhập địa chỉ website" type="text">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    {{--</form>--}}
>>>>>>> aed40939bbbbfd1b184b184dd50b8fd156a1b164
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
@endsection
@section('content2')

        <!-- page script -->
        <script>
            var btnCust = '';
            $("#avatar-2").fileinput({
                overwriteInitial: true,
                maxFileSize: 1500,
                showClose: false,
                showCaption: false,
                showBrowse: false,
                browseOnZoneClick: true,
                removeLabel: '',
                removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                removeTitle: 'Cancel or reset changes',
                elErrorContainer: '#kv-avatar-errors-2',
                msgErrorClass: 'alert alert-block alert-danger',
                defaultPreviewContent: '<img src="dist/img/hph.jpg" style="width:130px; height:130px;" alt="Your Avatar"><h6 class="text-muted">Lựa chọn ảnh</h6>',
                layoutTemplates: {main2: '{preview} ' + btnCust + ' {remove} {browse}'},
                allowedFileExtensions: ["jpg", "png", "gif"]
            });
        </script>

        <div class="row">
            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Xác nhận lưu thông tin</h4>
                        </div>
                        <div class="modal-body">
                            <label>Bạn có muốn lưu thông tin đã nhập?</label>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Đóng"/>
                            <input onclick="location.href = 'phanphoi_cungcap_chi-tiet-nha-cung-cap.html';" type="button" class="btn btn-success btn-ok" value="Có"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
=======
                </div>
                </form>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('content2')

    <!-- page script -->
    <script>
        var btnCust = '';
        $("#Anh").fileinput({
            overwriteInitial: true,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            showBrowse: false,
            browseOnZoneClick: true,
            removeLabel: '',
            removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-2',
            msgErrorClass: 'alert alert-block alert-danger',
            layoutTemplates: {main2: '{preview} ' + btnCust + ' {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"]
        });
    </script>

    {{--<div class="row">--}}
        {{--<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
            {{--<div class="modal-dialog">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header">--}}
                        {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                        {{--<h4 class="modal-title" id="myModalLabel">Xác nhận lưu thông tin</h4>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                        {{--<label>Bạn có muốn lưu thông tin đã nhập?</label>--}}
                    {{--</div>--}}
                    {{--<div class="modal-footer">--}}
                        {{--<input type="button" class="btn btn-default" data-dismiss="modal" value="Đóng"/>--}}
                        {{--<input onclick="location.href = 'phanphoi_cungcap_chi-tiet-nha-cung-cap.html';" type="button" class="btn btn-success btn-ok" value="Có"/>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
>>>>>>> aed40939bbbbfd1b184b184dd50b8fd156a1b164
@endsection