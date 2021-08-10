<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopembelianreturdtlTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popembelianreturdtl_tabel', function (Blueprint $table) {
            $table->id('id',10)->unique();
            $table->string('id_popembelianreturedtl',10);
            $table->string('id_popembelianmst',10);
            $table->string('id_barang',10);
            $table->string('hargapopembelianreturdtl',50);
            $table->string('totalhargapopembelianreturdtl',50);
            $table->string('jumlahboxpopembelianreturdtl',50);
            $table->string('createdby',50);
            $table->string('createddate',50);
            $table->string('updatedby',50);
            $table->string('updateddate',50);
            $table->string('qtybarangpopembelianreturdtl',50);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('popembelianreturdtl_tabel');
    }
}
