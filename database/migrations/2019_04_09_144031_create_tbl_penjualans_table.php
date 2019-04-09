<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_penjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('no_faktur')->unsigned();
            $table->foreign('no_faktur')->references('id')->on('tbl_penjualans');
            $table->string('tgl_penjualan');
            $table->bigInteger('id_petugas')->unsigned();
            $table->foreign('id_petugas')->references('id_petugas')->on('tbl_petugas');
            $table->string('bayar');
            $table->string('sisa');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_penjualans');
    }
}
