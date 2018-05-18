<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lịch giao hàng</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style>
            #example1 {
                background-color: rgb(240, 240, 240);
            }
            #example1 thead tr th {
                vertical-align: middle !important;
                text-align: center;
                background-color: #3c8dbc;
                color: #fff;
            }

            tfoot {
                color: white;
                text-align: center;
                font-size: 15px;
                font-weight: bold;
                background-color: #544d61;
            }
            .right{
                text-align:right;
            }
            .left{
                text-align:left;
            }
            label {
                display: inline-block;
                max-width: 100%;
                margin-bottom: 5px;
                font-weight: 500;
            }
			.table1{padding-bottom : 35px;}
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
                        <li><a href="">Hàng hóa</a></li>
                        <li><a href="phanphoi_hanghoa_gia-hang-hoa.html">Giá Hàng Hóa</a></li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="row" style="margin-left:0px; margin-right:0px; margin-top: 10px;margin-bottom: -15px">
                                    <div class="col-md-12">
                                        <h4>
                                            <b>GIÁ HÀNG HÓA</b>
                                        </h4>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="box">
                                                <div class="row" style="margin-top: 10px;margin-left: 0px;margin-right: 0px">
                                                    <div class="col-md-12">
                                                        <h4>Tìm kiếm theo</h4>
                                                    </div>
                                                </div>
                                                <!-- /.box-header -->
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:80px">Mã hàng</td>
                                                            <td style="width:400px">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" placeholder="Mã hàng...">
                                                                </div>
                                                            </td>

                                                            <td style="width:80px">Danh mục</td>
                                                            <td style="width:400px">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-sliders"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" placeholder="Danh mục...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Giá</td>
                                                            <td>
                                                                <div class="col-sm-5 no-padding">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">Từ</span>
                                                                        <input type="number" class="form-control" placeholder="100,000">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-sm-offset-1 no-padding">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">Đến</span>
                                                                        <input type="number" class="form-control" placeholder="999,999,999">
                                                                    </div>
                                                                </div>
                                                            </td>
 <td>VAT</td>
                                                            <td>
                                                                <label style="padding-right : 20px;">
                                                                    <input type="checkbox"  checked>
                                                                    Trước VAT
                                                                </label>
                                                                <label class="custom-chk">
                                                                    <input type="checkbox" >
                                                                    Sau VAT
                                                                </label>
                                                            </td>
                                                        </tr>
                                                      

                                                    </tbody>
                                                </table>
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

                                <div class="box-body table1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>                                    
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>STT</th>
                                                            <th colspan="2">Mã hàng</th>
                                                            <th>Danh Mục</th>
                                                            <th>CIF (1/3/2013)</th>
                                                            <th>Giá Trước (VAT)</th>
                                                            <th>% Thuế NK</th>
                                                            <th>VAT</th>
                                                            <th>Giá sau (VAT)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!--<tr style="background-color:yellow">-->
                                                            <!--<td style="border-right: none;"></td>-->
                                                            <!--<td style="border-right: none;text-align:right">CB - Aptomat</td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td class="right"></td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align: left">1</td>-->
                                                            <!--<td style="border-right: none;text-align:left"><a href="phanphoi_hanghoa_chi-tiet-san-pham.html"> UA-1</a></td>-->
                                                            <!--<td style="border-left: none;text-align:left">1NO+1NC</td>-->
                                                            <!--<td style="text-align:left">CB-Aptomat</td>-->
                                                            <!--<td class="right">1.5</td>-->
                                                            <!--<td class="right">1.5</td>-->
                                                            <!--<td class="right">12%</td>-->
                                                            <!--<td class="right">0.17</td>-->
                                                            <!--<td class="right">1.87</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align: left">2</td>-->
                                                            <!--<td style="border-right: none;text-align:left"> <a href="phanphoi_hanghoa_chi-tiet-san-pham.html">UA-2</a></td>-->
                                                            <!--<td style="border-left: none;text-align:left">1NO+1NC</td>-->
                                                            <!--<td style="text-align:left">CB-Aptomat</td>-->
                                                            <!--<td class="right">1.5</td>-->
                                                            <!--<td class="right">1.5</td>-->
                                                            <!--<td class="right">12%</td>-->
                                                            <!--<td class="right">0.17</td>-->
                                                            <!--<td class="right">1.87</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align: left">3</td>-->
                                                            <!--<td style="border-right: none;text-align:left"> <a href="phanphoi_hanghoa_chi-tiet-san-pham.html">UA-2</a></td>-->
                                                            <!--<td style="border-left: none;text-align:left">2NO</td>-->
                                                            <!--<td style="text-align:left">CB-Aptomat</td>-->
                                                            <!--<td class="right">1.5</td>-->
                                                            <!--<td class="right">1.5</td>-->
                                                            <!--<td class="right">12%</td>-->
                                                            <!--<td class="right">0.17</td>-->
                                                            <!--<td class="right">1.87</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr style="background-color:yellow">-->
                                                            <!--<td style="border-right: none;"></td>-->
                                                            <!--<td style="border-right: none;text-align:right">Inverter-Biến tần</td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td class="right"></td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align: left">4</td>-->
                                                            <!--<td style="border-right: none;text-align:left"> <a href="phanphoi_hanghoa_chi-tiet-san-pham.html">AU-1 FOR GMC 9~85A</a></td>-->
                                                            <!--<td style="border-left: none;text-align:left">1NO+1NC</td>-->
                                                            <!--<td style="text-align:left">Inverter-Biến tần</td>-->
                                                            <!--<td class="right">1.5</td>-->
                                                            <!--<td class="right">1.5</td>-->
                                                            <!--<td class="right">12%</td>-->
                                                            <!--<td class="right">0.17</td>-->
                                                            <!--<td class="right">1.87</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align: left">5</td>-->
                                                            <!--<td style="border-right: none;text-align:left"> <a href="phanphoi_hanghoa_chi-tiet-san-pham.html">UR-02</a></td>-->
                                                            <!--<td style="border-left: none;text-align:left">For MC 6a~150a</td>-->
                                                            <!--<td style="text-align:left">Inverter-Biến tần</td>-->
                                                            <!--<td class="right">4.72</td>											-->
                                                            <!--<td class="right">5.35</td>-->
                                                            <!--<td class="right">12%</td>-->
                                                            <!--<td class="right">0.53</td>-->
                                                            <!--<td class="right">5.88</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr style="background-color:yellow">-->
                                                            <!--<td style="border-right: none;"></td>-->
                                                            <!--<td style="border-right: none;text-align:right">Cáp thông tin</td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td style="border-right: none"></td>-->
                                                            <!--<td class="right"></td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align: left">6</td>-->
                                                            <!--<td style="border-right: none;text-align:left"> <a href="phanphoi_hanghoa_chi-tiet-san-pham.html">ABN50c~200c/ABS30c~200c/ABH50c~200c</a></td>-->
                                                            <!--<td style="border-left: none;text-align:left">AX (R) - LWT</td>-->
                                                            <!--<td style="text-align:left">Cáp thông tin</td>-->
                                                            <!--<td class="right">3.77</td>											-->
                                                            <!--<td class="right">4.27</td>-->
                                                            <!--<td class="right">12%</td>-->
                                                            <!--<td class="right">0.42</td>-->
                                                            <!--<td class="right">4.7</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align: left">7</td>-->
                                                            <!--<td style="border-right: none;text-align:left"> <a href="phanphoi_hanghoa_chi-tiet-san-pham.html">ABN50c~200c/ABS30c~200c/ABH50c~200c</a></td>-->
                                                            <!--<td style="border-left: none;text-align:left">AL (R) - LWT</td>-->
                                                            <!--<td style="text-align:left">Cáp thông tin</td>-->
                                                            <!--<td class="right">3.77</td>											-->
                                                            <!--<td class="right">4.27</td>-->
                                                            <!--<td class="right">12%</td>-->
                                                            <!--<td class="right">0.42</td>-->
                                                            <!--<td class="right">4.7</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align: left">8</td>-->
                                                            <!--<td style="border-right: none;text-align:left"> <a href="phanphoi_hanghoa_chi-tiet-san-pham.html">ABN50c~200c/ABS30c~200c/ABH50c~200c</a></td>-->
                                                            <!--<td style="border-left: none;text-align:left">AX/AL (R) - LWT</td>-->
                                                            <!--<td style="text-align:left">Cáp thông tin</td>-->
                                                            <!--<td class="right">3.77</td>											-->
                                                            <!--<td class="right">4.27</td>-->
                                                            <!--<td class="right">12%</td>-->
                                                            <!--<td class="right">0.42</td>-->
                                                            <!--<td class="right">4.7</td>-->
                                                        <!--</tr>-->
                                                        <!--<tr>-->
                                                            <!--<td style="text-align: left">9</td>-->
                                                            <!--<td style="border-right: none;text-align:left"> <a href="phanphoi_hanghoa_chi-tiet-san-pham.html">ABN50c~200c/ABS30c~200c/ABH50c~200c</a></td>-->
                                                            <!--<td style="border-left: none;text-align:left">UVT (T) - 200C AC/DC 200~220V</td>-->
                                                            <!--<td style="text-align:left">Cáp thông tin</td>-->
                                                            <!--<td class="right">8.80</td>											-->
                                                            <!--<td class="right">9.97</td>-->
                                                            <!--<td class="right">12%</td>-->
                                                            <!--<td class="right">0.99</td>-->
                                                            <!--<td class="right">10.96</td>-->
                                                        <!--</tr>-->
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="4" style="padding: 10px;text-align: center">Tổng cộng</td>
                                                            <td></td><td></td><td></td><td></td><td></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- ./wrapper -->
        <footer class="main-footer">
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
        <script>
            $('#example1').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': false,
                'ordering': false,
                'info': true,
                'autoWidth': false,
                'language': {
                    "lengthMenu": "Hiển thị _MENU_ dòng",
                    "info": "Đang hiển thị _START_ tới _END_ tổng số _TOTAL_ kết quả",
                    "paginate": {
                        "first": "Trang đầu",
                        "last": "Trang cuối",
                        "next": "Tiếp",
                        "previous": "Trước",
                    }
                }
            });

            $(document).on('click', 'input[type="checkbox"]', function () {
                $('input[type="checkbox"]').not(this).prop('checked', false);
            });
        </script>
    </body>

</html>