<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopembeliandtlTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popembeliandtl_tabel', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_popembeliandtl',10);
            $table->string('id_popembelianmst',10);
            $table->string('id_barang',10);
            $table->string('hargapopembeliandtl',50);
            $table->string('totalhargapopembeliandtl',50);
            $table->string('jumlahboxpopembeliandtl',50);
            $table->string('qtybarangpopembeliandtl',50);
            $table->string('pembeliandtlcreateby',50);
            $table->string('pembeliandtlcreatedate',50);
            $table->string('pembeliandtlupdateby',50);
            $table->string('pembeliandtlupdatedate',50);
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
        Schema::dropIfExists('popembeliandtl_tabel');
    }
}
