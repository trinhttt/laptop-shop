@extends('main')
@section('content3')
<title>Lập phiếu</title>
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
                        <li class="active">Lập phiếu</li>
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
                                    <h3 class="box-title with-border"><b style="font-size: 25px;">Phiếu xuất hàng</b></h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <div class="row">
                                        <div class="box-header with-border text-center menu-button" style="margin-left: 5px; margin-right: 5px;">

                                            <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom" onclick="taomoi();">
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
                                                                    <label>Người tạo</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                        <input type="text" class="form-control pointerCursor" id="NguoiTaoHD" name="NguoiTaoHD"value="" onclick="$(this).removeClass('pointerCursor');
                                                                                $(this).addClass('textCursor');
                                                                                this.select();">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Người nhận hàng</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                        <input type="text" class="form-control pointerCursor" id="lo" value="" onclick="$(this).removeClass('pointerCursor');
                                                                                $(this).addClass('textCursor');
                                                                                this.select();">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-6">
                                                                    <label>Địa chỉ giao hàng</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                                                                        <input type="text" class="form-control" id="AddressDeliver">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Số đợt giao</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-truck"></i></span>
                                                                        <input type="number" id="delivery" min="0" step="1" value="1" style="padding-left: 12px;" onchange="deliveryQtt();" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-6">
                                                                    <label>Tổng số sản phẩm</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-truck"></i></span>
                                                                        <input type="number" id="tongsp" min="0" step="1" value="1" style="padding-left: 12px;" onchange="deliveryQtt();" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Ngày giao hàng</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                        <input type="date" class="form-control" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-6">
                                                                    <label>Mức giá áp dụng</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                        <select class="form-control" style="font-family: 'FontAwesome'; cursor: pointer;">
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
                                                    <fieldset>
                                                        <legend><b style="font-size: 17px;">Chi tiết đơn hàng</b></legend>                                        
                                                        <table class="table table-striped mainTable">
                                                            <thead>
                                                                <tr>
                                                                    <th  style="width: 30px;">STT</th>
                                                                    <th  colspan="3" style="width: 300px;">Sản phẩm</th>
                                                                    <th style="width: 60px;">Số lượng</th>
                                                                    <th  style="width: 170px;">Đơn giá (VNĐ)</th>
                                                                    <th style="width: 170px;">Thành tiền trước chiết khấu (VNĐ)</th>
                                                                    <th  style="width: 70px;">Chiết khấu</th>
                                                                    <th colspan="3" style="width: 140px;">Thành tiền sau chiết khấu (VNĐ)</th>
                                                                </tr>

                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td style="vertical-align: middle;">1</td>
                                                                <td colspan="3"  ><input type="text" class="form-control" style="text-align: right;"
                                                                                         onkeyup="configSp('3');
                                                                                       return false;" id="cai_3"/></td>
                                                                <td><input type="text" class="form-control" style="text-align: right;"
                                                                                                           onkeyup="configSp('3');
                                                                                       return false;" id="cai_3"/></td>
                                                                <td><input type="text" class="form-control" style="text-align: right;"
                                                                           onkeyup="configSp('3');
                                                                                       return false;" id="cai_3"/></td>
                                                                <td><input type="text" class="form-control" style="text-align: right;"
                                                                           onkeyup="configThung('3');
                                                                                       return false;" id="thung_3" title="20 cái/1"/></td>
                                                                <td><output id="dongia_3" class="number">2%</output></td>

                                                                <td colspan="2"  style="vertical-align: middle;">0</td>
                                                                <td><output id="tien_da_ck_3"></output></td>
                                                            </tr>

                                                            <tr>
                                                                <td style="vertical-align: middle;">2</td>
                                                                <td colspan="3"  ><input type="text" class="form-control" style="text-align: right;"
                                                                                         onkeyup="configSp('3');
                                                                                       return false;" id="cai_3"/></td>
                                                                <td><input type="text" class="form-control" style="text-align: right;"
                                                                           onkeyup="configSp('3');
                                                                                       return false;" id="cai_3"/></td>
                                                                <td><input type="text" class="form-control" style="text-align: right;"
                                                                           onkeyup="configSp('3');
                                                                                       return false;" id="cai_3"/></td>
                                                                <td><input type="text" class="form-control" style="text-align: right;"
                                                                           onkeyup="configThung('3');
                                                                                       return false;" id="thung_3" title="20 cái/1"/></td>
                                                                <td><output id="dongia_3" class="number">2%</output></td>

                                                                <td colspan="2"  style="vertical-align: middle;">0</td>
                                                                <td><output id="tien_da_ck_3"></output></td>
                                                            </tr>

                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="3" style="vertical-align: middle;"><b>Tổng cộng</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td><td colspan="2"></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_da_ck_1" class="number" style="color: #fff; font-weight: bold;">0(VNĐ)</output></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
                                                    <fieldset id="turn1" class="noDisplay">
                                                        <legend><b style="font-size: 17px;">Giao hàng đợt 1</b></legend>
                                                        <div class="box-header">
                                                            <div class="col-md-6">
                                                                <label>Xuất ngày</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" style="padding-left: 12px;" value="13/01/2018" class="form-control datepicker pointerCursor">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Lô số</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                                                    <input class="form-control" disabled id="lo_1"/>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <hr/>
                                                        <table class="table table-striped mainTable">
                                                            <thead>
                                                                <tr>
                                                                    <th rowspan="2" style="width: 30px;">STT</th>
                                                                    <th rowspan="2" colspan="2" style="width: 400px;">Sản phẩm</th>
                                                                    <th colspan="2">Số lượng</th>
                                                                    <th rowspan="2" style="width: 150px;">Đơn giá (VNĐ)</th>
                                                                    <th rowspan="2" style="width: 150px;">Thành tiền trước chiết khấu (VNĐ)</th>
                                                                    <th rowspan="2" style="width: 70px;">Chiết khấu (%)</th>
                                                                    <th rowspan="2" style="width: 150px;">Thành tiền sau chiết khấu (VNĐ)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 70px;">Cái</th>
                                                                    <th style="width: 70px;">Thùng</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">1</td>
                                                                    <td style="vertical-align: middle;">ABE103-G</td>
                                                                    <td style="vertical-align: middle;">63A</td>
                                                                    <td><input type="text" class="form-control" id="cai_7" style="text-align: right;"
                                                                               onkeyup="configSp('7');
                                                                                       return false;"/></td>
                                                                    <td><input type="text" class="form-control" id="thung_7" 
                                                                               title="20 cái/1" style="text-align: right;" onkeyup="configThung('7');
                                                                                       return false;"/></td>
                                                                    <td><output id="dongia_7" class="number">8443000</output></td>
                                                                    <td><output id="tien_chua_ck_7"></output></td>
                                                                    <td><input type="text" class="form-control" id="ck_7" style="text-align: right;"
                                                                               onkeyup="configCk('7');
                                                                                       return false;"/></td>
                                                                    <td><output id="tien_da_ck_7" class="number"></output></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">2</td>
                                                                    <td style="vertical-align: middle; width: 24.7%;"><input type="text" class="form-control" id="name_8"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control ampe"/></td>
                                                                    <td><input type="text" class="form-control" id="cai_8" style="text-align: right;"
                                                                               onkeyup="configSp('8');
                                                                                       return false;"/></td>
                                                                    <td><input type="text" class="form-control" id="thung_8" 
                                                                               title="20 cái/1" style="text-align: right;" onkeyup="configThung('8');
                                                                                       return false;"/></td>
                                                                    <td><output id="dongia_8"></output></td>
                                                                    <td><output id="tien_chua_ck_8"></output></td>
                                                                    <td><input type="text" class="form-control" id="ck_8" style="text-align: right;"
                                                                               onkeyup="configCk('8');
                                                                                       return false;"/></td>
                                                                    <td><output id="tien_da_ck_8" class="number"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Cộng</b></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_cai_2" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_thung_2" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_chua_ck_2" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Chiết khấu (%)</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td>
                                                                    <td><input type="text" class="form-control" id="tong_ck_2" style="text-align: right; float: right; font-weight: bold;"
                                                                               onkeyup="configCkAll('2');
                                                                                       return false;"/></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tien_ck_2" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Còn lại</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="con_lai_2" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>VAT (%)</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td>
                                                                    <td>
                                                                        <input type="text" class="form-control" id="vat_2" style="text-align: right; float: right; font-weight: bold;"
                                                                               onkeyup="configCkAll('2');
                                                                                       return false;"/>
                                                                    </td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tien_vat_2" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Tổng cộng</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_da_ck_2" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
                                                    <fieldset id="turn2" class="noDisplay">
                                                        <legend><b style="font-size: 17px;">Giao hàng đợt 2</b></legend>
                                                        <div class="box-header">
                                                            <div class="col-md-6">
                                                                <label>Xuất ngày</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" style="padding-left: 12px;" value="15/01/2018" class="form-control datepicker pointerCursor">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Lô số</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                                                    <input class="form-control" disabled id="lo_2"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                        <table class="table table-striped mainTable">
                                                            <thead>
                                                                <tr>
                                                                    <th rowspan="2" style="width: 30px;">STT</th>
                                                                    {{--<th rowspan="2" colspan="2" style="width: 400px;">Sản phẩm</th>--}}
                                                                    {{--<th colspan="2">Số lượng</th>--}}
                                                                    <th rowspan="2" style="width: 150px;">Đơn giá (VNĐ)</th>
                                                                    <th rowspan="2" style="width: 150px;">Thành tiền trước chiết khấu (VNĐ)</th>
                                                                    <th rowspan="2" style="width: 70px;">Chiết khấu (%)</th>
                                                                    <th rowspan="2" style="width: 150px;">Thành tiền sau chiết khấu (VNĐ)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 70px;">Cái</th>
                                                                    <th style="width: 70px;">Thùng</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">1</td>
                                                                    <td style="vertical-align: middle; width: 24.7%;"><input type="text" class="form-control" id="name_9"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control ampe"/></td>
                                                                    <td><input type="text" class="form-control" id="cai_9" style="text-align: right;"
                                                                               onkeyup="configSp('9');
                                                                                       return false;"/></td>
                                                                    <td><input type="text" class="form-control" id="thung_9" 
                                                                               title="20 cái/1" style="text-align: right;" onkeyup="configThung('9');
                                                                                       return false;"/></td>
                                                                    <td><output id="dongia_9"></output></td>
                                                                    <td><output id="tien_chua_ck_9"></output></td>
                                                                    <td><input type="text" class="form-control" id="ck_9" style="text-align: right;"
                                                                               onkeyup="configCk('9');
                                                                                       return false;"/></td>
                                                                    <td><output id="tien_da_ck_9" class="number"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Cộng</b></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_cai_3" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_thung_3" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_chua_ck_3" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Chiết khấu (%)</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td>
                                                                    <td><input type="text" class="form-control" id="tong_ck_3" style="text-align: right; float: right; font-weight: bold;"
                                                                               onkeyup="configCkAll('3');
                                                                                       return false;"/></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tien_ck_3" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Còn lại</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="con_lai_3" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>VAT (%)</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td>
                                                                    <td>
                                                                        <input type="text" class="form-control" id="vat_3" style="text-align: right; float: right;; font-weight: bold;"
                                                                               onkeyup="configCkAll('3');
                                                                                       return false;"/>
                                                                    </td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tien_vat_3" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Tổng cộng</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_da_ck_3" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
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
                                $(function () {
                                    var availableTags = [
                                        "ABN 52c",
                                        "TS1000N AG6 3P",
                                        "ABS 32c",
                                        "ABH 53c",
                                        "ABE103-G"
                                    ];
                                    var ampe = [
                                        "5A",
                                        "15A",
                                        "30A",
                                        "63A",
                                        "1000A"
                                    ];
                                    $("#name_6").autocomplete({
                                        source: availableTags,
                                        change: function () {
                                            if ($('#name_6').val() === 'ABN 52c') {
                                                document.getElementById('dongia_6').value = '590,000';
                                            } else if ($('#name_6').val() === 'TS1000N AG6 3P') {
                                                document.getElementById('dongia_6').value = '80,807,000';
                                            } else if ($('#name_6').val() === 'ABS 32c') {
                                                document.getElementById('dongia_6').value = '1,859,000';
                                            } else if ($('#name_6').val() === 'ABH 53c') {
                                                document.getElementById('dongia_6').value = '2,375,000';
                                            } else {
                                                document.getElementById('dongia_6').value = '8,443,000';
                                            }
                                        }
                                    });
                                    $("#name_8").autocomplete({
                                        source: availableTags,
                                        change: function () {
                                            if ($('#name_8').val() === 'ABN 52c') {
                                                document.getElementById('dongia_8').value = '590,000';
                                            } else if ($('#name_8').val() === 'TS1000N AG6 3P') {
                                                document.getElementById('dongia_8').value = '80,807,000';
                                            } else if ($('#name_8').val() === 'ABS 32c') {
                                                document.getElementById('dongia_8').value = '1,859,000';
                                            } else if ($('#name_8').val() === 'ABH 53c') {
                                                document.getElementById('dongia_8').value = '2,375,000';
                                            } else {
                                                document.getElementById('dongia_8').value = '8,443,000';
                                            }
                                        }
                                    });
                                    $("#name_9").autocomplete({
                                        source: availableTags,
                                        change: function () {
                                            if ($('#name_9').val() === 'ABN 52c') {
                                                document.getElementById('dongia_9').value = '590,000';
                                            } else if ($('#name_9').val() === 'TS1000N AG6 3P') {
                                                document.getElementById('dongia_9').value = '80,807,000';
                                            } else if ($('#name_9').val() === 'ABS 32c') {
                                                document.getElementById('dongia_9').value = '1,859,000';
                                            } else if ($('#name_9').val() === 'ABH 53c') {
                                                document.getElementById('dongia_9').value = '2,375,000';
                                            } else {
                                                document.getElementById('dongia_9').value = '8,443,000';
                                            }
                                        }
                                    });
                                    $(".ampe").autocomplete({
                                        source: ampe
                                    });
                                });
        </script>
        
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
  
