<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEInformaticosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_informaticos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('mac')->nullable();
            $table->integer('numero_activo')->nullable();
            $table->string('modelo')->nullable();
            $table->string('marca')->nullable();
            $table->string('numero_serie')->nullable();
            $table->string('estado')->nullable();

            $table->integer('usuario_id')->unsigned()->nullable();
                        $table->foreign('usuario_id')->references('id')->on('users');

            $table->integer('unidad_id')->unsigned()->nullable();
                        $table->foreign('unidad_id')->references('id')->on('unidads');

            $table->integer('area_id')->unsigned()->nullable();
                        $table->foreign('area_id')->references('id')->on('areas');

            $table->integer('sub_area_id')->unsigned()->nullable();
                        $table->foreign('sub_area_id')->references('id')->on('sub__areas');
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
        Schema::drop('e_informaticos');
    }
}
