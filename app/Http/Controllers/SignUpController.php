<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Model\KhachHang;
use App\Model\Admin;

use Request;


class SignUpController extends BaseController
{

   
    public function sign_up()
    {
    	$khach_hang       = new KhachHang();
        $array_khach_hang = $khach_hang->get_all();
        return view('sign_up',[
            'array_khach_hang' => $array_khach_hang]);
    }
    public function process_sign_up()
    {
        $khach_hang = new KhachHang();
        $khach_hang->Ten_dang_nhap = Request::get('Ten_dang_nhap');
        $khach_hang->Email = Request::get('Email');
        $khach_hang->Mat_khau = Request::get('Mat_khau');
        $khach_hang->Ho_ten = Request::get('Ho_ten');
        $khach_hang->Dia_chi = Request::get('Dia_chi');
        $khach_hang->Sdt = Request::get('Sdt');
        $khach_hang->Gioi_tinh = Request::get('Gioi_tinh');
        $khach_hang->Nam_sinh = Request::get('Nam_sinh');
        $khach_hang->Ten_co_quan = Request::get('Ten_co_quan');
        $khach_hang->insert();

        return redirect()->route('thong-bao-dang-ky');
    }

    public function Admin_sign_up()
    {
        $Admin       = new Admin();
        $array_Admin = $Admin->get_all();
        return view('Admin_sign_up',[
            'array_Admin' => $array_Admin]);
    }
    public function Admin_process_sign_up()
    {
        $Admin = new Admin();
        $Admin->Ten_dang_nhap = Request::get('Ten_dang_nhap');
        $Admin->Email = Request::get('Email');
        $Admin->Mat_khau = Request::get('Mat_khau');
        $Admin->Dia_chi = Request::get('Dia_chi');
        $Admin->Sdt = Request::get('Sdt');
        $Admin->Gioi_tinh = Request::get('Gioi_tinh');
        $Admin->Nam_sinh = Request::get('Nam_sinh');
        $Admin->insert();

        return redirect()->route('layerAdmin');
    }

    public function thong_bao_dang_ky()
    {
        return view('ThongBao.thong-bao-dang-ky');
    }

}