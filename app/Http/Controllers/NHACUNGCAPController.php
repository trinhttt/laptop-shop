<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Input;
use Validator;
use Redirect;
use App\NHACUNGCAP;

use Auth;
use Image;
//use Charts;

use Carbon\Carbon;
class NHACUNGCAPController extends Controller
{
    public function show()
    {
        $sps=NHACUNGCAP::all();
        return view('quan-tri.DS-nha-cung-cap', compact('sps'));
    }

    public function Insert()
    {
        $destinatonPath = '';
        $filename = '';

        $data=Input::except(array('_token'));
        $rule=array(
            'TenNhaCC'=>'required',
            'SDTNhaCC'=>'required',
            'DiaChiNhaCC'=>'required',
            'DiaChiWebsite'=>'required',
        );
        $message=array(
            'TenNhaCC.required'=>'Trường Tên nhà cung cấp khách hàng phải có dữ liệu, không để rỗng!',
            'SDTNhaCC.required'=>'Trường Số điện thoại nhà cung cấp phải có dữ liệu, không để rỗng!',
            'DiaChiNhaCC.required'=>'Trường Địa chỉ nhà cung cấp phải có dữ liệu, không để rỗng!',
            'DiaChiWebsite.required'=>'Trường Địa chỉ website phải có dữ liệu, không để rỗng!',
        );
        $validator=Validator::make($data,$rule,$message);
        if($validator->fails())
        {
            return Redirect::to('TaoMoi_NhaCungCap')->withErrors($validator);
        }else{
            NHACUNGCAP::formstore(Input::except('_token'));

            return Redirect::to('QuanTri_DSNhaCungCap')->with('success','Thêm mới nhà cung cấp thành công!');



        }
    }
    public function Action(Request $request, $MaNhaCC)
    {
        $data=Input::except(array('_token'));


        if ($request->btnButton== "rescheduleAction2") {
            $NV = NHACUNGCAP::where('MaNhaCC', $MaNhaCC)->first();
            //$NV->MaKhachHang=$request->MaKhachHang;
            $NV->TenNhaCC=$request->TenNhaCC;
            $NV->SDTNhaCC=$request->SDTNhaCC;
            $NV->DiaChiNhaCC=$request->DiaChiNhaCC;
            $NV->DiaChiWebsite=$request->DiaChiWebsite;
            $rule=array(
                'TenNhaCC'=>'min:1',
            );
            $message=array(
                'MaNhaCC.min'=>'Trường Mã nhà cung cấp phải có dữ liệu, không để rỗng!',
            );
            $validator=Validator::make($data,$rule,$message);
            if($validator->fails())
            {
                return Redirect::to('QuanTri_DSNhaCungCap')->withErrors($validator);
            }else{
                $NV->save();
                return Redirect::to('QuanTri_DSNhaCungCap')->with('success','Cập nhật dữ liệu thành công!');
            }
        } else {
            return view('404');
        }
    }

}
