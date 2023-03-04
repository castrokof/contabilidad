<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngesosvspagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingesosvspagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fechadepago');
            $table->unsignedBigInteger('valordelpago');
            $table->string('tipodepago');
            $table->string('numerotransaccion');
            $table->longText('observacion');
            $table->unsignedBigInteger('totalingreso');
            $table->unsignedBigInteger('cuentasxpagas_id');
            $table->foreign('cuentasxpagas_id', 'fk_cuentasxpagas_ingresosvspagos')->references('id')->on('cuentasxpagar')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('ingresos_id');
            $table->foreign('ingresos_id', 'fk_ingresos_ingresosvspagos')->references('id')->on('cuentasxpagar')->onDelete('restrict')->onUpdate('restrict');

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
        Schema::dropIfExists('ingesosvspagos');
    }
}
