@extends('main')
@section('content3')
    <title>Báo cáo nhập & xuất hàng</title>
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
                <li><a href="#"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <h3><b>THÁNG 5/2018</b></h3>
            <div class="row dm">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="#">
                        <div class="info-box">

                            <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-tags"></i></span>


                            <div class="info-box-content">
                                <span class="info-box-text">TỔNG ĐƠN HÀNG <br/>TRONG THÁNG</span>
                                <!--<span class="info-box-number">25</span>-->
                                <span class="info-box-number">{{$Tong_donhang}}</span>
                            </div>

                            <!-- /.info-box-content -->
                        </div>
                    </a>

                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <a href="#">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-signal"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">DOANH THU</span>
                                <!--<span class="info-box-number">60,527,000 VND</span>-->
                                <span class="info-box-number">{{number_format($TongDoanhThuT5,2)}} VND</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </a>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>
                <a href="#">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">

                            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">TỔNG SẢN PHẨM <br/>BÁN RA</span>
                                <span class="info-box-number">{{$tong_sl_t5}}</span>
                                <!--<span class="info-box-number">160</span>-->
                            </div>
                            <!-- /.info-box-content -->

                        </div>

                        <!-- /.info-box -->
                    </div>
                </a>
                <!-- /.col -->
                <a href="#">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">

                            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">KHÁCH MỚI</span>
                                <span class="info-box-number">{{$dem_khach_moi}} </span>
                            </div>
                            <!-- /.info-box-content -->

                        </div>
                        <!-- /.info-box -->
                    </div>
                </a>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <!-- TABLE: LATEST ORDERS -->
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">SO SÁNH HAI THÁNG</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-wrench"></i></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Cài Đặt Biểu Đồ</a></li>
                                        <li><a href="#">Cài Đặt Thông Tin</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Trở Về</a></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <h4><strong>DOANH SỐ BÁN HÀNG</strong></h4>


                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="lineChart" style="height: 300px;"></canvas>
                                        <small>Đơn vị :<em> chục triệu VNĐ</em></small>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <h4><strong>SỐ SẢN PHẨM BÁN ĐƯỢC</strong></h4>
                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="lineChart2" style="height: 300px;"></canvas>
                                        <small>Đơn vị :<em> sản phẩm</em></small>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-5">
                                <div style="width: 13px; height: 13px; background-color: rgba(221, 41, 13, 1); display: inline-block;"></div>
                                <strong>Tháng 5</strong>
                                <div class="col-sm-offset-1" style="width: 13px; height: 13px; background-color: rgba(15,224,15,1); display: inline-block;"></div>
                                <strong>Tháng 4</strong>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green">
                                            @if($TongDoanhThuT4>$TongDoanhThuT5)
                                                <i class="fa fa-caret-down"></i>{{$TongDoanhThuT4/$TongDoanhThuT5}}
                                                @endif
                                                @if($TongDoanhThuT4<$TongDoanhThuT5)
                                                    <i class="fa fa-caret-up"></i>{{number_format(($TongDoanhThuT5/$TongDoanhThuT4-1)*100,2)}}%
                                                @endif
                                        </span>
                                        <h5 class="description-header">@if($TongDoanhThuT4>$TongDoanhThuT5)
                                                {{number_format($TongDoanhThuT4-$TongDoanhThuT5,2)}}

                                            @else
                                                {{number_format($TongDoanhThuT5-$TongDoanhThuT4,2)}}

                                            @endif

                                        </h5>
                                        <span class="description-text">DOANH THU SỐ BÁN HÀNG</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6 col-xs-6">
                                    <div class="description-block border-right">
                                        @if($tong_sl_t4>$tong_sl_t5)
                                            <span class="description-percentage text-red">

                                                {{--<i class="fa fa-caret-down"></i> 11.25%</span>--}}
                                            <i class="fa fa-caret-down"></i>{{number_format(($tong_sl_t4/$tong_sl_t4-1)*100,2)}}%

                                        @endif
                                        @if($tong_sl_t4<$tong_sl_t5)
                                            <span class="description-percentage text-green">

                                            <i class="fa fa-caret-up"></i>{{number_format(($tong_sl_t5/$tong_sl_t4-1)*100,2)}}%

                                        @endif
                                        </span>
                                            <h5 class="description-header">
                                                @if($tong_sl_t4>$tong_sl_t5)
                                                    {{$tong_sl_t4-$tong_sl_t5}}

                                                @else
                                                {{$tong_sl_t5-$tong_sl_t4}}

                                                @endif

                                                </h5>
                                        <span class="description-text">SẢN PHẨM BÁN ĐƯỢC</span>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            </div>

        </section>
        <!-- /.content -->
    </div>

@endsection

@section('content2')
    <script src="dist/js/Chart.bundle.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script>
        window.onresize = function () {
            clearTimeout(this.timeout);
            this.timeout = setTimeout(function () {
                location.reload();
            }, 0);
        };
    </script>
    <script>
//        new Chart(document.getElementById("barChart"), {
//            type: 'bar',
//            data: {
//                labels: ["AN-16D3-16H - 1600A", "EBS 54c 50A - 500mA", "EBN 203c 125A - 30mA", "EBN 52c	50A - 500mA", "EBS 52Fb 30mA - 50A", "32GRhd 30mA 30A", "MT-800 660A", "MT-63 42(34~50)A", "UW-18 for MC-6a~18a", "UA-1 1NO+1NC"],
//                datasets: [
//                    {
//                        label: "Số lượng: ",
//                        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "rgba(192,28,229,1)", "rgba(113,150,64,1)", "rgba(117,140,135,1", "rgba(255,199,0,1)", "rgba(0,0,0,1)"],
//                        data: [72, 68, 64, 59, 40, 38, 32, 25, 18, 14]
//                    }
//                ]
//            },
//            options: {
//                legend: {display: false},
//                title: {
//                    display: true,
//                    text: 'Tháng 11'
//                },
//                scales: {
//                    xAxes: [{
//                        ticks: {
//                            display: false
//                        }
//                    }]
//                }
//            }
//        });

    //        new Chart(document.getElementById("barChart2"), {
    //            type: 'bar',
    //            data: {
    //                labels: ["AN-16D3-16H - 1600A", "EBS 54c 50A - 500mA", "EBN 203c 125A - 30mA", "EBN 52c	50A - 500mA", "EBS 52Fb 30mA - 50A", "32GRhd 30mA 30A", "MT-800 660A", "MT-63 42(34~50)A", "UW-18 for MC-6a~18a", "UA-1 1NO+1NC"],
    //                datasets: [
    //                    {
    //                        label: "Số lượng: ",
    //                        backgroundColor: ["#3e95cd", "#c45850", "#3cba9f", "rgba(192,28,229,1)", "#e8c3b9", "#8e5ea2", "rgba(113,150,64,1)", "rgba(0,0,0,1)", "rgba(117,140,135,1", "rgba(255,199,0,1)"],
    //                        data: [101, 99, 90, 81, 77, 70, 50, 41, 30, 28]
    //                    }
    //                ]
    //            },
    //            options: {
    //                legend: {display: false},
    //                title: {
    //                    display: true,
    //                    text: 'Tháng 5'
    //                },
    //                scales: {
    //                    xAxes: [{
    //                        ticks: {
    //                            display: false
    //                        }
    //                    }]
    //                }
    //            }
    //        });



new Chart(document.getElementById("lineChart"), {
            type: 'line',
            data: {
                datasets: [{
                    data: [

                        {
                            x: 1,
                            y: {{$t40}}
                        },
                        {
                            x: 7,
                            y: {{$t41}}
                        },
                        {
                            x: 17,
                            y: {{$t42}}
                        }, {
                            x: 30,
                            y: {{$t43}}
                        },
                        ],

                    label: "Tháng 4",
                    borderColor: "#33FF33",
                    backgroundColor: "#33FF33",
                    fill: false
                }, {
                    data: [{
                        x: 1,
                        y: {{$t50}}
                    }, {
                        x: 18,
                        y: {{$t51}}
                    }, {
                        x: 22,
                        y: {{$t52}}
                    }, {
                        x: 31,
                        y: {{$t53}}
                    }],
                    label: "Tháng 5",
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
                        y: {{$tong_sl_t40}}
                    },
                        {
                            x: 7,
                            y: {{$tong_sl_t41}}
                        },
                        {
                            x: 17,
                            y: {{$tong_sl_t42}}
                        }, {
                            x: 30,
                            y: {{$tong_sl_t43}}
                        }],
                    label: "Tháng 4",
                    borderColor: "#33FF33",
                    backgroundColor: "#33FF33",
                    fill: false
                }, {
                    data: [{
                        x: 1,
                        y: {{$tong_sl_t50}}
                    }, {
                        x: 18,
                        y: {{$tong_sl_t51}}
                    }, {
                        x: 22,
                        y: {{$tong_sl_t52}}
                    }, {
                        x: 31,
                        y: {{$tong_sl_t53}}
                    }],
                    label: "Tháng 5",
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
    </script>
    <script>
        $(document).ready(function () {
            function scroll() {
                $("#scrollBox").hover(function () {
                    $("#scrollBox").stop();
                    window.clearInterval(scrollInterval);
                });
                var x = 0;
                var scrollInterval = setInterval(function () {
                    $("#scrollBox").delay(2000).animate({top: "-=30"}, 1000);
                    if (++x === 2) {
                        window.clearInterval(scrollInterval);
                        $("#scrollBox").delay(2000).animate({top: "0px"}, 1000);
                        scroll();
                    }
                });
            }
            ;
            scroll();
        });
        $(document).on('hide.bs.modal', '#noteModal', function () {
            clearTimeout(this.timeout);
            this.timeout = setTimeout(function () {
                location.reload();
            }, 0);
        });
    </script>
@endsection
