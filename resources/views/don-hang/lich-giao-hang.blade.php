@extends('main')
@section('content3')
<title>Lịch giao hàng</title>
@endsection
@section('content')
        <style>
        .vis-item.completed {
          color: white;
          background-color: green;
        }
        </style>
@endsection
@section('content1')       
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
@endsection
@section('content2')
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
 @endsection       
 
