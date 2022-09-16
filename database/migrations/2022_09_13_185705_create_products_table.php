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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('deskripsi_produk');
            $table->integer('stok');
            $table->string('harga');
            $table->string('foto');
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id_kategori')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_cluster');
            $table->foreign('id_cluster')->references('id_cluster')->on('clusters')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
