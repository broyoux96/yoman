<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayatambahandtlTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biayatambahandtl_tabel', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_biayadtl');
            $table->string('namabiayadtl',50);
            $table->string('hargabiayadtl',50);
            $table->string('id_biayamst',10);
            $table->string('createdby',50);
            $table->string('createddate',50);
            $table->string('updateby',50);
            $table->string('updatedate',50);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biayatambahandtl_tabel');
    }
}
