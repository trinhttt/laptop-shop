<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class ADMIN extends Model
{

    protected $table='ADMIN';
    protected $primaryKey = 'MaAdmin';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaAdmin=Input::get('MaAdmin');
        $HoTenAdmin=Input::get('HoTenAdmin');
        $GioiTinhAdmin=Input::get('GioiTinhAdmin');
        $NgaySinhAdmin=Input::get('NgaySinhAdmin');
        $SDTAdmin=Input::get('SDTAdmin');
        $DiaChiAdmin=Input::get('DiaChiAdmin');
        $TaiKhoanAdmin=Input::get('TaiKhoanAdmin');




       

        $ad=new ADMIN();
        $ad->MaAdmin=$MaAdmin;
        $ad->HoTenAdmin=$HoTenAdmin;
        $ad->GioiTinhAdmin=$GioiTinhAdmin;
        $ad->NgaySinhAdmin=$NgaySinhAdmin;
        $ad->SDTAdmin=$SDTAdmin;
        $ad->DiaChiAdmin=$DiaChiAdmin;
        $ad->TaiKhoanAdmin=$TaiKhoanAdmin;
        
        
        
        $ad->save();
    }
}