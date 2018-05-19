<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class NHANVIEN extends Model
{

    protected $table='NHANVIEN';
    protected $primaryKey = 'MaNhanVien';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaNhanVien=Input::get('MaNhanVien');
        $HoTenNV=Input::get('HoTenNV');
        $GioiTinhNV=Input::get('GioiTinhNV');
        $NgaySinhNV=Input::get('NgaySinhNV');
        $SDTNV=Input::get('SDTNV');
        $DiaChiNV=Input::get('DiaChiNV');
        $ChucVu=Input::get('ChucVu');
        $TaiKhoanNV=Input::get('TaiKhoanNV');




       

        $nv=new NHANVIEN();
        $nv->MaNhanVien=$MaNhanVien;
        $nv->HoTenNV=$HoTenNV;
        $nv->GioiTinhNV=$GioiTinhNV;
        $nv->NgaySinhNV=$NgaySinhNV;
        $nv->SDTNV=$SDTNV;
        $nv->DiaChiNV=$DiaChiNV;
        $nv->ChucVu=$ChucVu;
        $nv->TaiKhoanNV=$TaiKhoanNV;
        
        
        
        $nv->save();
    }
}