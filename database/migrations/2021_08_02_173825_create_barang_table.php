<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_barang');
            $table->string('barangnama',50);
            $table->string('barangqty',50);
            $table->string('barangsatuan',50);
            $table->string('id_supplier',10);
            $table->string('barangstatus',50);
            $table->string('barangtglbeli',50);
            $table->string('id_gudang',10);
            $table->string('barangjumlahbox',50);
            $table->string('barangcategory',50);
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
        Schema::dropIfExists('barang');
    }
}
