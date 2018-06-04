<?php
/**
 * Created by PhpStorm.
 * User: tutrinh
 * Date: 6/4/18
 * Time: 2:32 PM
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Input;
use Validator;
use Redirect;
use App\NHAPHANG;
use App\HOADON;
use App\CHITIETHOADON;
use App\CHITIETNHAPHANG;

use Auth;
use Image;
//use Charts;

use Carbon\Carbon;
class BAOCAOController extends Controller
{
    public function show()

    {
        $hds=HOADON::all();
        $cthd=CHITIETHOADON::all();

        $nhs=NHAPHANG::all();
        $ctnh=CHITIETNHAPHANG::all();

        for($i=0;$i<sizeof($hds);$i++)
        {
            for($j=0;$j<sizeof($nhs);$j++)
            {
                if($hds[$i]['idHoaDon'])
                $tong_xuat=$hds[$i]['SoSanPham'];
            }
                $tong_xuat=$hds[$i]['SoSanPham'];
                $tong_xuat=$hds[$i]['SoSanPham'];
                $tong_xuat=$hds[$i]['SoSanPham'];
                $tong_xuat=$hds[$i]['SoSanPham'];
        }
        return view('bao-cao/ban-hang',compact('hds','nhs'));
    }

    public function Insert(Request $request)
    {
        $data=Input::except(array('_token'));
        $NV = new NHAPHANG();
        $NV->idNhapHang=$request->idNhapHang;
        $NV->TenNhaCC=$request->TenNhaCC;
        $NV->SDTNhaCC=$request->SDTNhaCC;
        $NV->DiaChiNhaCC=$request->DiaChiNhaCC;
        $NV->DiaChiWebsite=$request->DiaChiWebsite;
        $NV->NgayYeuCau=$request->NgayYeuCau;
        $NV->NgayYeuCau= date('Y-m-d');
        $NV->NgayNhap=$request->NgayNhap;
        $NV->NgayNhap = date('Y-m-d');
        $NV->SoLoaiSP=$request->SoLoaiSP;
        $NV->nhap_or_doi=$request->nhap_or_doi;
        if($NV->nhap_or_doi=='on')
        {
            $NV->nhap_or_doi='Nhập hàng';
        }
        else  {
            $NV->nhap_or_doi='Đổi trả';
        }
        $rule=array(
            'TenNhaCC'=>'required',
            'SDTNhaCC'=>'required',
            'DiaChiNhaCC'=>'required',
            'DiaChiWebsite'=>'required',
            'NgayYeuCau'=>'required',
            'SoLoaiSP'=>'required',
            'NgayNhap'=>'required',
        );
        $message=array(
            'SoLoaiSP.required'=>'Trường số loại sản phẩm phải có dữ liệu, không để rỗng!',
            'TenNhaCC.required'=>'Trường Tên nhà cung cấp khách hàng phải có dữ liệu, không để rỗng!',
            'SDTNhaCC.required'=>'Trường Số điện thoại nhà cung cấp phải có dữ liệu, không để rỗng!',
            'DiaChiNhaCC.required'=>'Trường Địa chỉ nhà cung cấp phải có dữ liệu, không để rỗng!',
            'DiaChiWebsite.required'=>'Trường Địa chỉ website phải có dữ liệu, không để rỗng!',
            'NgayYeuCau.required'=>'Trường ngày yêu cầu phải có dữ liệu, không để rỗng!',
            'NgayNhap.required'=>'Trường ngày nhập phải có dữ liệu, không để rỗng!',
        );

        $validator=Validator::make($data,$rule,$message);
        if($validator->fails())
        {
            exit($NV);

            return Redirect::to('HangHoa_TaoDotNhapHang')->withErrors($validator);
        }else{
            $NV->save();

            $tong_tien=0;


            for($i=0;$i<$NV['SoLoaiSP'];$i++)
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

            return Redirect::to('HangHoa_TaoDotNhapHang')->with('success','Lưu thông tin đợt nhập hàng thành công!');



        }
    }



}
