<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class CHITIETHOADON extends Model
{

    protected $table='CHITIETHOADON';
    protected $primaryKey = 'HoaDon,MaLapTop';
    public $timestamps = false;
    public static function formstore($data)
    {
        $HoaDon=Input::get('HoaDon');
        $MaLapTop=Input::get('MaLapTop');
        $SoLuong=Input::get('SoLuong');
        $DonGia=Input::get('DonGia');
        $Ck=Input::get('Ck');

       

        $cthd=new CHITIETHOADON();
        $cthd->HoaDon=$HoaDon;
        $cthd->MaLapTop=$MaLapTop;
        $cthd->SoLuong=$SoLuong;
        $cthd->DonGia=$DonGia;

        $cthd->Ck=$Ck;
        $cthd->save();
    }
}