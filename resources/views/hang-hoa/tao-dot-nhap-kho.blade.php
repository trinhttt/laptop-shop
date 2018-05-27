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
                                            <a class="btn btn-app custom-btn" href="phanphoi_hanghoa_tao-dot-nhap-kho.html" target="_blank">
                                                <i class="fa fa-plus-square text-green"></i>
                                                <span><strong>Tạo Mới</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled">
                                                <i class="fa fa-edit text-gray"></i>
                                                <span><strong>Sửa</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled">
                                                <i class="fa fa-save text-green"></i>
                                                <span><strong>Lưu</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled">
                                                <i class="fa fa-close text-gray"></i>
                                                <span><strong>Hủy</strong></span>
                                            </a>
                                            <!--<a class="btn btn-app custom-btn" data-toggle="modal" title="Chốt" data-placement="bottom" data-target="#confirmComplete">-->
                                                <!--<i class="fa fa-check-circle text-green"></i>-->
                                                <!--<span><strong>Chốt</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-exchange text-gray"></i>-->
                                                <!--<span><strong>Đổi trả</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-eye text-gray"></i>-->
                                                <!--<span><strong>Xem Trước</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-print text-gray"></i>-->
                                                <!--<span><strong>In</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-download text-gray"></i>-->
                                                <!--<span><strong>Import Excel</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-file-excel-o text-gray"></i>-->
                                                <!--<span><strong>Xuất Excel</strong></span>-->
                                            <!--</a>-->
                                            <!--<a class="btn btn-app custom-btn disabled">-->
                                                <!--<i class="fa fa-file-pdf-o text-gray"></i>-->
                                                <!--<span><strong>Xuất PDF</strong></span>-->
                                            <!--</a>-->
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
                                                                    <input type="checkbox" id="status" data-toggle="toggle" checked data-on="Nhập hàng" data-off="Đổi trả">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 15px;">
                                                            <!--<div class="col-md-6">-->
                                                                <!--<label id="namePi">PI No.</label>-->
                                                                <!--<label id="nameLo" style="font-weight: bold;" class="noDisplay"> Lô số</label><span style="color: red;">*</span>-->
                                                                <!--<div class="input-group">-->
                                                                    <!--<span class="input-group-addon"><i class="fa fa-bank"></i></span>-->
                                                                    <!--<select class="form-control" onchange="nhap();" id="piNo">-->
                                                                        <!--<option></option>-->
                                                                        <!--<option>M01-121629-1</option>-->
                                                                    <!--</select>-->
                                                                    <!--<select class="form-control noDisplay" onchange="doi();" id="loso">-->
                                                                        <!--<option></option>-->
                                                                        <!--<option>Lô số O1349</option>-->
                                                                    <!--</select>-->
                                                                <!--</div>-->
                                                            <!--</div>-->
                                                            <div class="col-md-6">
                                                                <label>Tên nhà cung cấp</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                                                                    <input type="text" class="form-control" id="donVi">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Số điện thoại</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                                                                    <input type="text" class="form-control" id="phone">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 15px;">
                                                            <div class="col-md-6">
                                                                <label>Địa chỉ</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                                                                    <input type="text" class="form-control" id="address">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Ngày nhập</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" class="form-control datepicker" id="day" style="padding-left: 12px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 15px;">
                                                            <div class="col-md-6">
                                                                <label>Ngày yêu cầu</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" class="form-control datepicker" id="requestDay" style="padding-left: 12px;">
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
                                                    <fieldset id="doitra" class="noDisplay">
                                                        <legend><b style="font-size: 17px;">Chi tiết đơn hàng</b></legend>                                        
                                                        <table class="table table-striped mainTable">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 30px;">STT</th>
                                                                    <th style="width: 300px;">Sản phẩm</th>
                                                                    <th style="width: 150px;">Mã hàng</th>
                                                                    <th style="width: 100px;">Số lượng</th>
                                                                    <th style="width: 100px;">Số lượng nhập kho</th>
                                                                    <th>Lý do</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">1</td>
                                                                    <td style="vertical-align: middle;">BS32c 15A 2P2E NO DIN RAIL EXP</td>
                                                                    <td style="vertical-align: middle;">0061001700</td>
                                                                    <td style="vertical-align: middle; text-align: right;">300</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_1" onkeyup="tongCai('1');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">2</td>
                                                                    <td style="vertical-align: middle;">ABN62c 60A EXP</td>
                                                                    <td style="vertical-align: middle;">0128003300</td>
                                                                    <td style="vertical-align: middle; text-align: right;">100</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_2" onkeyup="tongCai('2');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">3</td>
                                                                    <td style="vertical-align: middle;">ABN52c 15A EXP</td>
                                                                    <td style="vertical-align: middle;">0128002300</td>
                                                                    <td style="vertical-align: middle; text-align: right;">80</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_3" onkeyup="tongCai('3');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">4</td>
                                                                    <td style="vertical-align: middle;">ABN102c 75A EXP</td>
                                                                    <td style="vertical-align: middle;">0130003300</td>
                                                                    <td style="vertical-align: middle; text-align: right;">100</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_4" onkeyup="tongCai('4');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">5</td>
                                                                    <td style="vertical-align: middle;">ABN102c 100A EXP</td>
                                                                    <td style="vertical-align: middle;">0130003400</td>
                                                                    <td style="vertical-align: middle; text-align: right;">160</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_5" onkeyup="tongCai('5');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">6</td>
                                                                    <td style="vertical-align: middle;">BS32c 20A 2P2E NO DIN RAIL EXP</td>
                                                                    <td style="vertical-align: middle;">0061001800	</td>
                                                                    <td style="vertical-align: middle; text-align: right;">2000</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_6" onkeyup="tongCai('6');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">7</td>
                                                                    <td style="vertical-align: middle;">ABN62c 50A EXP</td>
                                                                    <td style="vertical-align: middle;">0128002700</td>
                                                                    <td style="vertical-align: middle; text-align: right;">300</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_7" onkeyup="tongCai('7');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">8</td>
                                                                    <td style="vertical-align: middle;">ABN52c 20A EXP</td>
                                                                    <td style="vertical-align: middle;">0128002400	</td>
                                                                    <td style="vertical-align: middle; text-align: right;">300</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_8" onkeyup="tongCai('8');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">9</td>
                                                                    <td style="vertical-align: middle;">ABN102c 125A EXP</td>
                                                                    <td style="vertical-align: middle;">0136001600</td>
                                                                    <td style="vertical-align: middle; text-align: right;">10</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_9" onkeyup="tongCai('9');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">10</td>
                                                                    <td style="vertical-align: middle;">ABN102c 150A EXP</td>
                                                                    <td style="vertical-align: middle;">0136001700</td>
                                                                    <td style="vertical-align: middle; text-align: right;">20</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_10" onkeyup="tongCai('10');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>                                                        
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td style="vertical-align: middle;"><b>Tổng cộng</b></td>
                                                                    <td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output class="number" style="color: #fff; font-weight: bold;">3370</output></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_cai_1" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
                                                    <fieldset id="nhaphang" class="noDisplay">
                                                        <legend><h4><b>Chi tiết đơn hàng</b></h4></legend>                                        
                                                        <table class="table table-striped mainTable">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 30px;">STT</th>
                                                                    <th style="width: 300px;">Sản phẩm</th>
                                                                    <th style="width: 150px;">Mã hàng</th>
                                                                    <th style="width: 100px;">Số lượng</th>
                                                                    <th style="width: 100px;">Số lượng nhập kho</th>
                                                                    <th>Lý do</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">1</td>
                                                                    <td style="vertical-align: middle;">MT-150 113A 3H SCREW EXP</td>
                                                                    <td style="vertical-align: middle;">1375001300</td>
                                                                    <td style="vertical-align: middle; text-align: right;">40</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_11" onkeyup="tongCai('11');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">2</td>
                                                                    <td style="vertical-align: middle;">GMP22-2P 5A  110/220V 1a1b EXP</td>
                                                                    <td style="vertical-align: middle;">3802006000</td>
                                                                    <td style="vertical-align: middle; text-align: right;">20</td>
                                                                    <td style="vertical-align: middle; text-align: right;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_12" onkeyup="tongCai('12');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">3</td>
                                                                    <td style="vertical-align: middle;">32GRc 15A 30mA 0.03S AUX COVER EXP</td>
                                                                    <td style="vertical-align: middle;">0769004200F324</td>
                                                                    <td style="vertical-align: middle; text-align: right;">20</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_13" onkeyup="tongCai('13');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">4</td>
                                                                    <td style="vertical-align: middle;">32KGRd 15A 30mA 2P2E EXP</td>
                                                                    <td style="vertical-align: middle;">0769003600</td>
                                                                    <td style="vertical-align: middle; text-align: right;">60</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_14" onkeyup="tongCai('14');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">5</td>
                                                                    <td style="vertical-align: middle;">EBS52Fb 40A 30mA EXP</td>
                                                                    <td style="vertical-align: middle;">0781002500</td>
                                                                    <td style="vertical-align: middle; text-align: right;">180</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_15" onkeyup="tongCai('15');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">6</td>
                                                                    <td style="vertical-align: middle;">EBE102Fb 60A 30mA 0.03s EXP</td>
                                                                    <td style="vertical-align: middle;">0782005300</td>
                                                                    <td style="vertical-align: middle; text-align: right;">20</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_16" onkeyup="tongCai('16');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">7</td>
                                                                    <td style="vertical-align: middle;">EBN52c 20A 30mA EXP</td>
                                                                    <td style="vertical-align: middle;">0142005600F338</td>
                                                                    <td style="vertical-align: middle; text-align: right;">20</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_17" onkeyup="tongCai('17');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">8</td>
                                                                    <td style="vertical-align: middle;">EBS54c 30A 30mA EXP</td>
                                                                    <td style="vertical-align: middle;">0143007700</td>
                                                                    <td style="vertical-align: middle; text-align: right;">10</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_18" onkeyup="tongCai('18');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">9</td>
                                                                    <td style="vertical-align: middle;">AN-10D3-10H M2D2D2AX AG6U0AL EXP</td>
                                                                    <td style="vertical-align: middle;">2847045400</td>
                                                                    <td style="vertical-align: middle; text-align: right;">2</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_19" onkeyup="tongCai('19');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">10</td>
                                                                    <td style="vertical-align: middle;">AS-20E3-20H M2D2D2AX AG6U0AL EXP</td>
                                                                    <td style="vertical-align: middle;">2867037900</td>
                                                                    <td style="vertical-align: middle; text-align: right;">5</td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control number" style="float: right; width: 60px; text-align: right;" id="cai_20" onkeyup="tongCai('20');"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control"/></td>
                                                                </tr>                                                        
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td style="vertical-align: middle;"><b>Tổng cộng</b></td>
                                                                    <td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output class="number" style="color: #fff; font-weight: bold;">377</output></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_cai_2" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
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
                <!-- /.content -->
            </div>
 @endsection            
           
@section('content2') 
            <div class="modal fade" id="confirmComplete" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Xác nhận chốt đơn ?</h4>
                        </div>
                        <div class="modal-footer">
                            <a href="phanphoi_hanghoa_lich-su-nhap-hang.html"><button type="button" class="btn btn-success">Đồng ý</button></a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>

                </div>
            </div>       
        <script>
                                                                        $(document).ready(function () {
                                                                            $('.datepicker').datepicker({
                                                                                format: 'dd/mm/yyyy'
                                                                            });
                                                                            $('.number').autoNumeric('init', {minimumValue: '0', maximumValue: '9999999999999', digitGroupSeparator: ',', decimalPlacesOverride: '0'});
                                                                        });
        </script> 
@endsection             
  
