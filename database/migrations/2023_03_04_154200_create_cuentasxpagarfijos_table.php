<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasxpagarfijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentasxpagarfijos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numerofactura');
            $table->string('tipofactura');
            $table->string('formadepago');
            $table->dateTime('fechafactura');
            $table->dateTime('fechavencimiento');
            $table->unsignedBigInteger('ica')->nullable();
            $table->unsignedBigInteger('valorica')->nullable();
            $table->unsignedBigInteger('retefuente')->nullable();
            $table->unsignedBigInteger('valorretefuente')->nullable();
            $table->unsignedBigInteger('iva')->nullable();
            $table->unsignedBigInteger('valoriva')->nullable();
            $table->unsignedBigInteger('descuento')->nullable();
            $table->unsignedBigInteger('valordescuento')->nullable();
            $table->unsignedBigInteger('total');
            $table->longText('observacion');
            $table->unsignedBigInteger('porcentaje_gasto_fidem_1')->nullable();
            $table->unsignedBigInteger('porcentaje_gasto_fidem_2')->nullable();
            $table->unsignedBigInteger('sede_fidem_1')->nullable();
            $table->unsignedBigInteger('sede_fidem_2')->nullable();
            $table->string('future5')->nullable();
            $table->unsignedBigInteger('sede_id');
            $table->foreign('sede_id', 'fk_sede_id_cuentasxpagarfijos')->references('id')->on('listasdetalle')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'fk_usuario_cuentasxpagarfijos')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id', 'fk_proveedor_cuentasxpagarfijos')->references('id')->on('proveedores')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('cuentasxpagarfijos');
    }
}
