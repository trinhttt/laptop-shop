@extends('main')
@section('content3')
<title>Danh sách hóa đơn bán hàng</title>
@endsection
@section('content')
        <style>
            th {
                color: white;
                background-color: #3c8dbc;
                font-weight: bold;
                text-align: center;
            }

            td {
                text-align: center;
            }

            tr td:nth-child(3) {
                text-align: left;
            }

            tr td:nth-child(5) {
                text-align: right;
            }

            #example1 {
                background-color: rgb(240, 240, 240);
            }

            #example1 thead tr th {
                vertical-align: middle !important;
                text-align: center;
                background-color: #3c8dbc;
                color: #fff;
            }

            #example1 tbody td:nth-child() {
                text-align: left;
            }

            #example1 tbody td:nth-child() {
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
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li>
                            <a href="phanphoi_index.html">
                                <i class="fa fa-dashboard"></i> Trang Chủ</a>
                        </li>
                        <li>
                            <a href=""> Đơn hàng</a>
                        </li>
                        <li>
                            <a class="active">Danh sách hóa đơn bán hàng</a>
                        </li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>
                                                <b>DANH SÁCH HÓA ĐƠN BÁN HÀNG</b>
                                            </h4>
                                        </div>
                                        <div class="row" style="margin-left:0px; margin-right:0px">
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
                                                                    <td style="width: 10%">Khách</td>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Khách...">
                                                                        </div>
                                                                    </td>
                                                                    <td>Tổng tiền</td>
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
                                                    <!-- /.box-body -->
                                                    <div class="box-footer clearfix">
                                                        <div class="pagination pagination-sm no-margin pull-right">
                                                            <button type="button" class="btn btn-block btn-primary">Tìm kiếm <i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="example1" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Người lập hóa đơn</th>
                                                        <th>Khách hàng</th>
                                                        <th>Số điện thoại KH</th>
                                                        <th>Địa chỉ khách hàng</th>
                                                        <th>Tổng số sản phẩm</th>
                                                        <th>Mức giá áp dụng</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $stt=0?>

                                                @foreach($hds as $hd)

                                                    <tr>
                                                        <td>{{++$stt}}</td>
                                                        <td>
                                                           {{$hd->NguoiTaoHD}}
                                                        </td>
                                                        <td>{{$hd->KhachHang}}</td>
                                                        <td>{{$hd->SoDienThoai}}</td>

                                                        <td>{{$hd->DiaChiNhan}}</td>
                                                        <td>{{$hd->SoSanPham}}</td>
                                                        <td>
                                                            {{$hd->MucGiaNam}}
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                <!--<tr>-->
                                                        <!--<td>2</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_donhang_chi-tiet-phieu-giao-mot-lan.html">81265-0</a>-->
                                                        <!--</td>-->
                                                        <!--<td>Công ty HPH</td>-->
                                                        <!--<td>17-11-2017</td>-->
                                                        <!--<td>82,735,872</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-success">Đã hoàn thành</span>-->
                                                        <!--</td>-->
                                                        <!--<td></td>-->
                                                        <!--<td>2</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>3</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_donhang_chi-tiet-phieu-giao-mot-lan.html">81264-1</a>-->
                                                        <!--</td>-->
                                                        <!--<td>Công ty HPH</td>-->
                                                        <!--<td>16-09-2017</td>-->
                                                        <!--<td>41,735,872</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-success">Đã hoàn thành</span>-->
                                                        <!--</td>-->
                                                        <!--<td></td>-->
                                                        <!--<td>1</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>4</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_donhang_chi-tiet-phieu-giao-mot-lan.html">81263-1</a>-->
                                                        <!--</td>-->
                                                        <!--<td>Công ty Invico - Sắn</td>-->
                                                        <!--<td>16-08-2017</td>-->
                                                        <!--<td>5,990,800</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-success">Đã hoàn thành</span>-->
                                                        <!--</td>-->
                                                        <!--<td></td>-->
                                                        <!--<td>2</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>5</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_donhang_chi-tiet-phieu-giao-mot-lan.html">81262-0</a>-->
                                                        <!--</td>-->
                                                        <!--<td>Công ty Sáng Hà</td>-->
                                                        <!--<td>15-08-2017</td>-->
                                                        <!--<td>20,590,000</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-success">Đã hoàn thành</span>-->
                                                        <!--</td>-->
                                                        <!--<td></td>-->
                                                        <!--<td>1</td>-->
                                                    <!--</tr>-->

                                                </tbody>
                                                <tfoot></tfoot>
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
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <!-- page script -->
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
            });
            $(function () {
                //Date picker
                $('#datepicker').datepicker({
                    autoclose: true
                });
                $('#datepicker2').datepicker({
                    autoclose: true
                });
            });
        </script>
@endsection        