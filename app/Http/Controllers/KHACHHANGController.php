<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Input;
use Validator;
use Redirect;
use App\KHACHHANG;

use Auth;
use Image;
//use Charts;

use Carbon\Carbon;
class KHACHHANGController extends Controller
{
    public function show()
    {
        $sps=KHACHHANG::all();
        return view('quan-tri.DS-khach-hang', compact('sps'));
    }

    public function Insert()
    {
        $destinatonPath = '';
        $filename = '';

            $data=Input::except(array('_token'));
        $rule=array(
        	'HoTenKH'=>'required',
        	'GioiTinhKH'=>'required',
        	'NgaySinhKH'=>'required',
        	'SDTKH'=>'required',
        	'DiaChiKH'=>'required',
        	'TaiKhoanKH'=>'required',
        );
        $message=array(
            'HoTenKH.required'=>'Trường Họ tên khách hàng phải có dữ liệu, không để rỗng!',
            'GioiTinhKH.required'=>'Trường Giới tính phải có dữ liệu, không để rỗng!',
            'NgaySinhKH.required'=>'Trường Ngày sinh phải có dữ liệu, không để rỗng!',
            'SDTKH.required'=>'Trường Số điện thoại phải có dữ liệu, không để rỗng!',
            'DiaChiKH.required'=>'Trường địa chỉ khách hàng phải có dữ liệu, không để rỗng!',
            'TaiKhoanKH.required'=>'Trường Email khách hàng phải có dữ liệu, không để rỗng!',
        );
        $validator=Validator::make($data,$rule,$message);
        if($validator->fails())
        {
            return Redirect::to('TaoMoi_KhachHang')->withErrors($validator);
        }else{
            KHACHHANG::formstore(Input::except('_token'));

            return Redirect::to('TaoMoi_KhachHang')->with('success','Thêm mới khách hàng thành công!');



    }
    }
    public function Action(Request $request, $MaKhachHang)
    {
        $data=Input::except(array('_token'));


        if ($request->btnButton== "rescheduleAction2") {
            $NV = KHACHHANG::where('MaKhachHang', $MaKhachHang)->first();
            //$NV->MaKhachHang=$request->MaKhachHang;
            $NV->HoTenKH=$request->HoTenKH;
            $NV->GioiTinhKH=$request->GioiTinhKH;
            $NV->NgaySinhKH=$request->NgaySinhKH;
            $NV->SDTKH=$request->SDTKH;
            $NV->DiaChiKH=$request->DiaChiKH;
            $NV->TaiKhoanKH=$request->TaiKhoanKH;

            $rule=array(
                'MaKhachHang'=>'min:1',
                'HoTenKH'=>'min:1',
                'TaiKhoanKH'=>'min:1',
            );
            $message=array(
                'MaKhachHang.min'=>'Trường Mã khách hàng phải có dữ liệu, không để rỗng!',
                'HoTenKH.min'=>'Trường Tên khách hàng phải có dữ liệu, không để rỗng!',
                'TaiKhoanKH.min'=>'Trường Email khách hàng phải có dữ liệu, không để rỗng!',
            );
            $validator=Validator::make($data,$rule,$message);
                if($validator->fails())
            {
                return Redirect::to('QuanTri_DSKhachHang')->withErrors($validator);
            }else{
                    $NV->save();
                    return Redirect::to('QuanTri_DSKhachHang')->with('success','Cập nhật dữ liệu thành công!');
            }
        } else {
            return view('404');
        }
    }

}
