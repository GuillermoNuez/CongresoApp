<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserponenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userponencias', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->bigInteger('iduser')->unsigned()->index();
            $table->bigInteger('idponencia')->unsigned()->index();
            
            $table->foreign('iduser')->references('id')->on('users');
            $table->foreign('idponencia')->references('id')->on('ponencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userponencias');
    }
}
