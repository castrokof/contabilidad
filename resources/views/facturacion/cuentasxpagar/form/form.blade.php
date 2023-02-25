<fieldset>
    <legend style="color: #31df9d;">Información de la factura</legend>

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
            <label for="fechafactura" class="col-xs-4 control-label requerido">Fecha de factura:</label>
            <input type="date" id="fechafactura" name="fechafactura" class="form-control">
        </div>
        <div class="col-lg-3">
            <label for="fechavencimiento" class="col-xs-4 control-label requerido">Fecha de vencimiento:</label>
            <input type="date" id="fechavencimiento" name="fechavencimiento" class="form-control">
        </div>
        <div class="col-lg-3">
            <label for="proveedor_id" class="col-xs-4 control-label requerido">Proveedor</label>
            <select name="proveedor_id" id="proveedor_id" class="form-control select2bs4" style="width: 100%;" required>
            </select>
        </div>
    </div>
</fieldset>

<fieldset>
    <legend style="font-size: 20px; color: #1f7386;">Información de pago</legend>

    <div class="form-group row">
        <div class="col-lg-3">
            <label for="formadepago" class="col-xs-4 control-label requerido">Forma de pago:</label>
            <select id="formadepago" name="formadepago" class="form-control select2bs4" required>
                <option value="">---seleccione---</option>
                <option value="Efectivo">Efectivo</option>
                <option value="Transferencia">Transferencia</option>
                <option value="Tarjeta de crédito">Tarjeta de crédito</option>
                <option value="Cheque">Cheque</option>
            </select>
        </div>
        <div class="col-lg-3">
            <label for="descuento" class="col-xs-4 control-label ">Descuento:</label>
            <input type="number" id="descuento" name="descuento" class="form-control">
        </div>
        <div class="col-lg-3">
            <label for="valordescuento" class="col-xs-4 control-label ">Valor descuento:</label>
            <input type="number" id="valordescuento" name="valordescuento" class="form-control">
        </div>

        <div class="col-lg-3">
            <label for="total" class="col-xs-4 control-label requerido">Total:</label>
            <input type="number" id="total" name="total" class="form-control">
        </div>
    </div>
</fieldset>

<fieldset>
    <legend style="font-size: 20px; color: #1f7386;">Impuestos y Retenciones</legend>

    <div class="form-group row">
        <div class="col-lg-3">
            <label for="retefuente" class="col-xs-4 control-label ">Retención en la fuente:</label>
            <input type="number" id="retefuente" name="retefuente" class="form-control">
        </div>

        <div class="col-lg-3">
            <label for="valorretefuente" class="col-xs-4 control-label ">Valor retención en la fuente:</label>
            <input type="number" id="valorretefuente" name="valorretefuente" class="form-control">
        </div>
        <div class="col-lg-3">
            <label for="ica" class="col-xs-4 control-label ">ICA:</label>
            <input type="number" id="ica" name="ica" class="form-control">
        </div>
        <div class="col-lg-3">
            <label for="valorica" class="col-xs-4 control-label ">Valor ICA:</label>
            <input type="number" id="valorica" name="valorica" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-2">
            <label for="iva" class="col-xs-4 control-label ">IVA:</label>
            <select id="iva" name="iva" class="form-control">
                <option value="">---seleccione---</option>
                <option value="0">0%</option>
                <option value="5">5%</option>
                <option value="19">19%</option>
            </select>
        </div>
        <div class="col-lg-3">
            <label for="valoriva" class="col-xs-4 control-label ">Valor IVA:</label>
            <input type="number" id="valoriva" name="valoriva" class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="observacion" class="col-xs-4 control-label requerido">Observación:</label>
            <textarea id="observacion" name="observacion" class="form-control"></textarea>
        </div>
    </div>
</fieldset>
<input type="hidden" name="user_id" id="user_id" class="form-control" value="{{Session()->get('usuario_id')}}">
