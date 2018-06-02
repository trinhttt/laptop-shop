<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class NHAPHANG extends Model
{

    protected $table='NHAPHANG';
    protected $primaryKey = 'idNhapHang';
    public $timestamps = false;
    public static function formstore($data)
    {
        $idNhapHang=Input::get('idNhapHang');
        $MaNhaCC=Input::get('MaNhaCC');
        $TenNhaCC=Input::get('TenNhaCC');
        $SDTNhaCC=Input::get('SDTNhaCC');
        $DiaChiNhaCC=Input::get('DiaChiNhaCC');
        $DiaChiWebsite=Input::get('DiaChiWebsite');
        $NgayYeuCau=Input::get('NgayYeuCau');
        $NgayNhap=Input::get('NgayNhap');
        $nhap_or_doi=Input::get('nhap_or_doi');






        $ncc=new NHAPHANG();
        $ncc->idNhapHang=$idNhapHang;
        $ncc->MaNhaCC=$MaNhaCC;
        $ncc->TenNhaCC=$TenNhaCC;
        $ncc->SDTNhaCC=$SDTNhaCC;
        $ncc->DiaChiNhaCC=$DiaChiNhaCC;
        $ncc->DiaChiWebsite=$DiaChiWebsite;
        $ncc->NgayYeuCau=$NgayYeuCau;
        $ncc->NgayNhap=$NgayNhap;
        $ncc->nhap_or_doi=$nhap_or_doi;




        $ncc->save();
    }
}