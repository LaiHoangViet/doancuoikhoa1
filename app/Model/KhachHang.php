<?php 

namespace App\Model;

use DB;

class KhachHang
{
	private $table = 'khach_hang';
	public $Ma_khach_hang;
	public $Ten_dang_nhap;
	public $Mat_khau;
	public $Ho_ten;
	public $Gioi_tinh;
	public $Nam_sinh;
	public $Sdt;
	public $Dia_chi;
	public $Email;
	public $Ten_co_quan;
	
	public function get_all()
	{
		$array = DB::select("select * from $this->table");
		return $array;
	}
	public function insert()
	{
		DB::insert("insert into $this->table(Ten_dang_nhap,Mat_khau,Ho_ten,Gioi_tinh,Nam_sinh,Sdt,Dia_chi,Email,Ten_co_quan)
			values(?,?,?,?,?,?,?,?,?)",[
				$this->Ten_dang_nhap,
				$this->Mat_khau,
				$this->Ho_ten,
				$this->Gioi_tinh,
				$this->Nam_sinh,
				$this->Sdt,
				$this->Dia_chi,
				$this->Email,
				$this->Ten_co_quan,
				
			]);
	}
	public function get_one()
	{
		$array = DB::select("select * from $this->table
			where Ma_khach_hang = ?
			limit 1",[
				$this->Ma_khach_hang
			]);
		
		return $array[0];
	}
	public function update()
	{
		DB::update("update $this->table
			set
			Ten_dang_nhap = ?,
			Mat_khau = ?,
			Ho_ten = ?,
			Gioi_tinh = ?,
			Nam_sinh = ?,
			Sdt = ?,
			Dia_chi = ?,
			Email = ?,
			Ten_co_quan = ?
			where Ma_khach_hang = ?
			",[
				$this->Ten_dang_nhap,
				$this->Mat_khau,
				$this->Ho_ten,
				$this->Gioi_tinh,
				$this->Nam_sinh,
				$this->Sdt,
				$this->Dia_chi,
				$this->Email,
				$this->Ten_co_quan,
				$this->Ma_khach_hang
			]);
	}
	public function delete()
	{
		DB::delete("delete from $this->table
			where Ma_khach_hang = ?",[
				$this->Ma_khach_hang
			]);
	}
}