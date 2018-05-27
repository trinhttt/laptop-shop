@extends('main')
@section('content3')
<title>Gía hàng hóa</title>
@endsection
@section('content')
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
            #example1 tbody td:nth-child(6),#example1 tbody td:nth-child(7),
            #example1 tbody td:nth-child(9) {
                text-align: right;
            }
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
            .edit-btn {
                padding: 10px 5px;
                min-width: 60px;
                height: 40px;
            }
        </style>
 @endsection       
 @section('content1')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="phanphoi_index.html"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                        <li><a href="phanphoi_cungcap_danh-sach-nha-cung-cap.html">Danh sách nhà cung cấp</a></li>
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
                                            <b>Danh sách nhà cung cấp</b>
                                        </h4>
                                    </div>
                                </div>
                                <!--end box header-->
                                <div class="box">
                                    <div class="box-header with-border text-center menu-button">

                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" href="phanphoi_cungcap_tao-nha-cung-cap.html" target="_blank" title="Tạo Mới" data-placement="bottom" >
                                            <i class="fa fa-plus-square text-green"></i>
                                            <span><strong>Tạo Mới</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                            <i class="fa fa-edit text-grey"></i>
                                            <span><strong>Sửa</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Lưu" data-placement="bottom">
                                            <i class="fa fa-save text-grey"></i>
                                            <span><strong>Lưu</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Hủy" data-placement="bottom">
                                            <i class="fa fa-close text-grey"></i>
                                            <span><strong>Hủy</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Chốt đơn" data-placement="bottom">
                                            <i class="fa fa-check-circle text-grey"></i>
                                            <span><strong>Chốt đơn</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Đổi trả" data-placement="bottom">
                                            <i class="fa fa-exchange text-grey"></i>
                                            <span><strong>Đổi trả</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Xem Trước" data-placement="bottom">
                                            <i class="fa fa-eye text-grey"></i>
                                            <span><strong>Xem Trước</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="In" data-placement="bottom">
                                            <i class="fa fa-print text-blue"></i>
                                            <span><strong>In</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Import Excel" data-placement="bottom">
                                            <i class="fa fa-download text-grey"></i>
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
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="box">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Tìm kiếm theo</h3>
                                                    </div>
                                                    <div class="box-body">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Tên</td>
                                                                    <td width="35%">
                                                                        <div class="input-group" >
                                                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                            <input type="text" class="form-control" placeholder="Tên...">
                                                                        </div>
                                                                    </td>
                                                                    <td style="padding-left: 120px;">Ngày tạo</td>
                                                                    <td>
                                                                        <div class="col-sm-5 no-padding">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                                <input style="width: 150px" type="text" class="form-control" id="datepicker" placeholder="Từ...">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-sm-offset-1 no-padding">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                                <input style="width: 150px" type="text" class="form-control" id="datepicker2" placeholder="Đến...">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr> 
                                                            </tbody> 
                                                        </table>
                                                        <div class="box-footer clearfix">
                                                            <div class="pagination pagination-sm no-margin pull-right" style="padding-right: 19px">
                                                                <button type="button" class="btn btn-block btn-primary">Tìm kiếm <i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end box search-->
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <fieldset>
                                                        <table id="example1" class="table table-bordered table-striped">

                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 2%">STT</th>
                                                                    <th style="width: 10%">Tên</th>
                                                                    <th style="width: 10%">Địa chỉ</th>
                                                                    <th style="width: 5%">Mã số thuế</th>
                                                                    <th style="width: 5%">Ngày tạo</th>
                                                                    <th style="width: 5%">Thay đổi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-left"><a href="phanphoi_cungcap_chi-tiet-nha-cung-cap.html">HĐ T07-1</a></td>                                                               
                                                                    <td class="text-left">307 Nguyễn Trãi, Thanh Xuân Hà Nội</td>
                                                                    <td class="text-left">012345</td>
                                                                    <td class="text-center">26-01-2017</td>
                                                                    <td style="text-align: center">
                                                                        <a id="btn_row1" class="btn btn-app custom-btn edit-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                            <i class="fa fa-edit text-blue"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
																<tr id="row1">
																	<td colspan="10">
																		<div class="container-fluid">
																			<div class="row">
																				<div class="col-md-6">
																					<label>Tên</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-codepen" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="HĐ T07-1">
																					</div>
																				</div>
																				<div class="col-md-6">
																					<label>Địa chỉ</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="307 Nguyễn Trãi, Thanh Xuân Hà Nội" >
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<label>Mã số thuế</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-codepen" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="012345">
																					</div>
																				</div>																			
																			</div>
																			<br>
																			<div class="row">
																				<div class="">
																					<div class="col-md-10"></div>
																					<div class="col-md-1">
																						<a href="" id="cancel_btn1" class="btn btn-default btn-block">Hủy</a>
																					</div>
																					<div class="col-md-1">
																						<a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm">Sửa</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>
                                                                <tr>
                                                                    <td class="text-center">2</td>
                                                                    <td class="text-left"><a href="phanphoi_cungcap_chi-tiet-nha-cung-cap.html">Thái Sơn Nam</a></td>                                                               
                                                                    <td class="text-left">22-124 đường D1,Khu Đô thị mới Him lam, Tân Hưng, Quận 7</td>
                                                                    <td>678901</td>
                                                                    <td class="text-center">26-12-2014</td>
                                                                    <td style="text-align: center">
                                                                        <a id="btn_row2" class="btn btn-app custom-btn edit-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                            <i class="fa fa-edit text-blue"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
																<tr id="row2">
																	<td colspan="10">
																		<div class="container-fluid">
																			<div class="row">
																				<div class="col-md-6">
																					<label>Tên</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-codepen" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="Thái Sơn Nam">
																					</div>
																				</div>
																				<div class="col-md-6">
																					<label>Địa chỉ</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="22-124 đường D1,Khu Đô thị mới Him lam, Tân Hưng, Quận 7" >
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-6">
																					<label>Mã số thuế</label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<i class="fa fa-codepen" aria-hidden="true"></i>
																						</span>
																						<input type="text" class="form-control" value="678901">
																					</div>
																				</div>																			
																			</div>
																			<br>
																			<div class="row">
																				<div class="">
																					<div class="col-md-10"></div>
																					<div class="col-md-1">
																						<a href="" id="cancel_btn2" class="btn btn-default btn-block">Hủy</a>
																					</div>
																					<div class="col-md-1">
																						<a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm">Sửa</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>
                                                                <tr>
                                                                    <td class="text-center">3</td>
                                                                    <td class="text-left"><a href="phanphoi_cungcap_chi-tiet-nha-cung-cap.html">LS</a></td>                                                               
                                                                    <td class="text-left">Cát Linh, Đống Đa, Hà Nội</td>
                                                                    <td>2342353</td>
                                                                    <td class="text-center">22-04-2015</td>
                                                                    <td style="text-align: center">
                                                                        <a href="phanphoi_cungcap_sua-cung-cap.html" class="btn btn-app custom-btn edit-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                            <i class="fa fa-edit text-blue"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-center">4</td>
                                                                    <td class="text-left"><a href="phanphoi_cungcap_chi-tiet-nha-cung-cap.html">Hàn Quốc</a></td>                                                               
                                                                    <td class="text-left">Hàn Quốc</td>
                                                                    <td>213635</td>
                                                                    <td class="text-center">22-11-2017</td>
                                                                    <td style="text-align:center">
                                                                        <a href="phanphoi_cungcap_sua-cung-cap.html" class="btn btn-app custom-btn edit-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom">
                                                                            <i class="fa fa-edit text-blue"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--end main box-->
                        </div>
                        <!--end main col-->
                    </div>
                    <!--end main row-->
                </section>
                <!-- /.content -->
            </div>
 @endsection 
          
 @section('content2')
        <script>
           $('#row1').hide();
			$('#btn_row1').click(function(){
				$('#row1').toggle();
				event.preventDefault();
			});
			$('#row2').hide();
			$('#btn_row2').click(function(){
				$('#row2').toggle();
				event.preventDefault();
			});
			$('#cancel_btn1').click(function(){
				$('#row1').toggle();
				event.preventDefault();
			});
			$('#cancel_btn2').click(function(){
				$('#row2').toggle();
				event.preventDefault();
			});
        </script>
		<div class="modal fade" id="popupConfirm" role="dialog">
            <div class="modal-dialog">		
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Xác nhận lưu thông tin đã sửa</h4>
					</div>
                   
                    
                    <div class="modal-footer" style="margin-right:15px">
                        <div style="margin:0 auto;">
                            <button id="btnThanhToan" type="button" style="color:white;background-color:green" class="btn btn-default" data-dismiss="modal" onclick="window.location.href = 'phanphoi_cungcap_danh-sach-nha-cung-cap.html'">OK</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
						</div>
					</div>
				</div>
				
			</div>
		</div>
@endsection
   