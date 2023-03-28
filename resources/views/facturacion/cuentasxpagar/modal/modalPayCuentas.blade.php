 <!-- Modal para agregar pagos -->

 <div class="modal fade" tabindex="-1" id="modal-payment" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="row">
                    <div class="col-lg-12">
                        @include('includes.form-error')
                        @include('includes.form-mensaje')
                        <span id="form_result_p"></span>
                        <div id="card-drawel" class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title" id="titleNumFact"></h3>
                                <div class="card-tools pull-right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <form id="form-general-p" class="form-horizontal" method="POST" onsubmit="return validarPago()">
                                @csrf
                                <div class="card-body">
                                    @include('facturacion.cuentasxpagar.tabs.tabsIndexPayment')
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">

                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        @include('includes.boton-form-crear-empresa-empleado-usuario')
                                    </div>
                                </div>
                                <!-- /.card-footer -->
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
