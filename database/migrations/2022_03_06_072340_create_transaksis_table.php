<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_outlet');
            $table->unsignedBigInteger('id_member');
            $table->date('tgl');
            $table->date('batas_waktu');
            $table->date('tgl_bayar');
            $table->unsignedBigInteger('id_paket');
            $table->integer('qty');
            $table->enum('status', ['baru','proses','selesai','diambil']);
            $table->enum('bayar', ['sudah','belum']);
            $table->unsignedBigInteger('id_user');

            $table->foreign('id_outlet')->references('id')->on('outlet');
            $table->foreign('id_member')->references('id')->on('member');
            $table->foreign('id_paket')->references('id')->on('paket');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
