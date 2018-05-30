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
use App\LAPTOP;
use App\CHITIETHOADON;
use App\KHACHHANG;
use Auth;
use Image;

use Storage;
use App\Advert;
use App\Upload;
use Carbon\Carbon;
class DONHANGController extends Controller
{

    public function show()
    {
        $lts=LAPTOP::all();
        $khs=KHACHHANG::all();
        return view('don-hang.lap-phieu', compact('lts','khs'));
    }
    public function showPhieuHoanThanh()
    {
        $hds=HOADON::all();
        return view('don-hang.phieu-hoan-thanh', compact('hds'));
    }

    public function Insert(Request $request)
    {
        $data=Input::except(array('_token'));
        $NV = new HOADON();

        $NV->SoHoaDon=$request->SoHoaDon;
        $NV->SoDienThoai=$request->SoDienThoai;
//        $NV->TongTien=$request->TongTien;
        $NV->DiaChiNhan=$request->DiaChiNhan;
        $NV->KhachHang=$request->KhachHang;
        $NV->SoSanPham=$request->SoSanPham;
        $NV->MucGiaNam=$request->MucGiaNam;
        $NV->NguoiTaoHD=$request->NguoiTaoHD;
        $rule=array(
            'SoHoaDon'=>'min:1',
            'NguoiTaoHD'=>'required',
            'KhachHang'=>'required',
            'DiaChiNhan'=>'required',
//            'TongTien'=>'required',
            'SoSanPham'=>'required',
            'MucGiaNam'=>'required',
            'SoDienThoai'=>'required',
        );
        $message=array(
            'SoHoaDon.required'=>'Mã hóa đơn xuất phải có dữ liệu, không để rỗng!',
            'NguoiTaoHD.required'=>'Trường người tạo phải có dữ liệu, không để rỗng!',
            'KhachHang.required'=>'Trường tên người nhận phải có dữ liệu, không để rỗng!',
            'DiaChiNhan.required'=>'Trường địa chỉ nhận phải có dữ liệu, không để rỗng!',
//            'TongTien.required'=>'Trường tổng tiền phải có dữ liệu',
            'SoSanPham.required'=>'Trường số lượng sản phẩm phải có dữ liệu, không để rỗng!',
            'MucGiaNam.required'=>'Trường mức giá năm phải có dữ liệu, không để rỗng!',
            'SoDienThoai.required'=>'Trường số điện thoại phải có dữ liệu, không để rỗng!',

        );
        $validator=Validator::make($data,$rule,$message);

        if($validator->fails())
        {
            return Redirect::to('DonHang_LapPhieu')->withErrors($validator);
        }else{
            $tong_tien=0;
            $NV->save();
            for($i=0;$i<$NV['SoSanPham'];$i++)
            {
                $ct[$i]=new CHITIETHOADON();

                $ct[$i]->HoaDon=$NV->SoHoaDon;
                $ct[$i]->MaLapTop=$request->MaLapTop[$i];
                $ct[$i]->SoLuong=$request->SoLuong[$i];
                $ct[$i]->DonGia=$request->DonGia[$i];
                $ct[$i]->Ck=$request->Ck[$i];
                $ct[$i]->save();
                $tong_tien=$tong_tien+$ct[$i]->SoLuong*$ct[$i]->DonGia*(100 - $ct[$i]->Ck) / 100;
            }
            $NV1 = HOADON::find($NV->SoHoaDon);
            if (isset($NV1)) {
                $NV1->TongTien=$tong_tien;
                $NV1->save();
            }

            return Redirect::to('DonHang_LapPhieu')->with('success','Lập phiếu xuất hàng thành công!');
        }

    }




}
