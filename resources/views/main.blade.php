<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Giá hàng hóa</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- lap-phieu -->
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="dist/css/animate.css">
    <link rel="stylesheet" href="dist/css/jquery-ui.css">
    <link rel="stylesheet" href="dist/css/back-to-top.css">
    <!-- lich giao hang -->
    <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.css">
    <!-- phieu dang xu lý -->
    <link rel="stylesheet" href="dist/css/font/GoogleFont.css">





    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="dist/css/font/GoogleFont.css">
    @yield('content')
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

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>

            </a>

            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <!--<span class="label label-warning">-->
                            <!--0-->
                            <!--</span>-->
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
                    <!--<p>Ngày 31/12/2017: Inbox để biết thêm chi tiết</p>-->
                    <!--<p>Ngày 05/01/2018: Hãy sử lý đơn hàng HD-83157-1</p>-->
                </div>
            </a>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
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
                        <li class=""><a href="DonHang_LapPhieu"><i class="fa fa-edit"></i> Lập Phiếu</a></li>

                        <li class="">

                            <a href="DonHang_PhieuDangXuLy">
                                <i class="fa fa-list-alt"></i>
                                <span>Phiếu đang xử lý</span>
                                <span class="pull-right-container">
                                            <span class="label label-primary bg-green">0</span>
                                        </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="DonHang_PhieuHoanThanh">
                                <i class="fa fa-files-o"></i>
                                <span>Phiếu đã hoàn thành</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="DonHang_PhieuDangXuLy">
                                <i class="fa fa-book"></i>
                                <span>Phiếu giữ hàng</span>

                            </a>
                        </li>
                        <li class="">
                            <a href="DonHang_LichGiaoHang">
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
                        <li class=""><a href="HangHoa_GiaHangHoa"><i class="fa fa-dollar"></i> Giá hàng hóa</a></li>
                        <li class=""><a href="HangHoa_TonKho"><i class="fa fa-dropbox"></i> Hàng tồn kho</a></li>
                        <li class=""><a href="HangHoa_DS-HangHoa"><i class="fa fa-dropbox"></i> Danh sách hàng hóa</a></li>

                        <li class="treeview">
                            <a href="#"><i class="fa fa-hand-o-right"></i> Nhập hàng
                                <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="HangHoa_TaoDotNhapHang"><i class="fa fa-edit"></i> Tạo đợt nhập mới</a></li>
                                <li class=""><a href="HangHoa_LichSuNhapHang"><i class="fa fa-table"></i> Lịch sử nhập hàng</a></li>
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
                            <a href="BaoCao_BanHang"><i class="fa fa-line-chart"></i> Bán hàng</a>
                        </li>
                        <li class="">
                            <a href="BaoCao_DoanhThu"><i class="fa fa-line-chart"></i> Doanh thu</a>
                        </li>
                        <li class="">
                            <a href="BaoCao_ChiTietDoanhThu"><i class="fa fa-line-chart"></i> Chi tiết doanh thu</a>
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
                            <a href="QuanTri_DSKhachHang"><i class="fa fa-users"></i> Danh sách khách hàng</a>
                        </li>
                        <li class="">
                            <a href="QuanTri_DSNhaCungCap"><i class="fa fa-users"></i> Danh sách nhà cung cấp</a>
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

    @yield('content1')
    <footer class="main-footer">
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- lap phieu -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="dist/js/autoNumeric.min.js"></script>
<script src="dist/js/sweetalert2.all.js"></script>
<script src="dist/js/jquery-1.12.4.js"></script>
<script src="dist/js/back-to-top.js"></script>
<script src="dist/js/jquery-ui.js"></script>
<!-- lich giao hang -->
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="bower_components/moment/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/vi.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.js"></script>
<!-- phieu giu hang -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>


@yield('content2')
</body>
</html>

