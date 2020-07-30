<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Admin;

class AdminController extends Controller
{
    public function Admin_view_all()
    {
        $Admin       = new Admin();
        $array_Admin = $Admin->get_all();
        
        return view('Admin/Admin_view_all',[
            'array_Admin' => $array_Admin
        ]);
    }
    public function Admin_view_insert()
    {
        return view('Admin/Admin_view_insert');
    }
    public function Admin_process_insert()
    {
        $Admin            = new Admin();
        $Admin->Ten_dang_nhap        = Request::get('Ten_dang_nhap');
        $Admin->Mat_khau       = Request::get('Mat_khau');
        $Admin->Gioi_tinh  = Request::get('Gioi_tinh');
        $Admin->Nam_sinh = Request::get('Nam_sinh');
        $Admin->Sdt = Request::get('Sdt');
        $Admin->Dia_chi = Request::get('Dia_chi');
        $Admin->Email = Request::get('Email');
        $Admin->insert();

        return redirect()->route('Admin.Admin_view_all');
    }

}
