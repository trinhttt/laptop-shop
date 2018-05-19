<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class KHACHHANG extends Model
{

    protected $table='KHACHHANG';
    protected $primaryKey = 'MaKhachHang';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaKhachHang=Input::get('MaKhachHang');
        $HoTenKH=Input::get('HoTenKH');
        $GioiTinhKH=Input::get('GioiTinhKH');
        $NgaySinhKH=Input::get('NgaySinhKH');
        $SDTKH=Input::get('SDTKH');
        $DiaChiKH=Input::get('DiaChiKH');
        $TaiKhoanKH=Input::get('TaiKhoanKH');



       

        $kh=new KHACHHANG();
        $kh->MaKhachHang=$MaKhachHang;
        $kh->HoTenKH=$HoTenKH;
        $kh->GioiTinhKH=$GioiTinhKH;
        $kh->NgaySinhKH=$NgaySinhKH;
        $kh->SDTKH=$SDTKH;
        $kh->DiaChiKH=$DiaChiKH;
        $kh->TaiKhoanKH=$TaiKhoanKH;
        
        
        $kh->save();
    }
}