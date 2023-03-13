<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombrecuenta');
            $table->string('tipodecuenta')->nullable();
            $table->longText('observacion');
            $table->string('future4')->nullable();
            $table->string('future5')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'fk_usuario_cuentas')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('sede_id');
            $table->foreign('sede_id', 'fk_sede_id_cuentas')->references('id')->on('listasdetalle')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('cuentas');
    }
}
