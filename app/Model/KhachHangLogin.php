<?php 

namespace App\Model;

use DB;

class KhachHangLogin
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
	public function get_one()
	{
		$array = DB::select("select * from $this->table
			where Email = ? and Mat_khau = ?
			limit 1",[
				$this->Email,
				$this->Mat_khau
			]);
		return $array;
	}
}
