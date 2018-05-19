@extends('main')
@section('content3')
    <title>Chit tiết doanh thu</title>
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
            tr td:nth-child(3){
                text-align: left;
            }
            tr td:nth-child(5){
                text-align: right;
            }
            tfoot {
                color: white;
                text-align: center;
                font-size: 15px;
                font-weight: bold;
                background-color: #544d61;
            }
            .noBorder{
                border-right-style:hidden !important;
            }
            .menu-button {
                background-color: #fcf9f9; 
                margin-top: 20px;
                padding-top:20px;
                padding-right:25px;
            }
        </style>


@endsection

@section('content1')
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li>
                    <a href="quanly_index.html">
                        <i class="fa fa-dashboard"></i> Trang Chủ</a>
                </li>
                <li>
                    <a href=""> Báo Cáo</a>
                </li>
                <li>
                    <a href="quanly_baocao_doanh-thu.html"> Doanh thu</a>
                </li>
                <li>
                    <a href="quanly_baocao_chi-tiet-doanh-thu.html">
                        Chi tiết doanh thu</a>
                </li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="row" style="margin-left:0px; margin-right:0px; margin-top: 10px;">
                            <div class="col-md-12">
                                <h4>
                                    <b>Chi Tiết Doanh Thu</b>
                                </h4>
                            </div>
                        </div>

                        <div class="box">
                            <div class="box-header with-border text-center menu-button">

                                <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom" >
                                    <i class="fa fa-plus-square text-gray"></i>
                                    <span><strong>Tạo Mới</strong></span>
                                </a>
                                <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                    <i class="fa fa-edit text-grey"></i>
                                    <span><strong>Sửa</strong></span>
                                </a>
                                <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Lưu" data-placement="bottom">
                                    <i class="fa fa-save text-grey"></i>
                                    <span><strong>Lưu</strong></span>
                                </a>
                                <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Hủy" data-placement="bottom">
                                    <i class="fa fa-close text-grey"></i>
                                    <span><strong>Hủy</strong></span>
                                </a>
                                <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Chốt đơn" data-placement="bottom">
                                    <i class="fa fa-check-circle text-grey"></i>
                                    <span><strong>Chốt đơn</strong></span>
                                </a>
                                <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Đổi trả" data-placement="bottom">
                                    <i class="fa fa-exchange text-grey"></i>
                                    <span><strong>Đổi trả</strong></span>
                                </a>
                                <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Xem Trước" data-placement="bottom">
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
                                <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xuất Excel" data-placement="bottom">
                                    <i class="fa fa-file-excel-o text-green"></i>
                                    <span><strong>Xuất Excel</strong></span>
                                </a>
                                <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xuất PDF" data-placement="bottom">
                                    <i class="fa fa-file-pdf-o text-red"></i>
                                    <span><strong>Xuất PDF</strong></span>
                                </a>
                            </div>
                        </div>

                        <div class="box">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-offset-3" style="display: inline-flex;padding-top: 30px; ">
                                        <label style="padding-right: 56px; padding-top: 7px;">Từ: </label>
                                        <div class="input-group week-select col-md-3 no-padding">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" style="width: 150px" name="week" value="01-01-2018">
                                        </div>
                                        <label style="padding-right: 10px; padding-top: 7px;padding-left:15px">Đến: </label>
                                        <div class="input-group week-select col-md-3 no-padding">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" style="width: 150px" name="week" value="07-01-2018">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <div class="box-header">
                                                <h3 class="box-title">Tìm kiếm theo</h3>
                                            </div>
                                            <!-- /.box-header -->

                                            <div class="box-body">
                                                <table class="table">
                                                    <tbody>

                                                    <tr>
                                                        <td>Mã hàng</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                                                <input type="text" class="form-control" placeholder="Mã hàng...">
                                                            </div>
                                                        </td>
                                                        <td style="width: 80px">Danh mục</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-sliders"></i></span>
                                                                <input type="text" class="form-control" placeholder="Danh mục...">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Số lượng</td>
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
                                                        <td>Giá</td>
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
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 80px">Doanh thu</td>
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

                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="box-footer clearfix">
                                                <div class="pagination pagination-sm no-margin pull-right">
                                                    <button type="button" class="btn btn-block btn-primary">Tìm kiếm <i class="fa fa-search"></i></button>
                                                </div>
                                            </div>
                                            <p/>
                                        </div>
                                        <!-- /.box-body -->


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="row">
                                <fieldset class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>MÃ HÀNG</th>
                                            <th>DANH MỤC</th>
                                            <th>SỐ LƯỢNG BÁN RA</th>
                                            <th>GIÁ</th>
                                            <th>DOANH THU</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr style="background-color:yellow">
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center">CB - Aptomat</td>
                                            <td class="noBorder"></td>
                                            <td class="noBorder"></td>
                                            <td class="noBorder"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left">1</td>
                                            <td style="border-right: none;text-align:left"><a href="quanly_hanghoa_chi-tiet-san-pham.html"> UA-1</a></td>
                                            <td>CB - Aptomat</td>
                                            <td style="text-align:right">1,000</td>
                                            <td>2,500,000</td>
                                            <td style="text-align:right">25,000,000</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left">2</td>
                                            <td style="border-right: none;text-align:left"><a href="quanly_hanghoa_chi-tiet-san-pham.html"> UA-2</a></td>
                                            <td>CB - Aptomat</td>
                                            <td style="text-align:right">2,000</td>
                                            <td>2,500,000</td>
                                            <td style="text-align:right">50,000,000</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left">3</td>
                                            <td style="border-right: none;text-align:left"><a href="quanly_hanghoa_chi-tiet-san-pham.html"> UA-3</a></td>
                                            <td>CB - Aptomat</td>
                                            <td style="text-align:right">4,000</td>
                                            <td>2,500,000</td>
                                            <td style="text-align:right">100,000,000</td>
                                        </tr>
                                        <tr style="background-color:#00b3b3;color:white;font-weight:bold">
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center">Tổng</td>
                                            <td></td>
                                            <td style="text-align:right">7,000</td>
                                            <td style="text-align:right">7,500,000</td>
                                            <td style="text-align:right">175,000,000</td>
                                        </tr>
                                        <tr style="background-color:yellow">
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center"> Inverter-Biến tần</td>
                                            <td class="noBorder"></td>
                                            <td class="noBorder"></td>
                                            <td class="noBorder"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left">4</td>
                                            <td style="border-right: none;text-align:left"><a href="quanly_hanghoa_chi-tiet-san-pham.html"> ABN50c~200c/ABS30c~200c/ABH50c~200c</a></td>
                                            <td>Inverter-Biến tần</td>
                                            <td style="text-align:right">1,000</td>
                                            <td>2,500,000</td>
                                            <td style="text-align:right">25,000,000</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left">5</td>
                                            <td style="border-right: none;text-align:left"><a href="quanly_hanghoa_chi-tiet-san-pham.html"> ABN50c~200c/ABS30c~200c/ABH50c~200c</a></td>
                                            <td>Inverter-Biến tần</td>
                                            <td style="text-align:right">10,000</td>
                                            <td style="text-align:right">5,000,000</td>
                                            <td style="text-align:right">500,000,000</td>
                                        </tr>
                                        <tr style="background-color:#00b3b3;color:white;font-weight:bold">
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center">Tổng</td>
                                            <td></td>
                                            <td style="text-align:right">11,000</td>
                                            <td>525,000,000</td>
                                            <td style="text-align:right">175,000,000</td>
                                        </tr>
                                        <tr style="background-color:yellow">
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center">Cáp thông tin</td>
                                            <td class="noBorder"></td>
                                            <td class="noBorder"></td>
                                            <td class="noBorder"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left">6</td>
                                            <td style="border-right: none;text-align:left"><a href="quanly_hanghoa_chi-tiet-san-pham.html">LLFL (3LL1F) type, Indoor type (IP31), 24kV, 21kA/3s, Manual Operation</a></td>
                                            <td>Cáp thông tin</td>
                                            <td style="text-align:right">10,000</td>
                                            <td>5,000,000</td>
                                            <td style="text-align:right">500,000,000</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left">7</td>
                                            <td style="border-right: none;text-align:left"><a href="quanly_hanghoa_chi-tiet-san-pham.html">LFL (2L1F) type, Indoor type (IP31), 24kV, 21kA/3s, Manual Operation </a></td>
                                            <td>Cáp thông tin</td>
                                            <td style="text-align:right">10,000</td>
                                            <td>5,000,000</td>
                                            <td style="text-align:right">500,000,000</td>
                                        </tr>
                                        <tr style="background-color:#00b3b3;color:white;font-weight:bold">
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center">Tổng</td>
                                            <td></td>
                                            <td style="text-align:right">20,000</td>
                                            <td>10,000,000</td>
                                            <td style="text-align:right">1,000,000,000</td>
                                        </tr>
                                        <tr style="background-color:yellow">
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center">Công tắc ổ cắm</td>
                                            <td class="noBorder"></td>
                                            <td class="noBorder"></td>
                                            <td class="noBorder"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left">8</td>
                                            <td style="border-right: none;text-align:left"><a href="quanly_hanghoa_chi-tiet-san-pham.html">CT COIL</a></td>
                                            <td>Công tắc ổ cắm</td>
                                            <td style="text-align:right">10</td>
                                            <td>500,000</td>
                                            <td style="text-align:right">5,000,000</td>
                                        </tr>
                                        <tr style="background-color:#00b3b3;color:white;font-weight:bold">
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center">Tổng</td>
                                            <td></td>
                                            <td style="text-align:right">10</td>
                                            <td>500,000</td>
                                            <td style="text-align:right">1,000,000</td>
                                        </tr>
                                        <tr style="background-color:yellow">
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center">Busway - Thanh cái dẫn điện & MTR - Máy biến áp & RMU - Tủ trung thế</td>
                                            <td class="noBorder"></td>
                                            <td class="noBorder"></td>
                                            <td class="noBorder"></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left">9</td>
                                            <td style="border-right: none;text-align:left"><a href="quanly_hanghoa_chi-tiet-san-pham.html">EBN 404c-350A 100/200/500mA</a></td>
                                            <td>Busway - Thanh cái dẫn điện & MTR - Máy biến áp & RMU - Tủ trung thế</td>
                                            <td style="text-align:right">10</td>
                                            <td>500,000</td>
                                            <td style="text-align:right">5,000,000</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left">10</td>
                                            <td style="border-right: none;text-align:left"><a href="quanly_hanghoa_chi-tiet-san-pham.html">EBN 404c-400A 100/200/500mA</a></td>
                                            <td>Busway - Thanh cái dẫn điện & MTR - Máy biến áp & RMU - Tủ trung thế</td>
                                            <td style="text-align:right">10</td>
                                            <td>500,000</td>
                                            <td style="text-align:right">5,000,000</td>
                                        </tr>
                                        <tr style="background-color:#00b3b3;color:white;font-weight:bold">
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center">Tổng</td>
                                            <td></td>
                                            <td style="text-align:right">20</td>
                                            <td>1,000,000</td>
                                            <td style="text-align:right">10,000,000</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center">Tổng Cộng</td>
                                            <td></td>
                                            <td style="text-align:right">31,030</td>
                                            <td style="text-align:right">544,000,000</td>
                                            <td style="text-align:right">1,361,000,000</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <!--end main box-->
                </div>

            </div>
            <!--end main-col-->
        </section>
    </div>
@endsection

