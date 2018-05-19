<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class TAIKHOAN extends Model
{

    protected $table='TAIKHOAN';
    protected $primaryKey = 'Email';
    public $timestamps = false;
    public static function formstore($data)
    {
        $Email=Input::get('Email');
        $MatKhau=Input::get('MatKhau');
        $LoaiTK=Input::get('LoaiTK');
       

        $tk=new TAIKHOAN();
        $tk->Email=$Email;
        $tk->MatKhau=$MatKhau;
        $tk->LoaiTK=$LoaiTK;
        
        $tk->save();
    }
}