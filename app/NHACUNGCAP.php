<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class NHACUNGCAP extends Model
{

    protected $table='NHACUNGCAP';
    protected $primaryKey = 'MaNhaCC';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaNhaCC=Input::get('MaNhaCC');
        $TenNhaCC=Input::get('TenNhaCC');
        $SDTNhaCC=Input::get('SDTNhaCC');
        $DiaChiNhaCC=Input::get('DiaChiNhaCC');
        $DiaChiWebsite=Input::get('DiaChiWebsite');
    


       

        $cthd=new NHACUNGCAP();
        $cthd->MaNhaCC=$MaNhaCC;
        $cthd->TenNhaCC=$TenNhaCC;
        $cthd->SDTNhaCC=$SDTNhaCC;
        $cthd->DiaChiNhaCC=$DiaChiNhaCC;
        $cthd->DiaChiWebsite=$DiaChiWebsite;

        
        
        $cthd->save();
    }
}