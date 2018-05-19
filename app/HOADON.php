<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class HOADON extends Model
{

    protected $table='HOADON';
    protected $primaryKey = 'SoHoaDon';
    public $timestamps = false;
    public static function formstore($data)
    {
        $SoHoaDon=Input::get('SoHoaDon');
        $NgayLapHD=Input::get('NgayLapHD');
        $TongTien=Input::get('TongTien');
        $DiaChiNhan=Input::get('DiaChiNhan');
        $KhachHang=Input::get('KhachHang');


       

        $hd=new HOADON();
        $hd->SoHoaDon=$SoHoaDon;
        $hd->NgayLapHD=$NgayLapHD;
        $hd->TongTien=$TongTien;
        $hd->DiaChiNhan=$DiaChiNhan;
        $hd->KhachHang=$KhachHang;
        
        
        $hd->save();
    }
}