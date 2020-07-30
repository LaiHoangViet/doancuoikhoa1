<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SuaChua extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('sua_chua', function (Blueprint $table) {
            $table->increments('Ma_sua_chua');
            $table->date('Ngay_sua');
            $table->integer('Ma_xe')->unsigned();
            $table->foreign('Ma_xe')->references('Ma_xe')->on('xe');
            $table->string('Tinh_trang');
            $table->date('Ngay_sua_xong');
            $table->string('Chi_phi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sua_chua');
    }
}
