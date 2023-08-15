<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('categoria')->unsigned();
            $table->string('construccion')->nullable();
            $table->bigInteger('estado')->unsigned()->nullable();
            $table->string('direccion')->nullable();
            $table->string('estrato')->nullable();
            $table->string('barrio')->nullable();
            $table->string('ciudad');
            $table->string('valor')->nullable();
            $table->string('contactos');
            $table->string('propietario')->nullable();
            $table->bigInteger('tipo_documento')->unsigned()->nullable();
            $table->string('documento')->nullable();
            $table->string('contactos_propietario')->nullable();
            $table->string('direccion_propietario')->nullable();
            $table->string('correo')->nullable();
            $table->string('nota')->nullable();
            $table->string('observacion')->nullable();
            $table->timestamps();

            // $table->foreign('categoria')->references('id')->on('inmuebles');
            // $table->foreign('estado')->references('id')->on('estados');
            // $table->foreign('tipo_documento')->references('id')->on('documentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propiedads');
    }
}
