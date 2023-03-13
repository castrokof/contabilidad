@extends("theme.$theme.layout")

@section('titulo')
    Ingresos
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
    @include('facturacion.ingresos.tablas.tablaIndexIngresos')
    @include('facturacion.ingresos.modal.modalIngresos')
    @include('facturacion.ingresos.modal.modalCuenta')
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

    //--------- validacion de input solo valores enteros -------//
  $(function() {

 $('.validanumericos').keypress(function(e) {
     if (isNaN(this.value + String.fromCharCode(e.charCode)))
      return false;
   })
   .on("cut copy paste", function(e) {
     e.preventDefault();
   });

 });



            //Consulta de datos de la tabla lista-detalle
            $("#cuenta").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Seleccione una cuenta',
                allowClear: true,
                ajax: {
                    url: "{{ route('cuentas') }}",
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

                                    text: datas.nombrecuenta,
                                    id: datas.id

                                }
                            })
                        };
                    },
                    cache: true
                }
            });







            $("#formadepago").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Seleccione forma pago',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 8
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


            // $("#sede_id").select2({
            //     language: "es",
            //     theme: "bootstrap4",
            //     placeholder: 'Seleccione una sede',
            //     allowClear: true,
            //     ajax: {
            //         url: "{{ route('selectlist') }}",
            //         dataType: 'json',
            //         delay: 250,
            //         data: function(params) {
            //             return {
            //                 q: params.term,
            //                 id: 2
            //             };
            //         },
            //         processResults: function(data) {
            //             return {
            //                 results: $.map(data.array[0], function(datas) {

            //                     return {

            //                         text: datas.nombre,
            //                         id: datas.nombre

            //                     }
            //                 })
            //             };
            //         },
            //         cache: true
            //     }
            // });


            $('#nombrecuenta').on('change', function() {

                $.get('selectlist1',{id:2}, function(sedes)
                {
                    $('#sede_id').empty();
                    $('#sede_id').append("<option value=''>---seleccione la sede---</option>")
                    $.each(sedes, function(sede, value){
                    $('#sede_id').append("<option value='" + sede + "'>" + value + "</option>")
                    });
                });


                });

            $("#tipoingreso").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Seleccione tipo in',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 7
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




            //Select para cargar los proveedores de la tabla

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



            var myTable =
                $('#ingresos').DataTable({
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
                        url: "{{route('ingresos')}}",
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
                            data: 'cuentas.nombrecuenta',
                            name: 'cuentas.nombrecuenta'
                        },
                        {
                            data: 'proveedor_id.nombre',
                            name: 'proveedor_id.nombre'
                        },
                        {
                            data: 'numeroingreso',
                            name: 'numeroingreso'
                        },
                        {
                            data: 'totalingreso',
                            name: 'totalingreso'
                        },
                        {
                            data: 'formadepago',
                            name: 'formadepago'
                        },
                        {
                            data: 'fechadeingreso',
                            name: 'fechadeingreso'
                        },
                        {
                            data: 'user_id.usuario',
                            name: 'user_id.usuario'
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


            $(document).on('click', '.create_cuenta', function () {
                $('#form-generalc')[0].reset();
                $('#cardtitle').text('Estas creando una nueva cuenta');
                $('#action_button').val('Add');
                $('#action').val('Add');
                $('#card-drawel1').removeClass('card card-warning');
                $('#card-drawel1').addClass('card card-info');
                $('#cardtabscuenta').removeClass('card card-warning card-tabs');
                $('#cardtabscuenta').addClass('card card-info card-tabs');
                $('#modal-cuenta').modal({
                    backdrop: 'static',
                    keyboard: false
                });
                $('#modal-cuenta').modal('show');

            });



            $('#create_ingreso').click(function() {
                $('#form-general')[0].reset();
                $('.card-title').text('Estas creando un nuevo ingreso');
                $('#action_button').val('Add');
                $('#action').val('Add');
                $('#form_result').html('');
                $('#card-drawel').removeClass('card card-warning');
                $('#card-drawel').addClass('card card-info');
                $('#cardtabspro').removeClass('card card-warning card-tabs');
                $('#cardtabspro').addClass('card card-info card-tabs');
                $('#cuenta').val('').trigger('change');
                $('#proveedor_id').val('').trigger('change');
                $('#tipoingreso').val('').trigger('change');
                $('#sede_ips').val('').trigger('change');

                $('#modal-ingreso').modal({
                    backdrop: 'static',
                    keyboard: false
                });



            });


            $(document).on('click', '.addingreso', function(event) {
                event.preventDefault();
                var url = '';
                var method = '';
                var text = '';

                if ($('#action').val() == 'Add') {
                    text = "Estás por crear un ingreso"
                    url = "{{ route('ingresos_store') }}";
                    method = 'post';
                }

                if ($('#action').val() == 'Edit') {
                    text = "Estás por actualizar un ingreso"
                    var updateid = $('#hidden_id').val();
                    url = "ingresos/" + updateid;
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
                        Swal.fire({
                            icon: "info",
                            title: 'Espere por favor !',
                            html: 'Realizando la creacion..',// add html attribute if you want or remove
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            willOpen: () => {
                                Swal.showLoading()
                            },
                        }),
                        $.ajax({
                            url: url,
                            method: method,
                            data: $('#form-general').serialize(),
                            dataType: "json",
                            success: function(data) {
                                if (data.success == 'ok') {
                                    $('#form-general')[0].reset();
                                    $('#modal-ingreso').modal('hide');
                                    $('#ingresos').DataTable().ajax.reload();
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'ingreso creado correctamente',
                                        showConfirmButton: false,
                                        timer: 1500

                                    })
                                    // Manteliviano.notificaciones('cliente creado correctamente', 'Sistema Ventas', 'success');

                                } else if (data.success == 'ok1') {
                                    $('#form-general')[0].reset();
                                    $('#modal-ingreso').modal('hide');
                                    $('#ingresos').DataTable().ajax.reload();
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'ingreso actualizado correctamente',
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
                                    errores.push(items.numeroingreso + '<br>');
                                    errores.push(items.tipoingreso + '<br>');
                                    errores.push(items.formadepago + '<br>');
                                    errores.push(items.fechadeingreso + '<br>');
                                    errores.push(items.totalingreso + '<br>');
                                    errores.push(items.observacion + '<br>');
                                    errores.push(items.cuenta_id + '<br>');
                                    errores.push(items.user_id + '<br>');
                                    errores.push(items.proveedor_id + '<br>');


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

            $(document).on('click', '.edit_ingreso', function() {

                $('#form-general')[0].reset();
                var id = $(this).attr('id');

                $.ajax({
                    url: "editingresos/" + id ,
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


   // Agregar una cuenta



   $(document).on('click', '.addcuenta', function(event) {
                event.preventDefault();
                var url = '';
                var method = '';
                var text = '';

                if ($('#action').val() == 'Add') {
                    text = "Estás por crear una cuenta"
                    url = "{{ route('cuentas_store') }}";
                    method = 'post';
                }

                if ($('#action').val() == 'Edit') {
                    text = "Estás por actualizar una cuenta"
                    var updateid = $('#hidden_id').val();
                    url = "cuentas/" + updateid;
                    method = 'put';
                }
                            Swal.fire({
                            icon: "info",
                            title: 'Espere por favor !',
                            html: 'Realizando la programación..',// add html attribute if you want or remove
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            willOpen: () => {
                                Swal.showLoading()
                            },
                        }),
                     $.ajax({
                            url: url,
                            method: method,
                            data: $('#form-generalc').serialize(),
                            dataType: "json",
                            success: function(data) {
                                if (data.success == 'ok') {
                                    $('#form-generalc')[0].reset();
                                    $('#modal-cuenta').modal('hide');
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Cuenta creada correctamente',
                                        showConfirmButton: false,
                                        timer: 1500

                                    })
                                    // Manteliviano.notificaciones('cliente creado correctamente', 'Sistema Ventas', 'success');

                                } else if (data.success == 'ok1') {
                                    $('#form-generalc')[0].reset();
                                    $('#modal-cuenta').modal('hide');
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Cuenta actualizado correctamente',
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
                                    errores.push(items.nombrecuenta + '<br>');
                                    errores.push(items.tipodecuenta + '<br>');
                                    errores.push(items.observacion + '<br>');
                                    errores.push(items.sede_id + '<br>');
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

                });








 // Función para multimodal

 (function($, window) {
            'use strict';

            var MultiModal = function(element) {
                this.$element = $(element);
                this.modalCount = 0;
            };

            MultiModal.BASE_ZINDEX = 1040;

            MultiModal.prototype.show = function(target) {
                var that = this;
                var $target = $(target);
                var modalIndex = that.modalCount++;

                $target.css('z-index', MultiModal.BASE_ZINDEX + (modalIndex * 20) + 10);

                // Bootstrap triggers the show event at the beginning of the show function and before
                // the modal backdrop element has been created. The timeout here allows the modal
                // show function to complete, after which the modal backdrop will have been created
                // and appended to the DOM.
                window.setTimeout(function() {
                    // we only want one backdrop; hide any extras
                    if (modalIndex > 0)
                        $('.modal-backdrop').not(':first').addClass('hidden');

                    that.adjustBackdrop();
                });
            };

            MultiModal.prototype.hidden = function(target) {
                this.modalCount--;

                if (this.modalCount) {
                    this.adjustBackdrop();
                    // bootstrap removes the modal-open class when a modal is closed; add it back
                    $('body').addClass('modal-open');
                }
            };

            MultiModal.prototype.adjustBackdrop = function() {
                var modalIndex = this.modalCount - 1;
                $('.modal-backdrop:first').css('z-index', MultiModal.BASE_ZINDEX + (modalIndex * 20));
            };

            function Plugin(method, target) {
                return this.each(function() {
                    var $this = $(this);
                    var data = $this.data('multi-modal-plugin');

                    if (!data)
                        $this.data('multi-modal-plugin', (data = new MultiModal(this)));

                    if (method)
                        data[method](target);
                });
            }

            $.fn.multiModal = Plugin;
            $.fn.multiModal.Constructor = MultiModal;

            $(document).on('show.bs.modal', function(e) {
                $(document).multiModal('show', e.target);
            });

            $(document).on('hidden.bs.modal', function(e) {
                $(document).multiModal('hidden', e.target);
            });
        }(jQuery, window));


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
