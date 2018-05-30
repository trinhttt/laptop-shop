<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Input;
use Validator;
use Redirect;
use App\NHAPHANG;
use App\KHACHHANG;
use App\LAPTOP;
use App\CHITIETNHAPHANG;

use Auth;
use Image;
//use Charts;

use Carbon\Carbon;
class NHAPHANGController extends Controller
{
    public function show()
    {
        return view('hang-hoa.tao-dot-nhap-kho');
    }

    public function Insert(Request $request)
    {
        $data=Input::except(array('_token'));
        $NV = new NHAPHANG();

        $NV->TenNhaCC=$request->TenNhaCC;
        $NV->SDTNhaCC=$request->SDTNhaCC;
        $NV->DiaChiNhaCC=$request->DiaChiNhaCC;
        $NV->DiaChiWebsite=$request->DiaChiWebsite;
        $NV->NgayYeuCau=$request->NgayYeuCau;
        $NV->NgayNhap=$request->NgayNhap;
        $NV->status=$request->status;

        $rule=array(
            'TenNhaCC'=>'required',
            'SDTNhaCC'=>'required',
            'DiaChiNhaCC'=>'required',
            'DiaChiWebsite'=>'required',
            'NgayYeuCau'=>'required',
            'NgayNhap'=>'required',
            'status'=>'required',


        );
        $message=array(
            'TenNhaCC.required'=>'Trường Tên nhà cung cấp khách hàng phải có dữ liệu, không để rỗng!',
            'SDTNhaCC.required'=>'Trường Số điện thoại nhà cung cấp phải có dữ liệu, không để rỗng!',
            'DiaChiNhaCC.required'=>'Trường Địa chỉ nhà cung cấp phải có dữ liệu, không để rỗng!',
            'DiaChiWebsite.required'=>'Trường Địa chỉ website phải có dữ liệu, không để rỗng!',
            'NgayYeuCau.required'=>'Trường ngày yêu cầu phải có dữ liệu, không để rỗng!',
            'NgayNhap.required'=>'Trường ngày nhập phải có dữ liệu, không để rỗng!',
            'status.required'=>'Trường trạng thái nhập phải có dữ liệu, không để rỗng!',


        );
        $validator=Validator::make($data,$rule,$message);
        if($validator->fails())
        {
            return Redirect::to('HangHoa_TaoDotNhapHang')->withErrors($validator);
        }else{
            $tong_tien=0;
            $NV->save();
            for($i=0;$i<$NV['SoSanPham'];$i++)
            {
                $ct[$i]=new CHITIETNHAPHANG();

                $ct[$i]->idHoaDon=$NV->idNhapHang;
                $ct[$i]->TenLapTop=$request->TenLapTop[$i];
                $ct[$i]->SoLuong=$request->SoLuong[$i];
                $ct[$i]->DonGia=$request->DonGia[$i];
                $ct[$i]->status=$request->status[$i];
                $ct[$i]->save();
                $tong_tien=$tong_tien+$ct[$i]->SoLuong*$ct[$i]->DonGia;
            }
            $NV1 = NHAPHANG::find($NV->idNhapHang);
            if (isset($NV1)) {
                $NV1->TongTien=$tong_tien;
                $NV1->save();
            }

            return Redirect::to('HangHoa_TaoDotNhapHang')->with('success','Thêm mới nhà cung cấp thành công!');



        }
    }



}
