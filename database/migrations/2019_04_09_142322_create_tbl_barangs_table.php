<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kode_barang')->unsigned();
            $table->string('nama_barang');
            $table->bigInteger('kode_jenis')->unsigned();
            $table->foreign('kode_jenis')->references('id')->on('tbl_jenis');
            $table->string('harga_net');
            $table->string('harga_jual');
            $table->string('stok');
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
        Schema::dropIfExists('tbl_barangs');
    }
}
