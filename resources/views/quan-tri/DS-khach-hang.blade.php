@extend('main')
@section('content3')
<title>Danh sách khách hàng</title>
@endsection
@section('content')
        <style>
            #example1 th {
                color: white;
                background-color: #3c8dbc;
                font-weight: bold;
            }

            #example1 th, #example1 td {
                text-align: center;
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
            #example1 tbody td:nth-child(4) {
                text-align: left;
            }

            #example1 tbody td:nth-child(),
            #example1 tbody td:nth-child() {
                text-align: right;
            }
            .custom-btn {
                padding: 10px 5px;
                min-width: 80px;
                height: 55px;
            }
            .menu-button {
                background-color: #fcf9f9;
                margin-top: 20px;
                padding-top: 20px;
                padding-right: 25px;
            }
            .smallBtn {
                padding: 10px 5px;
                min-width: 60px;
                height: 40px;
            }
            .custom-chk {
                padding-left: 15px;
            }
        </style>
 @endsection       

@section('content1')
            <div class="content-wrapper">
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">
                                <i class="fa fa-dashboard"></i> Trang Chủ</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class=""></i> Danh sách khách hàng</a>
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
                                            <b>Danh sách khách hàng</b>
                                        </h4>
                                    </div>
                                </div>
                                <!--end box header-->
                                <div class="box">
                                    <div class="box-header with-border text-center menu-button">
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom" onclick="window.location.href = 'phanphoi_khachhang_tao-khach-hang.html'">
                                            <i class="fa fa-plus-square text-green"></i>
                                            <span><strong>Tạo Mới</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                            <i class="fa fa-edit text-gray"></i>
                                            <span><strong>Sửa</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Lưu" data-placement="bottom">
                                            <i class="fa fa-save text-gray"></i>
                                            <span><strong>Lưu</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Hủy" data-placement="bottom">
                                            <i class="fa fa-close text-gray"></i>
                                            <span><strong>Hủy</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Chốt đơn" data-placement="bottom">
                                            <i class="fa fa-check-circle text-gray"></i>
                                            <span><strong>Chốt đơn</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Đổi trả" data-placement="bottom">
                                            <i class="fa fa-exchange text-gray"></i>
                                            <span><strong>Đổi trả</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Xem Trước" data-placement="bottom">
                                            <i class="fa fa-eye text-gray"></i>
                                            <span><strong>Xem Trước</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="modal" title="In" data-placement="bottom" data-target="#confirm-print">
                                            <i class="fa fa-print text-blue"></i>
                                            <span><strong>In</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Import Excel" data-placement="bottom">
                                            <i class="fa fa-download text-purple"></i>
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
                                <div class="box-body">

                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Tìm kiếm theo</h3>
                                        </div>
                                        <div class="box-body">
                                            <table class="table" style="margin: 0 auto;">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 10%; padding-top: 15px;"><strong>Tên</strong></td>
                                                        <td style="width: 40%">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                <input type="text" class="form-control" placeholder="Tên...">
                                                            </div>
                                                        </td>
                                                        <td  style="width: 10%; padding-top: 15px;"><strong>Xếp hạng</strong></td>
                                                        <td  style="width: 50%">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <select class="form-control select2" multiple="multiple" data-placeholder="Hãy lựa chọn..." style="height: 24px;">
                                                                    <option>Khách mới</option>
                                                                    <option>Khách quen</option>
                                                                    <option>Khách VIP</option>
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
                                    </div>

                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="example1" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Tên</th>
                                                        <th>Ảnh đại diện</th>
                                                        <th>Địa chỉ</th>
                                                        <th>Xếp hạng</th>
                                                        <th>Ngày tạo</th>
                                                        <th>Thay đổi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!--<tr>-->
                                                        <!--<td>1</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty HPH</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/hph.jpg" style="height: 40px; width: 40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>108 Nguyễn Trãi, Thanh Xuân Hà Nội</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-primary">KHÁCH MỚI</span>-->
                                                        <!--</td>-->
                                                        <!--<td>15-12-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>2</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty 2B -Anh Tuấn</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/viettel.png" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>108 Nguyễn Hoàng, Mỹ Đình 2 Từ Liêm Hà Nội</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-primary">KHÁCH MỚI</span>-->
                                                        <!--</td>-->
                                                        <!--<td>11-12-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>3</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty Vạn Xuân</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/amazon.png" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>223 Láng, Hai Bà Trưng Hà Nội</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-success">KHÁCH QUEN</span>-->
                                                        <!--</td>-->
                                                        <!--<td>06-03-2015</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>4</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty TV-TK Điện lực HN-Chú Lợi</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/ba.jpg" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>527 Ngô Quyền , Quận Bình Thạch, Hồ Chí Minh</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-danger">KHÁCH VIP</span>-->
                                                        <!--</td>-->
                                                        <!--<td>19-11-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>5</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty Vinh Thanh</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/logo_vinhthanh.png" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>527 Ngô Quyền , TP.Hải phong</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-primary">KHÁCH MỚI</span>-->
                                                        <!--</td>-->
                                                        <!--<td>19-11-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>6</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty TNHH Vinafo</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/logo_vinafo.gif" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>508 Trường Chinh , TP.Hà Nội</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-danger">KHÁCH VIP</span>-->
                                                        <!--</td>-->
                                                        <!--<td>30-11-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <!--<tr>-->
                                                        <!--<td>7</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty TNHH GoldenGate</a>-->
                                                        <!--</td>-->
                                                        <!--<td>-->
                                                            <!--<img src="dist/img/logo_goldengate.png" style="height: 40px; width:40px;" alt="">-->
                                                        <!--</td>-->
                                                        <!--<td>108 Trường Chinh , TP.Sơn La</td>-->
                                                        <!--<td>-->
                                                            <!--<span class="label label-primary">KHÁCH MỚI</span>-->
                                                        <!--</td>-->
                                                        <!--<td>20-11-2017</td>-->
                                                        <!--<td>-->
                                                            <!--<a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">-->
                                                                <!--<i class="fa fa-edit text-blue"></i>-->
                                                            <!--</a>-->
                                                        <!--</td>-->
                                                    <!--</tr>-->
                                                    <tr>
                                                        <td>8</td>
                                                        <td>
                                                            <a href="phanphoi_khachhang_chi-tiet-khach-hang.html">Công ty FPT SHOP</a>
                                                        </td>
                                                        <td>
                                                            <img src="dist/img/logo_fptshop.jpg" style="height: 40px; width:40px;" alt="">
                                                        </td>
                                                        <td>330 Yên Sơn , TP.Hòa Bình</td>
                                                        <td>
                                                            <span class="label label-primary">KHÁCH MỚI</span>
                                                        </td>
                                                        <td>19-10-2017</td>
                                                        <td>
                                                            <a href="phanphoi_khachhang_chi-tiet-khach-hang.html" class="btn btn-app custom-btn smallBtn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
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
                                                                                            "lengthMenu": "Hiển thị _MENU_ dòng",
                                                                                            "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
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
                                                                                });
                                                                                //Initialize Select2 Elements
                                                                                $('.select2').select2();
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
        </script>

        <div class="modal fade" id="confirm-print" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Xác nhận in</h4>
                    </div>
                    <div class="modal-body">
                        <label>Bạn có muốn in?</label>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Đóng"/>
                        <input onclick="location.href = 'phanphoi_khachhang_chi-tiet-khach-hang.html';" type="button" class="btn btn-success btn-ok" value="Có"/>
                    </div>
                </div>
            </div>
        </div>
 @endsection       