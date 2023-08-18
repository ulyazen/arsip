<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip_masuk', function (Blueprint $table) {
            $table->id();
            $table->text('jenis')->nullable();;
            $table->date('tanggal_masuk')->nullable();
            $table->date('tanggal_arsip')->nullable();
            $table->text('nomor')->nullable();;
            $table->text('perihal')->nullable();;
            $table->text('asal')->nullable();;
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
        Schema::dropIfExists('arsip_masuk');
    }
}
