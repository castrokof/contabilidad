<div class="row">
    <div class="col-12">
        <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-datos-del-paciente-tab" data-toggle="pill" href="#custom-tabs-one-datos-del-paciente" data-target="#custom-tabs-one-datos-del-paciente" role="tab" aria-controls="custom-tabs-one-datos-del-paciente" aria-selected="false">Registro de Pagos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-historial-pagos-tab" data-toggle="pill" href="#custom-tabs-one-historial-pagos" data-target="#custom-tabs-one-historial-pagos" role="tab" aria-controls="custom-tabs-one-historial-pagos" aria-selected="false">Historial de Pagos</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    <div class="tab-pane fade active show" id="custom-tabs-one-datos-del-paciente" role="tabpanel" aria-labelledby="custom-tabs-one-datos-del-paciente-tab">
                        <div class="card-body">
                            @include('facturacion.cuentasxpagar.form.formpayment')
                        </div>
                    </div>
                    <div class="tab-pane fade " id="custom-tabs-one-historial-pagos" role="tabpanel" aria-labelledby="custom-tabs-one-historial-pagos-tab">
                        <div class="card-body">
                            @include('facturacion.cuentasxpagar.tablas.tablaListPagos')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
