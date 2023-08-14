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
            $table->bigInteger('categoria')->unsigned();;
            $table->string('construccion');
            $table->bigInteger('estado')->unsigned();;
            $table->string('direccion');
            $table->string('estrato');
            $table->string('barrio');
            $table->string('ciudad');
            $table->string('valor');
            $table->string('contactos');
            $table->string('propietario');
            $table->bigInteger('tipo_documento')->unsigned();;
            $table->string('documento');
            $table->string('contactos_propietario');
            $table->string('direccion_propietario');
            $table->string('correo');
            $table->string('nota');
            $table->string('observacion');
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
