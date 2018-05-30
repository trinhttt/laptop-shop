<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class CHITIETNHAPHANG extends Model
{

    protected $table='CHITIETNHAPHANG';
    protected $primaryKey = 'idHoaDon,TenLapTop';
    public $timestamps = false;
    public static function formstore($data)
    {
        $idHoaDon=Input::get('idHoaDon');
        $TenLapTop=Input::get('TenLapTop');
        $SoLuong=Input::get('SoLuong');
        $DonGia=Input::get('DonGia');
        $status=Input::get('status');



        $cthd=new CHITIETNHAPHANG();
        $cthd->idHoaDon=$idHoaDon;
        $cthd->TenLapTop=$TenLapTop;
        $cthd->SoLuong=$SoLuong;
        $cthd->DonGia=$DonGia;

        $cthd->status=$status;
        $cthd->save();
    }
}