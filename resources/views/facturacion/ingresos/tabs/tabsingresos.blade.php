<div class="row">
    <div class="col-12">
        <div id="cardtabspro" class="card card-bg-dark card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-datos-del-ingreso-tab" data-toggle="pill"
                            href="#custom-tabs-one-datos-del-ingreso" role="tab"
                            aria-controls="custom-tabs-one-datos-del-ingreso" aria-selected="false">Información
                            Ingreso</a>
                    </li>
                     <li class="nav-item">
                        <button type="button" class="btn create_cuenta btn-default" name="create_cuenta" id="create_cuenta"><i class="fa fa-fw fa-plus-circle"></i> Nueva cuenta</button>

                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                    <form id="form-general" class="form-horizontal" method="POST">
                        <div class="tab-pane fade active show" id="custom-tabs-one-datos-del-ingreso" role="tabpanel"
                            aria-labelledby="custom-tabs-one-datos-del-ingreso-tab">
                            <div class="card-body">


                                @include('facturacion.ingresos.form.formdatosbasicos')

                            </div>
                        </div>

                        {{-- <div class="tab-pane fade  " id="custom-tabs-one-datos-del-empleado-af" role="tabpanel"
                            aria-labelledby="custom-tabs-one-datos-del-empleado-af-tab">
                            <div class="card-body">

                                @include('nomina.empleados.form.formdatosafiliaciones')

                            </div>
                        </div>
                        <div class="tab-pane fade " id="custom-tabs-one-datos-del-empleado-contrac"
                            role="tabpanel" aria-labelledby="custom-tabs-one-datos-del-empleado-contrac-tab">
                            <div class="card-body">


                                @include('nomina.empleados.form.formdatoscontrato')

                            </div>
                        </div>
                        <div class="tab-pane fade"  id="custom-tabs-one-datos-del-empleado-salario"
                            role="tabpanel" aria-labelledby="custom-tabs-one-datos-del-empleado-salario-tab">
                            <div class="card-body">


                                @include('nomina.empleados.form.formdatossalarios')

                            </div>
                        </div> --}}

                    </form>
                </div>
            </div>
            <!-- /.card -->
        </div>

    </div>

</div>
