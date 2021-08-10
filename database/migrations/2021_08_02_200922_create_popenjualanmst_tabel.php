<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopenjualanmstTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popenjualanmst_tabel', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_popenjualanmst',10);
            $table->string('tanggalpopenjualan',50);
            $table->string('jenistagihan',50);
            $table->string('createdby',50);
            $table->string('createddate',50);
            $table->string('updatedby',50);
            $table->string('updateddate',50);
            $table->string('id_customer',10);
            $table->string('noinvoicepenjualan',50);
            $table->string('tanggalpojatuhtmppenjualan',50);
            $table->string('totaltagihanpenjualan',50);
            $table->string('norekeningpembayaran',50);
            $table->string('id_gudang',10);
            $table->string('statusinvoicepenjualanmst',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('popenjualanmst_tabel');
    }
}
