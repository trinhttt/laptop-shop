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
use App\LAPTOP;
use Auth;
use Image;
//use Charts;

use Carbon\Carbon;
class BAOCAOController extends Controller
{
    public function show()

    {
        //xuat
        $sl_xuat=0;
        $tong_tien_xuat=0;
        $hds=HOADON::all();
        $cthd=CHITIETHOADON::all();
        $cthd1=[];
        for($i=0;$i<sizeof($cthd);$i++) {
            $sl_xuat += $cthd[$i]['SoLuong'];
            array_push($cthd1, $cthd[$i]['MaLapTop']);
        }
        $cthd2=[];
        array_push($cthd2, $cthd1[0]);
        for($i=0;$i<sizeof($cthd1);$i++) {
            $demc=0;

            for ($j = 0; $j < sizeof($cthd2); $j++) {
                if($cthd2[$j]===$cthd1[$i])
                {
                    $demc++;
                }
            }
            if($demc===0)
            {
                array_push($cthd2, $cthd1[$i]);
            }
        }
//        var_dump($cthd2);

        for($i=0;$i<sizeof($hds);$i++)
        {
            $tong_tien_xuat+=$hds[$i]['TongTien'];
        }
        //nhap
        $sl_nhap=0;
        $tong_tien_nhap=0;
        $nhs=NHAPHANG::all();
        $ctnh=CHITIETNHAPHANG::all();
        $ctnh1=[];
        for($i=0;$i<sizeof($ctnh);$i++) {
            $sl_nhap+=$ctnh[$i]['SoLuong'];
            array_push($ctnh1, $ctnh[$i]['TenLapTop']);
        }
        $ctnh2=[];
        array_push($ctnh2, $ctnh1[0]);
        for($i=0;$i<sizeof($ctnh1);$i++) {
            $demc=0;

            for ($j = 0; $j < sizeof($ctnh2); $j++) {
                if($ctnh2[$j]===$ctnh1[$i])
                {
                    $demc++;
                }
            }
            if($demc===0)
            {
                array_push($ctnh2, $ctnh1[$i]);
            }
        }
//                var_dump($ctnh2);
//        exit();

        for($i=0;$i<sizeof($nhs);$i++)
        {
            $tong_tien_nhap+=$nhs[$i]['TongTien'];
        }

        $sps=LAPTOP::all();


        return view('bao-cao/ban-hang',compact('hds','nhs','sps','cthd','cthd2','ctnh','ctnh2','sl_nhap','sl_xuat','tong_tien_nhap','tong_tien_xuat'));
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
