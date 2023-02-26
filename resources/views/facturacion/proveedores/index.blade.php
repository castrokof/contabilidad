@extends("theme.$theme.layout")

@section('titulo')
    Proveedores
@endsection
@section('styles')
    <link href="{{ asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css") }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/select2-bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('scripts')

@endsection

@section('contenido')
    @include('facturacion.proveedores.tablas.tablaIndexProveedores')
    @include('facturacion.proveedores.modal.modalProveedores')
@endsection



@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/datatables/jquery.dataTables.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js") }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/js/jquery-select2/select2.min.js') }}" type="text/javascript"></script>

    <script src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {



            // function ocultarsalario() {

            //     if ($('#type_contrat').val() == "CT") {


            //         $("#salaryform").css("display", "block");
            //         $("#salary").prop("required", true);

            //         $("#salarypsform").css("display", "none");
            //         $("#salary_ps").prop("required", false);


            //     } else {

            //         $("#salarypsform").css("display", "block");
            //         $("#salary_ps").prop("required", true);

            //         $("#salaryform").css("display", "none");
            //         $("#salary").prop("required", false);

            //     }

            // }

            // $('#type_contrat').change(ocultarsalario);


            //Consulta de datos de la tabla lista-detalle
            $("#pais").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Seleccione un pais',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 16
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data.array[0], function(datas) {

                                return {

                                    text: datas.nombre,
                                    id: datas.nombre

                                }
                            })
                        };
                    },
                    cache: true
                }
            });


            //Consulta de datos de la tabla lista-detalle
            $("#dpto").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Seleccione un dpto',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 15
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data.array[0], function(datas) {

                                return {

                                    text: datas.nombre,
                                    id: datas.nombre

                                }
                            })
                        };
                    },
                    cache: true
                }
            });


            //Consulta de datos de la tabla lista-detalle
            $("#ciudad").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Seleccione la ciudad',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 17
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data.array[0], function(datas) {

                                return {

                                    text: datas.nombre,
                                    id: datas.nombre

                                }
                            })
                        };
                    },
                    cache: true
                }
            });



            var myTable =
                $('#proveedores').DataTable({
                    language: idioma_espanol,
                    processing: true,
                    lengthMenu: [
                        [25, 50, 100, 500, -1],
                        [25, 50, 100, 500, "Mostrar Todo"]
                    ],
                    processing: true,
                    serverSide: true,
                    aaSorting: [
                        [1, "asc"]
                    ],

                    ajax: {
                        url: "{{route('proveedores')}}",
                    },
                    columns: [{
                            data: 'action',
                            name: 'action',
                            orderable: false
                        },
                        {
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'tipodocumento',
                            name: 'tipodocumento'
                        },
                        {
                            data: 'documento',
                            name: 'documento'
                        },
                        {
                            data: 'nombre',
                            name: 'nombre'
                        },
                        {
                            data: 'direccion',
                            name: 'direccion'
                        },
                        {
                            data: 'telefono',
                            name: 'telefono'
                        },
                        {
                            data: 'pais',
                            name: 'pais'
                        },
                        {
                            data: 'ciudad',
                            name: 'ciudad'
                        },
                        {
                            data: 'dpto',
                            name: 'dpto'
                        },
                        {
                            data: 'correo',
                            name: 'correo'
                        },
                        {
                            data: 'user_id',
                            name: 'user_id'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        }

                    ],

                    //Botones----------------------------------------------------------------------

                    "dom": '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',


                    buttons: [{

                            extend: 'copyHtml5',
                            titleAttr: 'Copiar Registros',
                            title: "seguimiento",
                            className: "btn  btn-outline-primary btn-sm"


                        },
                        {

                            extend: 'excelHtml5',
                            titleAttr: 'Exportar Excel',
                            title: "seguimiento",
                            className: "btn  btn-outline-success btn-sm"


                        },
                        {

                            extend: 'csvHtml5',
                            titleAttr: 'Exportar csv',
                            className: "btn  btn-outline-warning btn-sm"
                            //text: '<i class="fas fa-file-excel"></i>'

                        },
                        {

                            extend: 'pdfHtml5',
                            titleAttr: 'Exportar pdf',
                            className: "btn  btn-outline-secondary btn-sm"


                        }
                    ]

                    // "columnDefs": [{

                    //         "render": function(data, type, row) {
                    //             if (row["activo"] == 1) {
                    //                 return data + ' - Activo';
                    //             } else {

                    //                 return data + ' - Inactivo';

                    //             }

                    //         },
                    //         "targets": [11]
                    //     },
                    //],

                    // "createdRow": function(row, data, dataIndex) {
                    //     if (data["activo"] == 1) {
                    //         $($(row).find("td")[11]).addClass("btn btn-sm btn-success rounded-lg");
                    //     } else {
                    //         $($(row).find("td")[11]).addClass("btn btn-sm btn-warning rounded-lg");
                    //     }
                    //     if (data["type_salary"] == 1) {
                    //         $($(row).find("td")[15]).addClass("btn btn-sm btn-info rounded-lg");
                    //     } else {
                    //         $($(row).find("td")[15]).addClass("btn btn-sm btn-dark rounded-lg");
                    //     }

                    // }



                });

            //     });

            // });

            $('#create_proveedor').click(function() {
                $('#form-general')[0].reset();
                $('#email').prop('disabled', false).prop('required', true);
                $('.card-title').text('Estas creando un nuevo proveedor');
                $('#action_button').val('Add');
                $('#action').val('Add');
                $('#form_result').html('');
                $('#card-drawel').removeClass('card card-warning');
                $('#card-drawel').addClass('card card-info');
                $('#cardtabspro').removeClass('card card-warning card-tabs');
                $('#cardtabspro').addClass('card card-info card-tabs');
                $('#pais').val('').trigger('change');
                $('#dpto').val('').trigger('change');
                $('#ciudad').val('').trigger('change');

                $('#modal-proveedor').modal({
                    backdrop: 'static',
                    keyboard: false
                });



            });


            $(document).on('click', '.addproveedor', function(event) {
                event.preventDefault();
                var url = '';
                var method = '';
                var text = '';

                if ($('#action').val() == 'Add') {
                    text = "Estás por crear un proveedor"
                    url = "{{ route('proveedores_store') }}";
                    method = 'post';
                }

                if ($('#action').val() == 'Edit') {
                    text = "Estás por actualizar un proveedor"
                    var updateid = $('#hidden_id').val();
                    url = "proveedores/" + updateid;
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
                            data: $('#form-general').serialize(),
                            dataType: "json",
                            success: function(data) {
                                if (data.success == 'ok') {
                                    $('#form-general')[0].reset();
                                    $('#modal-proveedor').modal('hide');
                                    $('#proveedores').DataTable().ajax.reload();
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'proveedor creado correctamente',
                                        showConfirmButton: false,
                                        timer: 1500

                                    })
                                    // Manteliviano.notificaciones('cliente creado correctamente', 'Sistema Ventas', 'success');

                                } else if (data.success == 'ok1') {
                                    $('#form-general')[0].reset();
                                    $('#modal-proveedor').modal('hide');
                                    $('#proveedores').DataTable().ajax.reload();
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'proveedor actualizado correctamente',
                                        showConfirmButton: false,
                                        timer: 1500

                                    })
                                    // Manteliviano.notificaciones('cliente actualizado correctamente', 'Sistema Ventas', 'success');

                                } else if (data.errors != null) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: data.errors,
                                            showConfirmButton: false,
                                            timer: 3000
                                        })
                                    }
                            }


                        }).fail(function(jqXHR, textStatus, errorThrown) {

                            if (jqXHR.status === 422) {

                                var error = jqXHR.responseJSON;

                                $.each(error, function(i, items) {

                                    var errores = [];
                                    errores.push(items.tipodocumento + '<br>');
                                    errores.push(items.documento + '<br>');
                                    errores.push(items.nombre + '<br>');
                                    errores.push(items.telefono + '<br>');
                                    errores.push(items.direccion + '<br>');
                                    errores.push(items.correo + '<br>');
                                    errores.push(items.pais + '<br>');
                                    errores.push(items.dpto + '<br>');
                                    errores.push(items.ciudad + '<br>');
                                    errores.push(items.user_id + '<br>');

                                    console.log(errores);

                                    var filtered = errores.filter(function(el) {
                                        return el != "undefined<br>";
                                    });

                                    console.log(filtered);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'El formulario contiene errores',
                                        html: filtered,
                                        showConfirmButton: true,
                                        //timer: 1500
                                    })


                                    //Manteliviano.notificaciones(items, 'Sistema Ventas', 'warning');

                                });
                            }
                        });
                    }
                });


            });


            // Edición de proveedor

            $(document).on('click', '.edit_proveedor', function() {

                $('#form-general')[0].reset();
                var id = $(this).attr('id');

                $.ajax({
                    url: "editproveedores/" + id ,
                    dataType: "json",
                    success: function(data) {


                        // Primer form de información empleado
                        $('#tipodocumento').val(data.proveedor.tipodocumento);
                        $('#documento').val(data.proveedor.documento);
                        $('#nombre').val(data.proveedor.nombre);
                        $('#telefono').val(data.proveedor.telefono);
                        $('#direccion').val(data.proveedor.direccion);
                        $('#correo').val(data.proveedor.correo);

                        var newpais = new Option(data.proveedor.pais, data.proveedor.pais, true,
                            true);
                        $('#pais').append(newpais).trigger('change');

                        var newdpto = new Option(data.proveedor.dpto, data.proveedor.dpto, true,
                            true);
                        $('#dpto').append(newdpto).trigger('change');


                        var newcity = new Option(data.proveedor.ciudad, data.proveedor.ciudad, true,
                            true);
                        $('#ciudad').append(newcity).trigger('change');






                        $('#hidden_id').val(id)
                        $('.card-title').text("Editando proveedor: " + data.proveedor.nombre +
                            "-" + data.proveedor.documento);
                        $('#card-drawel').removeClass('card card-info');
                        $('#card-drawel').addClass('card card-warning');
                        $('#cardtabspro').removeClass('card card-info card-tabs');
                        $('#cardtabspro').addClass('card card-warning card-tabs');
                        $('#action_button').val('Editar').removeClass('btn-sucess')
                        $('#action_button').addClass('btn-danger')
                        $('#action_button').val('Edit');
                        $('#action').val('Edit');
                        $('#modal-proveedor').modal('show');

                    },



                }).fail(function(jqXHR, textStatus, errorThrown) {

                    if (jqXHR.status === 403) {

                        Manteliviano.notificaciones('No tienes permisos para realizar esta accion',
                            'Sistema cuentas por pagar', 'warning');

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
