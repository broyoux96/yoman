<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangolahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangolahan', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_brgolahan',10);
            $table->string('id_barang',10);
            $table->string('barangolahanqty',50);
            $table->string('barangolahanjumlahbox',50);
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
        Schema::dropIfExists('barangolahan');
    }
}
