<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//product
//Route::get('/ds_sanpham','LAPTOPController@show');
//Route::get('edit_product/{MaSP}', 'SANPHAMDIENTHOAIController@getData');
//Route::post('edit_product/{MaSP}', 'SANPHAMDIENTHOAIController@Action');
//////////DON HANG
Route::get('/DonHang_LapPhieu', function () {
    return view('don-hang/lap-phieu');
});
Route::get('/DonHang_LichGiaoHang', function () {
    return view('don-hang/lich-giao-hang');
});
Route::get('/DonHang_PhieuDangXuLy', function () {
    return view('don-hang/phieu-dang-xu-ly');
});
Route::get('/DonHang_PhieuGiuHang', function () {
    return view('don-hang/phieu-giu-hang');
});
Route::get('/DonHang_PhieuHoanThanh', function () {
    return view('don-hang/phieu-hoan-thanh');
});


/////////HANG HOA
Route::get('/HangHoa_GiaHangHoa', function () {
    return view('hang-hoa/gia-hang-hoa');
});
Route::get('/HangHoa_LichSuNhapHang', function () {
    return view('hang-hoa/lich-su-nhap-hang');
});
Route::get('/HangHoa_TaoDotNhapHang', function () {
    return view('hang-hoa/tao-dot-nhap-kho');
});
Route::get('/HangHoa_TonKho', function () {
    return view('hang-hoa/ton-kho');
});
Route::get('/TaoMoi_SanPham', function () {
    return view('hang-hoa/tao_san-pham');
});

 /////
//Route::get('/HangHoa_DS-HangHoa', function () {
//    return view('hang-hoa/ds_sanpham');
//});
  Route::get('/HangHoa_DS-HangHoa','LAPTOPController@show');
//
//  Route::get('edit_product/{MaLapTop}', 'LAPTOPController@getData');

  Route::post('edit_product/{MaLapTop}', 'LAPTOPController@Action');
Route::post('/insert_product','LAPTOPController@Insert');



// ///////QUAN TRI
Route::get('/QuanTri_DSKhachHang', function () {
    return view('quan-tri/DS-khach-hang');
});
Route::get('/QuanTri_DSNhaCungCap', function () {
    return view('quan-tri/DS-nha-cung-cap');
});
Route::get('/TaoMoi_NhaCungCap', function () {
    return view('quan-tri/tao-nha-cung-cap');
});
Route::get('/TaoMoi_KhachHang', function () {
    return view('quan-tri/tao_khac-hang');
});

Route::get('/QuanTri_DSKhachHang','KHACHHANGController@show');
Route::post('edit_KhachHang/{MaKhachHang}', 'KHACHHANGController@Action');
Route::post('/insert_KhachHang','KHACHHANGController@Insert');

Route::get('/QuanTri_DSNhaCungCap','NHACUNGCAPController@show');
Route::post('edit_NhaCungCap/{idNhaCungCap}', 'NHACUNGCAPController@Action');
Route::post('/insert_NhaCungCap','NHACUNGCAPController@Insert');

////BAO CAO

Route::get('/BaoCao_BanHang', function () {
    return view('bao-cao/ban-hang');
});
Route::get('/BaoCao_ChiTietDoanhThu', function () {
    return view('bao-cao/chi-tiet-doanh-thu');
});
Route::get('/BaoCao_DoanhThu', function () {
    return view('bao-cao/doanh-thu');
});

/////CHUA DUNG
//Route::post('/insert_product','SANPHAMDIENTHOAIController@Insert');
//Route::get('/insert_product', function () {
//    return view('insert_product');
//});
//Route::post('/delete_product','SANPHAMDIENTHOAIController@Delete');
//Route::get('edit_product/{MaSP}', 'SANPHAMDIENTHOAIController@getData');
//Route::post('edit_product/{MaSP}', 'SANPHAMDIENTHOAIController@Action');
//Route::post('/Delete_product/{MaSP}', 'SANPHAMDIENTHOAIController@Delete');
?>