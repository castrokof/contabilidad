<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.form-mensaje')
        <div class="card card-info">
            <div class="card-header with-border">
                <h5 class="modal-title" id="modalPagosLabel">Pagos realizados para la cuenta por pagar <span id="modalPagosCuentaId"></span></h5>
                <!-- <div class="card-tools pull-right">
                    <button type="button" class="btn create_cuenta btn-default" name="create_cuenta" id="create_cuenta"><i class="fa fa-fw fa-plus-circle"></i>Nueva Cuenta</button>
                </div> -->
            </div>
            <div class="card-body table-responsive p-2">

                <table id="lista_pagos" class="table table-hover  text-nowrap">
                    {{-- class="table table-hover table-bordered text-nowrap" --}}
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Valor del Pago</th>
                            <th>Fecha del Pago</th>
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
