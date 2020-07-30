<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Xe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('xe', function (Blueprint $table) {
            $table->increments('Ma_xe');
            $table->string('Ten_xe',50);
            $table->string('Anh',200);
            $table->string('Bien_so',50);
            $table->string('Hang_xe',50);
            $table->longText('Mo_ta');
            $table->string ('Gia');
            $table->boolean ('Tinh_trang');
            $table->integer('Ma_loai_xe')->unsigned();
            $table->foreign('Ma_loai_xe')->references('Ma_loai_xe')->on('loai_xe');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xe');
    }
}
