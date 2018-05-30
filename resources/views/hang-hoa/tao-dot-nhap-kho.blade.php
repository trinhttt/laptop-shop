@extends('main')
@section('content3')
<title>Tạo đợt nhập kho</title>
@endsection
@section('content')
        <style>
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
            .mainTable {
                background-color: rgb(240, 240, 240);
            }
            .mainTable thead tr th {
                vertical-align: middle !important;
                text-align: center;
                background-color: #3c8dbc;
                color: #fff;
            }
            .mainTable tbody td:nth-child(6),.mainTable tbody td:nth-child(7),
            .mainTable tbody td:nth-child(9) {
                text-align: right;
            }
            .pointerCursor {
                cursor: pointer;
            }
            .textCursor {
                cursor: text;
            }
            .noDisplay {
                display: none !important;
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
                        <li>Hàng hóa</li>
                        <li>Nhập hàng</li>
                        <li class="active">Tạo đơn nhập mới</li>
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
                <form style="margin-top: 25px;" action="{{url('LapPhieuNhapHang')}}" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header" style="text-align: center;margin-top: 30px;">
                                    <h3 class="box-title with-border"><b style="font-size: 25px;">Nhập hàng vào kho</b></h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <div class="row">
                                        <div class="box-header with-border text-center menu-button" style="margin-left: 5px; margin-right: 5px;">
                                            <a class="btn btn-app custom-btn" target="_blank" href="HangHoa_TaoDotNhapHang" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom">
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
                                            <a class="btn btn-app custom-btn disabled">
                                                <i class="fa fa-close text-gray"></i>
                                                <span><strong>Hủy</strong></span>
                                            </a>

                                        </div>	
                                    </div>
                                    <form style="margin-top: 25px;">
                                        <div class="box-header">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <fieldset>
                                                        <legend><b style="font-size: 17px;">Thông tin đơn hàng</b></legend>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Nhập hàng / Đổi trả</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-exchange"></i></span>
                                                                    <input NAME="status"type="checkbox" id="status" data-toggle="toggle" checked data-on="Nhập hàng" data-off="Đổi trả">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 15px;">

                                                            <div class="col-md-6">
                                                                <label>Tên nhà cung cấp</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                                                                    <input  name="TenNhaCC"  id="TenNhaCC"class="form-control" placeholder="Nhập tên nhà cung cấp" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Số điện thoại</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                                                                    <input type="text" name="SDTNhaCC" class="form-control" placeholder="Nhập số điện thoại" id="SDTNhaCC">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 15px;">
                                                            <div class="col-md-6">
                                                                <label>Địa chỉ</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                                    <input name="DiaChiNhaCC"  id="DiaChiNhaCC"class="form-control" placeholder="Nhập địa chỉ" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Nhập link website</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                                                    <input class="form-control" name="DiaChiWebsite"  id="DiaChiWebsite"placeholder="Nhập link website" type="text">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row" style="margin-top: 15px;">
                                                            <div class="col-md-6">
                                                                <label>Tổng số sản phẩm</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-laptop"></i></span>
                                                                    <input type="number"NAME="SoSanPham"id="delivery" min="0" max="6" step="1" value="0" style="padding-left: 12px;" onchange="deliveryQtt();" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Ngày yêu cầu</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" name="NgayYeuCau"placeholder="Chọn ngày yêu cầu"class="form-control datepicker" id="requestDay" style="padding-left: 12px;">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row" style="margin-top: 15px;">

                                                            <div class="col-md-6">
                                                                <label>Ngày nhập</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" name="NgayNhap"placeholder="Chọn ngày nhập"class="form-control datepicker" id="day" style="padding-left: 12px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-header">
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-xs-12 table-responsive">

                                                    <legend><b style="font-size: 17px;">Chi tiết đơn hàng</b></legend>
                                                    <table class="table table-striped mainTable">
                                                        <fieldset>
                                                            <thead>
                                                            {{--<tr>--}}
                                                            {{--<th style="width: 30px;">STT</th>--}}
                                                            {{--<th style="width: 300px;">Sản phẩm</th>--}}
                                                            {{--<th style="width: 150px;">Mã hàng</th>--}}
                                                            {{--<th style="width: 100px;">Số lượng</th>--}}
                                                            {{--<th style="width: 100px;">Số lượng nhập kho</th>--}}
                                                            {{--<th>Lý do</th>--}}
                                                            {{--</tr>--}}
                                                            <tr>
                                                                <th  style="width: 30px;">STT</th>
                                                                <th  colspan="3" style="width: 200px;">Sản phẩm</th>
                                                                <th style="width: 60px;">Số lượng (cái)</th>
                                                                <th  style="width: 170px;">Đơn giá (VNĐ)</th>
                                                                <th style="width: 170px;">Thành tiền</th>
                                                                <th  colspan="4"style="width: 100px;">Lý do nhập hàng</th>
                                                            </tr>

                                                            </thead>
                                                        </fieldset>

                                                        <tbody>

                                                        <tr class="noDisplay" id="turn1">
                                                            <td style="vertical-align: middle;">1</td>

                                                            <td colspan="3"  >
                                                                <input placeholder="Nhập tên sản phẩm"id="laptop_1"name="TenLapTop[0]"type="text" class="form-control" style="text-align: right"
                                                                /></td></td>
                                                            <td><input id="cai_1"NAME="SoLuong[0]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                /></td>

                                                            <td style="text-align: right">
                                                                <input NAME="DonGia[0]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                       onkeyup="configSp('1');
                                                                                       return false;" id="dongia_1"/>

                                                            </td>
                                                            <td style="text-align: right"><output class="number"id="tien_chua_ck_1">0</output></td>
                                                            <td colspan="4"><input placeholder="Lý do nhập hàng"name="status[0]"type="text" class="form-control" style="text-align: right"
                                                                      /></td>



                                                        </tr>
                                                        <tr class="noDisplay" id="turn2">
                                                            <td style="vertical-align: middle;">2</td>

                                                            <td colspan="3"  >
                                                                <input placeholder="Nhập tên sản phẩm"name="TenLapTop[1]"id="laptop_2"type="text" class="form-control" style="text-align: right"
                                                                /></td></td>
                                                            <td><input id="cai_2"NAME="SoLuong[1]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                /></td>

                                                            <td style="text-align: right">
                                                                <input NAME="DonGia[1]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                       onkeyup="configSp('2');
                                                                                       return false;" id="dongia_2"/>

                                                            </td>
                                                            <td style="text-align: right"><output class="number"id="tien_chua_ck_2">0</output></td>
                                                            <td colspan="4"><input placeholder="Lý do nhập hàng"name="status[1]"type="text" class="form-control" style="text-align: right"
                                                                /></td>



                                                        </tr>

                                                        <tr class="noDisplay" id="turn3">
                                                            <td style="vertical-align: middle;">3</td>

                                                            <td colspan="3"  >
                                                                <input placeholder="Nhập tên sản phẩm"name="TenLapTop[2]"id="laptop_3"type="text" class="form-control" style="text-align: right"
                                                                /></td></td>
                                                            <td><input id="cai_3"NAME="SoLuong[2]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                /></td>

                                                            <td style="text-align: right">
                                                                <input NAME="DonGia[2]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                       onkeyup="configSp('3');
                                                                                       return false;" id="dongia_3"/>

                                                            </td>
                                                            <td style="text-align: right"><output class="number"id="tien_chua_ck_3">0</output></td>
                                                            <td colspan="4"><input placeholder="Lý do nhập hàng"name="status[2]"type="text" class="form-control" style="text-align: right"
                                                                /></td>



                                                        </tr>
                                                        <tr class="noDisplay" id="turn4">
                                                            <td style="vertical-align: middle;">4</td>

                                                            <td colspan="3"  >
                                                                <input placeholder="Nhập tên sản phẩm"name="TenLapTop[3]"id="laptop_4"type="text" class="form-control" style="text-align: right"
                                                                /></td></td>
                                                            <td><input id="cai_4"NAME="SoLuong[3]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                /></td>

                                                            <td style="text-align: right">
                                                                <input NAME="DonGia[3]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                       onkeyup="configSp('4');
                                                                                       return false;" id="dongia_4"/>

                                                            </td>
                                                            <td style="text-align: right"><output class="number"id="tien_chua_ck_4">0</output></td>
                                                            <td colspan="4"><input placeholder="Lý do nhập hàng"name="status[3]"type="text" class="form-control" style="text-align: right"
                                                                /></td>


                                                        </tr>
                                                        <tr class="noDisplay" id="turn5">
                                                            <td style="vertical-align: middle;">5</td>

                                                            <td colspan="3"  >
                                                                <input placeholder="Nhập tên sản phẩm"name="TenLapTop[4]"id="laptop_5"type="text" class="form-control" style="text-align: right"
                                                                /></td></td>
                                                            <td><input id="cai_5"NAME="SoLuong[4]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                /></td>

                                                            <td style="text-align: right">
                                                                <input NAME="DonGia[4]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                       onkeyup="configSp('5');
                                                                                       return false;" id="dongia_"/>

                                                            </td>
                                                            <td style="text-align: right"><output class="number"id="tien_chua_ck_5">0</output></td>
                                                            <td colspan="4"><input placeholder="Lý do nhập hàng"name="status[4]"type="text" class="form-control" style="text-align: right"
                                                                /></td>


                                                        </tr>
                                                        <tr class="noDisplay" id="turn6">
                                                            <td style="vertical-align: middle;">6</td>

                                                            <td colspan="3"  >
                                                                <input placeholder="Nhập tên sản phẩm"name="TenLapTop[5]"id="laptop_6"type="text" class="form-control" style="text-align: right"
                                                                /></td></td>
                                                            <td><input id="cai_6"NAME="SoLuong[5]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                /></td>

                                                            <td style="text-align: right">
                                                                <input NAME="DonGia[5]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                       onkeyup="configSp('6');
                                                                                       return false;" id="dongia_6"/>

                                                            </td>
                                                            <td style="text-align: right"><output class="number"id="tien_chua_ck_6">0</output></td>
                                                            <td colspan="4"><input placeholder="Lý do nhập hàng"name="status[5]"type="text" class="form-control" style="text-align: right"
                                                                /></td>



                                                        </tr>


                                                        <tr style="background-color: #544d61;color: #fff;">
                                                            <td></td>
                                                            <td colspan="3" style="vertical-align: middle;"><b>Tổng cộng</b></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td><td></td><td colspan="2"></td>
                                                            <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_da_ck" name="TongTien"class="number" style="color: #fff; font-weight: bold;">0</output></td>
                                                        </tr>


                                                        </tbody>
                                                    </table>


                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                        <div id="sound"></div>
                                    </form>
                                    <output id="temp" class="noDisplay"> Công ty Sáng Hà</output>
                                </div>                                	
                            </div>                           
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- ./row -->
                </section>
                </form>
                <!-- /.content -->
            </div>
 @endsection            
           
@section('content2') 
            {{--<div class="modal fade" id="confirmComplete" role="dialog">--}}
                {{--<div class="modal-dialog">--}}

                    {{--<!-- Modal content-->--}}
                    {{--<div class="modal-content">--}}
                        {{--<div class="modal-header">--}}
                            {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                            {{--<h4 class="modal-title">Xác nhận chốt đơn ?</h4>--}}
                        {{--</div>--}}
                        {{--<div class="modal-footer">--}}
                            {{--<a href="phanphoi_hanghoa_lich-su-nhap-hang.html"><button type="button" class="btn btn-success">Đồng ý</button></a>--}}
                            {{--<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
            <script>
                $(document).ready(function () {
                    deliveryQtt();
                    $('.datepicker').datepicker({
                        format: 'dd/mm/yyyy'
                    });
                    $('.number').autoNumeric('init', {minimumValue: '0', maximumValue: '9999999999999', digitGroupSeparator: ',', decimalPlacesOverride: '0'});
                });


            </script>
@endsection             
  
