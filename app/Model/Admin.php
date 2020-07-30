<?php 

namespace App\Model;

use DB;

class Admin
{
	private $table = 'admin';
	public $Ma_admin;
	public $Ten_dang_nhap;
	public $Mat_khau;
	public $Gioi_tinh;
	public $Nam_sinh;
	public $Sdt;
	public $Dia_chi;
	public $Email;
	
	public function get_all()
	{
		$array = DB::select("select * from $this->table");
		return $array;

		
	}
	public function insert()
	{
		DB::insert("insert into $this->table(Ten_dang_nhap,Mat_khau,Gioi_tinh,Nam_sinh,Sdt,Dia_chi,Email)
			values(?,?,?,?,?,?,?)",[
				$this->Ten_dang_nhap,
				$this->Mat_khau,
				$this->Gioi_tinh,
				$this->Nam_sinh,
				$this->Sdt,
				$this->Dia_chi,
				$this->Email,
				
			]);
	}
	public function get_one()
	{

		$array = DB::select("select * from $this->table where Email = ? and Mat_khau = ? limit 1",[
			$this->Email,
			$this->Mat_khau
		]);
		return $array;
	}
}