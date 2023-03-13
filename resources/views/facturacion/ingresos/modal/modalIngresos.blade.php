<div class="modal fade" tabindex="-1" id="modal-ingreso" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="row">
                    <div class="col-lg-12">
                        @include('includes.form-error')
                        @include('includes.form-mensaje')
                        <span id="form_result"></span>
                        <div id="card-drawel" class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <div class="card-tools pull-right">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <form id="form-general" class="form-horizontal" method="POST">
                                @csrf
                                <div class="card-body">
                                    @include('facturacion.ingresos.tabs.tabsingresos')
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">

                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        @include('includes.boton-form-crear-ingresos')
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
