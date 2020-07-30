<?php 

namespace App\Model;

use DB;

class SuaChua
{
	private $table = 'sua_chua';
	public $Ngay_sua;
	public $Ma_xe;
	public $Tinh_trang;
	public $Ngay_sua_xong;
	public $Chi_phi;
	public function get_all()
	{
		$array = DB::select("select * from $this->table
			join xe on $this->table.Ma_xe = xe.Ma_xe ");
		return $array;
	}
	public function insert()
	{
		DB::insert("insert into $this->table(Ngay_sua,Ma_xe,Tinh_trang,Ngay_sua_xong,Chi_phi)
			values(?,?,?,?,?)",[
				$this->Ngay_sua,
				$this->Ma_xe,
				$this->Tinh_trang,
				$this->Ngay_sua_xong,
				$this->Chi_phi,
				
			]);
	}

}