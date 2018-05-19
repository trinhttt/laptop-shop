@extend('main')
@section('content3')
<title>Phiếu giữ hàng</title>
@endsection

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
    </head>

    <body class="hold-transition skin-blue-light sidebar-mini fixed">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="phanphoi_index.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">LAP</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg" style="margin-left: -15px;">
                        <img style="width:60px; height:50px;margin-top: 5px" class="img-responsive pull-left" src="dist/img/logo.png" alt="Photo">
                        <div style="margin-top: -5px">
                        <b style="margin-right: 35px;margin-bottom: 20px">Quản lý</b>
                        <span style="position: absolute; margin-top: 15px; margin-left: -100px; font-size: 14px;font-weight: bold"><small>Cửa hàng Laptop</small></span>
                        </div>
                    </span>

                </a>

                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>

                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">Bạn có 0 thông báo mới</li>
                                    <li>
                                        <ul class="menu">

                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">Xem tất cả</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="dist/img/user.jpeg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Trinh Thai</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/user.jpeg" class="img-circle" alt="User Image">

                                        <p>Trinh Thai<small>Admin</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="phanphoi_nguoidung_thong-tin-nguoi-dung.html" class="btn btn-default btn-flat">Hồ sơ</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="login.html" class="btn btn-default btn-flat">Thoát</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a href="#" id="scrollContainer" class="navbar-custom-menu pull-left" data-toggle="modal" data-target="#noteModal">
                        <div id="scrollBox">

                        </div>
                    </a>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="dist/img/user.jpeg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Trinh Thai</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Trực tuyến</a>
                        </div>
                    </div>

                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="active">
                            <a href="phanphoi_index.html">
                                <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-o"></i> <span>Đơn hàng</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="phanphoi_donhang_lap-phieu.html"><i class="fa fa-edit"></i> Lập Phiếu</a></li>

                                <li class="">
                                    <a href="phanphoi_donhang_danh-sach-phieu-dang-xu-ly.html">
                                        <i class="fa fa-list-alt"></i>
                                        <span>Phiếu đang xử lý</span>
                                        <span class="pull-right-container">
                                            <span class="label label-primary bg-green">1</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_donhang_danh-sach-phieu-hoan-thanh.html">
                                        <i class="fa fa-files-o"></i>
                                        <span>Phiếu đã hoàn thành</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_donhang_danh-sach-phieu-giu-hang.html">
                                        <i class="fa fa-book"></i>
                                        <span>Phiếu giữ hàng</span>
                                        <!--<span class="pull-right-container">-->
                                            <!--<span class="label pull-right bg-green">new</span>-->
                                            <!--<span class="label pull-right bg-red">2</span>-->
                                        <!--</span>-->
                                    </a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_donhang_lich-giao-hang-tong.html">
                                        <i class="fa fa-calendar-minus-o"></i>
                                        <span>Lịch giao hàng</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Hàng hoá</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="phanphoi_hanghoa_gia-hang-hoa.html"><i class="fa fa-dollar"></i> Giá hàng hóa</a></li>
                                <li class=""><a href="phanphoi_hanghoa_ton-kho.html"><i class="fa fa-dropbox"></i> Hàng tồn kho</a></li>

                                <li class="treeview">
                                    <a href="#"><i class="fa fa-hand-o-right"></i> Nhập hàng
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class=""><a href="phanphoi_hanghoa_tao-dot-nhap-kho.html"><i class="fa fa-edit"></i> Tạo đợt nhập mới</a></li>
                                        <li class=""><a href="phanphoi_hanghoa_lich-su-nhap-hang.html"><i class="fa fa-table"></i> Lịch sử nhập hàng</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pencil-square"></i> <span>Báo cáo</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="bao-cao/phanphoi_baocao_doanh-thu.html"><i class="fa fa-line-chart"></i> Doanh thu</a>
                                </li>


                            </ul>
                        </li>

                        <li class="treeview ">
                            <a href="#">
                                <i class="fa fa-database"></i> <span>Quản trị</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="">
                                    <a href="phanphoi_khachhang_danh-sach-khach-hang.html"><i class="fa fa-users"></i> Danh sách khách hàng</a>
                                </li>
                                <li class="">
                                    <a href="phanphoi_cungcap_danh-sach-nha-cung-cap.html"><i class="fa fa-users"></i> Danh sách nhà cung cấp</a>
                                </li>


                            </ul>
                        </li>
                        <!--<li class="">-->
                        <!--<a href="phanphoi_quy-trinh-xu-ly.html">-->
                        <!--<i class="fa fa-question-circle"></i> <span>Help</span>-->
                        <!--</a>-->
                        <!--</li>						-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
			
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
        </div>
		
        <footer class="main-footer">
			<a href="#0" class="cd-top">Top</a>
        </footer>

        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- page script -->
        <!-- bootstrap datepicker -->
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		<!-- BackToTop -->
        <script src="dist/js/back-to-top.js"></script>
        <!-- Select2 -->
        <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
        <!-- iCheck 1.0.1 -->
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
    </body>

</html>