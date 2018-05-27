<?php
/**
 * Created by PhpStorm.
 * User: tutrinh
 * Date: 5/16/18
 * Time: 10:31 AM
 */


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Input;
use Validator;
use Redirect;
use App\HOADON;

use Auth;
use Image;
//use Charts;

use Storage;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use App\Advert;
use App\Upload;
use Carbon\Carbon;
class DONHANGController extends Controller
{
    public function show()
    {
        $sps=HOADON::all();
        return view('hang-hoa.ds_sanpham', compact('sps'));
    }

    public function Insert(Request $request)
    {
        $data=Input::except(array('_token'));

        $NV = new HOADON();
        $NV->SoHoaDon=$request->SoHoaDon;
        $NV->NgayGiaoHang=$request->NgayGiaoHang;
        $NV->TongTien=$request->TongTien;
        $NV->DiaChiNhan=$request->DiaChiNhan;
        $NV->KhachHang=$request->KhachHang;
        $NV->SoDotGiao=$request->SoDotGiao;
        $NV->SoSanPham=$request->SoSanPham;
        $NV->MucGiaNam=$request->MucGiaNam;
        $NV->NguoiTaoHD=$request->NguoiTaoHD;
        $rule=array(
            'SoHoaDon'=>'min:1',
            'NguoiTaoHD'=>'min:1',
//            'KhachHang'=>'min:1',
//            'DiaChiNhan'=>'required',
//            'SoDotGiao'=>'required',
//            'SoSanPham'=>'required',
//            'MucGiaNam'=>'required',
//            'NgayGiaoHang'=>'required',
        );
        $message=array(
            'SoHoaDon.required'=>'Mã LapTop phải có dữ liệu, không để rỗng!',
            'NguoiTaoHD.required'=>'Trường Tên laptop phải có dữ liệu, không để rỗng!',
//            'KhachHang.required'=>'Trường Hãng sản xuất phải có dữ liệu, không để rỗng!',
//            'DiaChiNhan.required'=>'Trường Giá phải có dữ liệu, không để rỗng!',
//            'SoDotGiao.required'=>'Trường số lượng phải có dữ liệu, không để rỗng!',
//            'SoSanPham.required'=>'Trường hệ điều hành phải có dữ liệu, không để rỗng!',
//            'MucGiaNam.required'=>'Trường Thuế (VAT) phải có dữ liệu, không để rỗng!',
//            'NgayGiaoHang.required'=>'Chọn ảnh trước khi click lưu!',

        );
        $validator=Validator::make($data,$rule,$message);
        if($validator->fails())
        {
            return Redirect::to('DonHang_LapPhieu')->withErrors($validator);
        }else{
            $NV->save();
            return Redirect::to('DonHang_LapPhieu')->with('success','Thêm mới sản phẩm thành công!');
        }

    }




}
