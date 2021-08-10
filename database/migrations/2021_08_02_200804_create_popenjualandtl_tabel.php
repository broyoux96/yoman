<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopenjualandtlTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popenjualandtl_tabel', function (Blueprint $table) {
            $table->id('id',10)->unique();
            $table->string('id_popenjualandtl',10);
            $table->string('id_popenjualanmst',10);
            $table->string('id_barang',10);
            $table->string('hargapopenjualanreturdtl',50);
            $table->string('totalhargapopenjualanreturdtl',50);
            $table->string('jumlahboxpopenjualanreturdtl',50);
            $table->string('createdby',50);
            $table->string('createddate',50);
            $table->string('updatedby',50);
            $table->string('updateddate',50);
            $table->string('qtybarangpopenjualanreturdtl',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('popenjualandtl_tabel');
    }
}
