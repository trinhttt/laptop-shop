<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class CHITIETHOADON extends Model
{

    protected $table='CHITIETHOADON';
    protected $primaryKey = 'SoHoaDon,MaLapTop';
    public $timestamps = false;
    public static function formstore($data)
    {
        $SoHoaDon=Input::get('SoHoaDon');
        $MaLapTop=Input::get('MaLapTop');
        $SoLuong=Input::get('SoLuong');
        $DonGia=Input::get('DonGia');


       

        $cthd=new CHITIETHOADON();
        $cthd->SoHoaDon=$SoHoaDon;
        $cthd->MaLapTop=$MaLapTop;
        $cthd->SoLuong=$SoLuong;
        $cthd->DonGia=$DonGia;
        
        
        $cthd->save();
    }
}