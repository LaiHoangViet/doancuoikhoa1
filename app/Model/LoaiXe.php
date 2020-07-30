<?php 

namespace App\Model;

use DB;

class LoaiXe
{
	private $table = 'loai_xe';
	public $Ma_loai_xe;
	public $Ten_loai_xe;
	
	public function get_all()
	{
		$array = DB::select("select * from $this->table");
		return $array;
	}
	public function insert()
	{
		DB::insert("insert into $this->table(Ten_loai_xe)
			values(?)",[
				$this->Ten_loai_xe
				
			]);
	}
	public function get_one()
	{
		$array = DB::select("select * from $this->table
			where Ma_loai_xe = ?
			limit 1",[
				$this->Ma_loai_xe
			]);
		return $array[0];
	}
	public function update()
	{
		DB::update("update $this->table
			set
			Ten_loai_xe = ?
			where Ma_loai_xe = ?
			",[
				$this->Ten_loai_xe,
				$this->Ma_loai_xe
			]);
	}
	public function delete()
	{
		DB::delete("delete from $this->table
			where Ma_loai_xe = ?",[
				$this->Ma_loai_xe
			]);
	}
}