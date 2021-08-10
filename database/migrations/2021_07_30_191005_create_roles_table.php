<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('id',10)->unique();
            $table->string('id_roles',10);
            $table->string('NameRole',50);
            $table->string('StatusRole',50)	;
            $table->string('RoleCreatedBy',50);
            $table->date('RoleCreatedDate',50);
            $table->date('RoleUpdatedBy',50);
            $table->date('RoleUpdatedDate',50);
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
        Schema::dropIfExists('roles');
    }
}
