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
            $table->string('gestion_id');
            $table->integer('mantenimiento_id')->unsigned()->nullable();
            $table->integer('cite')->unsigned()->nullable();
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
