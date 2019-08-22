<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistorialesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->integer('e_informatico_id')->unsigned();
            $table->foreign('e_informatico_id')->references('id')->on('e_informaticos');
            $table->integer('unidad_id');
            $table->integer('area_id');
            $table->integer('sub_area_id');
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
        Schema::drop('historiales');
    }
}
