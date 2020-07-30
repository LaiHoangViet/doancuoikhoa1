<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Xe;
use App\Model\LoaiXe;

class XeController extends Controller
{
    public function xe_view_all()
    {
        $xe       = new Xe();
        $array_xe = $xe->get_all();

        return view('xe.xe_view_all',[
            'array_xe' => $array_xe
        ]);
    }
    public function xe_view_insert()
    {
        $loai_xe       = new LoaiXe();
        $array_loai_xe = $loai_xe->get_all();
        
        return view('xe.xe_view_insert',[
            'array_loai_xe' => $array_loai_xe
        ]);
    }
    public function xe_process_insert(Request $Request)
    {
        $xe            = new Xe();
        $xe->Ten_xe        = Request::get('Ten_xe');
        $xe->Bien_so       = Request::get('Bien_so');
        $xe->Hang_xe       = Request::get('Hang_xe');
        $xe->Mo_ta  = Request::get('Mo_ta');
        $xe->Gia = Request::get('Gia');
        $xe->Tinh_trang = Request::get('Tinh_trang');
        $xe->Ma_loai_xe = Request::get('Ma_loai_xe');
        

        if ($Request::hasFile('Anh')) {
            $file = Request::file('Anh');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpge') {
                return redirect()->route('xe.xe_view_insert');
            }
            $name = $file->getClientOriginalName();
            $Anh= str_random(4)."_".$name;
            while(file_exists('storage'.$Anh))
            {
                $Anh= str_random(4)."_".$name;
            }
            $file->move("storage",$Anh);
            $xe->Anh = $Anh;
        }
        else{
            $xe->Anh = "";
        }
        $xe->insert();

        return redirect()->route('xe.xe_view_all');
    }
    public function xe_view_update($id)
    {
        $xe     = new Xe();
        $xe->Ma_xe = $id;
        $xe     = $xe->get_one();

        $loai_xe       = new LoaiXe();
        $array_loai_xe = $loai_xe->get_all();

        return view('Xe/xe_view_update',[
            'xe' => $xe,
            'array_loai_xe' => $array_loai_xe
        ]);
    }
    public function xe_process_update($id, Request $Request)
    {
        $xe            = new Xe();
        $xe->Ma_xe        = $id;
        $xe->Ten_xe        = Request::get('Ten_xe');
        $xe->Anh       = Request::get('Anh');
        $xe->Bien_so       = Request::get('Bien_so');
        $xe->Hang_xe       = Request::get('Hang_xe');
        $xe->Mo_ta  = Request::get('Mo_ta');
        $xe->Gia = Request::get('Gia');
        $xe->Tinh_trang = Request::get('Tinh_trang');
        $xe->Ma_loai_xe = Request::get('Ma_loai_xe');
        
        if ($Request::hasFile('Anh')) {
            $file = Request::file('Anh');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpge') {
                return redirect()->route('xe.xe_view_update');
            }
            $name = $file->getClientOriginalName();
            $Anh= str_random(4)."_".$name;
            while(file_exists('storage'.$Anh))
            {
                $Anh= str_random(4)."_".$name;
            }
            $file->move("storage",$Anh);
            $xe->Anh = $Anh;
        }
        else{
            $xe->Anh = "";
        }
        $xe->update();

        return redirect()->route('xe.xe_view_all');
    }
    public function xe_delete($id)
    {
        $xe     = new Xe();
        $xe->Ma_xe = $id;
        $xe->delete();

        return redirect()->route('xe.xe_view_all');
    }
}
