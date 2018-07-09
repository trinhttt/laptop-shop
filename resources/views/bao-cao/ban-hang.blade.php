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
                <li><a href="phanphoi_index.html"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                <li>Báo cáo</li>
                <li class="active">Báo cáo nhập & xuất hàng</li>
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
                                    <b>Báo cáo nhập & xuất hàng</b>
                                </h4>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box">
                            <div class="box-header with-border text-center menu-button">




                                <a class="btn btn-app custom-btn" data-toggle="tooltip" title="In" data-placement="bottom">
                                    <i class="fa fa-print text-blue"></i>
                                    <span><strong>In</strong></span>
                                </a>

                                <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Xuất Excel" data-placement="bottom">
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
                                    <input type="text" class="form-control" style="width: 150px" id="datepicker2" value="06/01/2018">
                                </div>
                            </div>



                            <div class="row" style="margin-top: 30px">
                                <fieldset class="col-md-6">
                                    <legend style="font-size: 17px"><b>Tổng quan nhập hàng</b></legend>
                                    <table id="example1" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width:  5%">STT</th>
                                            <th style="width:  30%;margin-left: 150px">Báo cáo</th>
                                            <th style="width:  5%;margin-right: 80px">Chỉ số đã đạt</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <?php $dem_nhap=0?>
                                                @foreach($nhs as $nh)
                                                    <?php ++$dem_nhap?>
                                                @endforeach

                                            <td>1</td>
                                            <td style=" padding-left: 10%">Số đơn nhập hàng (đơn)</td>
                                            <td style="text-align: right; padding-right: 10%">{{$dem_nhap}} </td>
                                        </tr>
                                        <tr>


                                            <td>2</td>
                                            <td style=" padding-left: 10%">Số sản phẩm đã nhập (cái)</td>
                                            <td style="text-align: right; padding-right: 10%">{{$sl_nhap}} </td>
                                        </tr>



                                        <tr>
                                            <td>3</td>
                                            <td style="padding-left: 10%">Tổng chi nhập hàng (VNĐ)</td>
                                            <td style="text-align: right; padding-right: 10%">{{number_format ($tong_tien_nhap,2)  }}</td>
                                        </tr>
                                        </tbody>

                                    </table>
                                </fieldset>
                                <fieldset class="col-md-6">
                                    <legend style="font-size: 17px"><b>Tổng quan bán hàng</b></legend>
                                    <table id="example1" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width:  5%">STT</th>
                                            <th style="width:  30%;margin-left: 150px">Báo cáo</th>
                                            <th style="width:  5%;margin-right: 80px">Chỉ số đã đạt</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <?php $dem_xuat=0?>
                                            @foreach($hds as $hd)
                                                <?php ++$dem_xuat?>

                                            @endforeach
                                            <td>1</td>
                                            <td style=" padding-left: 10%">Số đơn bán hàng (đơn)</td>
                                            <td style="text-align: right; padding-right: 10%">{{$dem_xuat}} </td>
                                        </tr>
                                        <tr>
                                            <?php $dem_xuat=0?>
                                            @foreach($hds as $hd)
                                                <?php ++$dem_xuat?>

                                            @endforeach
                                            <td>2</td>
                                            <td style=" padding-left: 10%">Số sản phẩm đã bán (cái)</td>
                                            <td style="text-align: right; padding-right: 10%">{{$sl_xuat}} </td>
                                        </tr>


                                        <tr>
                                            <td>3</td>
                                            <td style="padding-left: 10%">Tổng thu bán hàng (VNĐ)</td>
                                            <td style="text-align: right; padding-right: 10%">{{number_format ($tong_tien_xuat,2)  }}</td>
                                        </tr>
                                        </tbody>

                                    </table>
                                </fieldset>

                            </div>


                            <div class="row">
                                <fieldset class="col-sm-12">
                                    <legend style="font-size: 17px"><b>Chi tiết nhập hàng</b></legend>

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th width="7%">STT</th>
                                            <th width="35%">SẢN PHẨM</th>
                                            <th width="15%">SỐ LƯỢNG NHẬP</th>
                                            <th width="18%">GIÁ</th>
                                            <th width="25%">TỔNG CHI</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $STT0=1?>
                                        <?php $tong_lap0=0?>
                                        <?php $tong_don_gia0=0?>
                                        <?php $tong_chi0=0?>

                                        @foreach($ctnh2 as $nh1)

                                            <?php $tong_lap10=0?>
                                            <?php $tong_don_gia10=0?>
                                            @foreach($ctnh as $nh)
                                                @if($nh->TenLapTop===$nh1)
                                                    <?php $tong_lap10+=$nh->SoLuong?>
                                                    <?php $tong_don_gia10+=$nh->DonGia?>


                                                @endif

                                            @endforeach
                                            <?php $tong_lap0+=$tong_lap10?>
                                            <?php $tong_don_gia0+=$tong_don_gia10?>
                                            <?php $tong_chi0+=$tong_lap10*$tong_don_gia10?>
                                            <tr>
                                                <td style="text-align: center">{{$STT0++}}</td>
                                                <td style="text-align: left">{{$nh1}}</td>
                                                <td style="text-align:center">{{$tong_lap10}}</td>
                                                <td style="text-align:right">{{number_format($tong_don_gia10,2)}}</td>
                                                <td style="text-align:right">{{number_format ($tong_lap10*$tong_don_gia10,2)}}</td>
                                            </tr>

                                        @endforeach

                                        </tbody>
                                        <tr style="background-color:#00b3b3;color:white;font-weight:bold">
                                            <td class="noBorder"></td>
                                            <td class="noBorder" style="text-align:center">Tổng</td>
                                            <td style="text-align:center">{{$tong_lap0}}</td>
                                            <td style="text-align:right">{{number_format($tong_don_gia0,2)}}</td>
                                            <td style="text-align:right">{{number_format($tong_chi0,2)}}</td>
                                        </tr>


                                    </table>
                                </fieldset>
                            </div>


                                <div class="row">
                                    <fieldset class="col-sm-12">
                                        <legend style="font-size: 17px"><b>Chi tiết bán hàng</b></legend>

                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th width="7%">STT</th>
                                                <th width="35%">SẢN PHẨM</th>
                                                <th width="15%">SỐ LƯỢNG BÁN RA</th>
                                                <th width="18%">GIÁ</th>
                                                <th width="25%">TỔNG THU</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $STT=1?>
                                            <?php $tong_lap=0?>
                                            <?php $tong_don_gia=0?>
                                            <?php $tong_thu=0?>

                                            @foreach($cthd2 as $hd1)

                                                    <?php $tong_lap1=0?>
                                                <?php $tong_don_gia1=0?>
                                                @foreach($cthd as $hd)
                                                    @if($hd->MaLapTop===$hd1)
                                                        <?php $tong_lap1+=$hd->SoLuong?>
                                                        <?php $tong_don_gia1+=$hd->DonGia?>


                                                    @endif

                                                @endforeach
                                                    <?php $tong_lap+=$tong_lap1?>
                                                    <?php $tong_don_gia+=$tong_don_gia1?>
                                                    <?php $tong_thu+=$tong_lap1*$tong_don_gia1?>
                                                <tr>
                                                <td style="text-align: center">{{$STT++}}</td>
                                                <td style="text-align: left">{{$sps[$hd1]->TenLapTop}}</td>
                                                <td style="text-align:center">{{$tong_lap1}}</td>
                                                <td style="text-align:right">{{number_format($tong_don_gia1,2)}}</td>
                                                <td style="text-align:right">{{number_format ($tong_lap1*$tong_don_gia1,2)}}</td>
                                                </tr>

                                            @endforeach

                                            </tbody>
                                            <tr style="background-color:#00b3b3;color:white;font-weight:bold">
                                                <td class="noBorder"></td>
                                                <td class="noBorder" style="text-align:center">Tổng</td>
                                                <td style="text-align:center">{{$tong_lap}}</td>
                                                <td style="text-align:right">{{number_format($tong_don_gia,2)}}</td>
                                                <td style="text-align:right">{{number_format($tong_thu,2)}}</td>
                                            </tr>


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
