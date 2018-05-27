
@extends('main')
@section('content3')
    <title>Thêm sản phẩm</title>
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
    </head>
@endsection

@section('content1')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li><a href="HangHoa_DS-HangHoa"> Danh sách sản phẩm</a></li>
                <li><a href="TaoMoi_SanPham">Thêm sản phẩm</a></li>
            </ol>
        </section>
        @if($errors->has('TenLapTop'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                        {{--                                                {{Session::get('error')}}--}}
                        {{$errors->first('TenLapTop')}}

                    </div>
                </div>
            </div>
        @endif
        @if($errors->has('HangSX'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                        {{--                                                {{Session::get('error')}}--}}
                        {{$errors->first('HangSX')}}

                    </div>
                </div>
            </div>
        @endif
        @if($errors->has('Anh'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                        {{--                                                {{Session::get('error')}}--}}
                        {{$errors->first('Anh')}}

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
                <form class="form form-vertical" action="{{url('insert_product')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border text-center menu-button">

                            <a class="btn btn-app custom-btn" target="_blank" href="TaoMoi_SanPham" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom">
                                <i class="fa fa-plus-square text-green"></i>
                                <span>
                                            <strong>Tạo Mới</strong>
                                        </span>
                            </a>

                            <BUTTON class="btn btn-app custom-btn " type="submit"data-toggle="modal" title="Lưu" data-placement="bottom" data-target=
                            "#confirm-delete">

                                <i class="fa fa-save text-yellow"></i>
                                <span>
                                            <strong>Lưu</strong>
                                        </span>
                            </BUTTON>
                            <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Hủy" data-placement="bottom" href=""onclick="window.location.reload(true)">
                                <i class="fa fa-mail-reply   text-green"></i>
                                <span><strong>Reset</strong></span>
                            </a>
                        </div>

                        <hr>

                        <h3 style="text-align: center; font-weight: 600;">THÊM SẢN PHẨM</h3>

                        <div class="box-body" style="padding-bottom: 50px">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--<div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>-->
                                    {{--<form class="form form-vertical"style="margin-left: 300px"action="insert_product" method="post">--}}
                                        {{--<input type="hidden" name="_token" value="{{csrf_token()}}">--}}

                                        <div class="row" >
                                            <div class="col-md-3 text-center">
                                                <div class="kv-avatar">
                                                    <div class="file-loading">
                                                        <input id="Anh" name="Anh" type="file"  required>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-9" style="padding-top: 35px">

                                                <div class="row" >

                                                    <div class="col-md-6">
                                                        <label>Tên laptop</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-laptop"></i>
                                                                    </span>
                                                            <input  name="TenLapTop"  id="TenLapTop"class="form-control" placeholder="Nhập tên laptop" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Hãng sản xuất</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-handshake-o"></i>
                                                                    </span>
                                                            <select class="form-control select2" name="HangSX"  id="HangSX">
                                                                <option value="1">Lenovo</option>
                                                                <option value="2">Apple</option>

                                                                <option value="3">Dell</option>
                                                                <option value="4">Asus</option>

                                                                <option value="5">HP</option>
                                                                <option value="6">Acer</option>
                                                                <option value="7">LG</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Hệ điều hành</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-gg-circle"></i>
                                                                    </span>
                                                                <input name="HeDieuHanh"  id="HeDieuHanh"class="form-control" placeholder="Nhập hệ điều hành" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>VAT</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-anchor"></i>
                                                                    </span>
                                                            <input class="form-control" name="VAT"  id="VAT"placeholder="Nhập VAT" type="text">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label>Giá trước VAT (VND)</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-dollar"></i>
                                                                    </span>
                                                            <input class="form-control" name="GiaBan"  id="GiaBan"placeholder="Nhập giá trước thuế" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>CPU</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-eye"></i>
                                                                    </span>
                                                            <input class="form-control" name="CPU"  id="CPU"placeholder="Nhập thông số CPU" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Màn hình</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-eye"></i>
                                                                    </span>
                                                            <input class="form-control" name="ManHinh"  id="ManHinh"placeholder="Nhập kích thước màn hình" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>RAM</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-eye"></i>
                                                                    </span>
                                                            <input class="form-control" name="RAM"  id="RAM"placeholder="Nhập thông số RAM" type="text">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>PIN</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-eye"></i>
                                                                    </span>
                                                            <input class="form-control"name="Pin"  id="Pin" placeholder="Nhập dung lượng Pin" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>ROM</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-eye"></i>
                                                                    </span>
                                                            <input class="form-control" name="ROM"  id="ROM"placeholder="Nhập thông số ROM" type="text">
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="row">


                                                    <div class="col-md-6">
                                                        <label>Số lượng máy:</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-book"></i>
                                                                    </span>
                                                            <textarea class="form-control" name="SoLuongConLai"placeholder="Nhập số lượng máy"  id="SoLuongConLai"rows="1"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Thông số khác:</label>
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-book"></i>
                                                                    </span>
                                                            <textarea class="form-control" name="Khac" placeholder="Nhập thông số khác" id="Khac"rows="1"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">



                                                    {{--<div class="col-md-6">--}}
                                                        {{--<label>Mô tả chi tiết:</label>--}}
                                                        {{--<div class="input-group">--}}
                                                                    {{--<span class="input-group-addon">--}}
                                                                        {{--<i class="fa fa-book"></i>--}}
                                                                    {{--</span>--}}
                                                            {{--<textarea class="form-control" name="MoTa" placeholder="Nhập mô tả máy" id="MoTa"rows="1"></textarea>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                </div>


                                            </div>

                                        </div>
                                    {{--</form>--}}
                                </div>
                            </div>
                        </div>
                    </div>
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
            showBrowse: true,
            browseOnZoneClick: true,
            removeLabel: '',
            removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-2',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src={{ asset('img/add.png') }} style="width:130px; height:130px;" alt="Your photo" name="Anh"><h6 class="text-muted">Lựa chọn ảnh</h6>',
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
@endsection