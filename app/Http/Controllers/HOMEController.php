<?php
/**
 * Created by PhpStorm.
 * User: tutrinh
 * Date: 6/4/18
 * Time: 2:32 PM
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Input;
use Validator;
use Redirect;
use App\NHAPHANG;
use App\HOADON;
use App\CHITIETHOADON;
use App\CHITIETNHAPHANG;
use App\LAPTOP;
use Auth;
use Image;
//use Charts;

use Carbon\Carbon;
class HOMEController extends Controller
{
    public function show()
    {

        $hds = HOADON::all();
        $cthd = CHITIETHOADON::all();

        $doanhthu_thang4 = [0, 0, 0, 0];
        $doanhthu_thang5 = [0, 0, 0, 0];
        $khach_t4=[0,0,0,0];
        $khach_t5=[0,0,0,0];

        $tong_sl_t40 = 0;
        $tong_sl_t41 = 0;
        $tong_sl_t42 = 0;
        $tong_sl_t43 = 0;
        $tong_sl_t50 = 0;
        $tong_sl_t51 = 0;
        $tong_sl_t52 = 0;
        $tong_sl_t53 = 0;
        $Tong_donhang=4;
        for ($i = 0; $i < sizeof($hds); $i++) {
            for ($j = 0; $j < sizeof($cthd); $j++) {

                if ($hds[$i]['NgayTao'] === '2018-04-1' && $cthd[$j]['HoaDon'] === $hds[$i]['SoHoaDon']) {
                    $doanhthu_thang4[0] += $cthd[$j]['SoLuong'] * $cthd[$j]['DonGia'];
                    $tong_sl_t40 = $cthd[$j]['SoLuong'];
                    $khach_t4=$hds[$i]['KhachHang'];


                }
                if ($hds[$i]['NgayTao'] === '2018-04-7' && $cthd[$j]['HoaDon'] === $hds[$i]['SoHoaDon']) {
                    $doanhthu_thang4[1] += $cthd[$j]['SoLuong'] * $cthd[$j]['DonGia'];
                    $tong_sl_t41 = $cthd[$j]['SoLuong'];
                    $khach_t4=$hds[$i]['KhachHang'];

                }
                if ($hds[$i]['NgayTao'] === '2018-04-17' && $cthd[$j]['HoaDon'] === $hds[$i]['SoHoaDon']) {
                    $doanhthu_thang4[2] += $cthd[$j]['SoLuong'] * $cthd[$j]['DonGia'];
                    $tong_sl_t42 = $cthd[$j]['SoLuong'];
                    $khach_t4=$hds[$i]['KhachHang'];

                }
                if ($hds[$i]['NgayTao'] === '2018-04-30' && $cthd[$j]['HoaDon'] === $hds[$i]['SoHoaDon']) {
                    $doanhthu_thang4[3] += $cthd[$j]['SoLuong'] * $cthd[$j]['DonGia'];
                    $tong_sl_t43 = $cthd[$j]['SoLuong'];
                    $khach_t4=$hds[$i]['KhachHang'];

                }
                if ($hds[$i]['NgayTao'] === '2018-05-1' && $cthd[$j]['HoaDon'] === $hds[$i]['SoHoaDon']) {
                    $doanhthu_thang5[0] += $cthd[$j]['SoLuong'] * $cthd[$j]['DonGia'];
                    $tong_sl_t50 = $cthd[$j]['SoLuong'];
                    $khach_t5=$hds[$i]['KhachHang'];

                }
                if ($hds[$i]['NgayTao'] === '2018-05-15' && $cthd[$j]['HoaDon'] === $hds[$i]['SoHoaDon']) {
                    $doanhthu_thang5[1] += $cthd[$j]['SoLuong'] * $cthd[$j]['DonGia'];
                    $tong_sl_t51 = $cthd[$j]['SoLuong'];
                    $khach_t5=$hds[$i]['KhachHang'];

                }
                if ($hds[$i]['NgayTao'] === '2018-05-22' && $cthd[$j]['HoaDon'] === $hds[$i]['SoHoaDon']) {
                    $doanhthu_thang5[2] += $cthd[$j]['SoLuong'] * $cthd[$j]['DonGia'];
                    $tong_sl_t52 = $cthd[$j]['SoLuong'];
                    $khach_t5=$hds[$i]['KhachHang'];

                }
                if ($hds[$i]['NgayTao'] === '2018-05-31' && $cthd[$j]['HoaDon'] === $hds[$i]['SoHoaDon']) {
                    $doanhthu_thang5[3] += $cthd[$j]['SoLuong'] * $cthd[$j]['DonGia'];
                    $tong_sl_t53 = $cthd[$j]['SoLuong'];
                    $khach_t5=$hds[$i]['KhachHang'];

                }


            }
        }
        $TongDoanhThuT4 = 0;
        $TongDoanhThuT5 = 0;
        $dem_khach_moi=0;
        for ($i = 0; $i < sizeof($khach_t4); $i++) {
            $temp=0;

            for ($j = 0; $j < sizeof($khach_t5); $j++) {
                if($khach_t4[$i]===$khach_t5[$j]&&$khach_t4[$i]!=0) {
                    $temp++;
                    break;
                }
            }
            if($temp===0)
            {
                $dem_khach_moi++;
            }
        }
        for ($i = 0; $i < sizeof($doanhthu_thang4); $i++) {
            $TongDoanhThuT4 += $doanhthu_thang4[$i];

        }
        for ($i = 0; $i < sizeof($doanhthu_thang5); $i++) {
            $TongDoanhThuT5 += $doanhthu_thang5[$i];
        }
        $tong_sl_t4=$tong_sl_t40+$tong_sl_t41+$tong_sl_t42+$tong_sl_t43;
        $tong_sl_t5=$tong_sl_t50+$tong_sl_t51+$tong_sl_t52+$tong_sl_t53;

        $num = 10000000;
        $t40 = $doanhthu_thang4[0] / $num;
        $t41 = $doanhthu_thang4[1] / $num;
        $t42 = $doanhthu_thang4[2] / $num;
        $t43 = $doanhthu_thang4[3] / $num;
        $t50 = $doanhthu_thang5[0] / $num;
        $t51 = $doanhthu_thang5[1] / $num;
        $t52 = $doanhthu_thang5[2] / $num;
        $t53 = $doanhthu_thang5[3] / $num;




//        var_dump($TongDoanhThuT5 );
//        exit();

        $sps = LAPTOP::all();
        return view('trang-chu/index', compact('t40', 't41', 't42', 't43', 't50', 't51', 't52', 't53',
            'sps',
            'tong_sl_t40', 'tong_sl_t41', 'tong_sl_t42', 'tong_sl_t43',
            'tong_sl_t50', 'tong_sl_t51', 'tong_sl_t52', 'tong_sl_t53',
            'TongDoanhThuT4','TongDoanhThuT5',
            'tong_sl_t4','tong_sl_t5','Tong_donhang','dem_khach_moi'


        ));




    }

}
