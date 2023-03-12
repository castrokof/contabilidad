<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasxpagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentasxpagas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fechadepago');
            $table->unsignedBigInteger('valordelpago');
            $table->string('tipodepago');
            $table->string('numerotransaccion');
            $table->longText('observacion');
            $table->unsignedBigInteger('porcentaje_gasto_fidem_1')->nullable();
            $table->unsignedBigInteger('porcentaje_gasto_fidem_2')->nullable();
            $table->unsignedBigInteger('sede_fidem_1')->nullable();
            $table->unsignedBigInteger('sede_fidem_2')->nullable();
            $table->unsignedBigInteger('sede_id');
            $table->unsignedBigInteger('cuentasxpagar_id');
            $table->foreign('cuentasxpagar_id', 'fk_cuentasxpagar_cuentasxpagas')->references('id')->on('cuentasxpagar')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('cuentasxpagas');
    }
}
