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
use App\HANGTONKHO;

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
class HANGTONKHOController extends Controller
{

    public function show()
    {

        $sps=HANGTONKHO::all();
        return view('hang-hoa.ton-kho', compact('sps'));
    }

    public function Action(Request $request, $idTonKho)
    {
        $data=Input::except(array('_token'));


        if ($request->btnButton== "rescheduleAction2") {
            $NV = HANGTONKHO::where('idTonKho', $idTonKho)->first();
            $NV->idTonKho=$request->idTonKho;
            $NV->MaSP=$request->MaSP;
            $NV->TenSP=$request->TenSP;
            $NV->TongNhap=$request->TongNhap;
            $NV->TongBan=$request->TongBan;
            $NV->ThoiGianTonKho=$request->ThoiGianTonKho;

            $rule=array(
                'idTonKho'=>'min:1',
                'MaSP'=>'min:1',
                'TenSP'=>'min:1',
                'TongNhap'=>'required',
                'TongBan'=>'required',
                'ThoiGianTonKho'=>'required',
            );
            $message=array(
                'MaSP.required'=>'Mã sản phẩm phải có dữ liệu, không để rỗng!',
                'TenSP.required'=>'Trường Tên sản phẩm phải có dữ liệu, không để rỗng!',
                'TongNhap.required'=>'Trường số lượng nhập có dữ liệu, không để rỗng!',
                'TongBan.required'=>'Trường số lượng bán được có dữ liệu, không để rỗng!',
                'ThoiGianTonKho.required'=>'Trường thời gian tồn kho phải có dữ liệu, không để rỗng!',


            );
            $validator=Validator::make($data,$rule,$message);
            if($validator->fails())
            {
                return Redirect::to('HangHoa_TonKho')->withErrors($validator);
            }else{
                $NV->save();
                return Redirect::to('HangHoa_TonKho')->with('success','Cập nhật dữ liệu thành công!');
            }
        } else {
            return view('404');
        }
    }

}
