@extends("theme.$theme.layout")

@section('titulo')
    Informes
@endsection

@section('styles')
    <link href="{{ asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css") }}" rel="stylesheet"
        type="text/css" />


    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/select2-bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />



    <style>
        /* // Colores para las tarjetas widget */
        .card {
            background-color: #fff;
            border-radius: 10px;
            border: none;
            position: relative;
            margin-bottom: 30px;
            box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1), 0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1), 0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12), 0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
        }

        .l-bg-blue-dark-card {
            background-color: linear-gradient(to right, #373b44, #4286f4) !important;
            color: #fff;
        }



        .l-bg-cherry {
            background: linear-gradient(to right, #493240, #f09) !important;
            color: #fff;
        }

        .l-bg-blue-dark {
            background: linear-gradient(to right, #373b44, #4286f4) !important;
            color: #fff;
        }

        .l-bg-blued-dark {
            background: linear-gradient(to right, #0d182f, #0d61e9) !important;
            color: #fff;
        }

        .l-bg-green-dark {
            background: linear-gradient(to right, #0a504a, #38ef7d) !important;
            color: #fff;
        }

        .l-bg-orange-dark {
            background: linear-gradient(to right, #a86008, #ffba56) !important;
            color: #fff;
        }

        .l-bg-red-dark {
            background: linear-gradient(to right, #a80d08, #ff6756) !important;
            color: #fff;
        }

        .l-bg-yellow-dark {
            background: linear-gradient(to right, #c6d106, #9b9107) !important;
            color: #fff;
        }

        .card .card-statistic-3 .card-icon-large .fas,
        .card .card-statistic-3 .card-icon-large .far,
        .card .card-statistic-3 .card-icon-large .fab,
        .card .card-statistic-3 .card-icon-large .fal {
            font-size: 110px;
        }

        .card .card-statistic-3 .card-icon {
            text-align: center;
            line-height: 50px;
            margin-left: 15px;
            color: #000;
            position: absolute;
            right: -5px;
            top: 20px;
            opacity: 0.1;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }

        .l-bg-green {
            background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
            color: #fff;
        }

        .l-bg-orange {
            background: linear-gradient(to right, #f9900e, #ffba56) !important;
            color: #fff;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }



        /*btn flotante*/
        .btn-flotante {
            font-size: 14px;
            /* Cambiar el tamaño de la tipografia */
            text-transform: uppercase;
            /* Texto en mayusculas */
            font-weight: bold;
            /* Fuente en negrita o bold */
            color: #ffffff;
            /* Color del texto */
            border-radius: 40px 0 40px 40px;
            /* Borde del boton */
            letter-spacing: 2px;
            /* Espacio entre letras */
            background: linear-gradient(to right, #a80d08, #ff6756) !important;
            /* Color de fondo */
            /*background-color: #e9321e; /* Color de fondo */
            padding: 18px 30px;
            /* Relleno del boton */
            position: fixed;
            bottom: 40px;
            right: 40px;
            transition: all 300ms ease 0ms;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.5);
            z-index: 99;
            border: none;
            outline: none;
        }

        .btn-flotante:hover {
            background-color: #2c2fa5;
            /* Color de fondo al pasar el cursor */
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-5px);
        }

        @media only screen and (max-width: 600px) {
            .btn-flotante {
                font-size: 14px;
                padding: 12px 20px 0 0;
                bottom: 20px;
                right: 20px;
            }
        }

        /*btn flotante1*/
        .btn-flotante-1 {
            font-size: 14px;
            /* Cambiar el tamaño de la tipografia */
            text-transform: uppercase;
            /* Texto en mayusculas */
            font-weight: bold;
            /* Fuente en negrita o bold */
            color: #ffffff;
            /* Color del texto */
            border-radius: 40px 40px 40px 40px;
            /* Borde del boton */
            letter-spacing: 2px;
            /* Espacio entre letras */
            background: linear-gradient(to right, #a80d08, #ff6756) !important;
            /* Color de fondo */
            /*background-color: #e9321e; /* Color de fondo */
            padding: 18px 30px;
            /* Relleno del boton */
            position: fixed;
            bottom: 40px;
            right: 40px;
            transition: all 300ms ease 0ms;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.5);
            z-index: 99;
            border: none;
            outline: none;
        }

        .btn-flotante-1:hover {
            background-color: #2c2fa5;
            /* Color de fondo al pasar el cursor */
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-5px);
        }

        @media only screen and (max-width: 600px) {
            .btn-flotante-1 {
                font-size: 14px;
                padding: 12px 20px 0 0;
                bottom: 20px;
                right: 20px;
            }
        }
    </style>
@endsection


@section('scripts')
    <script src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
@endsection

@section('contenido')
    <div class="card-body col-mb-12" style="min-height: 543px;">
        <!-- Content Header (Page header) -->

        <div class="row">

            <div class="col-lg-12">
                <div class="card-header  ">
                    <h1 class="card-title" style="font-size: 40px; font-weight:bold;">Base Paliativos</h1>

                </div>
            </div><!-- /.col  -->

            @csrf
            <div class="card-body">
                <div class="row col-lg-12">


                    </tr>
                    </td>
                </div>
            </div><!-- /.row -->



        </div>
        <!-- /.content-header -->

        <!-- Main content -->


        <section class="content">

            @include('paliativos.cards.cards')

            @include('paliativos.tabs.IndexTabls')


        </section>
        <!-- /.content -->

        @include('paliativos.modal.modalPaciente')
        @include('paliativos.modal.modalindexaddseguimiento')
        @include('paliativos.modal.modalindexaddPro')
        @include('paliativos.modal.modalindexaddestado')
        @include('paliativos.modal.modalindexaddfallecido')
        @include('paliativos.modal.modalindexalertasresumen')

    </div>
@endsection

@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/datatables/jquery.dataTables.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js") }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/js/jquery-select2/select2.min.js') }}" type="text/javascript"></script>

    <script>
        $(document).ready(function() {

            let selectsub = "";
            let selectsub1 = "";

            function ocultar() {

                if ($('#type_obs').val() == "HOSPITALIZADO") {

                    selectsub = "$('#subtype_obs')";
                    selectsub1 = 13;



                    $("#subtype").css("display", "block");
                    $("#subtype_obs").prop("required", true);

                    $("#subtype1").css("display", "none")
                    $("#subtype_obs1").prop("required", false);


                    $('#subtype_obs').select2({
                        language: "es",
                        theme: "bootstrap4",
                        placeholder: 'Sub tipo',
                        allowClear: true,
                        ajax: {
                            url: "{{ route('selectlist') }}",
                            dataType: 'json',
                            delay: 250,
                            data: function(params) {
                                return {
                                    q: params.term,
                                    id: selectsub1
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
                    }).trigger('change');

                } else

                if ($('#type_obs').val() == "ALERTA") {

                    selectsub = "'#subtype_obs1'";
                    selectsub1 = 14;


                    $("#subtype1").css("display", "block");
                    $("#subtype_obs1").prop("required", true);

                    $("#subtype").css("display", "none")
                    $("#subtype_obs").prop("required", false);

                    $('#subtype_obs1').select2({
                        language: "es",
                        theme: "bootstrap4",
                        placeholder: 'Sub tipo',
                        allowClear: true,
                        ajax: {
                            url: "{{ route('selectlist') }}",
                            dataType: 'json',
                            delay: 250,
                            data: function(params) {
                                return {
                                    q: params.term,
                                    id: selectsub1
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
                    }).trigger('change');



                } else {
                    $("#subtype1").css("display", "none")
                    $("#subtype_obs1").prop("required", false);

                    $("#subtype").css("display", "none")
                    $("#subtype_obs").prop("required", false);


                }

            }

            $("#type_obs").change(ocultar);


            // Btn flotante
            $('.botonF1').hover(function() {

            })


            // funcion para cargar el select de usuario
            $.get('select_user',
                function(usuarios) {
                    $('#addpro').empty();
                    $('#addpro').append("<option value=''>---seleccione pro---</option>")
                    $.each(usuarios, function(usuarios1, value) {
                        $('#addpro').append("<option value='" + value.usuario + "'>" + value.pnombre +
                            ' ' +
                            value.papellido + ' ' + value.sapellido + "</option>")
                    });

                });

            //Consulta de datos de la tabla listas-detalle
            $("#type_document").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Tipo documento',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 9
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


            //Consulta de datos de la tabla listas-detalle
            $("#type").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Seleccione Ambito',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 11
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

            $("#ambito_type").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Seleccione Ambito',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 11
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


            //Consulta de datos de la tabla listas-detalle
            $("#state").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Seleccione Estado',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 10
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

            //Consulta de datos de la tabla listas-detalle
            $("#type_state").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Seleccione Estado',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 10
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

            //Consulta de datos de la tabla listas-detalle
            $("#stateb").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Seleccione Estado',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 10
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
            //Consulta de datos de la tabla listas-detalle
            $("#type_obs").select2({
                language: "es",
                theme: "bootstrap4",
                placeholder: 'Tipo observacion',
                allowClear: true,
                ajax: {
                    url: "{{ route('selectlist') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            q: params.term,
                            id: 12
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

            //Consulta de datos de la tabla listas-detalle

            //--------- select2 -------//
            $("#usuario").select2({
                theme: "bootstrap4"
            });

            $("#sex").select2({
                theme: "bootstrap4"
            });

            // Función para activar la función de la bd de paliativos
            $(document).on('click', '#buscarstate', function() {

                if ($('#stateb').val() != null) {

                    var statedateb = $('#stateb').val();
                    $('#basePaliativos').DataTable().destroy();
                    fill_datatable_bdpaliativos(statedateb);

                } else {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Debes seleccionar un estado',
                        showConfirmButton: false,
                        timer: 1500

                    })

                }

            });

            // Función para activar la función de la bd de paliativos
            $(document).on('click', '#custom-tabs-one-datos-de-bdpaliativos-tab', function() {
                $('#basePaliativos').DataTable().destroy();
                fill_datatable_bdpaliativos();
            });

            fill_datatable_bdpaliativos();

            // Función para pintar tabla de Paliativos

            function fill_datatable_bdpaliativos(statedateb = '') {

                var datatable = $('#basePaliativos').DataTable({
                    responsive: true,
                    language: idioma_espanol,
                    lengthMenu: [
                        [25, 50, 100, 500, -1],
                        [25, 50, 100, 500, "Mostrar Todo"]
                    ],
                    processing: true,
                    serverSide: true,
                    aaSorting: [
                        [1, "asc"],

                    ],

                    ajax: {
                        url: "{{ route('indexpaliativos') }}",
                        data: {
                            state: statedateb
                        }
                    },
                    columns: [
                        {
                            data: 'estado_pac',
                            orderable: false
                        },
                        {
                            data: 'action',
                            orderable: false
                        },
                        {
                            data: 'state'
                        },
                        {
                            data: 'estado_pac'
                        },
                        {
                            data: 'profesional' // Ips
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
                            data: 'diagnosis' //Diagnostico
                        },
                        {
                            data: 'municipality'
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
                            data: 'observacion',
                            name: 'observacion',
                            "width": "5%"
                        },
                        {
                            data: 'date_in'
                        },
                        {
                            data: 'dead'
                        },
                        {
                            data: 'date_dead'
                        },
                        {
                            data: 'type'
                        }
                    ],
                    // "columnDefs": [{
                    //         "width": "100%",
                    //         "targets": [17]
                    //     }


                    // ],

                    //Botones----------------------------------------------------------------------
                    "dom": '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',
                    buttons: [

                        {

                            extend: 'copyHtml5',
                            titleAttr: 'Copy',
                            className: "btn btn-info"


                        },
                        {

                            extend: 'excelHtml5',
                            titleAttr: 'Excel',
                            className: "btn btn-success"


                        },
                        {

                            extend: 'csvHtml5',
                            titleAttr: 'csv',
                            className: "btn btn-warning"


                        },
                        {

                            extend: 'pdfHtml5',
                            titleAttr: 'pdf',
                            className: "btn btn-primary"


                        }
                    ]
                });

                //datatable.columns.adjust().draw();

            }

            $(document).on('click', '#custom-tabs-one-datos-de-bdpaliativos-sincontac-tab', function() {
                $('#basePaliativosSinC').DataTable().destroy();
                fill_datatable_sincontac();
            });


            function fill_datatable_sincontac() {

                // Función para pintar tabla de Paliativos
                var datatable = $('#basePaliativosSinC').DataTable({
                    language: idioma_espanol,
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
                        url: "{{ route('indexpaliativossin') }}",
                    },
                    columns: [{
                            data: 'action',
                            orderable: false
                        },
                        {
                            data: 'id'
                        },
                        {
                            data: 'ips' // Ips
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
                            data: 'diagnosis' //Diagnostico
                        },
                        {
                            data: 'municipality'
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
                            data: 'observacion'
                        },
                        {
                            data: 'date_in'
                        },
                        {
                            data: 'dead'
                        },
                        {
                            data: 'date_dead'
                        },
                        {
                            data: 'state'
                        },
                        {
                            data: 'type'
                        }
                    ],
                    // "columnDefs": [{
                    //         "render": function(data, type, row) {
                    //             return data + ' ' + row["papellido"] + ' ' + row["sapellido"];
                    //         },
                    //         "targets": [2]
                    //     },
                    //     {
                    //         "visible": false,
                    //         "targets": [3]
                    //     },
                    //     {
                    //         "visible": false,
                    //         "targets": [4]
                    //     },
                    //     {
                    //         "visible": false,
                    //         "targets": [5]
                    //     }


                    // ],

                    //Botones----------------------------------------------------------------------
                    "dom": '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',
                    buttons: [

                        {

                            extend: 'copyHtml5',
                            titleAttr: 'Copy',
                            className: "btn btn-info"


                        },
                        {

                            extend: 'excelHtml5',
                            titleAttr: 'Excel',
                            className: "btn btn-success"


                        },
                        {

                            extend: 'csvHtml5',
                            titleAttr: 'csv',
                            className: "btn btn-warning"


                        },
                        {

                            extend: 'pdfHtml5',
                            titleAttr: 'pdf',
                            className: "btn btn-primary"


                        }
                    ]
                });

            }



            // Función para activar la carga de la función



            $(document).on('click', '#custom-tabs-one-datos-de-bdpaliativos-domi-tab', function() {
                $('#basePaliativosDomi').DataTable().destroy();
                fill_datatable_domi();
            });
            // Función para pintar tabla de Paliativos domiciliarios

            function fill_datatable_domi() {


                var datatable = $('#basePaliativosDomi').DataTable({
                    language: idioma_espanol,
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
                        url: "{{ route('indexpaliativosdomi') }}",
                    },
                    columns: [{
                            data: 'action',
                            orderable: false
                        },
                        {
                            data: 'id'
                        },
                        {
                            data: 'ips' // Ips
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
                            data: 'diagnosis'
                        },
                        {
                            data: 'municipality'
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
                            data: 'observacion'
                        },
                        {
                            data: 'date_in'
                        },
                        {
                            data: 'dead'
                        },
                        {
                            data: 'date_dead'
                        },
                        {
                            data: 'state'
                        },
                        {
                            data: 'type'
                        }
                    ],
                    // "columnDefs": [{
                    //         "render": function(data, type, row) {
                    //             return data + ' ' + row["papellido"] + ' ' + row["sapellido"];
                    //         },
                    //         "targets": [2]
                    //     },
                    //     {
                    //         "visible": false,
                    //         "targets": [3]
                    //     },
                    //     {
                    //         "visible": false,
                    //         "targets": [4]
                    //     },
                    //     {
                    //         "visible": false,
                    //         "targets": [5]
                    //     }


                    // ],

                    //Botones----------------------------------------------------------------------
                    "dom": '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',
                    buttons: [

                        {

                            extend: 'copyHtml5',
                            titleAttr: 'Copy',
                            className: "btn btn-info"


                        },
                        {

                            extend: 'excelHtml5',
                            titleAttr: 'Excel',
                            className: "btn btn-success"


                        },
                        {

                            extend: 'csvHtml5',
                            titleAttr: 'csv',
                            className: "btn btn-warning"


                        },
                        {

                            extend: 'pdfHtml5',
                            titleAttr: 'pdf',
                            className: "btn btn-primary"


                        }
                    ]
                });

            }


            // Función para activar la carga de la función



            $(document).on('click', '#custom-tabs-one-datos-de-bdpaliativos-upe-tab', function() {
                $('#basePaliativosUpe').DataTable().destroy();
                fill_datatable_upe();
            });
            // Función para pintar tabla de Paliativos domiciliarios

            function fill_datatable_upe() {


                var datatable = $('#basePaliativosUpe').DataTable({
                    language: idioma_espanol,
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
                        url: "{{ route('indexpaliativosupe') }}",
                    },
                    columns: [{
                            data: 'action',
                            orderable: false
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
                            data: 'paliativista1'
                        },
                        {
                            data: 'paliativista2'
                        },

                        {
                            data: 'experto1'
                        },
                        {
                            data: 'experto3'
                        },
                        {
                            data: 'experto2'
                        },
                        {
                            data: 'state'
                        },
                        {
                            data: 'type'
                        },

                        {
                            data: 'diasp1'
                        },
                        {
                            data: 'diasp1'
                        },
                        {
                            data: 'diase1'
                        },
                        {
                            data: 'diase2'
                        },

                        {
                            data: 'diase3'
                        }
                    ],
                    "columnDefs": [{
                            "render": function(data, type, row) {
                                return data + ' ' + row["fname"] + ' ' + row["sname"];
                            },
                            "targets": [1]
                        },
                        {
                            "visible": false,
                            "targets": [2]
                        },
                        {
                            "visible": false,
                            "targets": [3]
                        },
                        {
                            "visible": false,
                            "targets": [4]
                        },
                        {
                            "visible": false,
                            "targets": [14]
                        },
                        {
                            "visible": false,
                            "targets": [15]
                        },
                        {
                            "visible": false,
                            "targets": [16]
                        },
                        {
                            "visible": false,
                            "targets": [17]
                        },
                        {
                            "visible": false,
                            "targets": [18]
                        },
                    ],

                    "createdRow": function(row, data, dataIndex) {

                        if ((parseInt(data["diasp1"]) > 30 || data["diasp1"] == null ) && (parseInt(data["diasp2"]) > 30 || data["diasp2"] == null) && (parseInt(data["diase1"]) > 30  || data["diase1"] == null) && (parseInt(data["diase3"]) > 30  || data["diase3"] == null)
                        && (parseInt(data["diase2"]) > 30 || data["diase2"] == null)) {
                            //$($(row).find("td")[1]).addClass("btn btn-sm bg-danger rounded-lg");
                            $(row).css("background-color", "#ffa500");
                            $(row).addClass("warning");
                         }
                        // else if (parseInt(data["diasp2"]) > 30) {
                        //     $($(row).find("td")[1]).addClass("btn btn-sm bg-dark rounded-lg");
                        // }

                    },




                    //Botones----------------------------------------------------------------------
                    "dom": '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',
                    buttons: [

                        {

                            extend: 'copyHtml5',
                            titleAttr: 'Copy',
                            className: "btn btn-info"


                        },
                        {

                            extend: 'excelHtml5',
                            titleAttr: 'Excel',
                            className: "btn btn-success"


                        },
                        {

                            extend: 'csvHtml5',
                            titleAttr: 'csv',
                            className: "btn btn-warning"


                        },
                        {

                            extend: 'pdfHtml5',
                            titleAttr: 'pdf',
                            className: "btn btn-primary"


                        }
                    ]
                });

            }

            // Funciona para abrir modal con el form del nuevo paciente

            $('#agregar_paciente').click(function() {
                $('#form-general')[0].reset();
                $('.card-title-bd').text('Estas creando un nuevo paciente');
                $('#action_button').val('Add');
                $('#action').val('Add');
                $('#form_result').html('');
                $('#modal-paciente').modal({
                    backdrop: 'static',
                    keyboard: false
                });
                $('#modal-paciente').modal('show');



            });





            $('#form-general').on('submit', function(event) {
                event.preventDefault();
                var url = '';
                var method = '';
                var text = '';

                if ($('#action').val() == 'Add') {
                    text = "Estás por crear un paciente"
                    url = "{{ route('crear-paliativos') }}";
                    method = 'post';
                }

                if ($('#action').val() == 'Edit') {
                    text = "Estás por actualizar un paciente"
                    var updateid = $('#hidden_id').val();
                    url = "/actualizar-basepaliativos/" + updateid;
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
                                    $('#modal-paciente').modal('hide');
                                    $('#basePaliativos').DataTable().ajax.reload();
                                    fill_datatable1_resumen();
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'paciente creado correctamente',
                                        showConfirmButton: false,
                                        timer: 1500

                                    })
                                    // Manteliviano.notificaciones('cliente creado correctamente', 'Sistema Ventas', 'success');

                                } else if (data.success == 'ok1') {
                                    $('#form-general')[0].reset();
                                    $('#modal-paciente').modal('hide');
                                    $('#basePaliativos').DataTable().ajax.reload();
                                    fill_datatable1_resumen();
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'paciente actualizado correctamente',
                                        showConfirmButton: false,
                                        timer: 1500

                                    })
                                    // Manteliviano.notificaciones('cliente actualizado correctamente', 'Sistema Ventas', 'success');

                                }
                            }


                        }).fail(function(jqXHR, textStatus, errorThrown) {

                            if (jqXHR.status === 422) {

                                var error = jqXHR.responseJSON;

                                $.each(error, function(i, items) {

                                    var errores = [];
                                    errores.push(items.celular + '<br>');
                                    errores.push(items.activo + '<br>');
                                    errores.push(items.documento + '<br>');
                                    errores.push(items.email + '<br>');
                                    errores.push(items.papellido + '<br>');
                                    errores.push(items.pnombre + '<br>');
                                    errores.push(items.position + '<br>');
                                    errores.push(items.tipo_documento + '<br>');
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



            //Función para abrir modal y prevenir el cierre de agregar novedad

            $(document).on('click', '.novedad', function() {
                var idp = $(this).attr('id');
                $('#btnalert').empty();
                $('#totala').empty();
                $('#observaciones_chat').empty();
                $('#addobservacion').val('');
                $('#namesadd').empty();
                $('#documentsadd').empty();
                $('#evo_id').val(idp);
                $('#user_id').val({{ Session()->get('usuario_id') ?? '' }});

                $.ajax({
                    url: "editarbasepaliativos/" + idp + "",
                    dataType: "json",
                    success: function(data) {

                        var usuarios = data[1];

                        $.each(data[0].pacientebd, function(i, itembd) {

                            $.each([itembd.obspaliativos], function(i, itemobs1) {


                                var filtereda = itemobs1.filter(el => el
                                    .type_obs == 'ALERTA');

                                var total = filtereda.length;

                                $('#totala').append(
                                    '<span class="info-box-icon bg-danger"><i class="far fa-envelope"></i></span>' +
                                    '<div class="info-box-content">' +
                                    '<span class="info-box-text">Alertas</span>' +
                                    '<span class="info-box-number">' +
                                    total + '</span>' +
                                    '</div>'
                                );



                                $('#namesadd').append(itembd.surname + " " +
                                    itembd.fname);
                                $('#documentsadd').append(itembd.type_document +
                                    "-" +
                                    itembd.document);
                                $('.modal-title-addnovedadpaliativos').text(
                                    'Add Seguimiento');



                                $.each(filtereda, function(i, itemalert) {

                                    $('#btnalert').append(

                                        '<button name="btnalert1" id="' +
                                        itemalert.id +
                                        '" class="deletealert btn btn-outline-danger btn-block btn-sm">' +
                                        '<i class="fa fa-bell"> - </i> ' +
                                        itemalert.subtype_obs +
                                        '</button>'
                                    );
                                });

                            });
                        });



                        $.each(usuarios, function(i, items1) {
                            $.each(data[0].pacientebd, function(i, items) {
                                $.each(items.obspaliativos, function(i,
                                    itemobs) {

                                    var filtered = items1.filter(el =>
                                        el.id == itemobs.user_id);
                                    $.each(filtered, function(i,
                                        itemsusu) {
                                        $('#observaciones_chat')
                                            .append(
                                                '<div class="direct-chat-msg">' +
                                                '<div class="direct-chat-infos clearfix">' +
                                                '<span class="direct-chat-name float-left">' +
                                                'Usuario: ' +
                                                itemsusu
                                                .usuario +
                                                '&nbsp&nbsp</span>' +
                                                '<span class="direct-chat-name btn btn-xs btn-info float-left">' +
                                                itemobs
                                                .type_obs +
                                                '</span>' +
                                                '<span class="direct-chat-timestamp float-right">' +
                                                'Fecha creación: ' +
                                                itemobs
                                                .created_at +
                                                '</span>' +
                                                '</div>' +
                                                '<div class="direct-chat-text">' +
                                                'Novedad: ' +
                                                itemobs
                                                .observacion +
                                                '</div>' +
                                                '</div>');
                                    });
                                });

                            });
                        });



                        $('#modal-addnovedadpaliativos').modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                        $('#modal-addnovedadpaliativos').modal('show');
                    }


                }).fail(function(jqXHR, textStatus, errorThrown) {

                    if (jqXHR.status === 403) {

                        Manteliviano.notificaciones('No tienes permisos para realizar esta accion',
                            'Sistema Ventas', 'warning');

                    }
                });
            });

            $(document).on('click', '.deletealert', function(event) {
                event.preventDefault();
                var ida = $(this).attr('id');
                var url = "eliminaralerta/" + ida + "";
                var method = 'put';

                $.ajax({
                    url: url,
                    method: method,
                    data: {
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.repuesta == 'delete') {
                            $("#" + ida + "").remove('.deletealert');

                            Manteliviano.notificaciones('Alerta eliminada', 'Paliativos',
                                'success');


                        }

                    }

                })

            });

            $(document).on('click', '.deletealertt', function(event) {
                event.preventDefault();
                var ida = $(this).attr('id');
                var url = "eliminaralerta/" + ida + "";
                var method = 'put';

                $.ajax({
                    url: url,
                    method: method,
                    data: {
                        "_token": $("meta[name='csrf-token']").attr("content")
                    },
                    dataType: "json",
                    success: function(data) {
                        if (data.repuesta == 'delete') {
                            $('#baseAlertas').DataTable().ajax.reload();
                            fill_datatable1_resumen();
                            Manteliviano.notificaciones('Alerta eliminada', 'Paliativos',
                                'success');

                        }

                    }

                })

            });

            $(document).on('click', '.updateseguimiento', function(event) {
                event.preventDefault();

                var text = "Estás adicionando un seguimiento";
                var updateid = $('#action_estadou').val();
                var url = "{{ route('crearobspaliativos') }}";
                var method = 'post';

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
                            data: $('#form-generalseguimiento').serialize(),
                            dataType: "json",
                            success: function(data) {
                                if (data.success == 'ok') {
                                    $('#type_obs').val('').trigger('change');
                                    $('#subtype_obs').val('').trigger('change');
                                    $('#subtype_obs1').val('').trigger('change');
                                    $('#modal-addnovedadpaliativos').modal('hide');
                                    $('#basePaliativos').DataTable().ajax.reload();
                                    fill_datatable1_resumen();
                                    Manteliviano.notificaciones(
                                        'Novedad agregada correctamente',
                                        'Sistema Paliativos', 'success');

                                } else if (data.success == 'okEgreso') {
                                    $('#type_obs').val('').trigger('change');
                                    $('#subtype_obs').val('').trigger('change');
                                    $('#subtype_obs1').val('').trigger('change');
                                    $('#modal-addnovedadpaliativos').modal('hide');
                                    $('#basePaliativos').DataTable().ajax.reload();
                                    fill_datatable1_resumen();
                                    Manteliviano.notificaciones(
                                        'Novedad de Egreso del programa creada correctamente',
                                        'Sistema Paliativos', 'success');

                                } else if (data.errors) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: data.errors,
                                        showConfirmButton: false,
                                        timer: 1500

                                    })

                                }
                            }


                        })
                    }
                });


            });

            //Función para abrir modal y prevenir el cierre de agregar profesional


            $(document).on('click', '.asociarpro', function() {


                var idpaciente = $(this).attr('id');

                $('#namesaddpro').empty();
                $('#documentsaddpro').empty();
                $('#action_prou').val(idpaciente);


                $.ajax({
                    url: "editarbasepaliativos/" + idpaciente + "",
                    dataType: "json",
                    success: function(data) {

                        $.each(data[0].pacientebd, function(i, itembd) {
                            $('#namesaddpro').append(itembd.surname + " " + itembd
                                .fname);
                            $('#documentsaddpro').append(itembd.type_document + "-" +
                                itembd
                                .document);
                            $('.modal-title-addpropaliativos').text('Add Profesional');


                        });

                        $('#modal-addpropaliativos').modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                        $('#modal-addpropaliativos').modal('show');
                    }


                }).fail(function(jqXHR, textStatus, errorThrown) {

                    if (jqXHR.status === 403) {

                        Manteliviano.notificaciones('No tienes permisos para realizar esta accion',
                            'Sistema Ventas', 'warning');

                    }
                });
            });

            $(document).on('click', '.updatepro', function(event) {
                event.preventDefault();

                var profesional = $('#addpro').val();
                var text = "Estás asociando un paciente";
                var updateid = $('#action_prou').val();
                var url = "/actualizarpro/" + updateid;
                var method = 'put';

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
                            data: {
                                profesional: profesional,
                                "_token": $("meta[name='csrf-token']").attr("content")
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data.success == 'ok1') {
                                    $('#addpro').val('');
                                    $('#modal-addpropaliativos').modal('hide');
                                    $('#basePaliativos').DataTable().ajax.reload();
                                    fill_datatable1_resumen();
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Profesional asociado correctamente',
                                        showConfirmButton: false,
                                        timer: 1500

                                    })
                                    // Manteliviano.notificaciones('cliente creado correctamente', 'Sistema Ventas', 'success');

                                } else if (data.errors) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: data.errors,
                                        showConfirmButton: false,
                                        timer: 1500

                                    })

                                }
                            }


                        })
                    }
                });


            });
            //Función para abrir modal y prevenir el cierre de agregar estado

            $(document).on('click', '.addestado', function() {
                var idp = $(this).attr('id');

                $('#action_estadou').val(idp);
                $('#namesestado').empty();
                $('#documentestado').empty();


                $.ajax({
                    url: "editarbasepaliativos/" + idp + "",
                    dataType: "json",
                    success: function(data) {
                        $.each(data[0].pacientebd, function(i, itembd) {
                            $('#namesestado').append(itembd.surname + " " + itembd
                                .fname);
                            $('#documentestado').append(itembd.type_document + "-" +
                                itembd
                                .document);
                            var newstate = new Option(itembd.state, itembd.state, true,
                                true);

                            $('#type_state').append(newstate).trigger('change');

                            var newambito = new Option(itembd.type, itembd.type, true,
                                true);
                            $('#ambito_type').append(newambito).trigger('change');

                            $('.modal-title-addestadopaliativos').text(
                                'Add Estado y Ambito');


                        });
                        $('#modal-addestadopaliativos').modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                        $('#modal-addestadopaliativos').modal('show');
                    }


                }).fail(function(jqXHR, textStatus, errorThrown) {

                    if (jqXHR.status === 403) {

                        Manteliviano.notificaciones('No tienes permisos para realizar esta accion',
                            'Sistema Ventas', 'warning');

                    }
                });
            });

            $(document).on('click', '.updateestado', function(event) {
                event.preventDefault();

                var estado = $('#type_state').val();
                var ambito = $('#ambito_type').val();
                var text = "Estás actualizando el estado y ambito";
                var updateid = $('#action_estadou').val();
                var url = "/actualizarestado/" + updateid;
                var method = 'put';

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
                            data: {
                                state: estado,
                                type: ambito,
                                "_token": $("meta[name='csrf-token']").attr("content")
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data.success == 'ok1') {
                                    $('#type_state').val('').trigger('change');
                                    $('#ambito_type').val('').trigger('change');
                                    $('#modal-addestadopaliativos').modal('hide');
                                    $('#basePaliativos').DataTable().ajax.reload();
                                    fill_datatable1_resumen();
                                    Manteliviano.notificaciones(
                                        'Estado y ambito actualizado correctamente',
                                        'Sistema Paliativos', 'success');

                                } else if (data.success == 'dead') {

                                    Manteliviano.notificaciones(
                                        'El estado no puede se cambiado porque el paciente falleció',
                                        'Sistema Paliativos', 'error');

                                } else if (data.errors) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: data.errors,
                                        showConfirmButton: false,
                                        timer: 1500

                                    })

                                }
                            }


                        })
                    }
                });


            });

            //Función para abrir modal y prevenir el cierre de agregar fecha de fallecimiento

            $(document).on('click', '.addfallecido', function() {
                var idp = $(this).attr('id');

                $('#action_deadu').val(idp);
                $('#namesfallecido').empty();
                $('#documentsfallecido').empty();
                $("#date_dead").prop("readonly", false);

                $.ajax({
                    url: "editarbasepaliativos/" + idp + "",
                    dataType: "json",
                    success: function(data) {
                        $.each(data[0].pacientebd, function(i, itembd) {
                            $('#namesfallecido').append(itembd.surname + " " + itembd
                                .fname);
                            $('#documentsfallecido').append(itembd.type_document + "-" +
                                itembd
                                .document);

                            if (itembd.date_dead != null) {

                                $('#date_dead').val(itembd.date_dead);
                                $('#date_dead').prop("readonly", true);


                            } else {

                                $('#date_dead').val('');
                            }

                            $('.modal-title-addfallecidopaliativos').text(
                                'Add Fecha de fallecimiento');


                        });
                        $('#modal-addfallecidopaliativos').modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                        $('#modal-addfallecidopaliativos').modal('show');
                    }


                }).fail(function(jqXHR, textStatus, errorThrown) {

                    if (jqXHR.status === 403) {

                        Manteliviano.notificaciones('No tienes permisos para realizar esta accion',
                            'Sistema Ventas', 'warning');

                    }
                });
            });

            $(document).on('click', '.updatedead', function(event) {
                event.preventDefault();

                var dead = $('#dead').val();
                var datedead = $('#date_dead').val();
                var text = "Estás actualizando el estado y la fecha de fallecimiento";
                var updateid = $('#action_deadu').val();
                var url = "/actualizarfallecido/" + updateid;
                var method = 'put';

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
                            data: {
                                dead: dead,
                                date_dead: datedead,
                                state: "FALLECIDO",
                                "_token": $("meta[name='csrf-token']").attr("content")
                            },
                            dataType: "json",
                            success: function(data) {
                                if (data.success == 'ok1') {
                                    $('#date_dead').val('');
                                    $('#modal-addfallecidopaliativos').modal('hide');
                                    $('#basePaliativos').DataTable().ajax.reload();
                                    fill_datatable1_resumen();
                                    Manteliviano.notificaciones(
                                        'Fecha de fallecimiento actualizada correctamente',
                                        'Sistema Paliativos', 'success');

                                } else if (data.success == 'dead') {
                                    Manteliviano.notificaciones(
                                        'El paciente ya tiene fecha de fallecimiento',
                                        'Sistema Paliativos', 'error');

                                } else if (data.errors) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: data.errors,
                                        showConfirmButton: false,
                                        timer: 1500

                                    })

                                }
                            }


                        })
                    }
                });


            });



            $(document).on('click', '#res_alertas', function() {

                $('.modal-title-alertasresumen').text('Resumen de alertas');
                $('#modal-alertasresumen').modal({
                    backdrop: 'static',
                    keyboard: false
                });
                $('#modal-alertasresumen').modal('show');
                $('#baseAlertas').DataTable().destroy();
                fill_datatable1_resumenalarmas();
            });


            function fill_datatable1_resumenalarmas() {

                // Función para pintar tabla de alarmas

                var datatablea = $('#baseAlertas').DataTable({
                    language: idioma_espanol,
                    lengthMenu: [
                        [25, 50, 100, 500, -1],
                        [25, 50, 100, 500, "Mostrar Todo"]
                    ],
                    processing: true,
                    serverSide: true,
                    aaSorting: [
                        [9, "asc"]
                    ],
                    ajax: {
                        url: "{{ route('indexobspaliativos') }}",
                    },
                    columns: [{
                            data: 'action',
                            orderable: false
                        },
                        {
                            data: 'pacid.surname'
                        },
                        {
                            data: 'pacid.ssurname',
                            name: 'ssurname'
                        },
                        {
                            data: 'pacid.fname',
                            name: 'fname'
                        },
                        {
                            data: 'pacid.sname',
                            name: 'sname'
                        },
                        {
                            data: 'pacid.document'
                        },
                        {
                            data: 'observacion'
                        },
                        {
                            data: 'type_obs'
                        },
                        {
                            data: 'subtype_obs'
                        },
                        {
                            data: 'created_at'
                        }
                    ],
                    // "columnDefs": [
                    //            { "render": function(data, type, row) {

                    //                 var apellido1;
                    //                 var apellido2;
                    //                 var name;
                    //                 var name2;


                    //                 if (data == null) {
                    //                     apellido1 = '';
                    //                 } else {
                    //                     apellido1 = data;
                    //                 }

                    //                 if (row["pacid.ssurname"] == null) {
                    //                     apellido2 = '';
                    //                 } else {
                    //                     apellido2 = row["pacid.ssurname"];
                    //                 }
                    //                 if (row["pacid.fname"] == null) {
                    //                     name = '';
                    //                 } else {
                    //                     name = row["pacid.fname"];
                    //                 }
                    //                 if (row["pacid.sname"] == null) {
                    //                     name2 = '';
                    //                 } else {
                    //                     name2 = row["pacid.sname"];
                    //                 }

                    //                 return apellido1 + apellido2 + ' ' + name + ' ' + name2;
                    //             },
                    //             "targets": [1]},
                    //     {
                    //         "visible": false,
                    //         "targets": [2]
                    //     },
                    //     {
                    //         "visible": false,
                    //         "targets": [3]
                    //     },
                    //     {
                    //         "visible": false,
                    //         "targets": [4]
                    //     }


                    //],

                    //Botones----------------------------------------------------------------------
                    "dom": '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline">>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',
                    buttons: [

                        {

                            extend: 'copyHtml5',
                            titleAttr: 'Copy',
                            className: "btn btn-info"


                        },
                        {

                            extend: 'excelHtml5',
                            titleAttr: 'Excel',
                            className: "btn btn-success"


                        },
                        {

                            extend: 'csvHtml5',
                            titleAttr: 'csv',
                            className: "btn btn-warning"


                        },
                        {

                            extend: 'pdfHtml5',
                            titleAttr: 'pdf',
                            className: "btn btn-primary"


                        }
                    ]
                });

            }

            //función para traer el resumen de los widget del Detalle turnos

            fill_datatable1_resumen();

            function fill_datatable1_resumen() {
                $("#detalle").empty();
                $("#detalle1").empty();
                $("#detalle2").empty();
                $("#detalle3").empty();
                $("#detalle4").empty();
                $("#detalle5").empty();
                $("#detalle6").empty();
                $("#detalle7").empty();

                $.ajax({
                    url: "{{ route('informespaliativos') }}",
                    dataType: "json",
                    success: function(data) {



                        // Widget trae el total de Pacientes


                        $("#detalle").append(

                            '<div class="small-box shadow-lg l-bg-blue-dark">' +
                            '<div class="inner">' +
                            '<h5><i class="fas fa-diagnoses"></i> ' + data.result1 +
                            '<sup style="font-size: 20px"></sup></h5>' +
                            '<p><h5>TOTAL PACIENTES</h5></p>' +
                            '</div><div class="icon"><i class="fas fa-diagnoses"></i></div></div>'
                        );




                        //Widget Total Horas

                        // Widget trae el total de Fallecidos
                        $("#detalle1").append(
                            '<div class="small-box shadow-lg  l-bg-cherry">' +
                            '<div class="inner">' +
                            '<h5><i class="fas fa-bible"></i> ' + data.result +
                            '</h5>' +
                            '<p><h5>FALLECIDOS</h5></p>' +
                            '</div><div class="icon"><i class="fas fa-bible"></i></div></div>'
                        );






                        $("#detalle2").append(

                            '<div class="small-box shadow-lg l-bg-blued-dark">' +
                            '<div class="inner">' +
                            '<h5><i class="fas fa-handshake"></i> ' + data.alarmas +
                            '</h5>' +
                            '<p><h5>PACIENTES CON ALARMAS</h5></p>' +
                            '</div>' +
                            '<a href="#" id="res_alertas"><div class="icon"><i class="fas fa-handshake"></i>' +
                            '</div></a>' +
                            '</div>'

                        );

                        //Widget Horas Base


                        $("#detalle3").append(

                            '<div class="small-box shadow-lg l-bg-green-dark"><div class="inner">' +
                            '<h5><i class="fas fa-user-check"></i> ' + data.result3 +
                            '</h5>' +
                            '<p><h5>PACIENTES ACTIVOS<sup style="font-size: 20px"></sup></h5></p>' +
                            '</div><div class="icon"><i class="fas fa-user-check"></i></div></div>'
                        );



                        //Widget Horas Adicionales


                        $("#detalle4").append(

                            '<div class="small-box shadow-lg l-bg-cyan"><div class="inner">' +
                            '<h5><i class="fas fa-clinic-medical"></i> ' + data
                            .result2 + '</h5>' +
                            '<p><h5>PAC AMBULATORIOS<sup style="font-size: 20px"></sup></h5></p>' +
                            '</div><div class="icon"><i class="fas fa-clinic-medical"></i></div></div>'
                        );


                        //Widget Cantidad Hospitalizados


                        $("#detalle5").append(

                            '<div class="small-box shadow-lg l-bg-orange-dark"><div class="inner">' +
                            '<h5><i class="fas fa-ambulance"></i> ' + data.domiciliarios +
                            '</h5>' +
                            '<p><h5>TOTAL DOMICILIARIOS<sup style="font-size: 20px"></sup></h5></p>' +
                            '</div><div class="icon"><i class="fas fa-ambulance"></i></div></div>'
                        );



                        //Widget Horas Base


                        $("#detalle6").append(

                            '<div class="small-box shadow-lg l-bg-red-dark"><div class="inner">' +
                            '<h5><i class="fas fa-phone-slash"></i> ' + data.sinc +
                            '<i class="fas fa"></i><i class="fas fa-code"> </i>' + data.noacepta +
                            '</h5>' +
                            '<p><h6>PAC SIN CONTACTO Y NO QUIEREN ATENCIÓN<sup style="font-size: 10px"></sup></h6></p>' +
                            '</div><div class="icon"><i class="fas fa-phone-slash"></i></div></div>'
                        );



                        //Widget Horas Adicionales


                        $("#detalle7").append(

                            '<div class="small-box shadow-lg l-bg-yellow-dark"><div class="inner">' +
                            '<h5><i class="fas fa-door-open"></i> ' + data.egresados +
                            '</h5>' +
                            '<p><h5>PAC EGRESADOS<sup style="font-size: 20px"></sup></h5></p>' +
                            '</div><div class="icon"><i class="fas fa-door-open"></i></div></div>'
                        );


                    }
                })

            };



            // Función para calcular la edad de paciente


            function edad() {

                let hoy = new Date();

                if ($('#date_birth').val() != null) {

                    var nacimiento = new Date($('#date_birth').val());
                    let edad = hoy.getFullYear() - nacimiento.getFullYear();
                    let meses = hoy.getMonth() - nacimiento.getMonth();

                    if (meses < 0 || (meses === 0 && hoy.getDate() < nacimiento.getDate())) {
                        edad--;
                    }


                    $('#edad').val(edad);

                } else {

                    $('#edad').val();
                }
            }

            $("#date_birth").change(edad);


            $(document).on('click', '#custom-tabs-one-datos-de-bdpaliativos-upef-tab', function() {
                $('#basePaliativosUpef').DataTable().destroy();
                fill_datatable_upef();
            });
            // Función para pintar tabla de Paliativos domiciliarios

            function fill_datatable_upef() {


                var datatable = $('#basePaliativosUpef').DataTable({
                    language: idioma_espanol,
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
                        url: "{{ route('indexpaliativosupef') }}",
                    },
                    columns: [{
                            data: 'action',
                            orderable: false
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
                            data: 'paliativista1'
                        },
                        {
                            data: 'paliativista2'
                        },

                        {
                            data: 'experto1'
                        },
                        {
                            data: 'experto3'
                        },
                        {
                            data: 'experto2'
                        },
                        {
                            data: 'state'
                        },
                        {
                            data: 'type'
                        },

                        {
                            data: 'diasp1'
                        },
                        {
                            data: 'diasp1'
                        },
                        {
                            data: 'diase1'
                        },
                        {
                            data: 'diase2'
                        },

                        {
                            data: 'diase3'
                        }
                    ],
                    "columnDefs": [{
                            "render": function(data, type, row) {
                                return data + ' ' + row["fname"] + ' ' + row["sname"];
                            },
                            "targets": [1]
                        },
                        {
                            "visible": false,
                            "targets": [2]
                        },
                        {
                            "visible": false,
                            "targets": [3]
                        },
                        {
                            "visible": false,
                            "targets": [4]
                        },
                        {
                            "visible": false,
                            "targets": [14]
                        },
                        {
                            "visible": false,
                            "targets": [15]
                        },
                        {
                            "visible": false,
                            "targets": [16]
                        },
                        {
                            "visible": false,
                            "targets": [17]
                        },
                        {
                            "visible": false,
                            "targets": [18]
                        },
                    ],

                    "createdRow": function(row, data, dataIndex) {

                        if ((parseInt(data["diasp1"]) > 30 || data["diasp1"] == null ) && (parseInt(data["diasp2"]) > 30 || data["diasp2"] == null) && (parseInt(data["diase1"]) > 30  || data["diase1"] == null) && (parseInt(data["diase3"]) > 30  || data["diase3"] == null)
                        && (parseInt(data["diase2"]) > 30 || data["diase2"] == null)) {
                            //$($(row).find("td")[1]).addClass("btn btn-sm bg-danger rounded-lg");
                            $(row).css("background-color", "#ffa500");
                            $(row).addClass("warning");
                         }
                        // else if (parseInt(data["diasp2"]) > 30) {
                        //     $($(row).find("td")[1]).addClass("btn btn-sm bg-dark rounded-lg");
                        // }

                    },




                    //Botones----------------------------------------------------------------------
                    "dom": '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',
                    buttons: [

                        {

                            extend: 'copyHtml5',
                            titleAttr: 'Copy',
                            className: "btn btn-info"


                        },
                        {

                            extend: 'excelHtml5',
                            titleAttr: 'Excel',
                            className: "btn btn-success"


                        },
                        {

                            extend: 'csvHtml5',
                            titleAttr: 'csv',
                            className: "btn btn-warning"


                        },
                        {

                            extend: 'pdfHtml5',
                            titleAttr: 'pdf',
                            className: "btn btn-primary"


                        }
                    ]
                });

            }


            $(document).on('click', '#custom-tabs-one-datos-de-bdpaliativos-ua-tab', function() {
                $('#basePaliativosUa').DataTable().destroy();
                fill_datatable_uaf();
            });
            // Función para pintar tabla de Paliativos domiciliarios

            function fill_datatable_uaf() {


                var datatable = $('#basePaliativosUa').DataTable({
                    language: idioma_espanol,
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
                        url: "{{ route('indexpaliativosua') }}",
                    },
                    columns: [{
                            data: 'action',
                            orderable: false
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
                            data: 'auxiliar1'
                        },
                        {
                            data: 'auxiliar2'
                        },

                        {
                            data: 'auxiliar3'
                        },
                        {
                            data: 'auxiliar4'
                        },
                        {
                            data: 'auxiliar5'
                        },
                        {
                            data: 'auxiliar6'
                        },
                        {
                            data: 'state'
                        },
                        {
                            data: 'type'
                        },

                        {
                            data: 'diasa1'
                        },
                        {
                            data: 'diasa2'
                        },
                        {
                            data: 'diasa3'
                        },
                        {
                            data: 'diasa4'
                        },

                        {
                            data: 'diasa5'
                        },

                        {
                            data: 'diasa6'
                        }
                    ],
                    "columnDefs": [{
                            "render": function(data, type, row) {
                                return data + ' ' + row["fname"] + ' ' + row["sname"];
                            },
                            "targets": [1]
                        },
                        {
                            "visible": false,
                            "targets": [2]
                        },
                        {
                            "visible": false,
                            "targets": [3]
                        },
                        {
                            "visible": false,
                            "targets": [4]
                        },
                        {
                            "visible": false,
                            "targets": [19]
                        },
                        {
                            "visible": false,
                            "targets": [15]
                        },
                        {
                            "visible": false,
                            "targets": [16]
                        },
                        {
                            "visible": false,
                            "targets": [17]
                        },
                        {
                            "visible": false,
                            "targets": [18]
                        },
                    ],

                    "createdRow": function(row, data, dataIndex) {

                        if ((parseInt(data["diasp1"]) > 30 || data["diasp1"] == null ) && (parseInt(data["diasp2"]) > 30 || data["diasp2"] == null) && (parseInt(data["diase1"]) > 30  || data["diase1"] == null) && (parseInt(data["diase3"]) > 30  || data["diase3"] == null)
                        && (parseInt(data["diase2"]) > 30 || data["diase2"] == null)) {
                            //$($(row).find("td")[1]).addClass("btn btn-sm bg-danger rounded-lg");
                            $(row).css("background-color", "#ffa500");
                            $(row).addClass("warning");
                         }
                        // else if (parseInt(data["diasp2"]) > 30) {
                        //     $($(row).find("td")[1]).addClass("btn btn-sm bg-dark rounded-lg");
                        // }

                    },




                    //Botones----------------------------------------------------------------------
                    "dom": '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',
                    buttons: [

                        {

                            extend: 'copyHtml5',
                            titleAttr: 'Copy',
                            className: "btn btn-info"


                        },
                        {

                            extend: 'excelHtml5',
                            titleAttr: 'Excel',
                            className: "btn btn-success"


                        },
                        {

                            extend: 'csvHtml5',
                            titleAttr: 'csv',
                            className: "btn btn-warning"


                        },
                        {

                            extend: 'pdfHtml5',
                            titleAttr: 'pdf',
                            className: "btn btn-primary"


                        }
                    ]
                });

            }



        });


        // Variable con array de idioma de datatable
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
        };
    </script>
@endsection
