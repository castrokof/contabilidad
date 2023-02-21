<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.form-mensaje')
        <div class="card card-info">
            <div class="card-header with-border">
                <h3 class="card-title">Listado de Cuentas por Pagar</h3>
                <div class="card-tools pull-right">
                    <button type="button" class="btn create_evolution btn-default" name="create_evolution"
                        id="create_evolution"><i class="fa fa-fw fa-plus-circle"></i>Nueva Cuenta</button>
                </div>
            </div>
            <div class="card-body table-responsive p-2">

                <table id="pcuentas" class="table table-hover  text-nowrap">
                    {{-- class="table table-hover table-bordered text-nowrap" --}}
                    <thead>
                        <tr>
                            <th>Acciones</th>
                            <th>Id</th>
                            <th>numerofactura</th>
                            <th>tipofactura</th>
                            <th>formadepago</th>
                            <th>fechafactura</th>
                            <th>fechavencimiento</th>
                            <th>ica</th>
                            <th>valorica</th>
                            <th>retefuente</th>
                            <th>valorretefuente</th>
                            <th>iva</th>
                            <th>valoriva</th>
                            <th>descuento</th>
                            <th>valordescuento</th>
                            <th>total</th>
                            <th>observacion</th>
                            <th>future1</th>
                            <th>future2</th>
                            <th>future3</th>
                            <th>future4</th>
                            <th>future5</th>
                            <th>user_id</th>
                            <th>proveedor_i</th>

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
