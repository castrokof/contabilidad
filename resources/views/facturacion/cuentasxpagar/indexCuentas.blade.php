@extends("theme.$theme.layout")

@section('titulo')
Cuentas por Pagar
@endsection
@section("styles")

<link href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("assets/$theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css" />


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" rel="stylesheet" type="text/css" />

<link href="{{asset("assets/js/gijgo-combined-1.9.13/css/gijgo.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("assets/css/select2-bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("assets/css/select2.min.css")}}" rel="stylesheet" type="text/css" />


@endsection


@section('scripts')


<script src="{{asset("assets/pages/scripts/admin/usuario/crearuser.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

@include('facturacion.cuentasxpagar.tabs.tabsIndexCuentas')

@include('facturacion.cuentasxpagar.modal.modalCuentas')

@include('facturacion.cuentasxpagar.modal.modalindexaddseguimiento')



@endsection

@section("scriptsPlugins")
<script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/$theme/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/jquery-select2/select2.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/gijgo-combined-1.9.13/js/gijgo.min.js")}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>


<script src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {


        //Funcion que abre modal donde se debe registrar los datos de la factura o cuenta por pagar
        $('#create_cuenta').click(function() {
            $('#form-general')[0].reset();
            // $('.card-title').text('Agregar Procedimiento');
            $('#action_button').val('Add');
            $('#action').val('Add');
            $('#form_result').html('');
            $('#modal-add-cuentas').modal('show');
        });

        // Función que envían los datos de la factura al controlador
        $('#form-general').on('submit', function(event) {
            event.preventDefault();
            var url = '';
            var method = '';
            var text = '';

            if ($('#action').val() == 'Add') {
                text = "Estás por crear una factura o cuenta por pagar"
                url = "{{route('guardar_factura')}}";
                method = 'post';
            }

            if ($('#action').val() == 'Edit') {
                text = "Estás por actualizar una factura o cuenta por pagar"
                var updateid = $('#hidden_id').val();
                url = "/cuentasxpagar/" + updateid;
                method = 'put';
            }
            Swal.fire({
                title: "¿Estás seguro?",
                text: text,
                icon: "success",
                showCancelButton: true,
                showCloseButton: true,
                confirmButtonText: 'Aceptar',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: url,
                        method: method,
                        data: $(this).serialize(),
                        dataType: "json",
                        success: function(data) {
                            var html = '';
                            if (data.errors) {

                                html =
                                    '<div class="alert alert-danger alert-dismissible">' +
                                    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                                    '<h5><i class="icon fas fa-ban"></i> Alerta! Verifica los siguientes datos: </h5>';

                                for (var count = 0; count < data.errors.length; count++) {
                                    html += '<p>' + data.errors[count] + '<p>';
                                }
                                html += '</div>';
                            }

                            if (data.success == 'ok') {
                                $('#form-general')[0].reset();
                                $('#modal-add-cuentas').modal('hide');
                                $('#pcuentas').DataTable().ajax.reload();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'cuenta por pagar creada correctamente',
                                    showConfirmButton: false,
                                    timer: 1500

                                })


                            } else if (data.success == 'ok1') {
                                $('#form-general')[0].reset();
                                $('#modal-add-cuentas').modal('hide');
                                $('#pcuentas').DataTable().ajax.reload();
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'cuenta por pagar actualizada correctamente',
                                    showConfirmButton: false,
                                    timer: 1500

                                })


                            }
                            $('#form_result').html(html)
                        }


                    });
                }
            });


        });


        // Función que envia el id al controlador y cambia el estado del registro
        $(document).on('click', '.agenda', function() {
            var data = {
                id: $(this).attr('value'),
                _token: $('input[name=_token]').val()
            };

            ajaxRequest('agendado', data);
        });

        function ajaxRequest(url, data) {
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function(data) {
                    $('#pcuentas').DataTable().ajax.reload();
                    $('#psicologicaAgendada').DataTable().ajax.reload();
                    $('#psicologicaSeguimiento').DataTable().ajax.reload();
                    Manteliviano.notificaciones(data.respuesta, data.titulo, data.icon);
                }
            });
        }



        // Funcion para pintar con data table la pestaña de linea psicologica
        var datatable =
            $('#pcuentas').DataTable({
                language: idioma_espanol,
                processing: true,
                lengthMenu: [
                    [25, 50, 100, 500, -1],
                    [25, 50, 100, 500, "Mostrar Todo"]
                ],
                processing: true,
                serverSide: true,
                aaSorting: [
                    [20, "desc"]
                ],
                ajax: {
                    url: "{{route('cuentasxpagar')}}",
                },
                columns: [{
                        data: 'action',
                        orderable: false
                    },
                    {
                        data: 'id'
                    },
                    {
                        data: 'numerofactura'
                    },
                    {
                        data: 'tipofactura'
                    },
                    {
                        data: 'formadepago'
                    },
                    {
                        data: 'fechafactura'
                    },
                    {
                        data: 'fechavencimiento'
                    },
                    {
                        data: 'ica'
                    },
                    {
                        data: 'valorica'
                    },
                    {
                        data: 'retefuente'
                    },
                    {
                        data: 'valorretefuente'
                    },
                    {
                        data: 'iva'
                    },
                    {
                        data: 'valoriva'
                    },
                    {
                        data: 'descuento'
                    },
                    {
                        data: 'valordescuento'
                    },
                    {
                        data: 'total'
                    },
                    {
                        data: 'observacion'
                    },
                    {
                        data: 'future1'
                    },
                    {
                        data: 'future2'
                    },
                    {
                        data: 'future3'
                    },
                    {
                        data: 'future4'
                    },
                    {
                        data: 'future5'
                    },
                    {
                        data: 'user_id'
                    },
                    {
                        data: 'proveedor_id'
                    }
                ],

                //Botones----------------------------------------------------------------------

                "dom": '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',

                buttons: [{

                        extend: 'copyHtml5',
                        titleAttr: 'Copiar Registros',
                        title: "Control de horas",
                        className: "btn  btn-outline-primary btn-sm"


                    },
                    {

                        extend: 'excelHtml5',
                        titleAttr: 'Exportar Excel',
                        title: "Control de horas",
                        className: "btn  btn-outline-success btn-sm"


                    },
                    {

                        extend: 'csvHtml5',
                        titleAttr: 'Exportar csv',
                        className: "btn  btn-outline-warning btn-sm"

                    },
                    {

                        extend: 'pdfHtml5',
                        titleAttr: 'Exportar pdf',
                        className: "btn  btn-outline-secondary btn-sm"


                    }
                ],
                "columnDefs": [{

                        "render": function(data, type, row) {
                            if (row["consultation"] == 1) {
                                return data + ' - Orientación Psicológica';

                            } else {

                                return data + ' - Call center';

                            }

                        },
                        "targets": [18]
                    }


                ],

                "createdRow": function(row, data, dataIndex) {
                    if (data["consultation"] == 1) {
                        $($(row).find("td")[18]).addClass("btn btn-sm btn-danger rounded-lg");
                    } else {
                        $($(row).find("td")[18]).addClass("btn btn-sm btn-dark rounded-lg");
                    }

                }


            });


        // Funcion para pintar con data table la pestaña de citas agendadas
        var datatable =
            $('#psicologicaAgendada').DataTable({
                language: idioma_espanol,
                processing: true,
                lengthMenu: [
                    [25, 50, 100, 500, -1],
                    [25, 50, 100, 500, "Mostrar Todo"]
                ],
                processing: true,
                serverSide: true,
                aaSorting: [
                    [21, "desc"]
                ],
                ajax: {
                    url: "{{route('analistapsicoa')}}",
                },
                columns: [{
                        data: 'action',
                        orderable: false
                    },
                    {
                        data: 'actions',
                        orderable: false
                    },
                    {
                        data: 'id'
                    },
                    {
                        data: 'surname'
                    },
                    {
                        data: 'ssurname'
                    },
                    {
                        data: 'fname'
                    },
                    {
                        data: 'sname'
                    },
                    {
                        data: 'type_document'
                    },
                    {
                        data: 'document'
                    },
                    {
                        data: 'date_birth'
                    },
                    {
                        data: 'municipality'
                    },
                    {
                        data: 'other'
                    },
                    {
                        data: 'address'
                    },
                    {
                        data: 'celular'
                    },
                    {
                        data: 'phone'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'sex'
                    },
                    {
                        data: 'eapb'
                    },
                    {
                        data: 'reason_consultation'
                    },
                    {
                        data: 'consultation'
                    },
                    {
                        data: 'diagnosis'
                    },
                    {
                        data: 'created_at'
                    }
                ],

                //Botones----------------------------------------------------------------------

                "dom": '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',

                buttons: [{

                        extend: 'copyHtml5',
                        titleAttr: 'Copiar Registros',
                        title: "Control de horas",
                        className: "btn  btn-outline-primary btn-sm"


                    },
                    {

                        extend: 'excelHtml5',
                        titleAttr: 'Exportar Excel',
                        title: "Control de horas",
                        className: "btn  btn-outline-success btn-sm"


                    },
                    {

                        extend: 'csvHtml5',
                        titleAttr: 'Exportar csv',
                        className: "btn  btn-outline-warning btn-sm"

                    },
                    {

                        extend: 'pdfHtml5',
                        titleAttr: 'Exportar pdf',
                        className: "btn  btn-outline-secondary btn-sm"


                    }
                ],
                "columnDefs": [{

                        "render": function(data, type, row) {
                            if (row["consultation"] == 1) {
                                return data + ' - Orientación Psicológica';

                            } else {

                                return data + ' - Call center';

                            }

                        },
                        "targets": [19]
                    }


                ],

                "createdRow": function(row, data, dataIndex) {
                    if (data["consultation"] == 1) {
                        $($(row).find("td")[19]).addClass("btn btn-sm btn-danger rounded-lg");
                    } else {
                        $($(row).find("td")[19]).addClass("btn btn-sm btn-dark rounded-lg");
                    }

                }


            });

        // Funcion para pintar con data table la pestaña de seguimiento
        var datatable =
            $('#psicologicaSeguimiento').DataTable({
                language: idioma_espanol,
                processing: true,
                lengthMenu: [
                    [25, 50, 100, 500, -1],
                    [25, 50, 100, 500, "Mostrar Todo"]
                ],
                processing: true,
                serverSide: true,
                aaSorting: [
                    [20, "desc"]
                ],
                ajax: {
                    url: "{{route('analistapsicos')}}",
                },
                columns: [{
                        data: 'action',
                        orderable: false
                    },
                    {
                        data: 'id'
                    },
                    {
                        data: 'surname'
                    },
                    {
                        data: 'ssurname'
                    },
                    {
                        data: 'fname'
                    },
                    {
                        data: 'sname'
                    },
                    {
                        data: 'type_document'
                    },
                    {
                        data: 'document'
                    },
                    {
                        data: 'date_birth'
                    },
                    {
                        data: 'municipality'
                    },
                    {
                        data: 'other'
                    },
                    {
                        data: 'address'
                    },
                    {
                        data: 'celular'
                    },
                    {
                        data: 'phone'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'sex'
                    },
                    {
                        data: 'eapb'
                    },
                    {
                        data: 'reason_consultation'
                    },
                    {
                        data: 'consultation'
                    },
                    {
                        data: 'diagnosis'
                    },
                    {
                        data: 'created_at'
                    }
                ],

                //Botones----------------------------------------------------------------------

                "dom": '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',

                buttons: [{

                        extend: 'copyHtml5',
                        titleAttr: 'Copiar Registros',
                        title: "Control de horas",
                        className: "btn  btn-outline-primary btn-sm"


                    },
                    {

                        extend: 'excelHtml5',
                        titleAttr: 'Exportar Excel',
                        title: "Control de horas",
                        className: "btn  btn-outline-success btn-sm"


                    },
                    {

                        extend: 'csvHtml5',
                        titleAttr: 'Exportar csv',
                        className: "btn  btn-outline-warning btn-sm"

                    },
                    {

                        extend: 'pdfHtml5',
                        titleAttr: 'Exportar pdf',
                        className: "btn  btn-outline-secondary btn-sm"


                    }
                ],
                "columnDefs": [{

                        "render": function(data, type, row) {
                            if (row["consultation"] == 1) {
                                return data + ' - Orientación Psicológica';

                            } else {

                                return data + ' - Call center';

                            }

                        },
                        "targets": [18]
                    }


                ],

                "createdRow": function(row, data, dataIndex) {
                    if (data["consultation"] == 1) {
                        $($(row).find("td")[18]).addClass("btn btn-sm btn-danger rounded-lg");
                    } else {
                        $($(row).find("td")[18]).addClass("btn btn-sm btn-dark rounded-lg");
                    }

                }


            });



        //Función para abrir modal del detalle de la evolución y muestra las observaciones agregadas
        $(document).on('click', '.resumen', function() {
            var idevo = $(this).attr('id');
            $('#names').empty();
            $('#documents').empty();
            $('#evolution').empty();
            $('#names1').empty();
            $('#address').empty();
            $('#date_birth').empty();
            $('#celular').empty();
            $('#sex').empty();
            $('#consultation').empty();
            $('#created_at').empty();
            $('#observaciones_chat').empty();


            $.ajax({
                url: "evolucion/" + idevo + "",
                dataType: "json",
                success: function(data) {


                    var usuarios = data[1];
                    console.log(usuarios);
                    console.log(data[0]);
                    $.each(data[0], function(i, items) {
                        $('#names').append(items.surname + " " + items.fname);
                        $('#documents').append(items.type_document + "-" + items.document);
                        $('#evolution').append(items.reason_consultation);
                        $('#names1').append(items.surname + " " + items.fname);
                        $('#address').append("Ciudad: " + items.municipality + " | Dirección: " + items.address + " | Eapb: " + items.eapb);
                        $('#date_birth').append(items.date_birth);
                        $('#celular').append(items.celular);
                        if (items.sex == "M") {
                            $('#sex').append("MASCULINO");
                        } else {
                            $('#sex').append("FEMENINO");
                        }
                        $('#created_at').append("Fecha de evolución: " + " " + items.created_at);
                        if (items.consultation == 1) {
                            $('#consultation').append("Evolución " + items.consultation + "-" + "Orientación Psicológica");
                        }
                    });


                    $.each(usuarios, function(i, items1) {
                        $.each(data[0], function(i, items) {
                            $.each(items.observacionadd, function(i, itemobs) {
                                var filtered = items1.filter(el => el.id == itemobs.user_id);
                                $.each(filtered, function(i, itemsusu) {
                                    $('#observaciones_chat').append(
                                        '<div class="direct-chat-msg">' +
                                        '<div class="direct-chat-infos clearfix">' +
                                        '<span class="direct-chat-name float-left">' + 'Usuario: ' + itemsusu.usuario + '</span>' +
                                        '<span class="direct-chat-timestamp float-right">' + 'Fecha creación: ' + itemobs.created_at + '</span>' +
                                        '</div>' +
                                        '<div class="direct-chat-text">' + 'Observación: ' +
                                        itemobs.addobservacion +
                                        '</div>' +
                                        '</div>');
                                });
                            });

                        });
                    });




                    $('.modal-title-resumen').text('Evolución');
                    $('#modal-resumen').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    $('#modal-resumen').modal('show');
                }


            }).fail(function(jqXHR, textStatus, errorThrown) {

                if (jqXHR.status === 403) {

                    Manteliviano.notificaciones('No tienes permisos para realizar esta accion', 'Sistema Ventas', 'warning');

                }
            });


        });













    });


    var idioma_espanol = {
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla =(",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        "buttons": {
            "copy": "Copiar",
            "colvis": "Visibilidad"
        }
    }
</script>
@endsection
