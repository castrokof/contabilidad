<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.form-mensaje')
        <div class="card card-info">
            <div class="card-header with-border">
                <h3 class="card-title-1">Listado de cuentas con pagos parciales</h3>
                <!-- <div class="card-tools pull-right">
                    <button type="button" class="btn create_cuenta btn-default" name="create_cuenta" id="create_cuenta"><i class="fa fa-fw fa-plus-circle"></i>Nueva Cuenta</button>
                </div> -->
            </div>
            <div class="card-body table-responsive p-2">

                <table id="pcuentas_parcial" class="table table-hover  text-nowrap">
                    {{-- class="table table-hover table-bordered text-nowrap" --}}
                    <thead>
                        <tr>
                            <th>Acciones</th>
                            <th>Id</th>
                            <th>NumeroFactura</th>
                            <th>Tipofactura</th>
                            <th>Formadepago</th>
                            <th>Fecha</th>
                            <th>FechaVencimiento</th>
                            <th>Ica</th>
                            <th>ValorICA</th>
                            <th>Retefuente</th>
                            <th>ValorRetefuente</th>
                            <th>Iva</th>
                            <th>ValorIVA</th>
                            <th>Descuento</th>
                            <th>ValorDescuento</th>
                            <th>Total</th>
                            <th>Observacion</th>
                            <th>% Gasto Fidem 1</th>
                            <th>% Gasto Fidem 2</th>
                            <th>Sede</th>
                            <th>Future4</th>
                            <th>Future5</th>
                            <th>Usuario</th>
                            <th>Proveedor</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            </form>
            <!-- /.card-body -->
        </div>
    </div>
</div>
