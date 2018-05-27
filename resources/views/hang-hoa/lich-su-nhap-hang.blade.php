@extends('main')
@section('content3')
<title>lịch sử nhập hàng</title>
@endsection
@section('content')
        <style>
            #mainTable {
                background-color: rgb(240, 240, 240);
            }
            #mainTable thead tr th {
                vertical-align: middle !important;
                text-align: center;
                background-color: #3c8dbc;
                color: #fff;
            }
            #mainTable tbody td:nth-child(6),#mainTable tbody td:nth-child(7),
            #mainTable tbody td:nth-child(9) {
                text-align: right;
            }
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
                        <li class="active">Lịch sử nhập hàng</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="row" style="margin-left:0px; margin-top:10px;">
                                    <div class="col-md-12">
                                        <h4>
                                            <b>LỊCH SỬ NHẬP HÀNG</b>
                                        </h4>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box">
                                    <div class="box-header with-border text-center menu-button">
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom" onclick="taomoi_lichsunhaphang_phanphoi();">
                                            <i class="fa fa-plus-square text-green"></i>
                                            <span><strong>Tạo Mới</strong></span>
                                        </a>

                                        <a class="btn btn-app custom-btn disabled">
                                            <i class="fa fa-edit text-gray"></i>
                                            <span><strong>Sửa</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled">
                                            <i class="fa fa-save text-gray"></i>
                                            <span><strong>Lưu</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled">
                                            <i class="fa fa-close text-gray"></i>
                                            <span><strong>Hủy</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled">
                                            <i class="fa fa-check-circle text-gray"></i>
                                            <span><strong>Chốt đơn</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled">
                                            <i class="fa fa-exchange text-gray"></i>
                                            <span><strong>Đổi trả</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled">
                                            <i class="fa fa-eye text-gray"></i>
                                            <span><strong>Xem Trước</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="In" data-placement="bottom">
                                            <i class="fa fa-print text-blue"></i>
                                            <span><strong>In</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled">
                                            <i class="fa fa-download text-gray"></i>
                                            <span><strong>Import Excel</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="In" data-placement="bottom">
                                            <i class="fa fa-file-excel-o text-green"></i>
                                            <span><strong>Xuất Excel</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="In" data-placement="bottom">
                                            <i class="fa fa-file-pdf-o text-orange"></i>
                                            <span><strong>Xuất PDF</strong></span>
                                        </a>
                                    </div>	
                                </div>
                                <div class="box-body" style="margin-top: 25px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h3 class="box-title">Tìm kiếm theo</h3>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <table class="table">
                                                        <tbody>
                                                            <tr>
                                                                <td style="padding-left: 0px;">Mã (Lô số/PI)</td>
                                                                <td width="35%">
                                                                    <div class="input-group" >
                                                                        <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </td>
                                                                <td>Đơn vị</td>
                                                                <td>
                                                                    <div class="input-group" >
                                                                        <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                                                                        <select class="form-control">
                                                                            <option></option>
                                                                            <option>LS Industrial Systems Co., Ltd.</option>
                                                                        </select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding-left: 0px;">Ngày nhập</td>
                                                                <td>
                                                                    <div class="col-sm-5 no-padding">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">Từ</span>
                                                                            <input type="text" class="form-control datepicker">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-sm-offset-1 no-padding">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">Đến</span>
                                                                            <input type="text" class="form-control datepicker">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>Phân loại</td>
                                                                <td width="35%">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-exchange"></i></span>
                                                                        <input type="checkbox" id="status" data-toggle="toggle" checked data-on="Nhập hàng" data-off="Đổi trả">
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
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row search form -->
                                </div>
                                <hr>
                                <div class="box-body">
                                    <div class="row" style="margin-top: 40px;">
                                        <fieldset class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr style="background-color: #3c8dbc;color: white;">
                                                        <th style="text-align: center;">STT</th>
                                                        <th style="text-align: center;">Mã (Lô số/PI)</th>
                                                        <th style="text-align: center;">Đơn vị</th>
                                                        <th style="text-align: center;">Phân loại</th>
                                                        <th style="text-align: center;">Ngày nhập</th>
                                                        <th style="text-align: center;">Ghi chú</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td style="text-align: center;"><a href="phanphoi_hanghoa_chi-tiet-dot-nhap-hang.html">11-11/2017/TSB</a>
                                                        </td>
                                                        <td>LS Industrial Systems Co., Ltd.</td>
                                                        <td>Nhập hàng</td>
                                                        <td style="text-align: center;">26/10/2017</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td style="text-align: center;"><a href="phanphoi_hanghoa_chi-tiet-dot-nhap-hang.html">12-11/2017/TSB</a>
                                                        </td>
                                                        <td>LS Industrial Systems Co., Ltd.</td>
                                                        <td>Nhập hàng</td>
                                                        <td style="text-align: center;">27/10/2017</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td style="text-align: center;"><a href="phanphoi_hanghoa_chi-tiet-dot-nhap-hang.html">13-11/2017/TSB</a>
                                                        </td>
                                                        <td>LS Industrial Systems Co., Ltd.</td>
                                                        <td>Nhập hàng</td>
                                                        <td style="text-align: center;">28/10/2017</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td style="text-align: center;"><a href="phanphoi_hanghoa_chi-tiet-dot-nhap-hang.html">81266-0</a>
                                                        </td>
                                                        <td>Công ty Phú An</td>
                                                        <td>Đổi trả</td>
                                                        <td style="text-align: center;">29/10/2017</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td style="text-align: center;"><a href="phanphoi_hanghoa_chi-tiet-dot-nhap-hang.html">81265-0</a>
                                                        </td>
                                                        <td>Công ty HPH</td>
                                                        <td>Đổi trả</td>
                                                        <td style="text-align: center;">30/10/2017</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </fieldset>		
                                    </div>   
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
        <script>
                                            $(document).ready(function () {
                                                $('#example1').DataTable({
                                                    'paging': true,
                                                    'lengthChange': true,
                                                    'searching': false,
                                                    'ordering': true,
                                                    'info': true,
                                                    'lengthMenu': [10, 25, 50, "All"],
                                                    'autoWidth': true,
                                                    'language': {
                                                        "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                                                        "paginate": {
                                                            "first": "Trang đầu",
                                                            "last": "Trang cuối",
                                                            "next": "Tiếp",
                                                            "previous": "Trước"
                                                        },
                                                        'lengthMenu': "Hiển thị _MENU_ kết quả"
                                                    }
                                                });
                                                $('.datepicker').datepicker({
                                                    format: 'dd/mm/yyyy'
                                                });
                                            });
        </script>
@endsection         
   