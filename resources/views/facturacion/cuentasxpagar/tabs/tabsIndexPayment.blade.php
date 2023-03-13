<div class="row">
    <div class="col-12">
        <div class="card card-primary card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-datos-del-resumenapagar-tab" data-toggle="pill" href="#custom-tabs-one-datos-del-resumenapagar" data-target="#custom-tabs-one-datos-del-resumenapagar" role="tab" aria-controls="custom-tabs-one-datos-del-resumenapagar" aria-selected="false">Registro de Pagos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-historial-detallepayment-tab" data-toggle="pill" href="#custom-tabs-one-historial-detallepayment" data-target="#custom-tabs-one-historial-detallepayment" role="tab" aria-controls="custom-tabs-one-historial-detallepayment" aria-selected="false">Historial de pagos</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    <div class="tab-pane fade active show" id="custom-tabs-one-datos-del-resumenapagar" role="tabpanel" aria-labelledby="custom-tabs-one-datos-del-resumenapagar-tab">
                        <div class="card-body">
                            @include('facturacion.cuentasxpagar.form.formpayment')
                        </div>
                    </div>
                    <div class="tab-pane fade " id="custom-tabs-one-historial-detallepayment" role="tabpanel" aria-labelledby="custom-tabs-one-historial-detallepayment-tab">
                        <div class="card-body">
                            @include('facturacion.cuentasxpagar.tablas.tablaListPagos')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
