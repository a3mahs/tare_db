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
            $table->id();
            $table->string('categoria');
            $table->string('construccion');
            $table->string('estado');
            $table->string('direccion');
            $table->string('estrato');
            $table->string('barrio');
            $table->string('ciudad');
            $table->string('valor');
            $table->string('contactos');
            $table->string('propietario');
            $table->string('tipo_documento');
            $table->string('documento');
            $table->string('contactos_propietario');
            $table->string('direccion_propietario');
            $table->string('correo');
            $table->string('nota');
            $table->string('observacion');
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
        Schema::dropIfExists('propiedads');
    }
}
