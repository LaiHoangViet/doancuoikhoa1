<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_xe', function (Blueprint $table) {
            $table->increments('Ma_dat_xe');
            $table->date ('Ngay');

            $table->integer('Ma_khach_hang')->unsigned();
            $table->foreign('Ma_khach_hang')->references('Ma_khach_hang')->on('khach_hang');
            $table->integer('Ma_xe')->unsigned();
            $table->foreign('Ma_xe')->references('Ma_xe')->on('xe');

            
            $table->string('Ten_Nguoi_nhan');
            $table->string('Sdt_Nguoi_nhan');
            $table->string('Dc_Nguoi_nhan');
            $table->string('Tong_tien');
            $table->date('Ngay_lay');
            $table->date('Ngay_tra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dat_xe');
    }
}
