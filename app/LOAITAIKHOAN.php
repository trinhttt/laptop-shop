<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class LOAITAIKHOAN extends Model
{

    protected $table='LOAITAIKHOAN';
    protected $primaryKey = 'MaLoaiTK';
    public $timestamps = false;
    public static function formstore($data)
    {
        $MaLoaiTK=Input::get('MaLoaiTK');
        $TenLoaiTK=Input::get('TenLoaiTK');


        $ltk=new LOAITAIKHOAN();
        $ltk->MaLoaiTK=$MaLoaiTK;
        $ltk->TenLoaiTK=$TenLoaiTK;

        $ltk->save();
    }
}