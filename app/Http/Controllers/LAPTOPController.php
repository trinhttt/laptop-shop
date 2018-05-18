<?php
/**
 * Created by PhpStorm.
 * User: tutrinh
 * Date: 5/16/18
 * Time: 10:31 AM
 */


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\LAPTOP;
//use App\TAIKHOAN;
use Auth;
//use Charts;

use Carbon\Carbon;
class LAPTOPController extends Controller
{
    public function show()
    {
        $sps=LAPTOP::all();

        return view('ds_sanpham', compact('sps'));
    }
//    public function show()
//    {
//        $nvs=LAPTOP::all();
//        $T='No name';
//        foreach (TAIKHOAN::all() as $r)
//        {
//
//            if($r['DangNhap']==1)
//            {
//
//                $T=$r['TenDN'];
//                $LoaiTk=$r['LoaiTK'];
//                break;
//            }
//        }
//        return view('product.product_list', compact('nvs','T','LoaiTk'));
//    }

//    public function Insert()
//    {
//
//        $data=Input::except(array('_token'));
//        $rule=array(
//            'MaSP'=>'required',
//            'TenDienThoai'=>'required',
//            'HangSX'=>'required',
//            'ThongSoKyThuat'=>'required',
//            'SoLuongConLai'=>'required',
//
//            'Mausac'=>'required',
//            'GiaGoc'=>'required',
//            'GiaGiam'=>'required',
//            'KhuyenMai'=>'required',
//            'UuDai'=>'required',
//            'Mota_urlImage'=>'required',
//            'DacDiemChiTiet_urlImage'=>'required',
//        );
//
//        $validator=Validator::make($data,$rule);
//
//        if($validator->fails())
//        {
//            return Redirect::to('product_list')->withErrors($validator);
//        }else{
//            SANPHAMDIENTHOAI::formstore(Input::except('_token'));
//
//            return Redirect::to('product_list')->with('success','successfully inserted');
//        }
//
//
//    }
//
//
//    //Delete info of bill
//    function Delete($MaSP)
//    {
//        $NV = SANPHAMDIENTHOAI::find($MaSP);
//        if (isset($NV)) {
//            $NV->delete();
//        }
//        return Redirect::to('product_list');
//    }
//
//    //Edit info of bill
//    public function getData($MaSP)
//    {
//        $NV = SANPHAMDIENTHOAI::where('MaSP', $MaSP)->first();
//
//        if ($NV == null) {
//            return view('404');
//        }
//
//        return view('product.product_list', compact('NV'));
//
//    }
//    public function Action(Request $request, $MaSP)
//    {
//
//        if ($request->btnButton== "rescheduleAction2") {
//            $NV = SANPHAMDIENTHOAI::where('MaSP', $MaSP)->first();
//
//            $NV->MaSP=$request->MaSP;
//            $NV->TenDienThoai=$request->TenDienThoai;
//            $NV->HangSX=$request->HangSX;
//            $NV->ThongSoKyThuat=$request->ThongSoKyThuat;
//            $NV->SoLuongConLai=$request->SoLuongConLai;
//            $NV->Mausac=$request->Mausac;
//            $NV->GiaGoc=$request->GiaGoc;
//            $NV->GiaGiam=$request->GiaGiam;
//            $NV->KhuyenMai=$request->KhuyenMai;
//            $NV->UuDai=$request->UuDai;
//            $NV->Mota_urlImage=$request->Mota_urlImage;
//            $NV->DacDiemChiTiet_urlImage=$request->DacDiemChiTiet_urlImage;
//            $NV->save();
//
//
//            return Redirect::to('product_list');
//        } else {
//            return view('404');
//        }
//    }

}
