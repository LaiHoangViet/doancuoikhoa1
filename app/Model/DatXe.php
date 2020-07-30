<?php 

namespace App\Model;

use DB;

class DatXe
{
    private $table = 'dat_xe';
    public $Ngay;
    public $Ma_khach_hang;
    public $Ma_xe;
    public $Ten_Nguoi_nhan;
    public $Sdt_Nguoi_nhan;
    public $Dc_Nguoi_nhan;
    public $Tong_tien;
    public $Ngay_lay;
    public $Ngay_tra;
    
    public function get_all()
    {
        $array = DB::select("select * from $this->table
            join khach_hang on $this->table.Ma_khach_hang = khach_hang.Ma_khach_hang 
            join xe on $this->table.Ma_xe = xe.Ma_xe");
        return $array;
    }
    public function insert()
    {
        DB::insert("insert into $this->table(Ngay,Ma_khach_hang,Ma_xe,Ten_Nguoi_nhan,Sdt_Nguoi_nhan,Dc_Nguoi_nhan,Tong_tien,Ngay_lay,Ngay_tra)
            values(?,?,?,?,?,?,?,?,?)",[
                $this->Ngay,
                $this->Ma_khach_hang,
                $this->Ma_xe,
                $this->Ten_Nguoi_nhan,
                $this->Sdt_Nguoi_nhan,
                $this->Dc_Nguoi_nhan,
                $this->Tong_tien,
                $this->Ngay_lay,
                $this->Ngay_tra,
                
            ]);
    }

}