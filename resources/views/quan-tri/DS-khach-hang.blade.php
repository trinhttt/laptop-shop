@extends('main')
@section('content3')
    <title>Danh sách sản phẩm</title>
@endsection
@section('content')
    <style>
        #example1 {
            background-color: rgb(240, 240, 240);
        }
        #example1 thead tr th {
            vertical-align: middle !important;
            text-align: center;
            background-color: #3c8dbc;
            color: #fff;
        }
        #example1 tbody td:nth-child(6),#example1 tbody td:nth-child(7),
        #example1 tbody td:nth-child(9) {
            text-align: right;
        }
        .menu-button {
            background-color: #fcf9f9;
            margin-top: 20px;
            padding-top:20px;
            padding-right:25px;
        }
        .custom-btn {
            padding: 10px 5px;
            min-width: 80px;
            height: 55px;
        }
        .edit-btn {
            padding: 10px 5px;
            min-width: 60px;
            height: 40px;
        }
    </style>
@endsection

@section('content1')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="phanphoi_index.html"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li><a href="phanphoi_cungcap_danh-sach-nha-cung-cap.html">Danh sách khách hàng</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="row" style="margin-left:0px; margin-right:0px; margin-top: 10px;">
                            <div class="col-md-12">
                                <h4>
                                    <b>Danh sách khách hàng</b>
                                </h4>
                            </div>
                        </div>
                        <!--end box header-->
                        <div class="box">
                            <div class="box-header with-border text-center menu-button">

                                <a class="btn btn-app custom-btn" data-toggle="tooltip" href="TaoMoi_KhachHang" target="_blank" title="Tạo Mới" data-placement="bottom" >
                                    <i class="fa fa-plus-square text-green"></i>
                                    <span><strong>Tạo Mới</strong></span>
                                </a>

                                <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Import Excel" data-placement="bottom">
                                    <i class="fa fa-download text-grey"></i>
                                    <span><strong>Import Excel</strong></span>
                                </a>
                                <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xuất Excel" data-placement="bottom">
                                    <i class="fa fa-file-excel-o text-green"></i>
                                    <span><strong>Xuất Excel</strong></span>
                                </a>
                                <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xuất PDF" data-placement="bottom">
                                    <i class="fa fa-file-pdf-o text-red"></i>
                                    <span><strong>Xuất PDF</strong></span>
                                </a>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <h3 class="box-title">Tìm kiếm theo</h3>
                                            </div>
                                            <div class="box-body">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <td>Tên</td>
                                                        <td width="35%">
                                                            <div class="input-group" >
                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                <input type="text" class="form-control" placeholder="Tên...">
                                                            </div>
                                                        </td>
                                                        <td style="padding-left: 120px;">Ngày tạo</td>
                                                        <td>
                                                            <div class="col-sm-5 no-padding">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input style="width: 150px" type="text" class="form-control" id="datepicker" placeholder="Từ...">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 col-sm-offset-1 no-padding">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input style="width: 150px" type="text" class="form-control" id="datepicker2" placeholder="Đến...">
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="box-footer clearfix">
                                                    <div class="pagination pagination-sm no-margin pull-right" style="padding-right: 19px">
                                                        <button type="button" class="btn btn-block btn-primary">Tìm kiếm <i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end box search-->
                                        </div>
                                    </div>
                                </div>
                                @if($errors->has('HoTenKH'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                {{--                                                {{Session::get('error')}}--}}
                                                {{$errors->first('HoTenKH')}}

                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if($errors->has('TaiKhoanKH'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                {{--                                                {{Session::get('error')}}--}}
                                                {{$errors->first('TaiKhoanKH')}}

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

                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <fieldset>
                                                <table id="example1" class="table table-bordered table-striped">

                                                    <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Tên</th>
                                                        <th>Giới tính</th>
                                                        <th>Ngày sinh</th>
                                                        <th>Số điện thoại</th>
                                                        <th>Địa chỉ</th>
                                                        <th>Email</th>
                                                        <th>Thay đổi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $stt=0?>
                                                    @foreach($sps as $sp)


                                                        <tr>

                                                            <td class="text-center">{{++$stt}}</td>
                                                            <td class="text-left">{{$sp->HoTenKH}}</td>
                                                            <td class="text-left">{{$sp->GioiTinhKH}}</td>

                                                            <td class="text-left">{{$sp->NgaySinhKH}}</td>
                                                            <td class="text-left">{{$sp->SDTKH}}</td>
                                                            <td class="text-left">{{$sp->DiaChiKH}}</td>
                                                            <td class="text-center">{{$sp->TaiKhoanKH}}</td>
                                                            <td style="text-align: center" >
                                                                <a id="btn_row{{$stt}}" class=" btn_row btn btn-app custom-btn edit-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom" name="sua">
                                                                    <i class="fa fa-edit text-blue"></i>
                                                                </a>
                                                            </td>

                                                        </tr>


                                                        <form style="margin-left: 50px;color:black" action="{{url('edit_KhachHang/'.$sp->MaKhachHang)}}" method="post">
                                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                                            <tr id="row{{$stt}}" class="toggle">

                                                                <td colspan="10">
                                                                    <div class="container-fluid">
                                                                        <div class="row">


                                                                            <div class="col-md-6">
                                                                                <label>Tên khách hàng</label>
                                                                                <div class="input-group">
                                                                                        <span class="input-group-addon">
                                                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                                                        </span>
                                                                                    <input type="text"  name="HoTenKH"  id="HoTenKH"class="form-control" value="{{$sp->HoTenKH}}">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <label>Giới tính</label>
                                                                                <div class="input-group">
                                                                                        <span class="input-group-addon">
                                                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                                                        </span>
                                                                                    <input type="text" name="GioiTinhKH"  id="GioiTinhKH"class="form-control" value="{{$sp->GioiTinhKH}}" >
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label>Ngày sinh</label>
                                                                                <div class="input-group">
                                                                                        <span class="input-group-addon">
                                                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                                                        </span>
                                                                                    <input type="text" name="NgaySinhKH"  id="NgaySinhKH"class="form-control" value="{{$sp->NgaySinhKH}}">
                                                                                </div>
                                                                            </div>



                                                                            <div class="col-md-6">
                                                                                <label>Số điện thoại</label>
                                                                                <div class="input-group">
                                                                                        <span class="input-group-addon">
                                                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                                                        </span>
                                                                                    <input type="text" name="SDTKH"  id="SDTKH"class="form-control" value="{{$sp->SDTKH}}">
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label>Địa chỉ</label>
                                                                                <div class="input-group">
                                                                                        <span class="input-group-addon">
                                                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                                                        </span>
                                                                                    <input type="text" name="DiaChiKH"  id="DiaChiKH"class="form-control" value="{{$sp->DiaChiKH}}">
                                                                                </div>
                                                                            </div>



                                                                            <div class="col-md-6">
                                                                                <label>Tài khoản</label>
                                                                                <div class="input-group">
                                                                                        <span class="input-group-addon">
                                                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                                                        </span>
                                                                                    <input type="text" name="TaiKhoanKH"  id="TaiKhoanKH"class="form-control" value="{{$sp->TaiKhoanKH}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>






                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="">
                                                                                <div class="col-md-10"></div>
                                                                                <div class="col-md-1">
                                                                                    <a href="" id="cancel_btn{{$stt}}" class="btn btn-default btn-block">Hủy</a>
                                                                                </div>
                                                                                <div class="col-md-1">
                                                                                    <button name="btnButton" value="rescheduleAction2" type="submit" data-target="#popupConfirm"style="color:white;background-color:green" class="btn btn-default" data-dismiss="modal">Sửa</button>

                                                                                    {{--<a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm">Sửa</a>--}}
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>

                                                        </form>

                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!--end main box-->
                </div>
                <!--end main col-->
            </div>
            <!--end main row-->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('content2')

    <script>
        var j;
        var size=0;
        @foreach($sps as $sp)
            size++;
        @endforeach

console.log(size);
        for(j=1;j<=size;j++)
        {
            $("#row"+j ).hide();
            //console.log("#row" + j);
        }

        var btn_row = {
            btn_row1: '1',
            btn_row2: '2',
            btn_row3: '3',
            btn_row4: '4',
            btn_row5: '5',
            btn_row6: '6',
            btn_row7: '7',
            btn_row8: '8',
            btn_row9: '9',
            btn_row10: '10',
            btn_row11: '11'

        };

        $('.btn_row').click(function () {
            var b= btn_row[this.id];//window[this.id];//btn_row[this.id];
            $('#row'+b).toggle();
            event.preventDefault();

        });


    </script>
    <div class="modal fade" id="popupConfirm" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Xác nhận lưu thông tin đã sửa</h4>
                </div>


                {{--<div class="modal-footer" style="margin-right:15px">--}}
                {{--<div style="margin:0 auto;">--}}

                {{--<button name="btnButton" value="rescheduleAction2" type="button" data-target="#"style="color:white;background-color:green" class="btn btn-default" data-dismiss="modal" onclick="window.location.href = '{{url('edit_KhachHang/'.$sp->MaKhachHang)}}'">OK</button>--}}

                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>

        </div>
    </div>

@endsection
