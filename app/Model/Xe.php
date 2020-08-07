<?php 

namespace App\Model;

use DB;

class Xe
{
	private $table = 'xe';
	public $Ma_xe;
	public $Ten_xe;
	public $Anh;
	public $Bien_so;
	public $Hang_xe;
	public $Mo_ta;
	public $Gia;
	public $Tinh_trang;
	public $Ma_loai_xe;
	
	public function get_all()
	{
		$array = DB::select("select * from $this->table
			join loai_xe on $this->table.Ma_loai_xe = loai_xe.Ma_loai_xe ");
		return $array;
	}
	public function get_xe($Ma_loai_xe)
	{
		$array = DB::select("select * from $this->table where Ma_loai_xe=?,[
			$this->Ma_loai_xe
		]");
		return $array;
	}
	public function insert()
	{
		DB::insert("insert into $this->table(Ten_xe,Anh,Bien_so,Hang_xe,Mo_ta,Gia,Tinh_trang,Ma_loai_xe)
			values(?,?,?,?,?,?,?,?)",[
				$this->Ten_xe,
				$this->Anh,
				$this->Bien_so,
				$this->Hang_xe,
				$this->Mo_ta,
				$this->Gia,
				$this->Tinh_trang,
				$this->Ma_loai_xe,
				
			]);
	}
	public function get_one()
	{
		$array = DB::select("select * from $this->table
			where Ma_xe = ?
			limit 1",[
				$this->Ma_xe
			]);
		return $array[0];
	}

	public function get_six() {
		$array = DB::select("select * from $this->table limit 6");
		return $array;
	}

	public function list_xe($limit, $offset) {
		$array = DB::select("select * from $this->table limit " . $limit . " offset " . $offset);
		return $array;
	}

	public function count_all_xe() {
		return DB::table("$this->table")->get()->count();
	}
	
	public function update()
	{
		DB::update("update $this->table
			set
			Ten_xe = ?,
			Anh = ?,
			Bien_so = ?,
			Hang_xe = ?,
			Mo_ta = ?,
			Gia = ?,
			Tinh_trang = ?,
			Ma_loai_xe = ?
			where Ma_xe = ?
			",[
				$this->Ten_xe,
				$this->Anh,
				$this->Bien_so,
				$this->Hang_xe,
				$this->Mo_ta,
				$this->Gia,
				$this->Tinh_trang,
				$this->Ma_loai_xe,
				$this->Ma_xe
			]);
	}
	public function delete()
	{
		DB::delete("delete from $this->table
			where Ma_xe = ?",[
				$this->Ma_xe
			]);
	}

	public function update_anh()
	{
		DB::update("update $this->table
			set
			Anh = ?
			where Ma_xe = ?
			",[
				$this->Anh,
				$this->Ma_xe
			]);
	}
}