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
        return view('hang-hoa.ds_sanpham', compact('sps'));
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
//    public function getData($MaLapTop)
//    {
//        $sp1 = LAPTOP::where('MaLapTop', $MaLapTop)->first();
//
//        if ($sp1 == null) {
//            return view('404');
//        }
//
//        return view('hang-hoa.ds_sanpham', compact('sp1'));
//
//    }
    public function Action(Request $request, $MaLapTop)
    {
        $data=Input::except(array('_token'));


        if ($request->btnButton== "rescheduleAction2") {
            $NV = LAPTOP::where('MaLapTop', $MaLapTop)->first();
            $NV->MaLapTop=$request->MaLapTop;
            $NV->TenLapTop=$request->TenLapTop;
            $NV->HangSX=$request->HangSX;
            $NV->SoLuongConLai=$request->SoLuongConLai;
//            $NV->GiaBan=$request->GiaBan;
            $NV->ManHinh=$request->ManHinh;
            $NV->HeDieuHanh=$request->HeDieuHanh;
            $NV->RAM=$request->RAM;
            $NV->ROM=$request->ROM;
            $NV->CPU=$request->CPU;

            $rule=array(
                'MaLapTop'=>'min:1',
                'TenLapTop'=>'min:1',
                'HangSX'=>'min:1',
            );
            $message=array(
                'MaLapTop.min'=>'Mã LapTop phải có dữ liệu, không để rỗng!',
                'TenLapTop.min'=>'Tên LapTop phải có dữ liệu, không để rỗng!',
                'HangSX.min'=>'Hãng sản xuất phải có dữ liệu, không để rỗng!',
            );
            $validator=Validator::make($data,$rule,$message);
                if($validator->fails())
            {
                return Redirect::to('HangHoa_DS-HangHoa')->withErrors($validator);
            }else{
                    $NV->save();
                    return Redirect::to('HangHoa_DS-HangHoa')->with('success','Cập nhật dữ liệu thành công!');
            }
        } else {
            return view('404');
        }
    }

}
