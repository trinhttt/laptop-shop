@extends('main')
@section('content3')
<title>Phiếu giữ hàng</title>
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

            #example1 tbody td:nth-child(2),
            #example1 tbody td:nth-child(7) {
                text-align: left;
            }

            #example1 tbody td:nth-child() {
                text-align: right;
            }

            .custom-span {
                margin: 0 0 0 10px;
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
                            <a href=""> Phiếu giữ hàng</a>
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
                                                <b>DANH SÁCH PHIẾU GIỮ HÀNG</b>
                                            </h4>
                                        </div>	
                                    </div>
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
                                                                    <td style="text-align:left; width: 10%">Lô số</td>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Lô số...">
                                                                        </div>
                                                                    </td>
                                                                    <td style="width: 10%">Khách</td>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Khách...">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-align:left">Ngày </td>
                                                                    <td>
                                                                        <div class="col-sm-5 no-padding">
                                                                            <div class="input-group date">
                                                                                <span class="input-group-addon">Từ</span>
                                                                                <input type="text" class="form-control" id="datepicker">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-sm-offset-1 no-padding">
                                                                            <div class="input-group date">
                                                                                <span class="input-group-addon">Đến</span>
                                                                                <input type="text" class="form-control" id="datepicker2">
                                                                            </div>
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
                                                                <tr>
                                                                    <td style="text-align:left">Trạng thái</td>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-dot-circle-o"></i></span>
                                                                            <select class="form-control">
                                                                                <option>Bản nháp</option>
                                                                                <option>Phiếu đang giao</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        Loại phiếu
                                                                    </td>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-dot-circle-o"></i></span>
                                                                            <select class="form-control">
                                                                                <option>Giao một lần</option>
                                                                                <option>Giao nhiều lần</option>
                                                                            </select>
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

                                                <div class="box-body">
                                                    <table id="example1" class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>Lô số</th>
                                                                <th>Khách hàng</th>
                                                                <th>Ngày</th>
                                                                <th>Tổng tiền</th>
                                                                <th>Trạng thái</th>
                                                                <th>Ghi chú</th>
                                                                <th>Số đợt giao</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    <a href="phanphoi_donhang_chi-tiet-phieu-giu-hang.html">81265-0</a>
                                                                </td>
                                                                <td>Công ty 2B</td>
                                                                <td>20-12-2017</td>
                                                                <td>152,123,500</td>
                                                                <td>
                                                                    <span class="label label-warning">Chưa xuất phiếu</span>
                                                                </td>
                                                                <td></td>
                                                                <td>1</td>
                                                            </tr>
                                                            <!--<tr>-->
                                                                <!--<td>2</td>-->
                                                                <!--<td>-->
                                                                    <!--<a href="phanphoi_donhang_chi-tiet-phieu-giu-hang.html">81264-1</a>-->
                                                                    <!--<span class="custom-span">-->
                                                                        <!--<i class="fa fa-exclamation-triangle text-yellow" aria-hidden="true"></i>-->
                                                                    <!--</span>-->
                                                                <!--</td>-->
                                                                <!--<td>Công ty Long Giang</td>-->
                                                                <!--<td>20-12-2017</td>-->
                                                                <!--<td>49,135,872</td>-->
                                                                <!--<td>-->
                                                                    <!--<span class="label label-warning">Chưa xuất phiếu</span>-->
                                                                <!--</td>-->
                                                                <!--<td>Mã LGS-L-M-24-6 thiếu 3 máy</td>-->
                                                                <!--<td>2</td>-->
                                                            <!--</tr>-->
                                                            <!--<tr>-->
                                                                <!--<td>3</td>-->
                                                                <!--<td>-->
                                                                    <!--<a href="phanphoi_donhang_chi-tiet-phieu-giu-hang.html">81263-0</a>-->
                                                                <!--</td>-->
                                                                <!--<td>Công ty Tương Lai</td>-->
                                                                <!--<td>19-12-2017</td>-->
                                                                <!--<td>412,735,872</td>-->
                                                                <!--<td>-->
                                                                    <!--<span class="label label-warning">Chưa xuất phiếu</span>-->
                                                                <!--</td>-->
                                                                <!--<td></td>-->
                                                                <!--<td>1</td>-->
                                                            <!--</tr>-->
                                                            <!--<tr>-->
                                                                <!--<td>4</td>-->
                                                                <!--<td>-->
                                                                    <!--<a href="phanphoi_donhang_chi-tiet-phieu-giu-hang.html">81262-1</a>-->
                                                                    <!--<span class="custom-span">-->
                                                                        <!--<i class="fa fa-exclamation-triangle text-yellow" aria-hidden="true"></i>-->
                                                                    <!--</span>-->
                                                                <!--</td>-->
                                                                <!--<td>Công ty Hoàng Nhật</td>-->
                                                                <!--<td>18-12-2017</td>-->
                                                                <!--<td>5,330,000</td>-->
                                                                <!--<td>-->
                                                                    <!--<span class="label label-warning">Chưa xuất phiếu</span>-->
                                                                <!--</td>-->
                                                                <!--<td>Mã AH-16D3-16H thiếu 2 máy</td>-->
                                                                <!--<td>2</td>-->
                                                            <!--</tr>-->
                                                            <!--<tr>-->
                                                                <!--<td>5</td>-->
                                                                <!--<td>-->
                                                                    <!--<a href="phanphoi_donhang_chi-tiet-phieu-giu-hang.html">81261-0</a>-->
                                                                <!--</td>-->
                                                                <!--<td>Công ty Long giang</td>-->
                                                                <!--<td>11-12-2017</td>-->
                                                                <!--<td>137,590,000</td>-->
                                                                <!--<td>-->
                                                                    <!--<span class="label label-warning">Chưa xuất phiếu</span>-->
                                                                <!--</td>-->
                                                                <!--<td></td>-->
                                                                <!--<td>1</td>-->
                                                            <!--</tr>-->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- /.box-body -->                                        
                                        </div>
                                        <!--col--> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
 @endsection           
        <!-- iCheck 1.0.1 -->
@section('content2')
        <script>
            $(function () {
                $('#example1').DataTable({
                    'paging': false,
                    'lengthChange': true,
                    'searching': false,
                    'ordering': true,
                    'info': false,
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
@endsection
 