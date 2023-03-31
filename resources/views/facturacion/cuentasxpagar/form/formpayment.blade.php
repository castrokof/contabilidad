<fieldset>
    <legend style="color: #31df9d;position: relative;">Información de la factura
        <button type="button" class="btn btn-info" id="detallesede_btn" style="position: absolute;top: 0; right: 0;">Ver detalle de la Sede</button>
    </legend>
    <!-- <label for="descuento" style="color: #17a2b8;">Ver detalle de la Sede</label>
    <input type="checkbox" id="descuento" onchange="mostrarDescuento()" > -->


    <div class="form-group row">
        <div class="col-lg-3">
            <label for="sede_ips_n" class="col-xs-4 control-label ">Sede IPS:</label>
            <input type="text" id="sede_ips_n" name="sede_ips_n" class="form-control" readonly>
        </div>
        <div class="col-lg-3">
            <label for="numerofactura_n" class="col-xs-4 control-label ">Número de factura:</label>
            <input type="text" id="numerofactura_n" name="numerofactura_n" class="form-control" readonly>
        </div>

        <div class="col-lg-2">
            <label for="total_n" class="col-xs-4 control-label ">Subtotal:</label>
            <input id="total_n" name="total_n" class="form-control" readonly>
        </div>
        <div class="col-lg-2">
            <label for="iva_n" class="col-xs-4 control-label ">Valor Iva:</label>
            <input  id="iva_n" name="iva_n" class="form-control" readonly>
        </div>
        <div class="col-lg-2">
            <label for="saldo_p" class="col-xs-4 control-label ">Valor a Pagar:</label>
            <input id="saldo_p" name="saldo_p" class="form-control" style="color: red;" readonly>
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="form-group row">
        <div class="col-lg-3">
            <label for="valordescuento_n" class="col-xs-4 control-label ">Descuentos:</label>
            <input type="text" id="valordescuento_n" name="valordescuento_n" class="form-control" readonly>
        </div>
        <div class="col-lg-3">
            <label for="valorica_n" class="col-xs-4 control-label ">Retención ICA:</label>
            <input type="text" id="valorica_n" name="valorica_n" class="form-control" readonly>
        </div>
        <div class="col-lg-3">
            <label for="valorretefuente_n" class="col-xs-4 control-label ">Retefuente:</label>
            <input id="valorretefuente_n" name="valorretefuente_n" class="form-control" readonly>
        </div>
    </div>
</fieldset>

<fieldset id="detailSede" style="display:none;">
    <legend style="color: #1f7386;">Distribución del gasto entre sedes</legend>
    <div class="form-group row">
        <div class="col-lg-3">
            <label for="gasto_fidem_1_n">Gasto Fidem 1:</label>
            <div class="input-group">
                <input type="text" name="gasto_fidem_1_n" id="gasto_fidem_1_n" class="form-control" readonly>
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <label for="gasto_fidem_2_n">Gasto Fidem 2:</label>
            <div class="input-group">
                <input type="text" name="gasto_fidem_2_n" id="gasto_fidem_2_n" class="form-control" readonly>
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <label for="fidem_1_nombre_n">Sede Fidem 1:</label>
            <input type="text" name="fidem_1_nombre_n" id="fidem_1_nombre_n" class="form-control" readonly>
        </div>
        <div class="col-lg-3">
            <label for="fidem_2_nombre_n">Sede Fidem 2:</label>
            <input type="text" name="fidem_2_nombre_n" id="fidem_2_nombre_n" class="form-control" readonly>
        </div>
    </div>
</fieldset>


<fieldset>


    <legend style="color: #1f7386;">Información de Pago </legend>
    <div class="form-group row">
        <div class="col-lg-3">
            <label for="fechadepago" class="col-xs-4 control-label requerido">Fecha de pago:</label>
            <input type="date" id="fechadepago" name="fechadepago" class="form-control" required>
        </div>
        <div class="col-lg-3">
            <label for="valordelpago" class="col-xs-4 control-label requerido">Valor del pago:</label>
            <input type="number" id="valordelpago" name="valordelpago" class="form-control"  required>
        </div>
        <div class="col-lg-3">
            <label for="tipodepago" class="col-xs-4 control-label requerido">Tipo de pago:</label>
            <select id="tipodepago" name="tipodepago" class="form-control select2bs4" required>
                <option value="">---seleccione---</option>
                <option value="Efectivo">Efectivo</option>
                <option value="Transferencia">Transferencia</option>
                <option value="Tarjeta de crédito">Tarjeta de crédito</option>
                <option value="Cheque">Cheque</option>
            </select>
        </div>
        <div class="col-lg-3">
            <label for="numerotransaccion" class="col-xs-4 control-label requerido">Número de transacción:</label>
            <input type="text" id="numerotransaccion" name="numerotransaccion" class="form-control" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-6">
            <label for="observacion" class="col-xs-4 control-label requerido">Observaciones:</label>
            <textarea id="observacion" name="observacion" class="form-control" rows="3" required></textarea>
        </div>
        <!-- <div class="col-lg-6 text-left mt-auto">
            <button type="button" class="btn btn-primary">Ver Pagos</button>
        </div> -->
    </div>

    <input type="hidden" name="cuentasxpagar_id" id="cuentasxpagar_id" class="form-control">
    <!-- <input type="hidden" name="gasto_fidem_1_n" id="gasto_fidem_1_n" class="form-control">
    <input type="hidden" name="gasto_fidem_2_n" id="gasto_fidem_2_n" class="form-control"> -->
    <input type="hidden" name="sede_fidem_1_n" id="sede_fidem_1_n" class="form-control">
    <input type="hidden" name="sede_fidem_2_n" id="sede_fidem_2_n" class="form-control">
    <input type="hidden" name="sede_id_n" id="sede_id_n" class="form-control">
</fieldset>
<!-- <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{Session()->get('usuario_id')}}"> -->
