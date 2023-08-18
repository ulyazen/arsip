<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip_keluar', function (Blueprint $table) {
            $table->id();
            $table->text('jenis')->nullable();;
            $table->date('tanggal_keluar')->nullable();
            $table->date('tanggal_arsip')->nullable();
            $table->text('nomor')->nullable();;
            $table->text('perihal')->nullable();;
            $table->text('tujuan')->nullable();;
            $table->text('disposisi')->nullable();;
            $table->text('keterangan_disposisi')->nullable();;
            $table->string('file')->nullable();;
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
        Schema::dropIfExists('arsip_keluar');
    }
}
