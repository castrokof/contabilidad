<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasxpagarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentasxpagar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numerofactura');
            $table->string('tipofactura');
            $table->string('formadepago');
            $table->string('fechafactura')->nullable();
            $table->string('fechavencimiento')->nullable();
            $table->string('ica')->nullable();
            $table->string('valorica')->nullable();
            $table->date('retefuente')->nullable();
            $table->date('valorretefuente')->nullable();
            $table->string('iva')->nullable();
            $table->string('valoriva')->nullable();
            $table->string('descuento')->nullable();
            $table->string('valordescuento')->nullable();
            $table->string('total');
            $table->longText('observacion');
            $table->string('future1')->nullable();
            $table->string('future2')->nullable();
            $table->string('future3')->nullable();
            $table->string('future4')->nullable();
            $table->string('future5')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'fk_usuario_cuentasxpagar')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id', 'fk_proveedor_cuentasxpagar')->references('id')->on('proveedores')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('cuentasxpagar');
    }
}
