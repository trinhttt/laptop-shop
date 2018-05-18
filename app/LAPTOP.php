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

class LAPTOP extends Model
{

    protected $table='LAPTOP';
    protected $primaryKey = 'MaLapTop';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaLapTop=Input::get('MaLapTop');
        $TenLapTop=Input::get('TenLapTop');
        $HangSX=Input::get('HangSX');
        $SoLuongConLai=Input::get('SoLuongConLai');
        $GiaBan=Input::get('GiaBan');
        $ManHinh=Input::get('ManHinh');
        $HeDieuHanh=Input::get('HeDieuHanh');
        $RAM=Input::get('RAM');
        $ROM=Input::get('ROM');
        $CPU=Input::get('CPU');
        $Khac=Input::get('Khac');
        $MoTa=Input::get('MoTa');

        $sp=new LAPTOP();
        $sp->MaLapTop=$MaLapTop;
        $sp->TenLapTop=$TenLapTop;
        $sp->HangSX=$HangSX;
        $sp->SoLuongConLai=$SoLuongConLai;
        $sp->GiaBan=$GiaBan;
        $sp->ManHinh=$ManHinh;
        $sp->HeDieuHanh=$HeDieuHanh;
        $sp->RAM=$RAM;
        $sp->ROM=$ROM;
        $sp->CPU=$CPU;
        $sp->Khac=$Khac;
        $sp->MoTa=$MoTa;


        $sp->save();
    }
}
