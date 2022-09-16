<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_pesan');
            $table->string('kd_pesan');
            $table->date('tgl_pesan');
            $table->string('alamat_kirim');
            $table->string('total');
            $table->integer('status_pesan');
            $table->unsignedBigInteger('id_konsumen');
            $table->foreign('id_konsumen')->references('id_konsumen')->on('consumers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
};
