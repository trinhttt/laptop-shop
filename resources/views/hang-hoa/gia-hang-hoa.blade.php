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
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li>
                            <a href="">
                                <i class="fa fa-dashboard"></i> Trang Chủ</a>
                        </li>
                        <li><a href="">Hàng hóa</a></li>
                        <li><a href="">Giá Hàng Hóa</a></li>
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
                                            {{--<div class="box">--}}
                                                {{--<div class="row" style="margin-top: 10px;margin-left: 0px;margin-right: 0px">--}}
                                                    {{--<div class="col-md-12">--}}
                                                        {{--<h4>Tìm kiếm theo</h4>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<!-- /.box-header -->--}}
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

                                                        {{--<td style="width:80px">Danh mục</td>--}}
                                                        {{--<td style="width:400px">--}}
                                                            {{--<div class="input-group">--}}
                                                                    {{--<span class="input-group-addon">--}}
                                                                        {{--<i class="fa fa-sliders"></i>--}}
                                                                    {{--</span>--}}
                                                                {{--<input type="text" class="form-control" placeholder="Danh mục...">--}}
                                                            {{--</div>--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}
                                                    {{--<tr>--}}
                                                        {{--<td>Giá</td>--}}
                                                        {{--<td>--}}
                                                            {{--<div class="col-sm-5 no-padding">--}}
                                                                {{--<div class="input-group">--}}
                                                                    {{--<span class="input-group-addon">Từ</span>--}}
                                                                    {{--<input type="number" class="form-control" placeholder="100,000">--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-sm-6 col-sm-offset-1 no-padding">--}}
                                                                {{--<div class="input-group">--}}
                                                                    {{--<span class="input-group-addon">Đến</span>--}}
                                                                    {{--<input type="number" class="form-control" placeholder="999,999,999">--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</td>--}}
                                                        {{--<td>VAT</td>--}}
                                                        {{--<td>--}}
                                                            {{--<label style="padding-right : 20px;">--}}
                                                                {{--<input type="checkbox"  checked>--}}
                                                                {{--Trước VAT--}}
                                                            {{--</label>--}}
                                                            {{--<label class="custom-chk">--}}
                                                                {{--<input type="checkbox" >--}}
                                                                {{--Sau VAT--}}
                                                            {{--</label>--}}
                                                        {{--</td>--}}
                                                    {{--</tr>--}}


                                                    {{--</tbody>--}}
                                                {{--</table>--}}
                                                {{--<!-- /.box-body -->--}}
                                                {{--<div class="box-footer clearfix">--}}
                                                    {{--<div class="pagination pagination-sm no-margin pull-right">--}}
                                                        {{--<button type="button" class="btn btn-block btn-primary">Tìm kiếm <i class="fa fa-search"></i></button>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
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
                                                        <th>Mã sản phẩm</th>
                                                        <th>Sản phẩm</th>
                                                        <th> Giá Trước ( VAT ) </th>
                                                        <th> VAT </th>
                                                        <th> Giá sau ( VAT ) </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $stt=0?>
                                                    @foreach($sps as $sp)
                                                    <tr>
                                                        <td style="text-align: center">{{++$stt}}</td>
                                                        <td style="text-align:center"> LT-{{$sp->MaLapTop}}</td>
                                                        <td style="text-align:left">{{$sp->TenLapTop}}</td>
                                                        <td class="right">{{$sp->GiaBan}}</td>
                                                        <td class="right">{{$sp->VAT}}</td>
                                                        <td class="right">{{$sp->GiaBan+$sp->GiaBan*$sp->VAT}}</td>
                                                    </tr>

@endforeach
                                                    </tbody>
                                                    <tfoot>

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

     <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
     <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


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
   