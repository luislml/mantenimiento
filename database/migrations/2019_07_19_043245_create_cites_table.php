<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gestion_id')->unsigned();
            $table->integer('mantenimiento_id')->unsigned()->nullable();
            $table->integer('cite')->unsigned()->nullable();
            $table->foreign('gestion_id')->references('id')->on('gestions');
            $table->foreign('mantenimiento_id')->references('id')->on('mantenimientos');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cites');
    }
}
