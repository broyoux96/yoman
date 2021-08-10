<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_pegawai',10);
            $table->string('pegawainama',50);
            $table->string('pegawaiusername',50);
            $table->string('pegawaipassword',50);
            $table->string('pegawaialamat',50);
            $table->string('pegawaimail',50);
            $table->string('pegawaihp',50);
            $table->string('id_roles',10);
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
        Schema::dropIfExists('pegawai');
    }
}
