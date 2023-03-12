<div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.form-mensaje')
            <div class="card card-success">
                <div class="card-header with-border">
                    <h3 class="card-title-1">Ingresos</h3>
                    <div class="card-tools pull-right">
                        <button type="button" class="btn btn-default" name="create_ingreso" id="create_ingreso"
                            data-toggle="modal" data-target="#modal-u"><i class="fa fa-fw fa-plus-circle"></i> Nuevo ingreso</button>
                        </button>
                    </div>
                </div>
                <div class="card-body table-responsive p-2">
                <table id="ingresos" class="table table-hover  text-nowrap">
                        <thead>
                            <tr>
                                <th>Acciones</th>
                                <th>Id</th>
                                <th>tipodocumento</th>
                                <th>documento</th>
                                <th>nombre</th>
                                <th>direccion</th>
                                <th>telefono</th>
                                <th>pais</th>
                                <th>ciudad</th>
                                <th>dpto</th>
                                <th>correo</th>
                                <th>Usuario</th>
                                <th>Fecha de creacion</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

                <!-- /.card-body -->
            </div>
        </div>
    </div>
