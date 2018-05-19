@extends('main')
@section('content3')
<title>Bán hàng</title>
@endsection
@section('content')

    <style>
        .table {
            background-color: rgb(240, 240, 240);
        }

        .table thead tr th {
            vertical-align: middle !important;
            text-align: center;
            background-color: #3c8dbc;
            color: #fff;
        }

        .table tbody td:nth-child() {
            text-align: left;
        }

        .table tbody td:nth-child() {
            text-align: right;
        }
        .table th{
            background-color:white;
            color:black;
        }
    </style>

@endsection

@section('content1')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
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
                                    <b>Báo cáo bán hàng</b>
                                </h4>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box">
                            <div class="box-header with-border text-center menu-button">

                                <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom" >
                                    <i class="fa fa-plus-square text-grey"></i>
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
                                <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xem Trước" data-placement="bottom">
                                    <i class="fa fa-eye text-black"></i>
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
                                <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Xuất PDF" data-placement="bottom">
                                    <i class="fa fa-file-pdf-o text-gray"></i>
                                    <span><strong>Xuất PDF</strong></span>
                                </a>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="col-md-offset-3" style="display: inline-flex;padding-top: 20px; padding-bottom: 20px;">
                                <label style="padding-right: 10px; padding-top: 7px;">Từ: </label>
                                <div class="input-group week-select col-md-3 no-padding">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" style="width: 150px" id="datepicker" value="01/01/2018">
                                </div>
                                <label style="padding-right: 10px; padding-top: 7px;padding-left:15px">Đến: </label>
                                <div class="input-group week-select col-md-3 no-padding">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input type="text" class="form-control" style="width: 150px" id="datepicker2" value="07/01/2018">
                                </div>
                            </div>

                            <!--        <div class="row">
                                        <div class="col-md-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h4><strong>DOANH THU BÁN HÀNG</strong></h4>
                                                            <div class="chart">
                                                                <!-- Sales Chart Canvas -->
                            <!--                                    <canvas id="lineChart" style="height: 300px;"></canvas>
                                                                <small>Đơn vị :<em> chục triệu VNĐ</em></small>
                                                            </div>
                                                            <!-- /.chart-responsive -->
                            <!--                            </div>
                                                        <!-- /.col -->
                            <!--                            <div class="col-md-6">
                                                            <h4><strong>SỐ ĐƠN HÀNG</strong></h4>
                                                            <div class="chart">
                                                                <!-- Sales Chart Canvas -->
                            <!--                                   <canvas id="lineChart2" style="height: 300px;"></canvas>
                                                               <small>Đơn vị :<em> Số đơn</em></small>
                                                           </div>
                                                           <!-- /.chart-responsive -->
                            <!--                            </div>
                                                        <!-- /.col -->
                            <!--                        </div>
                                                    <!-- /.row -->
                            <!--                    </div>
                                                <!-- ./box-body -->
                            <!--                    <div class="box-footer">
                                                    <div class="col-sm-offset-5">
                                                        <div style="width: 13px; height: 13px; background-color: rgba(221, 41, 13, 1); display: inline-block;"></div>
                                                        <strong>Tháng 11</strong>
                                                        <div class="col-sm-offset-1" style="width: 13px; height: 13px; background-color: rgba(15,224,15,1); display: inline-block;"></div>
                                                        <strong>Tháng 12</strong>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-6">
                                                            <div class="description-block border-right">
                                                                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 15%</span>
                                                                <h5 class="description-header">10,625,414</h5>
                                                                <span class="description-text">DOANH THU BÁN HÀNG</span>
                                                            </div>
                                                            <!-- /.description-block -->
                            <!--                           </div>
                                                       <!-- /.col -->
                            <!--                           <div class="col-sm-6 col-xs-6">
                                                           <div class="description-block border-right">
                                                               <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 11.25%</span>
                                                               <h5 class="description-header">9</h5>
                                                               <span class="description-text">SỐ ĐƠN HÀNG</span>
                                                           </div>
                                                           <!-- /.description-block -->
                            <!--                            </div>
                                                        <!-- /.col -->
                            <!--                        </div>
                                                    <!-- /.row -->
                            <!--                    </div>
                                                <!-- /.box-footer -->
                            <!--            </div>
                                        <!-- /.box -->
                            <!--    </div>
                                <!-- /.col -->
                            <!--         </div>
                                     <!-- /.row -->

                            <div class="row" style="margin-top: 30px;">
                                <fieldset class="col-md-12">
                                    <legend style="font-size: 17px"><b>Tổng quan bán hàng</b></legend>
                                    <table id="example1" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Báo cáo</th>
                                            <th>Chỉ số đã đạt</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tổng số đơn đã tạo</td>
                                            <td style="text-align: right; padding-right: 30%">150</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Số đơn đã hoàn thành</td>
                                            <td style="text-align: right; padding-right: 30%">120</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Số đơn đang xử lý</td>
                                            <td style="text-align: right; padding-right: 30%">120</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Số đơn đã huỷ</td>
                                            <td style="text-align: right; padding-right: 30%">120</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Tổng doanh thu</td>
                                            <td style="text-align: right; padding-right: 30%">120,000,000</td>
                                        </tr>
                                        </tbody>

                                    </table>
                                </fieldset>
                            </div>

                            <!--                <div class="row" style="margin-top: 30px;">
                                                <fieldset class="col-md-12">
                                                    <legend style="font-size: 17px"><b>Chi tiết PO</b></legend>
                                                    <table id="example2" class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>PO no</th>
                                                                <th>PI no</th>
                                                                <th>Nhà cung cấp</th>
                                                                <th>Ngày tạo</th>
                                                                <th>Tổng tiền</th>
                                                                <th>Ghi chú</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <a href="quanly_hanghoa_chi-tiet-dot-nhap-hang.html">11-11/2017/TSB</a>
                                                                </td>
                                                                <td>
                                                                    <a href="quanly_hanghoa_chi-tiet-PI.html">M01-121629-1</a>
                                                                </td>
                                                                <td>LS Industrial Systems Co., Ltd.</td>
                                                                <td class="text-center">20-12-2017</td>
                                                                <td class="text-right">15,069,500</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>
                                                                    <a href="quanly_hanghoa_chi-tiet-dot-nhap-hang.html">12-11/2017/TSB</a>
                                                                </td>
                                                                <td>
                                                                    <a href="quanly_hanghoa_chi-tiet-PI.html">M01-121629-1</a>
                                                                </td>
                                                                <td>LS Industrial Systems Co., Ltd.</td>
                                                                <td class="text-center">17-11-2017</td>
                                                                <td class="text-right">82,735,872</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>
                                                                    <a href="quanly_hanghoa_chi-tiet-dot-nhap-hang.html">13-11/2017/TSB</a>
                                                                </td>
                                                                <td>
                                                                    <a href="quanly_hanghoa_chi-tiet-PI.html">M01-121629-1</a>
                                                                </td>
                                                                <td>LS Industrial Systems Co., Ltd.</td>
                                                                <td class="text-center">16-09-2017</td>
                                                                <td class="text-right">41,735,872</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>
                                                                    <a href="quanly_hanghoa_chi-tiet-dot-nhap-hang.html">11-12/2017/TSB</a>
                                                                </td>
                                                                <td>
                                                                    <a href="quanly_hanghoa_chi-tiet-PI.html">M01-121629-1</a>
                                                                </td>
                                                                <td>Thái Sơn Nam</td>
                                                                <td class="text-center">16-08-2017</td>
                                                                <td class="text-right">5,990,800</td>
                                                                <td></td>
                                                            </tr>


                                                        </tbody>
                                                        <tfoot></tfoot>
                                                    </table>
                                                </fieldset>
                                            </div>

                                            -->

                            <div class="row" style="margin-top: 30px;">
                                <fieldset class="col-md-12">
                                    <legend style="font-size: 17px"><b>Phân hệ phân phối</b></legend>
                                    <table id="example3" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Nhân Viên</th>
                                            <th>Tổng đơn hàng</th>
                                            <th>Tổng giá trị</th>
                                            <th>Ghi chú</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lã Mạnh Đạt</a>
                                            </td>
                                            <td class="text-center">20</td>
                                            <td class="text-right" style="padding-right:15%">15,069,500</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Văn Minh</a>
                                            </td>
                                            <td class="text-center">25</td>
                                            <td class="text-right" style="padding-right:15%">82,735,872</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lê Minh Trung</a>
                                            </td>
                                            <td class="text-center">12</td>
                                            <td class="text-right" style="padding-right:15%">41,735,872</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Võ Văn Linh</a>
                                            </td>
                                            <td class="text-center">5</td>
                                            <td class="text-right" style="padding-right:15%">5,990,800</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Minh Trường</a>
                                            </td>
                                            <td class="text-center">9</td>
                                            <td class="text-right" style="padding-right:15%">20,590,000</td>
                                            <td></td>
                                        </tr>

                                        </tbody>
                                        <tfoot></tfoot>
                                    </table>
                                </fieldset>
                            </div>

                            <div class="row" style="margin-top: 30px;">
                                <fieldset class="col-md-12">
                                    <legend style="font-size: 17px"><b>Phân hệ kế toán</b></legend>
                                    <table id="example4" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Nhân Viên</th>
                                            <th>Tổng đơn hàng</th>
                                            <th>Thời gian giải quyết trung bình</th>
                                            <th>Ghi chú</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lã Mạnh Đạt</a>
                                            </td>
                                            <td class="text-center">20</td>
                                            <td class="text-center">2h30p</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Văn Minh</a>
                                            </td>
                                            <td class="text-center">25</td>
                                            <td class="text-center">1h30p</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lê Minh Trung</a>
                                            </td>
                                            <td class="text-center">12</td>
                                            <td class="text-center">30p</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Võ Văn Linh</a>
                                            </td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">1h20p</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Minh Trường</a>
                                            </td>
                                            <td class="text-center">9</td>
                                            <td class="text-center">3h</td>
                                            <td></td>
                                        </tr>

                                        </tbody>
                                        <tfoot></tfoot>
                                    </table>
                                </fieldset>
                            </div>
                            <div class="row" style="margin-top: 30px;">
                                <fieldset class="col-md-12">
                                    <legend style="font-size: 17px"><b>Phân hệ hàng hóa</b></legend>
                                    <table id="example5" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Nhân Viên</th>
                                            <th>Tổng đơn hàng</th>
                                            <th>Thời gian giải quyết trung bình</th>
                                            <th>Ghi chú</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lã Mạnh Đạt</a>
                                            </td>
                                            <td class="text-center">20</td>
                                            <td class="text-center">2h30p</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Văn Minh</a>
                                            </td>
                                            <td class="text-center">25</td>
                                            <td class="text-center">1h30p</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Lê Minh Trung</a>
                                            </td>
                                            <td class="text-center">12</td>
                                            <td class="text-center">30p</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Võ Văn Linh</a>
                                            </td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">1h20p</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>
                                                <a href="quanly_nhanvien_chi-tiet-nhan-vien.html">Nguyễn Minh Trường</a>
                                            </td>
                                            <td class="text-center">9</td>
                                            <td class="text-center">3h</td>
                                            <td></td>
                                        </tr>

                                        </tbody>
                                        <tfoot></tfoot>
                                    </table>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('content2')
    <script>
        $(function () {
            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            });
            $('#datepicker2').datepicker({
                autoclose: true
            });
        });
        //Initialize Select2 Elements
        $('.select2').select2();

    </script>
    <script>
        new Chart(document.getElementById("lineChart"), {
            type: 'line',
            data: {
                datasets: [{
                    data: [{
                        x: 1,
                        y: 3
                    },
                        {
                            x: 7,
                            y: 1.1
                        },
                        {
                            x: 15,
                            y: 3.5
                        }, {
                            x: 20,
                            y: 2.5
                        }, {
                            x: 28,
                            y: 4.1
                        }],
                    label: "Tháng 12",
                    borderColor: "#33FF33",
                    backgroundColor: "#33FF33",
                    fill: false
                }, {
                    data: [{
                        x: 1,
                        y: 1.5
                    }, {
                        x: 18,
                        y: 3.2
                    }, {
                        x: 22,
                        y: 3.4
                    }, {
                        x: 31,
                        y: 3
                    }],
                    label: "Tháng 11",
                    borderColor: "#EE0000",
                    backgroundColor: "#EE0000",
                    fill: false
                }
                ]
            },
            options: {
                legend: {display: false},
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                elements: {
                    line: {
                        tension: 0, // disables bezier curves
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                            stepSize: 1,
                            max: 5
                        }
                    }],
                    xAxes: [{
                        type: "linear",
                        ticks: {
                            min: 1,
                            stepSize: 5,
                            max: 31
                        }
                    }, ],
                }
            }
        });

        new Chart(document.getElementById("lineChart2"), {
            type: 'line',
            data: {
                datasets: [{
                    data: [{
                        x: 1,
                        y: 3
                    },
                        {
                            x: 7,
                            y: 1
                        },
                        {
                            x: 15,
                            y: 3
                        }, {
                            x: 20,
                            y: 2
                        }, {
                            x: 28,
                            y: 4
                        }],
                    label: "Tháng 12",
                    borderColor: "#33FF33",
                    backgroundColor: "#33FF33",
                    fill: false
                }, {
                    data: [{
                        x: 1,
                        y: 1
                    }, {
                        x: 18,
                        y: 3
                    }, {
                        x: 22,
                        y: 3
                    }, {
                        x: 31,
                        y: 4
                    }],
                    label: "Tháng 11",
                    borderColor: "#EE0000",
                    backgroundColor: "#EE0000",
                    fill: false
                }
                ]
            },
            options: {
                legend: {display: false},
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                            stepSize: 1,
                            max: 5
                        }
                    }],
                    xAxes: [{
                        type: "linear",
                        ticks: {
                            min: 1,
                            stepSize: 5,
                            max: 31
                        }
                    }]
                }
            }
        });

        new Chart(document.getElementById("lineChart3"), {
            type: 'line',
            data: {
                datasets: [{
                    data: [{
                        x: 1,
                        y: 3
                    },
                        {
                            x: 7,
                            y: 1.1
                        },
                        {
                            x: 15,
                            y: 3.5
                        }, {
                            x: 20,
                            y: 2.5
                        }, {
                            x: 28,
                            y: 4.1
                        }],
                    label: "Tháng 12",
                    borderColor: "#33FF33",
                    backgroundColor: "#33FF33",
                    fill: false
                }, {
                    data: [{
                        x: 1,
                        y: 1.5
                    }, {
                        x: 18,
                        y: 3.2
                    }, {
                        x: 22,
                        y: 3.4
                    }, {
                        x: 31,
                        y: 3
                    }],
                    label: "Tháng 11",
                    borderColor: "#EE0000",
                    backgroundColor: "#EE0000",
                    fill: false
                }
                ]
            },
            options: {
                legend: {display: false},
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                elements: {
                    line: {
                        tension: 0, // disables bezier curves
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                            stepSize: 1,
                            max: 5
                        }
                    }],
                    xAxes: [{
                        type: "linear",
                        ticks: {
                            min: 1,
                            stepSize: 5,
                            max: 31
                        }
                    }, ],
                }
            }
        });

        new Chart(document.getElementById("lineChart4"), {
            type: 'line',
            data: {
                datasets: [{
                    data: [{
                        x: 1,
                        y: 3
                    },
                        {
                            x: 7,
                            y: 1
                        },
                        {
                            x: 15,
                            y: 3
                        }, {
                            x: 20,
                            y: 2
                        }, {
                            x: 28,
                            y: 4
                        }],
                    label: "Tháng 12",
                    borderColor: "#33FF33",
                    backgroundColor: "#33FF33",
                    fill: false
                }, {
                    data: [{
                        x: 1,
                        y: 1
                    }, {
                        x: 18,
                        y: 3
                    }, {
                        x: 22,
                        y: 3
                    }, {
                        x: 31,
                        y: 4
                    }],
                    label: "Tháng 11",
                    borderColor: "#EE0000",
                    backgroundColor: "#EE0000",
                    fill: false
                }
                ]
            },
            options: {
                legend: {display: false},
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                            stepSize: 1,
                            max: 5
                        }
                    }],
                    xAxes: [{
                        type: "linear",
                        ticks: {
                            min: 1,
                            stepSize: 5,
                            max: 31
                        }
                    }]
                }
            }
        });
    </script>
    <script>
        $(function () {
            $('#example1').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': true,
                'language': {
                    "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                    "lengthMenu": "Hiển thị _MENU_ kết quả",
                    "paginate": {
                        "first": "Trang đầu",
                        "last": "Trang cuối",
                        "next": "Tiếp",
                        "previous": "Trước"
                    }
                }
            });
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': true,
                'language': {
                    "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                    "lengthMenu": "Hiển thị _MENU_ kết quả",
                    "paginate": {
                        "first": "Trang đầu",
                        "last": "Trang cuối",
                        "next": "Tiếp",
                        "previous": "Trước"
                    }
                }
            });
            $('#example3').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': true,
                'language': {
                    "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                    "lengthMenu": "Hiển thị _MENU_ kết quả",
                    "paginate": {
                        "first": "Trang đầu",
                        "last": "Trang cuối",
                        "next": "Tiếp",
                        "previous": "Trước"
                    }
                }
            });
            $('#example4').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': true,
                'language': {
                    "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                    "lengthMenu": "Hiển thị _MENU_ kết quả",
                    "paginate": {
                        "first": "Trang đầu",
                        "last": "Trang cuối",
                        "next": "Tiếp",
                        "previous": "Trước"
                    }
                }
            });
            $('#example5').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': true,
                'language': {
                    "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                    "lengthMenu": "Hiển thị _MENU_ kết quả",
                    "paginate": {
                        "first": "Trang đầu",
                        "last": "Trang cuối",
                        "next": "Tiếp",
                        "previous": "Trước"
                    }
                }
            });

        });
    </script>
@endsection
