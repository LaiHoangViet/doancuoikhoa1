<?php

namespace App\Http\Controllers;

use Request;
use App\Model\SuaChua;
use App\Model\Xe;

class SuaChuaController extends Controller
{
    public function sua_chua_view_all()
    {
        $sua_chua       = new SuaChua();
        $array_sua_chua = $sua_chua->get_all();

        return view('SuaChua/sua_chua_view_all',[
            'array_sua_chua' => $array_sua_chua
        ]);
    }
    public function sua_chua_view_insert()
    {
        $xe       = new Xe();
        $array_xe = $xe->get_all();
        
        return view('SuaChua/sua_chua_view_insert',[
            'array_xe' => $array_xe
        ]);
    }
    public function sua_chua_process_insert()
    {
        $sua_chua            = new SuaChua();
        $sua_chua->Ngay_sua        = Request::get('Ngay_sua');
        $sua_chua->Ma_xe       = Request::get('Ma_xe');
        $sua_chua->Tinh_trang       = Request::get('Tinh_trang');
        $sua_chua->Ngay_sua_xong       = Request::get('Ngay_sua_xong');
        $sua_chua->Chi_phi  = Request::get('Chi_phi');
        $sua_chua->insert();

        return redirect()->route('sua_chua.sua_chua_view_all');
    }

}
