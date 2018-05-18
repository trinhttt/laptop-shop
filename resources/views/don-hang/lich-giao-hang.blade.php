<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DS phiếu hoàn thành</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.css">

        <style>
        .vis-item.completed {
          color: white;
          background-color: green;
        }
        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="dist/css/font/GoogleFont.css">
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
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="phanphoi_index.html"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
						<li>Đơn hàng</li>
                        <li><a href="phanphoi_donhang_lich-giao-hang-ma-hang.html"> Lịch giao hàng</a></li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="box">
                            <div class="box-header">
                                <h4>
                                    <b>LỊCH GIAO HÀNG</b>
                                </h4>
                                <div class="box"></div>
                            </div>
                              <!--\ box header -->
                              <div class="box-body">
                                  <div class="col-md-12">
                                        <form class="row form-inline">
                                            <div class="col-md-8">
                                                <div class="form-group" style="margin-right: 16px;">
                                                    <label for="fromDate">Từ ngày </label>
                                                    <input type="date" class="form-control" id="fromDate" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="toDate">Đến ngày </label>
                                                    <input type="date" class="form-control" id="toDate" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" style="float: right;">
                                                    <input type="text" class="form-control" id="search" placeholder="Tìm kiếm" />
                                                </div>
                                            </div>
                                        </form>
                                        <div class="clearfix"></div>
                                        <div style="margin-top: 16px;">
                                            <div id="timeline"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <footer class="main-footer">
        </footer>
        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- Sparkline -->
        <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap  -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- SlimScroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="bower_components/moment/moment.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/locale/vi.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.21.0/vis.min.js"></script>
        <script>
            // DOM element where the Timeline will be attached
            var timeline = document.getElementById('timeline');

            var groups = new vis.DataSet([
              { id: 0, content: 'Lô số 826' },
              { id: 1, content: 'Lô số 827' },
              { id: 2, content: 'Lô số 828' },
              { id: 3, content: 'Lô số 829' },
              { id: 4, content: 'Lô số 830' },
              { id: 5, content: 'Lô số 831' },
              { id: 6, content: 'Lô số 832' },
              { id: 7, content: 'Lô số 833' },
              { id: 8, content: 'Lô số 834' },
              { id: 9, content: 'Lô số 835' }
            ]);

            // create a dataset with items
            var items = new vis.DataSet([
              {id: 0, group: 0, className: 'completed', content: 'Tạo đơn', start: new Date(2018, 0, 01),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty HPH<br/>Nhân viên: hoadx</small>"},
              {id: 1, group: 0, className: 'completed', content: 'Giao hàng', start: new Date(2018, 0, 03),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty HPH<br/>Nhân viên: hoadx</small>"},
              {id: 2, group: 1, className: 'completed', content: 'Tạo đơn', start: new Date(2018, 0, 02),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty Hoàng Nhật<br/>Nhân viên: hoadx</small>"},
              {id: 3, group: 1, className: 'completed', content: 'Giao hàng', start: new Date(2018, 0, 03),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty Hoàng Nhật<br/>Nhân viên: hoadx</small>"},
              {id: 4, group: 2, className: 'completed', content: 'Tạo đơn', start: new Date(2018, 0, 01),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Thiết bị điện BẢO LỘC<br/>Nhân viên: hoadx</small>"},
              {id: 5, group: 2, className: 'completed', content: 'Giao hàng', start: new Date(2018, 0, 04),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Thiết bị điện BẢO LỘC<br/>Nhân viên: hoadx</small>"},
              {id: 6, group: 3, className: 'completed', content: 'Tạo đơn', start: new Date(2018, 0, 03),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty Long Giang - Chị Thơm<br/>Nhân viên: hoadx</small>"},
              {id: 7, group: 3, content: 'Giao hàng', start: new Date(2018, 0, 07),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty Long Giang - Chị Thơm<br/>Đang chờ</small>"},
              {id: 8, group: 4, className: 'completed', content: 'Tạo đơn', start: new Date(2018, 0, 03),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: ĐẠI LÝ SAO THÁNG TÁM -VẠN XUÂN<br/>Nhân viên: hoadx</small>"},
              {id: 9, group: 4, className: 'completed', content: 'Giao hàng', start: new Date(2018, 0, 04),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: ĐẠI LÝ SAO THÁNG TÁM -VẠN XUÂN<br/>Nhân viên: hoadx</small>"},
              {id: 10, group: 5, className: 'completed', content: 'Tạo đơn', start: new Date(2018, 0, 03),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty Hoàng Nhật<br/>Nhân viên: hoadx</small>"},
              {id: 11, group: 5, content: 'Giao hàng', start: new Date(2018, 0, 05),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty Hoàng Nhật<br/>Đang chờ</small>"},
              {id: 12, group: 6, className: 'completed', content: 'Tạo đơn', start: new Date(2018, 0, 01),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty HPH<br/>Nhân viên: hoadx</small>"},
              {id: 13, group: 6, content: 'Giao hàng', start: new Date(2018, 0, 06),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty HPH<br/>Đang chờ</small>"},
              {id: 14, group: 7, className: 'completed', content: 'Tạo đơn', start: new Date(2018, 0, 01),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Thiết bị điện BẢO LỘC<br/>Nhân viên: hoadx</small>"},
              {id: 15, group: 7, content: 'Giao hàng', start: new Date(2018, 0, 05),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Thiết bị điện BẢO LỘC<br/>Đang chờ</small>"},
              {id: 16, group: 8, className: 'completed', content: 'Tạo đơn', start: new Date(2018, 0, 02),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty Long Giang - Chị Thơm<br/>Nhân viên: hoadx</small>"},
              {id: 17, group: 8, content: 'Giao hàng', start: new Date(2018, 0, 06),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty Long Giang - Chị Thơm<br/>Đang chờ</small>"},
              {id: 18, group: 9, className: 'completed', content: 'Tạo đơn', start: new Date(2018, 0, 01),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty Hoàng Nhật<br/>Nhân viên: hoadx</small>"},
              {id: 19, group: 9, content: 'Giao hàng', start: new Date(2018, 0, 07),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: Công ty Hoàng Nhật<br/>Đang chờ</small>"},
              {id: 20, group: 10, className: 'completed', content: 'Tạo đơn', start: new Date(2018, 0, 02),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: ĐẠI LÝ SAO THÁNG TÁM -VẠN XUÂN<br/>Nhân viên: hoadx</small>"},
              {id: 21, group: 10, content: 'Giao hàng', start: new Date(2018, 0, 07),
                title: "<small>Ngày: 01/01/2017<br/>Khách hàng: ĐẠI LÝ SAO THÁNG TÁM -VẠN XUÂN<br/>Đang chờ</small>"}
            ]);

            // Configuration for the Timeline
            var options = {
              margin: {
                item: 10, // minimal margin between items
                axis: 5   // minimal margin between items and the axis
              },
              moveable: false,
              locales: {
                // create a new locale (text strings should be replaced with localized strings)
                vi_VN: {
                  current: 'current',
                  time: 'time',
                }
              },
              locale: 'vi_VN'
            };

            // Create a Timeline
            var timeline = new vis.Timeline(timeline, items, groups, options);
        </script>
    </body>
</html>
