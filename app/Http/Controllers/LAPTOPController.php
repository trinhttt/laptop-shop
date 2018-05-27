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
use App\LAPTOP;
//use App\TAIKHOAN;

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
class LAPTOPController extends Controller
{
    public function show()
    {
        $sps=LAPTOP::all();
        return view('hang-hoa.ds_sanpham', compact('sps'));
    }
    public function store(Request $request)
    {
        $request->file('Anh')->store('img');
        return back();
    }
    public function uploadFile(Request $request){
        // Thông báo khi xảy ra lỗi
        $messages = [
            'image' => 'Định dạng không cho phép',
            'max' => 'Kích thước file quá lớn',
        ];
        // Điều kiện cho phép upload
        $this->validate($request, [
            'Anh' => 'image|max:2028',
        ], $messages);
        // Kiểm tra file hợp lệ
        if ($request->file('Anh')->isValid()){
            // Lấy tên file
            $file_name = $request->file('Anh')->getClientOriginalName();
            // Lưu file vào thư mục upload với tên là biến $filename
            $request->file('Anh')->move('img',$file_name);
        }
    }
    public function Insert(Request $request)
    {
        $data=Input::except(array('_token'));

        $NV = new LAPTOP;
        $NV->MaLapTop=$request->MaLapTop;
        $NV->TenLapTop=$request->TenLapTop;
        $NV->HangSX=$request->HangSX;
        $NV->GiaBan=$request->GiaBan;
        $NV->SoLuongConLai=$request->SoLuongConLai;
        $NV->ManHinh=$request->ManHinh;
        $NV->HeDieuHanh=$request->HeDieuHanh;
        $NV->RAM=$request->RAM;
        $NV->ROM=$request->ROM;
        $NV->CPU=$request->CPU;
        $file_name = $request->file('Anh')->getClientOriginalName();

        $NV->Anh = $file_name;
        //        exit($NV);
//        $NV->save();
        $rule=array(
            'MaLapTop'=>'min:1',
            'TenLapTop'=>'min:1',
            'HangSX'=>'min:1',
            'GiaBan'=>'required',
            'ManHinh'=>'required',
            'SoLuongConLai'=>'required',
            'HeDieuHanh'=>'required',
            'VAT'=>'required',
            'Anh'=>'required',
        );
        $message=array(
            'MaLapTop.required'=>'Mã LapTop phải có dữ liệu, không để rỗng!',
            'TenLapTop.required'=>'Trường Tên laptop phải có dữ liệu, không để rỗng!',
            'HangSX.required'=>'Trường Hãng sản xuất phải có dữ liệu, không để rỗng!',
            'GiaBan.required'=>'Trường Giá phải có dữ liệu, không để rỗng!',
            'ManHinh.required'=>'Trường kích thước màn hình phải có dữ liệu, không để rỗng!',
            'SoLuongConLai.required'=>'Trường số lượng phải có dữ liệu, không để rỗng!',
            'HeDieuHanh.required'=>'Trường hệ điều hành phải có dữ liệu, không để rỗng!',
            'VAT.required'=>'Trường Thuế (VAT) phải có dữ liệu, không để rỗng!',
            'Anh.required'=>'Chọn ảnh trước khi click lưu!',

        );
        $validator=Validator::make($data,$rule,$message);
        if($validator->fails())
        {
            return Redirect::to('TaoMoi_SanPham')->withErrors($validator);
        }else{
            $NV->save();
            return Redirect::to('TaoMoi_SanPham')->with('success','Thêm mới sản phẩm thành công!');
        }


// then in your view you reference the path like this:
//
//        <img src="{{ asset('public/images/' . $model->image) }}">
//        $data=Input::except(array('_token'));
//        $rule=array(
//        'TenLapTop'=>'required',
//            'HangSX'=>'required',
//            'GiaBan'=>'required',
//            'ManHinh'=>'required',
//            'SoLuongConLai'=>'required',
//            'HeDieuHanh'=>'required',
//            'VAT'=>'required',
//            'Anh'=>'required',
//        );
//        $message=array(
////            'MaLapTop.required'=>'Mã LapTop phải có dữ liệu, không để rỗng!',
//            'TenLapTop.required'=>'Trường Tên laptop phải có dữ liệu, không để rỗng!',
//            'HangSX.required'=>'Trường Hãng sản xuất phải có dữ liệu, không để rỗng!',
//            'GiaBan.required'=>'Trường Giá phải có dữ liệu, không để rỗng!',
//            'ManHinh.required'=>'Trường kích thước màn hình phải có dữ liệu, không để rỗng!',
//            'SoLuongConLai.required'=>'Trường số lượng phải có dữ liệu, không để rỗng!',
//            'HeDieuHanh.required'=>'Trường hệ điều hành phải có dữ liệu, không để rỗng!',
//            'VAT.required'=>'Trường Thuế (VAT) phải có dữ liệu, không để rỗng!',
//            'Anh.required'=>'Chọn ảnh trước khi click lưu!',
////            'Anh.image'=>'Chọn đúng định dạng!',
//        );
//        $file_name = $request->file('Anh')->getClientOriginalName();
//
//        $data['Anh'] = $file_name;
//        $validator=Validator::make($data,$rule,$message);
//
//
//        exit($data['Anh']);
//        if($validator->fails())
//        {
//            return Redirect::to('TaoMoi_SanPham')->withErrors($validator);
//        }else{
//            LAPTOP::formstore(Input::except('_token'));
//
//
//            return Redirect::to('TaoMoi_SanPham')->with('success','Thêm mới sản phẩm thành công!');
//
//
//
//    }
    }
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

    public function Action(Request $request, $MaLapTop)
    {
        $data=Input::except(array('_token'));


        if ($request->btnButton== "rescheduleAction2") {
            $NV = LAPTOP::where('MaLapTop', $MaLapTop)->first();
            $NV->MaLapTop=$request->MaLapTop;
            $NV->TenLapTop=$request->TenLapTop;
            $NV->HangSX=$request->HangSX;
            $NV->SoLuongConLai=$request->SoLuongConLai;
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
                'MaLapTop.min'=>'Trường Mã LapTop phải có dữ liệu, không để rỗng!',
                'TenLapTop.min'=>'Trường Tên LapTop phải có dữ liệu, không để rỗng!',
                'HangSX.min'=>'Trường Hãng sản xuất phải có dữ liệu, không để rỗng!',
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
