<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class NHAPHANG extends Model
{

    protected $table='NHAPHANG';
    protected $primaryKey = 'MaNhaCC';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaNhaCC=Input::get('MaNhaCC');
        $TenNhaCC=Input::get('TenNhaCC');
        $SDTNhaCC=Input::get('SDTNhaCC');
        $DiaChiNhaCC=Input::get('DiaChiNhaCC');
        $DiaChiWebsite=Input::get('DiaChiWebsite');
        $NgayYeuCau=Input::get('NgayYeuCau');
        $NgayNhap=Input::get('NgayNhap');
        $status=Input::get('status');






        $ncc=new NHAPHANG();
        $ncc->MaNhaCC=$MaNhaCC;
        $ncc->TenNhaCC=$TenNhaCC;
        $ncc->SDTNhaCC=$SDTNhaCC;
        $ncc->DiaChiNhaCC=$DiaChiNhaCC;
        $ncc->DiaChiWebsite=$DiaChiWebsite;
        $ncc->NgayYeuCau=$NgayYeuCau;
        $ncc->NgayNhap=$NgayNhap;
        $ncc->status=$status;




        $ncc->save();
    }
}