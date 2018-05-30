@extends('main')
@section('content3')
<title>Lập hóa đơn xuất hàng</title>
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
                        <li>Đơn hàng</li>
                        <li class="active">Lập hóa đơn xuất hàng</li>
                    </ol>
                </section>
                <form style="margin-top: 25px;" action="{{url('LapPhieu')}}" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header" style="text-align: center;margin-top: 30px;">
                                    <h3 class="box-title with-border"><b style="font-size: 25px;">Hóa đơn xuất hàng</b></h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <div class="row">
                                        <div class="box-header with-border text-center menu-button" style="margin-left: 5px; margin-right: 5px;">

                                            <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom" href="DonHang_LapPhieu"onclick="">
                                                <i class="fa fa-plus-square text-green"></i>
                                                <span><strong>Tạo Mới</strong></span>
                                            </a>

                                            <BUTTON class="btn btn-app custom-btn " type="submit"data-toggle="modal" title="Lưu" data-placement="bottom" data-target=
                                            "#confirm-delete">

                                                <i class="fa fa-save text-yellow"></i>
                                                <span>
                                            <strong>Lưu</strong>
                                        </span>
                                            </BUTTON>



                                            <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xem Trước" data-placement="bottom" onclick="openNewTab();">
                                                <i class="fa fa-eye text-black"></i>
                                                <span><strong>Xem Trước</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn" data-toggle="tooltip" title="In" data-placement="bottom" onclick="openNewTab();">
                                                <i class="fa fa-print text-blue"></i>
                                                <span><strong>In</strong></span>
                                            </a>

                                            <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xuất PDF" data-placement="bottom">
                                                <i class="fa fa-file-pdf-o text-blue"></i>
                                                <span><strong>Xuất PDF</strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    @if($errors->has('NguoiTaoHD'))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                    {{--                                                {{Session::get('error')}}--}}
                                                    {{$errors->first('NguoiTaoHD')}}

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($errors->has('KhachHang'))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                    {{--                                                {{Session::get('error')}}--}}
                                                    {{$errors->first('KhachHang')}}

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($errors->has('DiaChiNhan'))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                    {{--                                                {{Session::get('error')}}--}}
                                                    {{$errors->first('DiaChiNhan')}}

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($errors->has('SoDotGiao'))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                    {{--                                                {{Session::get('error')}}--}}
                                                    {{$errors->first('SoDotGiao')}}

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($errors->has('SoSanPham'))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                    {{--                                                {{Session::get('error')}}--}}
                                                    {{$errors->first('SoSanPham')}}

                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($errors->has('MucGiaNam'))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                    {{--                                                {{Session::get('error')}}--}}
                                                    {{$errors->first('MucGiaNam')}}

                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($errors->has('NgayGiaoHang'))
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                    {{--                                                {{Session::get('error')}}--}}
                                                    {{$errors->first('NgayGiaoHang')}}

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

                                        <div class="box-header">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <fieldset>
                                                        <legend><b style="font-size: 17px;">Thông tin đơn hàng</b></legend>
                                                        <div class="box-header">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label >Người lập hóa đơn</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                        <input placeholder="Nhập tên người lập hóa đơn" type="text" class="form-control pointerCursor" id="NguoiTaoHD" name="NguoiTaoHD"value="" onclick="$(this).removeClass('pointerCursor');
                                                                                $(this).addClass('textCursor');
                                                                                this.select();">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">

                                                                <label>Khách hàng</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                        <select class="form-control" NAME="KhachHang"style="font-family: 'FontAwesome'; cursor: pointer;">
                                                                            @foreach($khs as $kh)
                                                                                <option value="{{$kh->MaKhachHang}}">{{$kh->HoTenKH}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                            </div>
                                                            </div>

                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-6">
                                                                    <label>Số điện thoại khách hàng</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                                                        <input type="text" class="form-control" NAME="SoDienThoai"id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Địa chỉ khách hàng</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                                                                        <input NAME="DiaChiNhan" placeholder="Nhập địa chỉ khách hàng"type="text" class="form-control" id="AddressDeliver">
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
                                                                    <label>Mức giá áp dụng</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                        <select class="form-control" NAME="MucGiaNam"style="font-family: 'FontAwesome'; cursor: pointer;">
                                                                            <option>2018</option>
                                                                            <option>2017</option>
                                                                        </select>
                                                                    </div>
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

                                                                <tr>
                                                                    <th  style="width: 30px;">STT</th>
                                                                    <th  colspan="3" style="width: 300px;">Sản phẩm</th>
                                                                    <th style="width: 60px;">Số lượng (cái)</th>
                                                                    <th  style="width: 170px;">Đơn giá (VNĐ)</th>
                                                                    <th style="width: 170px;">Thành tiền trước chiết khấu (VNĐ)</th>
                                                                    <th  style="width: 70px;">Chiết khấu (%)</th>
                                                                    <th colspan="3" style="width: 140px;">Thành tiền sau chiết khấu (VNĐ)</th>
                                                                </tr>

                                                            </thead>
                                                            </fieldset>

                                                            <tbody>

                                                            <tr class="noDisplay" id="turn1">
                                                                <td style="vertical-align: middle;">1</td>

                                                                <td colspan="3"  >
                                                                    <select id="laptop_1" class="form-control" NAME="MaLapTop[0]"style="font-family: 'FontAwesome'; cursor: pointer;">
                                                                        @foreach($lts as $lt)
                                                                            <option value="{{$lt->MaLapTop}}">{{$lt->TenLapTop}}</option>
                                                                        @endforeach
                                                                    </select></td>
                                                                <td><input id="cai_1"NAME="SoLuong[0]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                    /></td>

                                                                <td style="text-align: right">
                                                                    <input NAME="DonGia[0]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                           onkeyup="configSp('1');
                                                                                       return false;" id="dongia_1"/>

                                                                </td>
                                                                <td><output class="number"id="tien_chua_ck_1">0</output></td>
                                                                <td><input placeholder="CK"name="Ck[0]"type="text" class="form-control" style="text-align: right;"
                                                                           onkeyup="configCk('1');
                                                                                       return false;" id="ck_1"/></td>
                                                                <td colspan="3"style="text-align: right">
                                                                    <output class="number"id="tien_da_ck_1">0</output></td>

                                                            </tr>
                                                            <tr class="noDisplay" id="turn2">
                                                                <td style="vertical-align: middle;">2</td>

                                                                <td colspan="3"  >
                                                                    <select id="laptop_2" class="form-control" NAME="MaLapTop[1]"style="font-family: 'FontAwesome'; cursor: pointer;">
                                                                        @foreach($lts as $lt)
                                                                            <option value="{{$lt->MaLapTop}}">{{$lt->TenLapTop}}</option>
                                                                        @endforeach
                                                                    </select></td>
                                                                <td><input id="cai_2"NAME="SoLuong[1]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                    /></td>

                                                                <td style="text-align: right">
                                                                    <input NAME="DonGia[1]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                           onkeyup="configSp('2');
                                                                                       return false;" id="dongia_2"/>

                                                                </td>
                                                                <td><output class="number"id="tien_chua_ck_2">0</output></td>
                                                                <td><input placeholder="CK"name="Ck[1]"type="text" class="form-control" style="text-align: right;"
                                                                           onkeyup="configCk('2');
                                                                                       return false;" id="ck_2"/></td>
                                                                <td colspan="3"style="text-align: right">
                                                                    <output class="number"id="tien_da_ck_2">0</output></td>

                                                            </tr>

                                                            <tr class="noDisplay" id="turn3">
                                                                <td style="vertical-align: middle;">3</td>

                                                                <td colspan="3"  >
                                                                    <select id="laptop_3" class="form-control" NAME="MaLapTop[2]"style="font-family: 'FontAwesome'; cursor: pointer;">
                                                                        @foreach($lts as $lt)
                                                                            <option value="{{$lt->MaLapTop}}">{{$lt->TenLapTop}}</option>
                                                                        @endforeach
                                                                    </select></td>
                                                                <td><input id="cai_3"NAME="SoLuong[2]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                    /></td>

                                                                <td style="text-align: right">
                                                                    <input NAME="DonGia[2]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                           onkeyup="configSp('3');
                                                                                       return false;" id="dongia_3"/>

                                                                </td>
                                                                <td><output class="number"id="tien_chua_ck_3">0</output></td>
                                                                <td><input placeholder="CK"type="text" name="Ck[2]" class="form-control" style="text-align: right;"
                                                                           onkeyup="configCk('3');
                                                                                       return false;" id="ck_3"/></td>
                                                                <td colspan="3"style="text-align: right">
                                                                    <output class="number"id="tien_da_ck_3">0</output></td>

                                                            </tr>
                                                            <tr class="noDisplay" id="turn4">
                                                                <td style="vertical-align: middle;">4</td>

                                                                <td colspan="3"  >
                                                                    <select id="laptop_4" class="form-control" NAME="MaLapTop[3]"style="font-family: 'FontAwesome'; cursor: pointer;">
                                                                        @foreach($lts as $lt)
                                                                            <option value="{{$lt->MaLapTop}}">{{$lt->TenLapTop}}</option>
                                                                        @endforeach
                                                                    </select></td>
                                                                <td><input id="cai_4"NAME="SoLuong[3]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                    /></td>

                                                                <td style="text-align: right">
                                                                    <input NAME="DonGia[3]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                           onkeyup="configSp('4');
                                                                                       return false;" id="dongia_4"/>

                                                                </td>
                                                                <td><output class="number"id="tien_chua_ck_4">0</output></td>
                                                                <td><input placeholder="CK"name="Ck[3]"type="text" class="form-control" style="text-align: right;"
                                                                           onkeyup="configCk('4');
                                                                                       return false;" id="ck_4"/></td>
                                                                <td colspan="3"style="text-align: right">
                                                                    <output class="number"id="tien_da_ck_4">0</output></td>

                                                            </tr>
                                                            <tr class="noDisplay" id="turn5">
                                                                <td style="vertical-align: middle;">5</td>

                                                                <td colspan="3"  >
                                                                    <select id="laptop_5" class="form-control" NAME="MaLapTop[4]"style="font-family: 'FontAwesome'; cursor: pointer;">
                                                                        @foreach($lts as $lt)
                                                                            <option value="{{$lt->MaLapTop}}">{{$lt->TenLapTop}}</option>
                                                                        @endforeach
                                                                    </select></td>
                                                                <td><input id="cai_5"NAME="SoLuong[4]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                    /></td>

                                                                <td style="text-align: right">
                                                                    <input NAME="DonGia[4]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                           onkeyup="configSp('5');
                                                                                       return false;" id="dongia_"/>

                                                                </td>
                                                                <td><output class="number"id="tien_chua_ck_5">0</output></td>
                                                                <td><input placeholder="CK"name="Ck[4]"type="text" class="form-control" style="text-align: right;"
                                                                           onkeyup="configCk('5');
                                                                                       return false;" id="ck_5"/></td>
                                                                <td colspan="3"style="text-align: right">
                                                                    <output class="number"id="tien_da_ck_5">0</output></td>

                                                            </tr>
                                                            <tr class="noDisplay" id="turn3">
                                                                <td style="vertical-align: middle;">3</td>

                                                                <td colspan="3"  >
                                                                    <select id="laptop_6" class="form-control" NAME="MaLapTop[5]"style="font-family: 'FontAwesome'; cursor: pointer;">
                                                                        @foreach($lts as $lt)
                                                                            <option value="{{$lt->MaLapTop}}">{{$lt->TenLapTop}}</option>
                                                                        @endforeach
                                                                    </select></td>
                                                                <td><input id="cai_6"NAME="SoLuong[5]"type="text" placeholder="SL"class="form-control" style="text-align: right;"
                                                                    /></td>

                                                                <td style="text-align: right">
                                                                    <input NAME="DonGia[5]"type="text"placeholder="Giá 1 sản phẩm" class="form-control" style="text-align: right;"
                                                                           onkeyup="configSp('6');
                                                                                       return false;" id="dongia_6"/>

                                                                </td>
                                                                <td><output class="number"id="tien_chua_ck_6">0</output></td>
                                                                <td><input placeholder="CK"name="Ck[5]"type="text" class="form-control" style="text-align: right;"
                                                                           onkeyup="configCk('6');
                                                                                       return false;" id="ck_6"/></td>
                                                                <td colspan="3"style="text-align: right">
                                                                    <output class="number"id="tien_da_ck_6">0</output></td>

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
                                </div>
                            </div>                           
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- ./row -->
                </section>
                <!-- /.content -->
                </form>

            </div>
 @endsection

@section('content2')                  
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


