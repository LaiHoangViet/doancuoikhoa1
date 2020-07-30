<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Model\Admin;
use App\Model\KhachHangLogin;
use App\Model\KhachHang;
use App\Model\Xe;
use App\Model\LoaiXe;
use App\Model\DatXe;
use App\Model\HopDong;
use DB;
use Request;
use Session;
use Storage;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    public function layer()
    {
      $xe     = new Xe();
      $xe     = $xe->get_six();
      return view('layer.trang-chu')->with('xe', $xe);

  }

  public function layerAdmin()
  {
   return view('layerAdmin.Admin_master');
}


public function Admin_view_login()
{
   return view('Admin_view_login');
}
public function Admin_process_login()
{
   $Admin = new Admin();
   $Admin->Email = Request::get('Email');
   $Admin->Mat_khau = Request::get('Mat_khau');
   $Admin = $Admin->get_one();

   if (count($Admin)==1) {
      Session::put('Ma_admin',$Admin[0]->Ma_admin);
      Session::put('Ten_dang_nhap',$Admin[0]->Ten_dang_nhap);

      return redirect()->route('layerAdmin');
  }
  return redirect()->route('Admin_view_login');
}
public function Admin_logout()
{
   Session::flush();
   return redirect()->route('Admin_view_login');
}


public function khach_hang_view_login()
{
 return view('khach_hang_view_login');
}
public function khach_hang_process_login()
{
 $khach_hang = new KhachHangLogin();
 $khach_hang->Email = Request::get('Email');
 $khach_hang->Mat_khau = Request::get('Mat_khau');
 $khach_hang = $khach_hang->get_one();

 if (count($khach_hang)==1) {
  Session::put('Ma_khach_hang',$khach_hang[0]->Ma_khach_hang);
  Session::put('Ten_dang_nhap',$khach_hang[0]->Ten_dang_nhap);
  Session::put('Sdt', $khach_hang[0]->Sdt);

  return redirect()->route('layer');
}
return redirect()->route('khach_hang_view_login');
}
public function khach_hang_logout()
{
        // Session::forget('ma_admin');

    Session::flush();

    return redirect()->route('khach_hang_view_login');
}

public function ta_ca_xe()
{
    $xe = new Xe();
    $array_xe = $xe->get_all();

    return view('layer.ta_ca_xe',[
        'array_xe' => $array_xe
    ]);
}

public function the_loai()
{
    return view('layer.the_loai');
}

public function gioi_thieu()
{
    return view('gioi_thieu');
}

public function huong_dan_mua_xe()
{
    return view('layer.huong_dan_mua_xe');
}



public function view_file_upload()
{
    return view('view_file_upload');
}
public function process_file_upload()
{
    $file = Request::file('Anh');
    $path = Storage::disk('public')->put('',$file);

    $xe =new Xe();
    $xe->Ma_xe=1;
    $xe->Anh=$path;
    $xe->update_anh();
}
public function view_one()
{
    $xe =new Xe();
    $xe->Ma_xe=1;
    $xe = $xe->get_one();
    return view('view_one',compact('xe'));
}

public function chi_tiet_xe($id)
{
    $xe = DB::table('xe')->where('Ma_xe',$id)->first();
    $Anh = DB::table('xe')->where('Ma_xe','Anh')->where('xe',$xe->Ma_xe);
    return view('layer.chi_tiet_xe',compact('xe'));
}

public function dat_hang($ma_xe)
{
    $ma_khach_hang = Session::get('Ma_khach_hang');
    $ten_dang_nhap = Session::get('Ten_dang_nhap');
    $xe = DB::table('xe')->where('Ma_xe', $ma_xe)->first();

    return view('dat_hang',[
        'xe' => $xe,
        'ma_khach_hang' => $ma_khach_hang,
        'ten_dang_nhap' => $ten_dang_nhap
    ]);
}
public function process_dat_hang()
{
    $dat_xe = new DatXe();
    $dat_xe->Ngay = Request::get('Ngay');
    $dat_xe->Ma_khach_hang = Request::get('Ma_khach_hang');
    $dat_xe->Ma_xe = Request::get('Ma_xe');
    $dat_xe->Ten_Nguoi_nhan = Request::get('Ten_Nguoi_nhan');
    $dat_xe->Sdt_Nguoi_nhan = Request::get('Sdt_Nguoi_nhan');
    $dat_xe->Dc_Nguoi_nhan = Request::get('Dc_Nguoi_nhan');
    $dat_xe->Tong_tien = Request::get('Tong_tien');
        // FIX: $dat_xe->Tong_tien = Gia x So_Ngay;
    $dat_xe->Ngay_lay = Request::get('Ngay_lay');
    $dat_xe->Ngay_tra = Request::get('Ngay_tra');
    $dat_xe->insert();

    return redirect()->route('ta_ca_xe');
}


public function hop_dong($ma_xe)
{
        // E muốn xem thằng này trả về dữ liệu gì ạ
        // Cho e xem database mySQL
        // Session lấy từ đâu ạ
    $ma_khach_hang = Session::get('Ma_khach_hang');
    $ten_dang_nhap = Session::get('Ten_dang_nhap');
    $sdt = Session::get('Sdt'); 
    $xe = DB::table('xe')->where('Ma_xe', $ma_xe)->first();
        // Hợp đồng dựa theo mã xe và mã khách hàng chị nhé!
        // https://github.com/mkloubert/phpLINQ
        // LinQ PHP

    return view('hop_dong',[
        'xe' => $xe,
        'ma_khach_hang' => $ma_khach_hang,
        'ten_dang_nhap' => $ten_dang_nhap,
        'Sdt' => $sdt
    ]);
}
public function process_hop_dong()
{
    $hop_dong            = new HopDong();
    $hop_dong->Ngay       = Request::get('Ngay');
    $hop_dong->Ma_khach_hang  = Request::get('Ma_khach_hang');
    $hop_dong->Ma_xe        = Request::get('Ma_xe');
    $hop_dong->Ngay_nhan       = Request::get('Ngay_nhan');
    $hop_dong->Ngay_tra       = Request::get('Ngay_tra');
    $hop_dong->Hinh_thuc_thanh_toan       = Request::get('Hinh_thuc_thanh_toan');
    $hop_dong->Tong_tien_thanh_toan       = Request::get('Tong_tien_thanh_toan');
    $hop_dong->Tien_coc  = Request::get('Tien_coc');
    $hop_dong->insert();

    return redirect()->route('ta_ca_xe');
}
}
