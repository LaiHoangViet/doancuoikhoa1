<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Admin', function (Blueprint $table) {
            $table->increments('Ma_admin');
            $table->string('Ten_dang_nhap',50);
            $table->string('Mat_khau',50);
            $table->boolean('Gioi_tinh');
            $table->date ('Nam_sinh');
            $table->string('Sdt',11);
            $table->string('Dia_chi',50);
            $table->string('Email',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('Admin');
    }
}
