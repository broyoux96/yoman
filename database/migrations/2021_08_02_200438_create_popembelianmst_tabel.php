<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopembelianmstTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popembelianmst_tabel', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_popembelianmst',10);
            $table->string('tanggalpopembelian',50);
            $table->string('jenistagihan',50);
            $table->string('createdby',50);
            $table->string('createddate',50);
            $table->string('updatedby',50);
            $table->string('updateddate',50);
            $table->string('id_supplier',10);
            $table->string('noinvoicepembelian',50);
            $table->string('tanggalpojatuhtmppembelian',50);
            $table->string('totaltagihanpembelian',50);
            $table->string('norekeningpembayaran',50);
            $table->string('id_gudang',10);
            $table->string('statusinvoicepembelianmst',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('popembelianmst_tabel');
    }
}
