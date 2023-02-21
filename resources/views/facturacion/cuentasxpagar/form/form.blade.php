<div class="form-group row">
    <div class="col-lg-3">
        <label for="numerofactura" class="col-xs-4 control-label requerido">Número de factura:</label>
        <input type="text" id="numerofactura" name="numerofactura" class="form-control UpperCase" required>
    </div>
    <div class="col-lg-3">
        <label for="tipofactura" class="col-xs-4 control-label requerido">Tipo de factura:</label>
        <select id="tipofactura" name="tipofactura" class="form-control select2bs4">
            <option value="">---seleccione---</option>
            <option value="Factura de venta">Factura de venta</option>
            <option value="Factura de compra">Factura de compra</option>
        </select>
    </div>
    <div class="col-lg-3">
        <label for="formadepago" class="col-xs-4 control-label requerido">Forma de pago:</label>
        <select id="formadepago" name="formadepago" class="form-control select2bs4" required>
            <option value="Efectivo">Efectivo</option>
            <option value="Transferencia">Transferencia</option>
            <option value="Tarjeta de crédito">Tarjeta de crédito</option>
            <option value="Cheque">Cheque</option>
        </select>
    </div>
    <div class="col-lg-3">
        <label for="fechafactura" class="col-xs-4 control-label requerido">Fecha de factura:</label>
        <input type="date" id="fechafactura" name="fechafactura" class="form-control">
    </div>
</div>
<div class="form-group row">
    <div class="col-lg-3">
        <label for="fechavencimiento" class="col-xs-4 control-label requerido">Fecha de vencimiento:</label>
        <input type="date" id="fechavencimiento" name="fechavencimiento" class="form-control">
    </div>
    <div class="col-lg-3">
        <label for="ica" class="col-xs-4 control-label requerido">ICA:</label>
        <input type="text" id="ica" name="ica" class="form-control">
    </div>

    <div class="col-lg-2">
        <label for="valorica" class="col-xs-4 control-label requerido">Valor ICA:</label>
        <input type="text" id="valorica" name="valorica" class="form-control">
    </div>
    <div class="col-lg-1">
        <label for="retefuente" class="col-xs-4 control-label requerido">Retención en la fuente:</label>
        <input type="text" id="retefuente" name="retefuente" class="form-control">
    </div>

    <div class="col-lg-2">
        <label for="valorretefuente" class="col-xs-4 control-label requerido">Valor retención en la fuente:</label>
        <input type="text" id="valorretefuente" name="valorretefuente" class="form-control">
    </div>

    <div class="col-lg-2">
        <label for="iva" class="col-xs-4 control-label requerido">IVA:</label>
        <input type="text" id="iva" name="iva" class="form-control">
    </div>

</div>
<div class="form-group row">
    <div class="col-lg-3">
        <label for="valoriva" class="col-xs-4 control-label requerido">Valor IVA:</label>
        <input type="text" id="valoriva" name="valoriva" class="form-control">
    </div>
    <div class="col-lg-3">
        <label for="descuento" class="col-xs-4 control-label requerido">Descuento:</label>
        <input type="text" id="descuento" name="descuento" class="form-control">
    </div>
    <div class="col-lg-3">
        <label for="valordescuento" class="col-xs-4 control-label requerido">Valor descuento:</label>
        <input type="text" id="valordescuento" name="valordescuento" class="form-control">
    </div>

    <div class="col-lg-3">
        <label for="total" class="col-xs-4 control-label requerido">Total:</label>
        <input type="text" id="total" name="total" class="form-control">
    </div>

</div>
<div class="form-group row">
    <div class="col-lg-3">
        <label for="observacion" class="col-xs-4 control-label requerido">Observación:</label>
        <textarea id="observacion" name="observacion" class="form-control"></textarea>
    </div>
    <div class="col-lg-3">
        <label for="future1" class="col-xs-4 control-label requerido">Campo futuro 1:</label>
        <input type="text" id="future1" name="future1" class="form-control">
    </div>

    <div class="col-lg-3">
        <label for="future2" class="col-xs-4 control-label requerido">Campo futuro 2:</label>
        <input type="text" id="future2" name="future2" class="form-control">
    </div>
    <div class="col-lg-3">
        <label for="future3" class="col-xs-4 control-label requerido">Campo futuro 3:</label>
        <input type="text" id="future3" name="future3" class="form-control">
    </div>
    <div class="col-lg-3">
        <label for="future4" class="col-xs-4 control-label requerido">Campo futuro 4:</label>
        <input type="text" id="future4" name="future4" class="form-control">
    </div>
    <div class="col-lg-3">
        <label for="future5" class="col-xs-4 control-label requerido">Campo futuro 5:</label>
        <input type="text" id="future5" name="future5" class="form-control">
    </div>
    <div class="col-lg-3">
        <label for="proveedor" class="col-xs-4 control-label requerido">Proveedor</label>
        <input type="text" id="proveedor" name="proveedor" class="form-control">
    </div>
</div>
<input type="hidden" name="diagnosis" id="diagnosis" class="form-control" value="">



</div>

<input type="hidden" name="user_id" id="user_id" class="form-control" value="{{Session()->get('usuario_id')}}">
