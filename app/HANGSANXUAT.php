<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class HANGSANXUAT extends Model
{

    protected $table='HANGSANXUAT';
    protected $primaryKey = 'MaHangSX';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaHangSX=Input::get('MaHangSX');
        $TenHangSX=Input::get('TenHangSX');
    


       

        $cthd=new HANGSANXUAT();
        $cthd->MaHangSX=$MaHangSX;
        $cthd->TenHangSX=$TenHangSX;
        
        
        $cthd->save();
    }
}