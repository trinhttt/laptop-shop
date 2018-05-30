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
        $SoDienThoai=Input::get('SoDienThoai');
        $TongTien=Input::get('TongTien');
        $DiaChiNhan=Input::get('DiaChiNhan');
        $KhachHang=Input::get('KhachHang');
        $SoSanPham=Input::get('SoSanPham');
        $MucGiaNam=Input::get('MucGiaNam');
        $NguoiTaoHD=Input::get('NguoiTaoHD');





        $hd=new HOADON();
        $hd->SoHoaDon=$SoHoaDon;
        $hd->SoDienThoai=$SoDienThoai;
        $hd->TongTien=$TongTien;
        $hd->DiaChiNhan=$DiaChiNhan;
        $hd->KhachHang=$KhachHang;
        $hd->SoSanPham=$SoSanPham;
        $hd->MucGiaNam=$MucGiaNam;
        $hd->NguoiTaoHD=$NguoiTaoHD;



        $hd->save();
    }
}