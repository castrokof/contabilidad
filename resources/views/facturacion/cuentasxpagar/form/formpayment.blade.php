<fieldset>
    <legend style="color: #31df9d;">Información de la factura</legend>

    <div class="form-group row">
        <div class="col-lg-3">
            <label for="sede_ips_n" class="col-xs-4 control-label ">Sede IPS:</label>
            <input type="text" id="sede_ips_n" name="sede_ips_n" class="form-control" readonly>
        </div>
        <div class="col-lg-3">
            <label for="numerofactura_n" class="col-xs-4 control-label ">Número de factura:</label>
            <input type="text" id="numerofactura_n" name="numerofactura_n" class="form-control" readonly>
        </div>

        <div class="col-lg-3">
            <label for="total_n" class="col-xs-4 control-label ">Total:</label>
            <input type="number" id="total_n" name="total_n" class="form-control" readonly>
        </div>
        <div class="col-lg-3">
            <label for="saldo_p" class="col-xs-4 control-label ">Saldo Pendiente:</label>
            <input type="number" id="saldo_p" name="saldo_p" class="form-control" style="color: red;" readonly>
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
            <input type="number" id="valordelpago" name="valordelpago" class="form-control" required>
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
    </div>

    <input type="hidden" name="cuentasxpagar_id" id="cuentasxpagar_id" class="form-control">
</fieldset>
<!-- <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{Session()->get('usuario_id')}}"> -->
