@extends('main')
@section('content3')
<title>lịch giao hàng</title>
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
@endsection
@section('content1')
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
 @endsection           
@section('content2')   
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
  @endsection       
 