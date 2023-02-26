@extends("theme.$theme.layout")

@section('titulo')
Cuentas por Pagar
@endsection
@section("styles")

<link href="{{asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("assets/$theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/select2-bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />



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
@include('facturacion.cuentasxpagar.modal.modalPayCuentas')




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

        // Obtener los elementos del formulario Cuentas por Pagar para calcular el Descuento, los Impuestos y Retenciones
        const descuentoInput = document.getElementById("descuento");
        const valordescuentoInput = document.getElementById("valordescuento");
        const retefuenteInput = document.getElementById("retefuente");
        const valorretefuenteInput = document.getElementById("valorretefuente");
        const ivaInput = document.getElementById("iva");
        const valorivaInput = document.getElementById("valoriva");
        const totalInput = document.getElementById("total");

        // Agregar event listener para escuchar los cambios en el campo descuento
        descuentoInput.addEventListener("change", () => {
            // Obtener el valor de descuento y total
            const descuento = descuentoInput.value;
            const total = totalInput.value;

            // Calcular el valor del descuento
            const valordescuento = (descuento * total) / 100;

            // Actualizar el campo de valor del descuento
            valordescuentoInput.value = valordescuento.toFixed(2);
        });

        // Agregar event listener para escuchar los cambios en el campo retefuente
        retefuenteInput.addEventListener("change", () => {
            // Obtener el valor de retefuente y total
            const retefuente = retefuenteInput.value;
            const total = totalInput.value;

            // Calcular el valor de la retención en la fuente
            const valorretefuente = total * retefuente;

            // Actualizar el campo de valor de la retención en la fuente
            valorretefuenteInput.value = valorretefuente.toFixed(2);
            /* valorretefuenteInput.value = valorretefuente.toFixed(2); */
        });

        // Agregar event listener para escuchar los cambios en el campo iva
        ivaInput.addEventListener("change", () => {
            // Obtener el valor de iva y total
            const iva = ivaInput.value;
            const total = totalInput.value;

            // Calcular el valor del iva
            const valoriva = (iva * total) / 100;

            // Actualizar el campo de valor del iva
            valorivaInput.value = valoriva.toFixed(2);
        });


        $("#proveedor_id").select2({
            language: "es",
            theme: "bootstrap4",
            placeholder: 'Seleccione un proveedor',
            allowClear: true,
            ajax: {
                url: "{{route('proveedoreslist')}}",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,

                    };
                },
                processResults: function(data) {
                    return {
                        results: $.map(data.array[0], function(datas) {

                            return {

                                text: datas.nombre,
                                id: datas.id

                            }
                        })
                    };
                },
                cache: true
            }
        });



        //Funcion que abre modal donde se debe registrar los datos de la factura o cuenta por pagar
        $('#create_cuenta').click(function() {
            $('#form-general')[0].reset();
            $('#proveedor_id').val('').trigger('change');
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



        //Función para abrir modal del detalle de la cuenta por pagar para registrar un pago total o parcial
        $(document).on('click', '.payment', function() {
            var id = $(this).attr('id');

            $.ajax({
                url: "/paycuentasxpagar/" + id + "/addpay",
                dataType: "json",
                success: function(data) {
                    $('#numerofactura_n').val(data.result.numerofactura);
                    $('#total_n').val(data.result.total);
                    $('#tipofactura_n').val(data.result.tipofactura);
                    $('#cuentasxpagar_id').val(id);

                    //$('.card-title').text('Registrar Pago');
                    $('#action_button').val('Add');
                    $('#action').val('Add');
                    $('#modal-payment').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                    $('#modal-payment').modal('show');
                }

            }).fail(function(jqXHR, textStatus, errorThrown) {

                if (jqXHR.status === 403) {

                    Manteliviano.notificaciones('No tienes permisos para realizar esta accion', 'Sistema cuentas por pagar', 'warning');
                }
            });

        });



        //Funcion para agregar pagos parciales y totales
        $('#form-general-p').on('submit', function(event) {
            event.preventDefault();
            var url = '';
            var method = '';
            var text = '';

            if ($('#action').val() == 'Add') {

                text = "Estás por registrar un pago"
                url = "{{route('cuentasxpagar_payment')}}";
                method = 'post';
            }
            if ($('#action').val() == 'Edit') {
                text = "Estás por actualizar un Nivel"
                var updateid = $('#id_eps_niveles').val();
                url = "/eps_niveles/" + updateid;
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
                                    '<h5><i class="icon fas fa-ban"></i> Mensaje fidem</h5>';

                                for (var count = 0; count < data.errors.length; count++) {
                                    html += '<p>' + data.errors[count] + '<p>';
                                }
                                html += '</div>';
                            }

                            if (data.success == 'okn1') {
                                $('#form-general-p')[0].reset();
                                $('#modal-payment').modal('hide');
                                $('#pcuentas').DataTable().ajax.reload();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Pago creado correctamente',
                                    showConfirmButton: false,
                                    timer: 1500

                                })

                            } else if (data.success == 'okn2') {
                                $('#form-general-p')[0].reset();
                                $('#modal-payment').modal('hide');
                                $('#pcuentas').DataTable().ajax.reload();
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'NIVEL actualizado correctamente',
                                    showConfirmButton: false,
                                    timer: 1500

                                })

                            }
                            $('#form_result_p').html(html)
                        }


                    });
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

<!--
    **FUNCIONES PARA VALIDACIONES DEL FORMULARIO REGISTRO DE PAGOS**
    función de validación en JavaScript para mostrar una alerta si el valor ingresado en el campo "valordelpago" es mayor que el valor del campo "total_n"
-->
<script>
    function validarPago() {
        var total = parseFloat(document.getElementById('total_n').value);
        var pago = parseFloat(document.getElementById('valordelpago').value);
        if (pago > total) {
            alert('El valor del pago no puede ser mayor que el total de la factura.');
            document.getElementById('valordelpago').value = '';
            return false;
        }
        return true;
    }

    /* function validarPago() {
    var valorPago = document.getElementById("valordelpago").value;
    var total = document.getElementById("total_n").value;
    if (parseInt(valorPago) > parseInt(total)) {
        var mensaje = "<div class='alert alert-danger'>El valor del pago no puede ser mayor al total de la factura</div>";
        document.getElementById("alerta").innerHTML = mensaje;
        return false;
    }
    return true;
} */
</script>
@endsection
