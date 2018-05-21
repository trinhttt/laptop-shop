@extend('main')
@section('content3')
<title>Tồn kho thêm mới</title>
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

            tfoot {
                color: white;
                text-align: center;
                font-size: 15px;
                font-weight: bold;
                background-color: #544d61;
            }
            .highlight{
                font-weight:bold;
                text-align:right;
            }
            .left{
                text-align:left;
            }
            .right{
                text-align:right;
            }
            .menu-button {
                background-color: #fcf9f9; 
                margin-top: 20px;
                padding-top:20px;
                padding-right:25px;
            }
            .modal-header {
                padding: 15px;
                border-bottom: 1px solid #e5e5e5;
                background-color: aliceblue;
            }
            .modal-body {
                position: relative;
                padding: 15px;
                background-color: white;
            }
            .modal-footer {
                border-top-color: #f4f4f4;
                background-color: white;
            }
            .btn-default {
                background-color: #f4f4f4;
                color: #444;
                border-color: #ddd;
            }

            .smallBtn{
                padding: 10px 5px;
                min-width: 60px;
                height: 40px;
            }
            label {
                display: inline-block;
                max-width: 100%;
                margin-bottom: 5px;
                font-weight: 500 !important;
            }
        </style>
@endsection
@section('content1')  
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="hanghoa_index.html"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                        <li><a href="">Hàng hóa</a></li>
                        <li class="active"><a href="phanphoi_hanghoa_ton-kho.html">Hàng tồn kho</a></li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">        
                                <div  class="row" style="margin-right: 0px;margin-left: 0px;margin-top: 10px">
                                    <div class="col-md-2">
                                        <h4><b>Tồn Kho</b></h4>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header with-border text-center menu-button">                                  
                                        <a id="btnAdd" href="#" class="btn btn-app custom-btn disabled" data-toggle="modal" data-target="#confirm-process" title="Thêm mới" data-placement="bottom">
                                           <i class="fa fa-plus-square text-grey"></i>
                                            <span><strong>Tạo mới</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Lưu" data-placement="bottom">
                                            <i class="fa fa-edit text-grey"></i>
                                            <span><strong>Sửa</strong></span>
                                        </a>

                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Lưu" data-placement="bottom">
                                            <i class="fa fa-save text-grey"></i>
                                            <span><strong>Lưu</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Hủy" data-placement="bottom" href="phanphoi_index.html">
                                            <i class="fa fa-close text-grey"></i>
                                            <span><strong>Hủy</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled"  title="Chốt đơn" data-placement="bottom">
                                            <i class="fa fa-check-circle text-grey"></i>
                                            <span><strong>Chốt đơn</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Đổi trả" data-placement="bottom">
                                            <i class="fa fa-exchange text-grey"></i>
                                            <span><strong>Đổi trả</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xem Trước" data-placement="bottom">
                                            <i class="fa fa-eye text-grey"></i>
                                            <span><strong>Xem Trước</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="In" data-placement="bottom">
                                            <i class="fa fa-print text-blue"></i>
                                            <span><strong>In</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Import Excel" data-placement="bottom">
                                            <i class="fa fa-download text-grey"></i>
                                            <span><strong>Import Excel</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Tải xuống dưới dạng Excel" data-placement="bottom">
                                            <i class="fa fa-file-excel-o text-green"></i>
                                            <span><strong>Xuất Excel</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Tải xuống dưới dạng PDF" data-placement="bottom">
                                            <i class="fa fa-file-pdf-o text-red"></i>
                                            <span><strong>Xuất PDF</strong></span>
                                        </a>						
                                    </div>	
                                </div>

                                <div class="box-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="width:80px">Mã hàng</td>
                                                <td style="width:400px">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-file"></i>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Mã hàng...">
                                                    </div>
                                                </td>

                                                <td style="width:80px">Danh mục</td>
                                                <td style="width:400px">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-sliders"></i>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Danh mục...">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tổng tồn</td>
                                                <td>
                                                    <div class="col-sm-5 no-padding">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">Từ</span>
                                                            <input type="number" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-sm-offset-1 no-padding">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">Đến</span>
                                                            <input type="number" class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>VAT</td>
                                                <td>
                                                    <div class="form-group">
                                                        <label style="padding-right : 20px;">
                                                            <input type="checkbox" checked="">
                                                            Trước VAT
                                                        </label>
                                                        <label style="padding-right : 20px;">
                                                            <input type="checkbox">
                                                            Sau VAT
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>

                                                    <tr>
                                                        <th style="width: 1%">STT</th>
                                                        <th colspan="2" style="width: 12%">Mã hàng</th>                                    
                                                        <th style="width: 4%">Tổng nhập</th>
                                                        <th style="width: 4%">Tổng xuất</th>
                                                        <th style="width: 3%">Tổng tồn</th>
                                                        <th rowspan="2" style="width:3%">Thay đổi</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr style="background-color: yellow">
                                                        <td></td>
                                                        <td style="border-right:none">CB-Aptomat</td>
                                                        <td style="border-left: none"></td>

                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> 1</td>
                                                        <td style="border-right: none;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">ABS 52c</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">15A</a></td>                        
                                                        <td class="right">300</td>
                                                        <td class="right">280</td>
                                                        <td class="right">20</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row1" href="#" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row1">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn1" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td style="border-right: none !important;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">ABS 52c</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">20A</a></td>
                                                        <td class="right">80</td>
                                                        <td class="right">55</td>
                                                        <td class="right">25</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row2" href="#" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row2">
                                                        <td colspan="10">
                                                            <div class="container-fluid">                    
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn2" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> 3</td>
                                                        <td style="border-right: none;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">ABS 52c</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">15A</a></td>                                         
                                                        <td class="right">50</td>
                                                        <td class="right">45</td>
                                                        <td class="right">5</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row3" href="#" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row3">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn3" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> 4</td>
                                                        <td style="border-right: none;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">ABS 52c</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">15A</a></td>
                                                        <td class="right">100</td>
                                                        <td class="right">75</td>
                                                        <td class="right">25</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row4" href="#" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row4">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn4" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"> 5</td>
                                                        <td style="border-right: none;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">ABS 52c</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">15A</a></td>
                                                        <td class="right">20</td>
                                                        <td class="right">15</td>
                                                        <td class="right">5</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row5" href="#" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row5">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn5" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr style="background-color: #00b3b3;font-weight: bold">
                                                        <td></td>

                                                        <td style="border-right: none"></td>     
                                                        <td style="text-align: left;border-left: none;color: white">Tổng</td>
                                                        <td class="right">550</td>
                                                        <td class="right">470</td>
                                                        <td class="right">80</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style="background-color: yellow">
                                                        <td></td>
                                                        <td style="border-right:none">Inventer-Máy biến tần</td>
                                                        <td style="border-left: none"></td>

                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">6</td>
                                                        <td style="border-right: none !important;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">Thanh cái</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">For TS 630</a></td>                                      
                                                        <td class="right">80</td>
                                                        <td class="right">75</td>
                                                        <td class="right">5</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row6" href="#" class="smallBtn btn btn-app custom-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row6">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn6" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">7</td>
                                                        <td style="border-right: none !important;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">Thanh cái</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">For TS 630</a></td>                                           
                                                        <td class="right">5</td>
                                                        <td class="right">5</td>
                                                        <td class="right">2</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row7" href="#" class="smallBtn btn btn-app custom-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row7">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn7" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">8</td>
                                                        <td style="border-right: none !important;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">Insulation barrier</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">IB-13 100AF</a></td>
                                                        <td class="right">90</td>
                                                        <td class="right">85</td>
                                                        <td class="right">5</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row8" href="#" class="smallBtn btn btn-app custom-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row8">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn8" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">9</td>
                                                        <td style="border-right: none !important;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">Insulation barrier</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">IB-23 100~200AF</a></td>                                       
                                                        <td class="right">15</td>
                                                        <td class="right">5</td>
                                                        <td class="right">10</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row9" href="#" class="smallBtn btn btn-app custom-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row9">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn9" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">10</td>
                                                        <td style="border-right: none !important;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">Insulation barrier</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">B-43B 400AF</a></td>                                 
                                                        <td class="right">20</td>
                                                        <td class="right">10</td>
                                                        <td class="right">10</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row10" href="#" class="smallBtn btn btn-app custom-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row10">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn10" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">11</td>
                                                        <td style="border-right: none !important;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">Insulation barrier</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">TS630, ABS800c</a></td>
                                                        <td class="right">18</td>
                                                        <td class="right">15</td>
                                                        <td class="right">3</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row11" href="#" class="smallBtn btn btn-app custom-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row11">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn11" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>                                
                                                    <tr style="background-color: #00b3b3;font-weight: bold">
                                                        <td></td>

                                                        <td style="border-right: none"></td>  
                                                        <td style="text-align: left;border-left: none">Tổng</td>
                                                        <td class="right">228</td>
                                                        <td class="right">195</td>
                                                        <td class="right">33</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr style="background-color:yellow">
                                                        <td class="text-center">12</td>
                                                        <td style="border-right: none !important;text-align: left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">Insulation barrier</a></td>
                                                        <td style="border-left: none !important;text-align: right"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html">TS630, ABS800c</a></td>
                                                        <td class="right">100</td>
                                                        <td class="right">70</td>
                                                        <td class="right">30</td>
                                                        <td style="text-align:center">
                                                            <a id="btn_row12" href="#" class="smallBtn btn btn-app custom-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr id="row12">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(USD)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Trước VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Sau VAT(VND)</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel-btn12" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm1">Sửa</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>   
                                                    <tr>
                                                        <td class="text-center">13</td>
                                                        <td style="border-right: none !important;text-align: right">
                                                            <input style="text-align:right" type="text" class="form-control"/>
                                                        </td>
                                                        <td style="border-left: none !important;text-align: right">
                                                            <input style="text-align:right" type="text" class="form-control"/>
                                                        </td>
                                                        <td class="right">
                                                            <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="text-align:right" type="text" class="form-control number"/>
                                                        </td>
                                                        <td>
                                                            <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="text-align:right" type="text" class="form-control number"/>
                                                        </td>
                                                        <td class="right">
                                                            <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="text-align:right" type="text" class="form-control number"/>
                                                        </td>                                      
                                                        <td style="text-align:center">
                                                            <a id="btn_row12" href="#" class="smallBtn btn btn-app custom-btn smal" data-toggle="tooltip" title="Lưu" data-placement="bottom">
                                                                <i class="fa fa-save text-yellow"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <tfoot>
                                                    <tr>
                                                        <td></td>
                                                        <td style="text-align: left;border-right: none">Tổng cộng</td>
                                                        <td style="border-left: none"></td>                                  
                                                        <td class="right">778</td>
                                                        <td class="right">665</td>
                                                        <td class="right">113</td>    
                                                        <td></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </section>
            </div>
@endsection            
@section('content2')
        <!-- page script -->
        <script>
                                                                $(document).ready(function () {
                                                                    $(function () {
                                                                        $('#example1').DataTable()
                                                                        $('#example2').DataTable({
                                                                            'paging': true,
                                                                            'lengthChange': false,
                                                                            'searching': false,
                                                                            'ordering': true,
                                                                            'info': true,
                                                                            'autoWidth': false
                                                                        })
                                                                    });
                                                                    $('.number').autoNumeric('init', {minimumValue: '0', maximumValue: '9999999999999', digitGroupSeparator: ',', decimalPlacesOverride: '0'});
                                                                });
                                                                $(document).on('click', 'input[type="checkbox"]', function () {
                                                                    $('input[type="checkbox"]').not(this).prop('checked', false);
                                                                });
        </script>
        <script>
            $('#row1').hide();
            $('#btn_row1').click(function () {
                $('#row1').toggle();
                event.preventDefault();
            })
            $('#row2').hide();
            $('#btn_row2').click(function () {
                $('#row2').toggle();
                event.preventDefault();
            })
            $('#row3').hide();
            $('#btn_row3').click(function () {
                $('#row3').toggle();
                event.preventDefault();
            })
            $('#row4').hide();
            $('#btn_row4').click(function () {
                $('#row4').toggle();
                event.preventDefault();
            })
            $('#row5').hide();
            $('#btn_row5').click(function () {
                $('#row5').toggle();
                event.preventDefault();
            })
            $('#row6').hide();
            $('#btn_row6').click(function () {
                $('#row6').toggle();
                event.preventDefault();
            })
            $('#row7').hide();
            $('#btn_row7').click(function () {
                $('#row7').toggle();
                event.preventDefault();
            })
            $('#row8').hide();
            $('#btn_row8').click(function () {
                $('#row8').toggle();
                event.preventDefault();
            })
            $('#row9').hide();
            $('#btn_row9').click(function () {
                $('#row9').toggle();
                event.preventDefault();
            })
            $('#row10').hide();
            $('#btn_row10').click(function () {
                $('#row10').toggle();
                event.preventDefault();
            })
            $('#row11').hide();
            $('#btn_row11').click(function () {
                $('#row11').toggle();
                event.preventDefault();
            })
            $('#row12').hide();
            $('#btn_row12').click(function () {
                $('#row12').toggle();
                event.preventDefault();
            })
            //cancel button
            $('#cancel_btn1').click(function () {
                $('#row1').toggle();
                event.preventDefault();
            });
            $('#cancel_btn2').click(function () {
                $('#row2').toggle();
                event.preventDefault();
            });
            $('#cancel_btn3').click(function () {
                $('#row3').toggle();
                event.preventDefault();
            });
            $('#cancel_btn4').click(function () {
                $('#row4').toggle();
                event.preventDefault();
            });
            $('#cancel_btn5').click(function () {
                $('#row5').toggle();
                event.preventDefault();
            });
            $('#cancel_btn6').click(function () {
                $('#row6').toggle();
                event.preventDefault();
            });
            $('#cancel_btn7').click(function () {
                $('#row7').toggle();
                event.preventDefault();
            });
            $('#cancel_btn8').click(function () {
                $('#row8').toggle();
                event.preventDefault();
            });
            $('#cancel_btn9').click(function () {
                $('#row9').toggle();
                event.preventDefault();
            });
            $('#cancel_btn10').click(function () {
                $('#row10').toggle();
                event.preventDefault();
            });
            $('#cancel_btn11').click(function () {
                $('#row11').toggle();
                event.preventDefault();
            });
            $('#cancel_btn12').click(function () {
                $('#row12').toggle();
                event.preventDefault();
            });
        </script>

        <!--code chuyen page-->
        <script>
            function directionPage() {
                var isDisplay = $('#Paris:visible').length;
                if (isDisplay === 0) {
                    window.location.href = 'phanphoi_congno_danh-sach-cong-no-cung-cap.html';
                } else {
                    window.location.href = 'phanphoi_congno_danh-sach-cong-no-khach-hang.html';
                }
            }
        </script>
        <div class="modal fade" id="confirm-process" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <!-- Modal content-->
            <div class="modal-dialog">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Thêm mới hàng tồn kho</b></h4>
                </div>
                <div class="modal-body">
                    <table style="margin-left:20%;height:400px">
                        <tr>
                            <td><i class="fa fa-file"><b>  Mã hàng: </b></i></td>
                            <td style="padding-left:15px;width:250px"><input type="text" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-sliders"><b>  Danh mục: </b></td>
                            <td style="padding-left:15px;width:250px"><input type="text" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-list-ol"><b>  Số lượng: </b></td>
                            <td onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="padding-left:15px;width:250px"><input type="text" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-handshake-o"><b>  Nhà cung cấp: </b></td>
                            <td style="padding-left:15px;width:250px"><input type="text" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-bars"><b>  Tổng quan sản phẩm: </b></td>
                            <td style="padding-left:15px;width:250px"><textarea class="form-control">Tổng quan sản phẩm...</textarea></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-info"><b>  Thông tin chi tiết: </b></td>
                            <td style="padding-left:15px;width:250px"><textarea class="form-control">Thông tin chi tiết...</textarea></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-money"><b>  Giá (VNĐ): </b></td>
                            <td onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="padding-left:15px;width:250px"><input type="text" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-usd"><b>  Giá (USD): </b></td>
                            <td onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="padding-left:15px;width:250px"><input type="text" class="form-control"/></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" style="color:white;background-color:#32CD32" class="btn btn-default"  data-toggle="modal" data-target="#popupConfirm">Lưu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
        <!--popup confirm-->
        <div class="modal fade" id="popupConfirm" role="dialog">
            <div class="modal-dialog" style="width:250px;height:150px">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Xác nhận thêm mới</h4>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr>
                                <td>Tạo mã hàng mới ?</td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer" style="margin-right:15px">
                        <div style="margin:0 auto;">
                            <button id="btnThanhToan" type="button" style="color:white;background-color:#337ab7" class="btn btn-default" data-dismiss="modal" onclick="window.location.href = 'phanphoi_hanghoa_ton-kho-them-moi.html'">OK</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="popupConfirm1" role="dialog">
            <div class="modal-dialog" style="width:250px;height:150px">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Xác nhận sửa thông tin</h4>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr>
                                <td>Lưu thông tin đã sửa?</td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer" style="margin-right:15px">
                        <div style="margin:0 auto;">
                            <button id="btnThanhToan" type="button" style="color:white;background-color:#337ab7" class="btn btn-default" data-dismiss="modal" onclick="window.location.href = 'phanphoi_hanghoa_ton-kho-sua.html'">OK</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
                <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

            </div>
        </div>
@endsection        
   																													