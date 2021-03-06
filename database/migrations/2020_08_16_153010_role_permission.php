<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RolePermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permission', function (Blueprint $table) {
           $table->id();
           $table->integer('role_id')->unsigned();
           $table->bigInteger('permissions_id')->unsigned();
           $table->foreign('role_id')-> references('id')-> on ('role');
           $table->foreign('permissions_id')-> references('id')-> on ('permissions');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permission');
    }
}
