<?php

namespace App\Http\Controllers;

use Request;
use App\Model\LoaiXe;

class LoaiXeController extends Controller
{
    public function loai_xe_view_all()
    {
        $loai_xe       = new LoaiXe();
        $array_loai_xe = $loai_xe->get_all();
        
        return view('LoaiXe/loai_xe_view_all',[
            'array_loai_xe' => $array_loai_xe
        ]);
    }
    public function loai_xe_view_insert()
    {
        return view('LoaiXe/loai_xe_view_insert');
    }
    public function loai_xe_process_insert()
    {
        $loai_xe            = new LoaiXe();
        $loai_xe->Ten_loai_xe        = Request::get('Ten_loai_xe');
        $loai_xe->insert();

        return redirect()->route('loai_xe.loai_xe_view_all');
    }
    public function loai_xe_view_update($id)
    {
        $loai_xe     = new LoaiXe();
        $loai_xe->Ma_loai_xe = $id;
        $loai_xe     = $loai_xe->get_one();

        return view('LoaiXe/loai_xe_view_update',[
            'loai_xe' => $loai_xe
        ]);
    }
    public function loai_xe_process_update($id)
    {
        $loai_xe            = new LoaiXe();
        $loai_xe->Ma_loai_xe        = $id;
        $loai_xe->Ten_loai_xe        = Request::get('Ten_loai_xe');
        $loai_xe->update();

        return redirect()->route('loai_xe.loai_xe_view_all');
    }
    public function loai_xe_delete($id)
    {
        $loai_xe     = new LoaiXe();
        $loai_xe->Ma_loai_xe = $id;
        $loai_xe->delete();

        return redirect()->route('loai_xe.loai_xe_view_all');
    }
}
