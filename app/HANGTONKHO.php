<?php
/**
 * Created by PhpStorm.
 * User: tutrinh
 * Date: 5/16/18
 * Time: 2:12 PM
 */


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;

class HANGTONKHO extends Model
{

    protected $table='HANGTONKHO';
    protected $primaryKey = 'idTonKho';
    public $timestamps = false;
    public static function formstore($data)
    {
        $idTonKho=Input::get('idTonKho');

        $MaSP=Input::get('MaSP');
        $TenSP=Input::get('TenSP');
        $HangSX=Input::get('HangSX');
        $TongNhap=Input::get('TongNhap');
        $TongBan=Input::get('TongBan');
        $ThoiGianTonKho=Input::get('ThoiGianTonKho');


        $sp=new HANGTONKHO();
        $sp->idTonKho=$idTonKho;

        $sp->MaSP=$MaSP;
        $sp->TenSP=$TenSP;
        $sp->HangSX=$HangSX;
        $sp->TongNhap=$TongNhap;
        $sp->TongBan=$TongBan;
        $sp->ThoiGianTonKho=$ThoiGianTonKho;


        $sp->save();
    }
}
