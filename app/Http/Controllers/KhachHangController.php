<?php

namespace App\Http\Controllers;

use Request;
use App\Model\KhachHang;

class KhachHangController extends Controller
{
    public function khach_hang_view_all()
    {
        $khach_hang       = new KhachHang();
        $array_khach_hang = $khach_hang->get_all();
        
        return view('KhachHang.khach_hang_view_all',[
            'array_khach_hang' => $array_khach_hang
        ]);
    }
    public function khach_hang_view_insert()
    {
        return view('KhachHang.khach_hang_view_insert');
    }
    public function khach_hang_process_insert()
    {
        $khach_hang = new KhachHang();
        $khach_hang->Ten_dang_nhap = Request::get('Ten_dang_nhap');
        $khach_hang->Mat_khau = Request::get('Mat_khau');
        $khach_hang->Ho_ten = Request::get('Ho_ten');
        $khach_hang->Gioi_tinh = Request::get('Gioi_tinh');
        $khach_hang->Nam_sinh = Request::get('Nam_sinh');
        $khach_hang->Sdt = Request::get('Sdt');
        $khach_hang->Dia_chi = Request::get('Dia_chi');
        $khach_hang->Email = Request::get('Email');
        $khach_hang->Ten_co_quan = Request::get('Ten_co_quan');
        $khach_hang->insert();

        return redirect()->route('khach_hang.khach_hang_view_all');
    }
     public function khach_hang_view_update($id)
    {
        $khach_hang     = new KhachHang();
        $khach_hang->Ma_khach_hang = $id;
        $khach_hang     = $khach_hang->get_one();

        return view('KhachHang.khach_hang_view_update',[
            'khach_hang' => $khach_hang
        ]);
    }
    public function khach_hang_process_update($id)
    {
        $khach_hang            = new KhachHang();
        $khach_hang->Ma_khach_hang        = $id;
        $khach_hang->Ten_dang_nhap        = Request::get('Ten_dang_nhap');
        $khach_hang->Mat_khau       = Request::get('Mat_khau');
        $khach_hang->Ho_ten = Request::get('Ho_ten');
        $khach_hang->Gioi_tinh  = Request::get('Gioi_tinh');
        $khach_hang->Nam_sinh = Request::get('Nam_sinh');
        $khach_hang->Sdt = Request::get('Sdt');
        $khach_hang->Dia_chi = Request::get('Dia_chi');
        $khach_hang->Email = Request::get('Email');
        $khach_hang->Ten_co_quan = Request::get('Ten_co_quan');
        $khach_hang->update();

        return redirect()->route('khach_hang.khach_hang_view_all');
    }
    public function khach_hang_delete($id)
    {
        $khach_hang = new KhachHang();
        $khach_hang->Ma_khach_hang = $id;
        $khach_hang->delete();

        return redirect()->route('khach_hang.khach_hang_view_all');
    }
}
