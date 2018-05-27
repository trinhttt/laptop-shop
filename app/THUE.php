<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
class THUE extends Model
{

    protected $table='THUE';
    protected $primaryKey = 'idThue';
    public $timestamps = false;
    public static function formstore($data)
    {
        $idThue=Input::get('idThue');
        $PhanTram=Input::get('PhanTram');



        $hd=new THUE();
        $hd->idThue=$idThue;
        $hd->PhanTram=$PhanTram;



        $hd->save();
    }
}
