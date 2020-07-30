<?php 

namespace App\Model;

use DB;

class HopDong
{
	private $table = 'hop_dong';
	public $Ma_hop_dong;
	public $Ngay;
	public $Ma_khach_hang;
	public $Ma_xe;
	public $Ngay_nhan;
	public $Ngay_tra;
	public $Hinh_thuc_thanh_toan;
	public $Tong_tien_thanh_toan;
	public $Tien_coc;
	
	public function get_all()
	{
		$array=DB::select("select * from $this->table
			join khach_hang on $this->table.Ma_khach_hang = khach_hang.Ma_khach_hang
			join xe on $this->table.Ma_xe = xe.Ma_xe
			");
		return $array;
	}
	public function insert()
	{
		DB::insert("insert into $this->table(Ngay,Ma_khach_hang,Ma_xe,Ngay_nhan,Ngay_tra,Hinh_thuc_thanh_toan,Tong_tien_thanh_toan,Tien_coc)
			values(?,?,?,?,?,?,?,?)",[
				$this->Ngay,
				$this->Ma_khach_hang,
				$this->Ma_xe,
				$this->Ngay_nhan,
				$this->Ngay_tra,
				$this->Hinh_thuc_thanh_toan,
				$this->Tong_tien_thanh_toan,
				$this->Tien_coc,
				
			]);
	}
	public function get_one()
	{
		$array = DB::select("select * from $this->table
			where Ma_hop_dong = ?
			limit 1",[
				$this->Ma_hop_dong
			]);
		return $array[0];
	}
	public function update()
	{
		DB::update("update $this->table
			set
			Ngay = ?,
			Ma_khach_hang = ?,
			Ma_xe = ?,
			Ngay_nhan = ?,
			Ngay_tra = ?,
			Hinh_thuc_thanh_toan = ?,
			Tong_tien_thanh_toan = ?,
			Tien_coc = ?
			where Ma_hop_dong = ?
			",[
				$this->Ngay,
				$this->Ma_khach_hang,
				$this->Ma_xe,
				$this->Ngay_nhan,
				$this->Ngay_tra,
				$this->Hinh_thuc_thanh_toan,
				$this->Tong_tien_thanh_toan,
				$this->Tien_coc,
				$this->Ma_hop_dong
			]);
	}
	public function delete()
	{
		DB::delete("delete from $this->table
			where Ma_hop_dong = ?",[
				$this->Ma_hop_dong
			]);
	}
}