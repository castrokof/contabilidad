<style>
    #ivalor {
        display: none;
    }
</style>

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
                <!-- <option value="Factura de venta">Factura de venta</option> -->
                <option value="Cuenta de cobro">Cuenta de cobro</option>
                <option value="Factura de compra">Factura de compra</option>
                <option value="Factura de servicios">Factura de servicios</option>
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
    </div>
</fieldset>
<fieldset>
    <div class="form-group row">
        <div class="col-lg-3">
            <label for="proveedor_id" class="col-xs-4 control-label requerido">Proveedor</label>
            <select name="proveedor_id" id="proveedor_id" class="form-control select2bs4" style="width: 100%;" required>
            </select>
        </div>
        <div class="col-lg-9">
            <label for="observacion" class="col-xs-4 control-label requerido">Observación:</label>
            <textarea id="observacion" name="observacion" class="form-control"></textarea>
        </div>
    </div>
</fieldset>

<fieldset>
    <legend style="font-size: 20px; color: #1f7386;">Datos de la sede</legend>

    <div class="form-group row">
        <div class="col-lg-3">
            <label for="sede_id" class="col-xs-4 control-label requerido">Sede:</label>
            <select name="sede_id" id="sede_id" class="form-control select2bs4" style="width: 100%;" required>
            </select>
        </div>
        <div class="col-lg-3">
            <label for="clasificacion" class="col-xs-4 control-label requerido">Clasificación</label>
            <select name="future5" id="clasificacion" class="form-control select2bs4" style="width: 100%;" required>
            </select>
        </div>
        <div id="futuro1" class="col-lg-3" style="display:none;">
            <label for="porcentaje_gasto_fidem_1" class="col-xs-4 control-label ">% FIDEM 1:</label>
            <input type="number" id="porcentaje_gasto_fidem_1" name="porcentaje_gasto_fidem_1" class="form-control">
            <!-- <input type="hidden" id="sede_fidem_1" name="sede_fidem_1" class="form-control"> -->
        </div>
        <div id="futuro2" class="col-lg-3" style="display:none;">
            <label for="porcentaje_gasto_fidem_2" class="col-xs-4 control-label ">% FIDEM 2:</label>
            <input type="number" id="porcentaje_gasto_fidem_2" name="porcentaje_gasto_fidem_2" class="form-control">
            <!-- <input type="hidden" id="sede_fidem_2" name="sede_fidem_2" class="form-control"> -->
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
            <label for="total" class="col-xs-4 control-label requerido">Valor Factura:</label>
            <input type="number" id="total" name="total" class="form-control">
        </div>
        <div class="col-lg-2">
            <label for="iva" class="col-xs-4 control-label ">IVA:</label>
            <select id="iva" name="iva" class="form-control">
                <option value="">---seleccione---</option>
                <option value="0">0%</option>
                <option value="5">5%</option>
                <option value="19">19%</option>
            </select>
        </div>
        <div id="ivalor" class="col-lg-3">
            <label for="valoriva" class="col-xs-4 control-label ">Valor IVA:</label>
            <input type="number" id="valoriva" name="valoriva" class="form-control">
        </div>
        <div class="col-lg-3">
            <label for="add_descuento" style="color: #ff0000;">¿Aplica descuento? </label>
            <input type="checkbox" id="add_descuento">

            <label for="add_impuestos" style="color: #ff0000;">¿Aplica retenciones? </label>
            <input type="checkbox" id="add_impuestos">
        </div>
    </div>
</fieldset>
<fieldset id="descuentos_check" style="display:none;">
    <legend style="font-size: 20px; color: #1f7386;">Descuentos</legend>
    <div class="form-group row">
        <div class="col-lg-3">
            <label for="descuento" class="col-xs-4 control-label ">Descuento:</label>
            <input type="number" id="descuento" name="descuento" class="form-control">
        </div>
        <div class="col-lg-3">
            <label for="valordescuento" class="col-xs-4 control-label ">Valor descuento:</label>
            <input type="number" id="valordescuento" name="valordescuento" class="form-control">
        </div>
    </div>
</fieldset>

<fieldset id="impuestos_check" style="display:none;">
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

</fieldset>
<fieldset>
    <div class="form-group row">
        <!-- tabla para mostrar la liquidacion de las facturas -->
        <table id="resultados" class="table table-striped" style="float: right;">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- Valor neto = (valor de los productos o servicios + otros cargos) - descuentos -->
                    <th><strong>VALOR NETO:</strong></th>
                    <td id="subtotal"></td>

                    <!-- Es la suma de Valor de la retención en la fuente y Valor de la retención en el ICA -->
                    <th><strong>IMPUESTOS:</strong></th>
                    <td id="retenciones"></td>
                </tr>
                <tr>
                    <th><strong>IVA:</strong></th>
                    <td id="ivaFinal"></td>

                    <!-- <th><strong>DESCUENTOS:</strong></th>
                    <td id="ivaFinal"></td> -->
                </tr>
                <tr>
                    <th><strong>TOTAL:</strong></th>
                    <td id="totalFinal"></td>

                    <!-- Valor bruto = (valor neto + valor del IVA) - (valor de la retención en la fuente + valor de la retención en el ICA) -->
                    <th><strong>VALOR BRUTO:</strong></th>
                    <td id="deduccionImpuestos"></td>
                </tr>

            </tbody>
        </table>
    </div>
</fieldset>


<input type="hidden" name="user_id" id="user_id" class="form-control" value="{{Session()->get('usuario_id')}}">
