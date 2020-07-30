<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HopDong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hop_dong', function (Blueprint $table) {
            $table->increments('Ma_hop_dong');
            $table->date('Ngay');
            $table->integer('Ma_khach_hang')->unsigned();
            $table->foreign('Ma_khach_hang')->references('Ma_khach_hang')->on('khach_hang');

            $table->integer('Ma_xe')->unsigned();
            $table->foreign('Ma_xe')->references('Ma_xe')->on('xe');
            
            $table->date('Ngay_nhan');
            $table->date('Ngay_tra');
            $table->string('Hinh_thuc_thanh_toan',50);
            $table->string('Tong_tien_thanh_toan',50);
            $table->string('Tien_coc',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hop_dong');
    }
}
