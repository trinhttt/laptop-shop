<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lập phiếu đơn hàng</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/animate.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="dist/css/jquery-ui.css">
        <link rel="stylesheet" href="dist/css/back-to-top.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .menu-button {
                background-color: #fcf9f9; 
                margin-top: 20px;
                padding-top:20px;
                padding-right:25px;
            }
            .custom-btn {
                padding: 10px 5px;
                min-width: 80px;
                height: 55px;
            }
            .mainTable {
                background-color: rgb(240, 240, 240);
            }
            .mainTable thead tr th {
                vertical-align: middle !important;
                text-align: center;
                background-color: #3c8dbc;
                color: #fff;
            }
            .mainTable tbody td:nth-child(6),.mainTable tbody td:nth-child(7),
            .mainTable tbody td:nth-child(9) {
                text-align: right;
            }
            .pointerCursor {
                cursor: pointer;
            }
            .textCursor {
                cursor: text;
            }
            .noDisplay {
                display: none !important;
            }
        </style>
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
                                            <!--<li>-->
                                            <!--<a href="phanphoi_donhang_chi-tiet-phieu-giao-nhieu-lan.html">-->
                                            <!--<i class="fa fa-shopping-cart text-green"></i> Lô hàng số 81264-1#1 đã hoàn thành-->
                                            <!--<div class="pull-right">1 phút trước</div>-->
                                            <!--</a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--<a href="phanphoi_donhang_danh-sach-phieu-giu-hang.html">-->
                                            <!--<i class="fa fa-shopping-cart text-green"></i> Lô hàng số 89665-0 đang chờ xử lý-->
                                            <!--<div class="pull-right">8 phút trước</div>-->
                                            <!--</a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--<a href="sua_phieu_0.html">-->
                                            <!--<i class="fa fa-shopping-cart text-green"></i> Lô hàng số 89659-0 đang chờ xử lý <p/> đổi trả-->
                                            <!--<div class="pull-right">55 phút trước</div>-->
                                            <!--</a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--<a href="phanphoi_donhang_chi-tiet-phieu-giao-mot-lan.html">-->
                                            <!--<i class="fa fa-shopping-cart text-green"></i> Lô hàng số 89664-0 đang chờ xử lý -->
                                            <!--<div class="pull-right">1 giờ trước</div>-->
                                            <!--</a>-->
                                            <!--</li>-->
                                            <!--<li>-->
                                            <!--<a href="phanphoi_donhang_chi-tiet-phieu-giao-nhieu-lan.html">-->
                                            <!--<i class="fa fa-shopping-cart text-green"></i> Lô hàng số 81264-1#2 đang xử lý-->
                                            <!--<div class="pull-right">1 giờ trước</div>-->
                                            <!--</a>-->
                                            <!--</li>-->
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

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="phanphoi_index.html"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                        <li>Đơn hàng</li>
                        <li class="active">Lập phiếu</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header" style="text-align: center;margin-top: 30px;">
                                    <h3 class="box-title with-border"><b style="font-size: 25px;">Phiếu xuất hàng</b></h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <div class="row">
                                        <div class="box-header with-border text-center menu-button" style="margin-left: 5px; margin-right: 5px;">

                                            <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Tạo Mới" data-placement="bottom" onclick="taomoi();">
                                                <i class="fa fa-plus-square text-green"></i>
                                                <span><strong>Tạo Mới</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                <i class="fa fa-edit text-gray"></i>
                                                <span><strong>Sửa</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn" data-toggle="modal" title="Lưu" data-placement="bottom" data-target="#confirmSave">
                                                <i class="fa fa-save text-yellow"></i>
                                                <span><strong>Lưu</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled">
                                                <i class="fa fa-close text-gray"></i>
                                                <span><strong>Hủy</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn" data-toggle="modal" title="Chốt đơn" data-target="#confirmComplete" data-placement="bottom">
                                                <i class="fa fa-check-circle text-green"></i>
                                                <span><strong>Chốt đơn</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Đổi trả" data-placement="bottom">
                                                <i class="fa fa-exchange text-gray"></i>
                                                <span><strong>Đổi trả</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xem Trước" data-placement="bottom" onclick="openNewTab();">
                                                <i class="fa fa-eye text-black"></i>
                                                <span><strong>Xem Trước</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn" data-toggle="tooltip" title="In" data-placement="bottom" onclick="openNewTab();">
                                                <i class="fa fa-print text-blue"></i>
                                                <span><strong>In</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Import Excel" data-placement="bottom">
                                                <i class="fa fa-download text-gray"></i>
                                                <span><strong>Import Excel</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Xuất Excel" data-placement="bottom">
                                                <i class="fa fa-file-excel-o text-gray"></i>
                                                <span><strong>Xuất Excel</strong></span>
                                            </a>
                                            <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Xuất PDF" data-placement="bottom">
                                                <i class="fa fa-file-pdf-o text-gray"></i>
                                                <span><strong>Xuất PDF</strong></span>
                                            </a>
                                        </div>
                                    </div>
                                    <form style="margin-top: 25px;">
                                        <div class="box-header">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <fieldset>
                                                        <legend><b style="font-size: 17px;">Thông tin đơn hàng</b></legend>
                                                        <div class="box-header">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label>Đơn vị</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                        <select class="form-control" onchange="lookup(); return false;" id="donVi">
                                                                            <option></option>
                                                                            <option value="1">Công ty Sáng Hà</option>
                                                                            <option value="2">Công ty Invico - Sắn</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Lô số</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                                                        <input type="text" class="form-control pointerCursor" id="lo" value="O1349-0" onclick="$(this).removeClass('pointerCursor');
                                                                                $(this).addClass('textCursor');
                                                                                this.select();">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-6">
                                                                    <label>Địa chỉ giao hàng</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                                                                        <input type="text" class="form-control" id="AddressDeliver">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Số đợt giao</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-truck"></i></span>
                                                                        <input type="number" id="delivery" min="0" step="1" value="1" style="padding-left: 12px;" onchange="deliveryQtt();" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-6">
                                                                    <label>Địa chỉ xuất HĐ</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                                                        <input type="text" class="form-control" id="AddressContact">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label>Mức giá áp dụng</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                        <select class="form-control" style="font-family: 'FontAwesome'; cursor: pointer;">
                                                                            <option>2016</option>
                                                                            <option>2017</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row" style="margin-top: 15px;">
                                                                <div class="col-md-6">
                                                                    <label>Mã số thuế</label><span style="color: red;">*</span>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                                                        <input type="text" class="form-control" id="TaxCode">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-header">
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-xs-12 table-responsive">
                                                    <fieldset>
                                                        <legend><b style="font-size: 17px;">Chi tiết đơn hàng</b></legend>                                        
                                                        <table class="table table-striped mainTable">
                                                            <thead>
                                                                <tr>
                                                                    <th rowspan="2" style="width: 30px;">STT</th>
                                                                    <th rowspan="2" colspan="2" style="width: 400px;">Sản phẩm</th>
                                                                    <th colspan="2">Số lượng</th>
                                                                    <th rowspan="2" style="width: 150px;">Đơn giá (VNĐ)</th>
                                                                    <th rowspan="2" style="width: 150px;">Thành tiền trước chiết khấu (VNĐ)</th>
                                                                    <th rowspan="2" style="width: 70px;">Chiết khấu (%)</th>
                                                                    <th rowspan="2" style="width: 150px;">Thành tiền sau chiết khấu (VNĐ)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 70px;">Cái</th>
                                                                    <th style="width: 70px;">Thùng</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">---</td>
                                                                    <td style="vertical-align: middle;">---</td>
                                                                    <td style="vertical-align: middle;">---</td>
                                                                    <td><input type="text" class="form-control" style="text-align: right;"
                                                                               onkeyup="configSp('1');
                                                                                       return false;" id="cai_1"/></td>
                                                                    <td><input type="text" class="form-control" style="text-align: right;"
                                                                               onkeyup="configThung('1');
                                                                                       return false;" id="thung_1" title="20 cái/1"/></td>
                                                                    <td><output id="dongia_1" class="number">---</output></td>
                                                                    <td><output id="tien_chua_ck_1"></output></td>
                                                                    <td><input type="text" class="form-control" style="text-align: right;"
                                                                               onkeyup="configCk('1');
                                                                                       return false;" id="ck_1"/></td>
                                                                    <td><output id="tien_da_ck_1"></output></td>
                                                                </tr>
                                                                <!--<tr>-->
                                                                    <!--<td style="vertical-align: middle;">2</td>-->
                                                                    <!--<td style="vertical-align: middle;">TS1000N AG6 3P</td>-->
                                                                    <!--<td style="vertical-align: middle;">1000A</td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configSp('2');-->
                                                                                       <!--return false;" id="cai_2"/></td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configThung('2');-->
                                                                                       <!--return false;" id="thung_2" title="20 cái/1"/></td>-->
                                                                    <!--<td><output id="dongia_2" class="number">80807000</output></td>-->
                                                                    <!--<td><output id="tien_chua_ck_2"></output></td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configCk('2');-->
                                                                                       <!--return false;" id="ck_2"/></td>-->
                                                                    <!--<td><output id="tien_da_ck_2"></output></td>-->
                                                                <!--</tr>-->
                                                                <!--<tr>-->
                                                                    <!--<td style="vertical-align: middle;">3</td>-->
                                                                    <!--<td style="vertical-align: middle;">ABS 32c</td>-->
                                                                    <!--<td style="vertical-align: middle;">5A</td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configSp('3');-->
                                                                                       <!--return false;" id="cai_3"/></td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configThung('3');-->
                                                                                       <!--return false;" id="thung_3" title="20 cái/1"/></td>-->
                                                                    <!--<td><output id="dongia_3" class="number">1859000</output></td>-->
                                                                    <!--<td><output id="tien_chua_ck_3"></output></td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configCk('3');-->
                                                                                       <!--return false;" id="ck_3"/></td>-->
                                                                    <!--<td><output id="tien_da_ck_3"></output></td>-->
                                                                <!--</tr>-->
                                                                <!--<tr>-->
                                                                    <!--<td style="vertical-align: middle;">4</td>-->
                                                                    <!--<td style="vertical-align: middle;">ABH 53c</td>-->
                                                                    <!--<td style="vertical-align: middle;">30A</td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configSp('4');-->
                                                                                       <!--return false;" id="cai_4"/></td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configThung('4');-->
                                                                                       <!--return false;" id="thung_4" title="20 cái/1"/></td>-->
                                                                    <!--<td><output id="dongia_4" class="number">2375000</output></td>-->
                                                                    <!--<td><output id="tien_chua_ck_4"></output></td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configCk('4');-->
                                                                                       <!--return false;" id="ck_4"/></td>-->
                                                                    <!--<td><output id="tien_da_ck_4"></output></td>-->
                                                                <!--</tr>-->
                                                                <!--<tr>-->
                                                                    <!--<td style="vertical-align: middle;">5</td>-->
                                                                    <!--<td style="vertical-align: middle;">ABE103-G</td>-->
                                                                    <!--<td style="vertical-align: middle;">63A</td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configSp('5');-->
                                                                                       <!--return false;" id="cai_5"/></td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configThung('5');-->
                                                                                       <!--return false;" id="thung_5" title="20 cái/1"/></td>-->
                                                                    <!--<td><output id="dongia_5" class="number">8443000</output></td>-->
                                                                    <!--<td><output id="tien_chua_ck_5"></output></td>-->
                                                                    <!--<td><input type="text" class="form-control" style="text-align: right;"-->
                                                                               <!--onkeyup="configCk('5');-->
                                                                                       <!--return false;" id="ck_5"/></td>-->
                                                                    <!--<td><output id="tien_da_ck_5"></output></td>-->
                                                                <!--</tr>-->
                                                                <!--<tr>-->
                                                                    <!--<td style="vertical-align: middle;">6</td>-->
                                                                    <!--<td style="vertical-align: middle; width: 24.7%;"><input type="text" class="form-control" id="name_6"/></td>-->
                                                                    <!--<td style="vertical-align: middle;"><input type="text" class="form-control ampe"/></td>-->
                                                                    <!--<td><input type="text" class="form-control" id="cai_6" style="text-align: right;"-->
                                                                               <!--onkeyup="configSp('6');-->
                                                                                       <!--return false;"/></td>-->
                                                                    <!--<td><input type="text" class="form-control" id="thung_6" -->
                                                                               <!--title="20 cái/1" style="text-align: right;" onkeyup="configThung('6');-->
                                                                                       <!--return false;"/></td>-->
                                                                    <!--<td><output id="dongia_6"></output></td>-->
                                                                    <!--<td><output id="tien_chua_ck_6"></output></td>-->
                                                                    <!--<td><input type="text" class="form-control" id="ck_6" style="text-align: right;"-->
                                                                               <!--onkeyup="configCk('6');-->
                                                                                       <!--return false;"/></td>-->
                                                                    <!--<td><output id="tien_da_ck_6"></output></td>-->
                                                                <!--</tr>-->
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Cộng</b></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_cai_1" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_thung_1" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_chua_ck_1" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Chiết khấu (%)</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td>
                                                                    <td><input type="text" class="form-control" id="tong_ck_1" style="text-align: right; float: right; font-weight: bold;"
                                                                               onkeyup="configCkAll('1');
                                                                                       return false;"/></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tien_ck_1" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Còn lại</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="con_lai_1" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>VAT (%)</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td>
                                                                    <td>
                                                                        <input type="text" class="form-control" id="vat_1" style="text-align: right; float: right; font-weight: bold;"
                                                                               onkeyup="configCkAll('1');
                                                                                       return false;"/>
                                                                    </td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tien_vat_1" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Tổng cộng</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_da_ck_1" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
                                                    <fieldset id="turn1" class="noDisplay">
                                                        <legend><b style="font-size: 17px;">Giao hàng đợt 1</b></legend>
                                                        <div class="box-header">
                                                            <div class="col-md-6">
                                                                <label>Xuất ngày</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" style="padding-left: 12px;" value="13/01/2018" class="form-control datepicker pointerCursor">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Lô số</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                                                    <input class="form-control" disabled id="lo_1"/>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <hr/>
                                                        <table class="table table-striped mainTable">
                                                            <thead>
                                                                <tr>
                                                                    <th rowspan="2" style="width: 30px;">STT</th>
                                                                    <th rowspan="2" colspan="2" style="width: 400px;">Sản phẩm</th>
                                                                    <th colspan="2">Số lượng</th>
                                                                    <th rowspan="2" style="width: 150px;">Đơn giá (VNĐ)</th>
                                                                    <th rowspan="2" style="width: 150px;">Thành tiền trước chiết khấu (VNĐ)</th>
                                                                    <th rowspan="2" style="width: 70px;">Chiết khấu (%)</th>
                                                                    <th rowspan="2" style="width: 150px;">Thành tiền sau chiết khấu (VNĐ)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 70px;">Cái</th>
                                                                    <th style="width: 70px;">Thùng</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">1</td>
                                                                    <td style="vertical-align: middle;">ABE103-G</td>
                                                                    <td style="vertical-align: middle;">63A</td>
                                                                    <td><input type="text" class="form-control" id="cai_7" style="text-align: right;"
                                                                               onkeyup="configSp('7');
                                                                                       return false;"/></td>
                                                                    <td><input type="text" class="form-control" id="thung_7" 
                                                                               title="20 cái/1" style="text-align: right;" onkeyup="configThung('7');
                                                                                       return false;"/></td>
                                                                    <td><output id="dongia_7" class="number">8443000</output></td>
                                                                    <td><output id="tien_chua_ck_7"></output></td>
                                                                    <td><input type="text" class="form-control" id="ck_7" style="text-align: right;"
                                                                               onkeyup="configCk('7');
                                                                                       return false;"/></td>
                                                                    <td><output id="tien_da_ck_7" class="number"></output></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">2</td>
                                                                    <td style="vertical-align: middle; width: 24.7%;"><input type="text" class="form-control" id="name_8"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control ampe"/></td>
                                                                    <td><input type="text" class="form-control" id="cai_8" style="text-align: right;"
                                                                               onkeyup="configSp('8');
                                                                                       return false;"/></td>
                                                                    <td><input type="text" class="form-control" id="thung_8" 
                                                                               title="20 cái/1" style="text-align: right;" onkeyup="configThung('8');
                                                                                       return false;"/></td>
                                                                    <td><output id="dongia_8"></output></td>
                                                                    <td><output id="tien_chua_ck_8"></output></td>
                                                                    <td><input type="text" class="form-control" id="ck_8" style="text-align: right;"
                                                                               onkeyup="configCk('8');
                                                                                       return false;"/></td>
                                                                    <td><output id="tien_da_ck_8" class="number"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Cộng</b></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_cai_2" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_thung_2" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_chua_ck_2" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Chiết khấu (%)</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td>
                                                                    <td><input type="text" class="form-control" id="tong_ck_2" style="text-align: right; float: right; font-weight: bold;"
                                                                               onkeyup="configCkAll('2');
                                                                                       return false;"/></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tien_ck_2" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Còn lại</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="con_lai_2" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>VAT (%)</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td>
                                                                    <td>
                                                                        <input type="text" class="form-control" id="vat_2" style="text-align: right; float: right; font-weight: bold;"
                                                                               onkeyup="configCkAll('2');
                                                                                       return false;"/>
                                                                    </td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tien_vat_2" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Tổng cộng</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_da_ck_2" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
                                                    <fieldset id="turn2" class="noDisplay">
                                                        <legend><b style="font-size: 17px;">Giao hàng đợt 2</b></legend>
                                                        <div class="box-header">
                                                            <div class="col-md-6">
                                                                <label>Xuất ngày</label><span style="color: red;">*</span>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" style="padding-left: 12px;" value="15/01/2018" class="form-control datepicker pointerCursor">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Lô số</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                                                    <input class="form-control" disabled id="lo_2"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr/>
                                                        <table class="table table-striped mainTable">
                                                            <thead>
                                                                <tr>
                                                                    <th rowspan="2" style="width: 30px;">STT</th>
                                                                    <th rowspan="2" colspan="2" style="width: 400px;">Sản phẩm</th>
                                                                    <th colspan="2">Số lượng</th>
                                                                    <th rowspan="2" style="width: 150px;">Đơn giá (VNĐ)</th>
                                                                    <th rowspan="2" style="width: 150px;">Thành tiền trước chiết khấu (VNĐ)</th>
                                                                    <th rowspan="2" style="width: 70px;">Chiết khấu (%)</th>
                                                                    <th rowspan="2" style="width: 150px;">Thành tiền sau chiết khấu (VNĐ)</th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="width: 70px;">Cái</th>
                                                                    <th style="width: 70px;">Thùng</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td style="vertical-align: middle;">1</td>
                                                                    <td style="vertical-align: middle; width: 24.7%;"><input type="text" class="form-control" id="name_9"/></td>
                                                                    <td style="vertical-align: middle;"><input type="text" class="form-control ampe"/></td>
                                                                    <td><input type="text" class="form-control" id="cai_9" style="text-align: right;"
                                                                               onkeyup="configSp('9');
                                                                                       return false;"/></td>
                                                                    <td><input type="text" class="form-control" id="thung_9" 
                                                                               title="20 cái/1" style="text-align: right;" onkeyup="configThung('9');
                                                                                       return false;"/></td>
                                                                    <td><output id="dongia_9"></output></td>
                                                                    <td><output id="tien_chua_ck_9"></output></td>
                                                                    <td><input type="text" class="form-control" id="ck_9" style="text-align: right;"
                                                                               onkeyup="configCk('9');
                                                                                       return false;"/></td>
                                                                    <td><output id="tien_da_ck_9" class="number"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Cộng</b></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_cai_3" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_thung_3" style="color: #fff; font-weight: bold;"></output></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_chua_ck_3" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Chiết khấu (%)</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td>
                                                                    <td><input type="text" class="form-control" id="tong_ck_3" style="text-align: right; float: right; font-weight: bold;"
                                                                               onkeyup="configCkAll('3');
                                                                                       return false;"/></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tien_ck_3" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Còn lại</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="con_lai_3" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>VAT (%)</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td>
                                                                    <td>
                                                                        <input type="text" class="form-control" id="vat_3" style="text-align: right; float: right;; font-weight: bold;"
                                                                               onkeyup="configCkAll('3');
                                                                                       return false;"/>
                                                                    </td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tien_vat_3" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                                <tr style="background-color: #544d61;color: #fff;">
                                                                    <td></td>
                                                                    <td colspan="2" style="vertical-align: middle;"><b>Tổng cộng</b></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td><td></td><td></td>
                                                                    <td style="text-align: right; vertical-align: middle;"><output id="tong_tien_da_ck_3" class="number" style="color: #fff; font-weight: bold;"></output></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </div>
                                        <div id="sound"></div>
                                    </form>
                                </div>
                            </div>                           
                        </div>
                        <!-- /.col-->
                    </div>
                    <!-- ./row -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <a href="#0" class="cd-top">Top</a>
            </footer>
            <div class="modal fade" id="confirmSave" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Xác nhận lưu ?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="saveDraft();">Đồng ý</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal fade" id="confirmComplete" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Xác nhận chốt đơn ?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" onclick="create();">Đồng ý</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="dist/js/jquery-1.12.4.js"></script>
        <script src="dist/js/back-to-top.js"></script>
        <script src="dist/js/jquery-ui.js"></script>
        <script>
                                $(function () {
                                    var availableTags = [
                                        "ABN 52c",
                                        "TS1000N AG6 3P",
                                        "ABS 32c",
                                        "ABH 53c",
                                        "ABE103-G"
                                    ];
                                    var ampe = [
                                        "5A",
                                        "15A",
                                        "30A",
                                        "63A",
                                        "1000A"
                                    ];
                                    $("#name_6").autocomplete({
                                        source: availableTags,
                                        change: function () {
                                            if ($('#name_6').val() === 'ABN 52c') {
                                                document.getElementById('dongia_6').value = '590,000';
                                            } else if ($('#name_6').val() === 'TS1000N AG6 3P') {
                                                document.getElementById('dongia_6').value = '80,807,000';
                                            } else if ($('#name_6').val() === 'ABS 32c') {
                                                document.getElementById('dongia_6').value = '1,859,000';
                                            } else if ($('#name_6').val() === 'ABH 53c') {
                                                document.getElementById('dongia_6').value = '2,375,000';
                                            } else {
                                                document.getElementById('dongia_6').value = '8,443,000';
                                            }
                                        }
                                    });
                                    $("#name_8").autocomplete({
                                        source: availableTags,
                                        change: function () {
                                            if ($('#name_8').val() === 'ABN 52c') {
                                                document.getElementById('dongia_8').value = '590,000';
                                            } else if ($('#name_8').val() === 'TS1000N AG6 3P') {
                                                document.getElementById('dongia_8').value = '80,807,000';
                                            } else if ($('#name_8').val() === 'ABS 32c') {
                                                document.getElementById('dongia_8').value = '1,859,000';
                                            } else if ($('#name_8').val() === 'ABH 53c') {
                                                document.getElementById('dongia_8').value = '2,375,000';
                                            } else {
                                                document.getElementById('dongia_8').value = '8,443,000';
                                            }
                                        }
                                    });
                                    $("#name_9").autocomplete({
                                        source: availableTags,
                                        change: function () {
                                            if ($('#name_9').val() === 'ABN 52c') {
                                                document.getElementById('dongia_9').value = '590,000';
                                            } else if ($('#name_9').val() === 'TS1000N AG6 3P') {
                                                document.getElementById('dongia_9').value = '80,807,000';
                                            } else if ($('#name_9').val() === 'ABS 32c') {
                                                document.getElementById('dongia_9').value = '1,859,000';
                                            } else if ($('#name_9').val() === 'ABH 53c') {
                                                document.getElementById('dongia_9').value = '2,375,000';
                                            } else {
                                                document.getElementById('dongia_9').value = '8,443,000';
                                            }
                                        }
                                    });
                                    $(".ampe").autocomplete({
                                        source: ampe
                                    });
                                });
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>       
        <script src="dist/js/autoNumeric.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
		<!-- SlimScroll -->
		<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <script src="dist/js/sweetalert2.all.js"></script>
        <script>
                                $(document).ready(function () {
                                    deliveryQtt();
                                    $('.datepicker').datepicker({
                                        format: 'dd/mm/yyyy'
                                    });
                                    $('.number').autoNumeric('init', {minimumValue: '0', maximumValue: '9999999999999', digitGroupSeparator: ',', decimalPlacesOverride: '0'});
                                });
        </script>      
    </body>
</html>
