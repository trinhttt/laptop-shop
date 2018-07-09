@extends('main')
@section('content3')
<title>Tồn kho</title>
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
            .highlight{
                font-weight:bold;
                text-align:right;
            }
            .left{
                text-align:left;
            }
            .right{
                text-align:right;
            }
            .menu-button {
                background-color: #fcf9f9; 
                margin-top: 20px;
                padding-top:20px;
                padding-right:25px;
            }
            .modal-header {
                padding: 15px;
                border-bottom: 1px solid #e5e5e5;
                background-color: aliceblue;
            }
            .modal-body {
                position: relative;
                padding: 15px;
                background-color: white;
            }
            .modal-footer {
                border-top-color: #f4f4f4;
                background-color: white;
            }
            .btn-default {
                background-color: #f4f4f4;
                color: #444;
                border-color: #ddd;
            }

            .smallBtn{
                padding: 10px 5px;
                min-width: 60px;
                height: 40px;
            }
            label {
                display: inline-block;
                max-width: 100%;
                margin-bottom: 5px;
                font-weight: 500 !important;
            }
        </style>
@endsection        
@section('content1') 
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="hanghoa_index.html"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
                        <li><a href="">Hàng hóa</a></li>
                        <li class="active"><a href="phanphoi_hanghoa_ton-kho.html">Danh sách hàng tồn kho</a></li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">        
                                <div  class="row" style="margin-right: 0px;margin-left: 0px;margin-top: 10px">
                                    <div class="col-md-4">
                                        <h4><b>HÀNG TỒN KHO</b></h4>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="box-header with-border text-center menu-button">

                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" href="TaoMoi_SanPham" target="_blank" title="Tạo Mới" data-placement="bottom" >
                                            <i class="fa fa-plus-square text-green"></i>
                                            <span><strong>Tạo Mới</strong></span>
                                        </a>

                                        <a class="btn btn-app custom-btn disabled" data-toggle="tooltip" title="Import Excel" data-placement="bottom">
                                            <i class="fa fa-download text-grey"></i>
                                            <span><strong>Import Excel</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xuất Excel" data-placement="bottom">
                                            <i class="fa fa-file-excel-o text-gray"></i>
                                            <span><strong>Xuất Excel</strong></span>
                                        </a>
                                        <a class="btn btn-app custom-btn" data-toggle="tooltip" title="Xuất PDF" data-placement="bottom">
                                            <i class="fa fa-file-pdf-o text-gray"></i>
                                            <span><strong>Xuất PDF</strong></span>
                                        </a>
                                    </div>                                </div>
                                @if($errors->has('TenSP'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                {{--                                                {{Session::get('error')}}--}}
                                                {{$errors->first('TenSP')}}

                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if($errors->has('TongBan'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                {{--                                                {{Session::get('error')}}--}}
                                                {{$errors->first('TongBan')}}

                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if($errors->has('TongNhap'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                {{--                                                {{Session::get('error')}}--}}
                                                {{$errors->first('TongNhap')}}

                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if($errors->has('TongNhap'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert"style="background-color: #f2dede;width: 97%;margin-left: 14px">
                                                {{--                                                {{Session::get('error')}}--}}
                                                {{$errors->first('TongNhap')}}

                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if(Session::has('success'))

                                    <div class="row" >
                                        <div class="col-md-12">
                                            <div class="alert"style="background-color: #dff0d8;width: 97%;margin-left: 14px">
                                                {{Session::get('success')}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                {{--<div class="box-body">--}}
                                    {{--<table class="table">--}}
                                        {{--<tbody>--}}
                                            {{--<tr>--}}
                                                {{--<td style="width:80px">Mã hàng</td>--}}
                                                {{--<td style="width:400px">--}}
                                                    {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon">--}}
                                                            {{--<i class="fa fa-file"></i>--}}
                                                        {{--</span>--}}
                                                        {{--<input type="text" class="form-control" placeholder="Mã hàng...">--}}
                                                    {{--</div>--}}
                                                {{--</td>--}}

                                                {{--<td>Tổng tồn</td>--}}
                                                {{--<td>--}}
                                                    {{--<div class="col-sm-5 no-padding">--}}
                                                        {{--<div class="input-group">--}}
                                                            {{--<span class="input-group-addon">Từ</span>--}}
                                                            {{--<input type="number" class="form-control">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-sm-6 col-sm-offset-1 no-padding">--}}
                                                        {{--<div class="input-group">--}}
                                                            {{--<span class="input-group-addon">Đến</span>--}}
                                                            {{--<input type="number" class="form-control">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</td>--}}
                                            {{--</tr>--}}

                                        {{--</tbody>--}}
                                    {{--</table>--}}
                                {{--</div>--}}
                                <hr>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>

                                                    <tr>
                                                        <th style="width: 1%">STT</th>
                                                        <th style="width: 3%">Mã SP tồn</th>
                                                        <th style="width: 10%">Tên sản phẩm tồn</th>
                                                        <th style="width: 4%">Tổng nhập (cái)</th>
                                                        <th style="width: 4%">Tổng xuất (cái)</th>
                                                        <th style="width: 4%">Tổng tồn (cái)</th>
                                                        <th style="width: 4%">Thời gian tồn</th>
                                                        <th style="width:3%">Thay đổi</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                <?php $stt=0?>
                                                @foreach($sps as $sp)
                                                    <tr>
                                                        <td class="text-center"> {{++$stt}}</td>
                                                        <td style="border-right: none;text-align: left">{{$sp->MaSP}}</td>
                                                        <td style="border-left: none !important;text-align: right">{{$sp->TenSP}}</td>
                                                        <td class="right">{{$sp->TongNhap}}</td>
                                                        <td class="right">{{$sp->TongBan}}</td>
                                                        <td class="right">{{$sp->TongNhap - $sp->TongBan}}</td>
                                                        <td class="right">{{$sp->ThoiGianTonKho}}</td>
                                                        <td style="text-align: center" >
                                                            <a id="btn_row{{$stt}}" class=" btn_row btn btn-app smallBtn edit-btn" data-toggle="tooltip" title="Sửa" data-placement="bottom" name="sua">
                                                                <i class="fa fa-edit text-blue"></i>
                                                            </a>
                                                        </td>

                                                    </tr>
                                                    <form style="margin-left: 50px;color:black" action="{{url('edit_TonKho/'.$sp->idTonKho)}}" method="post">
                                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                                                        <tr id="row{{$stt}}" class="toggle">
                                                        <td colspan="10">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Tên sản phẩm</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" name="TenSP"value="{{$sp->TenSP}}"class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Tổng số lượng nhập</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" name="TongNhap"value="{{$sp->TongNhap}}"class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>Tổng số lượng bán được</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" name="TongBan"value="{{$sp->TongBan}}"class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>Thời gian tồn kho</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">
                                                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                                            </span>
                                                                            <input type="text" name="ThoiGianTonKho"value="{{$sp->ThoiGianTonKho}}"class="form-control" placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <div class="col-md-10"></div>
                                                                        <div class="col-md-1">
                                                                            <a href="" id="cancel_btn{{$stt}}" class="btn btn-default btn-block">Hủy</a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <button name="btnButton" value="rescheduleAction2" type="submit" data-target="#popupConfirm"style="color:white;background-color:green" class="btn btn-default" data-dismiss="modal">Sửa</button>

                                                                            {{--<a href="" class="btn btn-danger btn-block" data-toggle="modal" data-target="#popupConfirm">Sửa</a>--}}
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>                                
                                                    </form>
                                                   @endforeach
                                                </tbody>

                                                <tfoot>

                                                </tfoot>
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
            var j;
            var size=0;
            @foreach($sps as $sp)
                size++;
            @endforeach

console.log(size);
            for(j=1;j<=size;j++)
            {
                $("#row"+j ).hide();
                //console.log("#row" + j);
            }

            var btn_row = {
                btn_row1: '1',
                btn_row2: '2',
                btn_row3: '3',
                btn_row4: '4',
                btn_row5: '5',
                btn_row6: '6',
                btn_row7: '7',
                btn_row8: '8',
                btn_row9: '9',
                btn_row10: '10',
                btn_row11: '11'

            };

            $('.btn_row').click(function () {
                var b= btn_row[this.id];//window[this.id];//btn_row[this.id];
                $('#row'+b).toggle();
                event.preventDefault();

            });


        </script>        <!--code chuyen page-->
        <script>
            function directionPage() {
                var isDisplay = $('#Paris:visible').length;
                if (isDisplay === 0) {
                    window.location.href = 'phanphoi_congno_danh-sach-cong-no-cung-cap.html';
                } else {
                    window.location.href = 'phanphoi_congno_danh-sach-cong-no-khach-hang.html';
                }
            }
        </script>


@endsection         
  																													