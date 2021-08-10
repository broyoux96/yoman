<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayatambahanmstTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biayatambahanmst_tabel', function (Blueprint $table) {
            $table->id('id',10)->unique();
            $table->string('id_biayamst',10);
            $table->string('jenisbiayamst',50);
            $table->string('akunbiayamst',50);
            $table->string('totalbiayamst',50);
            $table->string('createdby',50);
            $table->string('createddate',50);
            $table->string('updateby',50);
            $table->string('updatedate',60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biayatambahanmst_tabel');
    }
}
