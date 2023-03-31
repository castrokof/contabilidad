@extends("theme.$theme.layout")

@section('titulo')
    Informes Financieros
@endsection
@section('styles')
    <link href="{{ asset("assets/$theme/plugins/fontawesome-free/css/all.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/$theme/plugins/datatables-bs4/css/dataTables.bootstrap4.css") }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset("assets/$theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset("assets/$theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset("assets/$theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}"
        rel="stylesheet" type="text/css" />

    <link href="{{ asset("assets/$theme/plugins/daterangepicker/daterangepicker.css") }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset("assets/$theme/plugins/summernote/summernote-bs4.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("assets/$theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/js/gijgo-combined-1.9.13/css/gijgo.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('assets/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" /> --}}



    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }


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
    </style>
@endsection


@section('scripts')
@endsection

@section('contenido')
    <div class="content-wrapper" style="min-height: 819px;">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
                @csrf
                <div class="card-body">
                    <div class="row col-lg-12">

                        <div class="form-group row col-lg-12">
                            <div class="col-md-6">
                                <label for="fechaini" class="col-xs-2 control-label requerido">Fecha de
                                    Informes</label>
                                <div class="form-group row">
                                    <input type="date" name="fechaini" id="fechaini" class="form-control col-md-6"
                                        value="">
                                    <input type="date" name="fechafin" id="fechafin" class="form-control col-md-6"
                                        value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label>&nbsp;</label>
                                <div class="form-group row">
                                    <button type="submit" name="reset" id="reset"
                                        class="btn btn-default btn-xl col-md-6">Limpiar</button>
                                    <button type="submit" name="buscar" id="buscar"
                                        class="btn btn-success btn-xl col-md-6">Buscar</button>
                                </div>
                            </div>

                        </div>


                        </tr>
                        </td>
                    </div>
                </div>

            </div>
        </div>


        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-6" id="detalle">
                            </div>
                            <div class="col-lg-3 col-6" id="detalle1">
                            </div>
                            <div class="col-lg-3 col-6" id="detalle2">
                            </div>
                            <div class="col-lg-3 col-6" id="detalle3">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-6">

                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>$ 50000000</h3>
                                <p>Ingresos totales</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53</h3>
                                <p>Pagos Realizados</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44<sup style="font-size: 20px">%</sup></h3>
                                <p> Ingresos vs Pagos</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>
                                <p>Pagos Pendientes</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div> --}}

                </div>


                <div class="row">

                    <section class="col-lg-6 connectedSortable ui-sortable">

                        <div class="card" style="position: relative; left: 0px; top: 0px;">
                            <div class="card-header ui-sortable-handle" style="cursor: move;">
                                <h3 class="card-title">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Ingresos
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        {{-- <li class="nav-item">
                                            <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Ingresos</a>
                                        </li> --}}
                                        <li class="nav-item">
                                            <a class="nav-link " href="#sales-chart" data-toggle="tab">Ingreso</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content p-0">

                                    {{-- <div class="chart tab-pane active" id="revenue-chart"
                                        style="position: relative; height: 300px;">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="revenue-chart-canvas" height="300"
                                            style="height: 300px; display: block; width: 845px;" width="845"
                                            class="chartjs-render-monitor"></canvas>
                                    </div> --}}
                                    <div class="chart tab-pane active" id="sales-chart"
                                        style="position: relative; height: 300px;">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="sales-chart-canvas" height="300"
                                            style="height: 300px; display: block; width: 845px;"
                                            class="chartjs-render-monitor" width="845"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Pagos x Sede</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="barChart"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 367px;"
                                        width="367" height="250" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>

                        </div>





                    </section>


                    <section class="col-lg-6 connectedSortable ui-sortable">


                        {{-- <div class="card bg-gradient-lite">
                            <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                                <h3 class="card-title">
                                    <i class="fas fa-th mr-1"></i>
                                    Sales Graph
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas class="chart chartjs-render-monitor" id="line-chart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 845px;"
                                    width="845" height="250"></canvas>
                            </div>



                        </div> --}}
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Clasificacion de pagos</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="barChart1"
                                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 367px;"
                                        width="367" height="250" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>

                        </div>

                        <div class="card" style="position: relative; left: 0px; top: 0px;">
                            <div class="card-header ui-sortable-handle" style="cursor: move;">
                                <h3 class="card-title">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Ingresos
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#revenue-chart"
                                                data-toggle="tab">Ingresos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#sales-chart" data-toggle="tab">Ingreso</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="card-body">
                                <div class="tab-content p-0">

                                    <div class="chart tab-pane active" id="revenue-chart"
                                        style="position: relative; height: 300px;">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="revenue-chart-canvas" height="300"
                                            style="height: 300px; display: block; width: 845px;" width="845"
                                            class="chartjs-render-monitor"></canvas>
                                    </div>
                                    <div class="chart tab-pane" id="sales-chart"
                                        style="position: relative; height: 300px;">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas id="sales-chart-canvas" height="300"
                                            style="height: 300px; display: block; width: 845px;"
                                            class="chartjs-render-monitor" width="845">
                                        </canvas>
                                    </div>
                                </div>
                            </div> --}}
                        </div>



                    </section>

                </div>

            </div>
        </section>

    </div>
@endsection

@section('scriptsPlugins')
    <script src="{{ asset("assets/$theme/plugins/jquery-ui/jquery-ui.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js") }}" type="text/javascript">
    </script>

    <script src="{{ asset("assets/$theme/plugins/datatables/jquery.dataTables.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js") }}" type="text/javascript">
    </script>
    <script src="{{ asset("assets/$theme/plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"
        type="text/javascript"></script>

    <script src="{{ asset('assets/js/gijgo-combined-1.9.13/js/gijgo.min.js') }}" type="text/javascript"></script>



    <script src="{{ asset("assets/$theme/plugins/chart.js/Chart.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/sparklines/sparkline.js") }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/gijgo-combined-1.9.13/js/gijgo.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/chart.js/Chart.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery-select2/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/jquery-knob/jquery.knob.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/moment/moment.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/daterangepicker/daterangepicker.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}"
        type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/summernote/summernote-bs4.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}"
        type="text/javascript"></script>
    {{-- <script src="{{ asset("assets/$theme/dist/js/pages/dashboard.js") }}" type="text/javascript"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>



    <script>
        $.widget.bridge('uibutton', $.ui.button)

        $(document).ready(function() {

            fill_datatable1_resumen();
            fill_datatable1_donut();
            fill_datatable1_graph();
            fill_graph_clasificacion();


            // Callback para filtrar los datos de detalle
            $('#buscar').click(function() {

                fechaini = $('#fechaini').val();
                fechafin = $('#fechafin').val();
                // usuario = $('#usuario').val();


                if (fechaini != '' && fechafin != '') {


                    fill_datatable1_resumen(fechaini, fechafin);
                    fill_datatable1_donut(fechaini, fechafin);
                    fill_datatable1_graph(fechaini, fechafin);
                    fill_graph_clasificacion(fechaini, fechafin);

                } else {

                    Swal.fire({
                        title: 'Debes digitar fecha inicial y fecha final',
                        icon: 'warning',
                        buttons: {
                            cancel: "Cerrar"

                        }
                    })
                }

            });




            // Función para limpiar los inputs
            $('#reset').click(function() {
                $('#fechaini').val('');
                $('#fechafin').val('');
                fill_datatable1_resumen();
                fill_datatable1_donut();
                fill_datatable1_graph();
                fill_graph_clasificacion();

            });




            function fill_datatable1_resumen(fechaini = '', fechafin = '') {
                $("#detalle").empty();
                $("#detalle1").empty();
                $("#detalle2").empty();
                $("#detalle3").empty();
                // $("#detalle4").empty();
                //$("#detalle5").empty();
                $.ajax({
                    url: "{{ route('informe') }}",
                    data: {
                        fechaini: fechaini,
                        fechafin: fechafin
                    },
                    dataType: "json",
                    success: function(data) {
                        //Widget Total Horas
                        $.each(data.ingresos, function(i, item) {
                            var a = item.totalingreso;
                            if (a == null) {
                                a = 0;
                            } else {
                                a = item.totalingreso;
                            }

                            $("#detalle").append(
                                '<div class="small-box shadow-lg  l-bg-cherry"><div class="inner">' +
                                '<h5>TOTAL INGRESOS</h5>' +
                                '<p><h5><i class="fas fa-dollar-sign"></i> ' + a +
                                '</h5></p>' +
                                '</div><div class="icon"><i class="fas fa-money-bill-alt"></i></div></div>'

                            );

                        })

                        $.each(data.pagost, function(i, item) {
                            var a = item.totalpagos;
                            if (a == null) {
                                a = 0;
                            } else {
                                a = item.totalpagos;
                            }
                            $("#detalle1").append(


                                '<div class="small-box shadow-lg l-bg-red-dark"><div class="inner">' +
                                '<h5>TOTAL PAGOS</h5>' +
                                '<p><h5><i class="fas fa-dollar-sign"></i> ' + a +
                                '</h5></p>' +
                                '</div><div class="icon"><i class="fas fa-money-bill-alt"></i></div></div>'

                            );

                        })

                          $("#detalle2").append(


                                '<div class="small-box shadow-lg l-bg-green-dark"><div class="inner">' +
                                '<h5>% PAGOS VS INGRESOS T</h5>' +
                                '<p><h5><i class="fas fa-balance-scale"></i> ' + data.diferencia + '%'+ ' vs ' + data.diferencia2 + '%'+
                                '</h5></p>' +
                                '</div><div class="icon"><i class="fas fa-money-bill-alt"></i></div></div>'

                            );

                            $("#detalle3").append(


                            '<div class="small-box shadow-lg l-bg-blue-dark"><div class="inner">' +
                            '<h5>GASTO X SEDE</h5>' +
                            '<p><h6><i class="fas fa-hospital">Fidem1 -- </i> ' + data.fidem1 + ' -- '+
                            '<i class="far fa-hospital">Fidem2 -- </i> ' + data.fidem2 +
                            '</h6></p>' +
                            '</div><div class="icon"><i class="fas fa-money-bill-alt"></i></div></div>'

                            );


                    }
                })
            }

            //Function for sortable
            'use strict'

            // Make the dashboard widgets sortable Using jquery UI
            $('.connectedSortable').sortable({
                placeholder: 'sort-highlight',
                connectWith: '.connectedSortable',
                handle: '.card-header, .nav-tabs',
                forcePlaceholderSize: true,
                zIndex: 999999
            })
            $('.connectedSortable .card-header, .connectedSortable .nav-tabs-custom').css('cursor',
                'move')

            // jQuery UI sortable for the todo list
            $('.todo-list').sortable({
                placeholder: 'sort-highlight',
                handle: '.handle',
                forcePlaceholderSize: true,
                zIndex: 999999
            })




            /* jQueryKnob */
            $('.knob').knob()


            // /* Chart.js Charts */
            // // Sales chart
            // var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');
            // //$('#revenue-chart').get(0).getContext('2d');

            // var salesChartData = {
            //     labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            //     datasets: [{
            //             label: 'Digital Goods',
            //             backgroundColor: 'rgba(60,141,188,0.9)',
            //             borderColor: 'rgba(60,141,188,0.8)',
            //             pointRadius: false,
            //             pointColor: '#3b8bba',
            //             pointStrokeColor: 'rgba(60,141,188,1)',
            //             pointHighlightFill: '#fff',
            //             pointHighlightStroke: 'rgba(60,141,188,1)',
            //             data: [28, 48, 40, 19, 86, 27, 90]
            //         },
            //         {
            //             label: 'Electronics',
            //             backgroundColor: 'rgba(210, 214, 222, 1)',
            //             borderColor: 'rgba(210, 214, 222, 1)',
            //             pointRadius: false,
            //             pointColor: 'rgba(210, 214, 222, 1)',
            //             pointStrokeColor: '#c1c7d1',
            //             pointHighlightFill: '#fff',
            //             pointHighlightStroke: 'rgba(220,220,220,1)',
            //             data: [65, 59, 80, 81, 56, 55, 40]
            //         },
            //     ]
            // }

            // var salesChartOptions = {
            //     maintainAspectRatio: false,
            //     responsive: true,
            //     legend: {
            //         display: false
            //     },
            //     scales: {
            //         xAxes: [{
            //             gridLines: {
            //                 display: false,
            //             }
            //         }],
            //         yAxes: [{
            //             gridLines: {
            //                 display: false,
            //             }
            //         }]
            //     }
            // }

            // // This will get the first returned node in the jQuery collection.
            // var salesChart = new Chart(salesChartCanvas, {
            //     type: 'line',
            //     data: salesChartData,
            //     options: salesChartOptions
            // })

            // Donut Chart


            function fill_datatable1_donut(fechaini = '', fechafin = '') {

                var datas = [];
                var labels1 = [];

                $.ajax({
                    url: "{{ route('informe') }}",
                    data: {
                        fechaini: fechaini,
                        fechafin: fechafin
                    },
                    dataType: "json",
                    success: function(data) {


                        $.each(data.labels, function(i, item) {
                            var a = item.nombrecuenta;
                            labels1.push(a);

                        })

                        $.each(data.cuentas, function(i, item) {
                            var a = item.ingresoxcuenta;
                            datas.push(a);
                        })
                        console.log(labels1);
                        console.log(datas);

                        var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')

                        var pieData = {

                            labels: labels1,
                            datasets: [{
                                data: datas,
                                backgroundColor: ['#f56954', '#00a65a',
                                    'rgba(60,141,188,1)'],
                            }]
                        }

                        var pieOptions = {
                            legend: {
                                display: true
                            },
                            maintainAspectRatio: false,
                            responsive: true,
                        }


                        //Create pie or douhnut chart
                        // You can switch between pie and douhnut using the method below.
                        var pieChart = new Chart(pieChartCanvas, {
                            type: 'doughnut',
                            data: pieData,
                            options: pieOptions
                        });


                    }



                })






            }


            // function fill_datatable1_graph(fechaini = '', fechafin = '') {

            //     var datasede = [];
            //     var labelsede = [];

            //     $.ajax({
            //         url: "{{ route('informe') }}",
            //         data: {
            //             fechaini: fechaini,
            //             fechafin: fechafin
            //         },
            //         dataType: "json",
            //         success: function(data) {


            //             $.each(data.labelsede, function(i, item) {
            //                 var a = item.nombresede;
            //                 labelsede.push(a);

            //             })

            //             $.each(data.cuentasxsede, function(i, item) {
            //                 var a = item.pagoxsede;
            //                 datasede.push(a);
            //             })

            //         }
            //     })


            //     console.log(labelsede);
            //     console.log(datasede);
            //     // Sales graph chart
            //     var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d');
            //     //$('#revenue-chart').get(0).getContext('2d');

            //     var salesGraphChartData = {
            //         labels: labelsede,
            //         datasets: [{
            //             label: 'Total Pago',
            //             fill: true,
            //             borderWidth: 2,
            //             lineTension: 0,
            //             spanGaps: true,
            //             borderColor: '#efefef',
            //             pointRadius: 3,
            //             pointHoverRadius: 7,
            //             pointColor: '#efefef',
            //             pointBackgroundColor: '#efefef',
            //             data: datasede
            //         }]
            //     }

            //     var salesGraphChartOptions = {
            //         maintainAspectRatio: false,
            //         responsive: true,
            //         legend: {
            //             display: false,
            //         },
            //         scales: {
            //             xAxes: [{
            //                 ticks: {
            //                     fontColor: '#efefef',
            //                 },
            //                 gridLines: {
            //                     display: false,
            //                     color: '#efefef',
            //                     drawBorder: false,
            //                 }
            //             }],
            //             yAxes: [{
            //                 ticks: {
            //                     stepSize: 5000,
            //                     fontColor: '#efefef',
            //                 },
            //                 gridLines: {
            //                     display: true,
            //                     color: '#efefef',
            //                     drawBorder: false,
            //                 }
            //             }]
            //         }
            //     }

            //     // This will get the first returned node in the jQuery collection.
            //     var salesGraphChart = new Chart(salesGraphChartCanvas, {
            //         type: 'bar',
            //         data: salesGraphChartData,
            //         options: salesGraphChartOptions
            //     })


            // }

            function fill_datatable1_graph(fechaini = '', fechafin = '') {

                var datasede = [];
                var labelsede = [];

                $.ajax({
                    url: "{{ route('informe') }}",
                    data: {
                        fechaini: fechaini,
                        fechafin: fechafin
                    },
                    dataType: "json",
                    success: function(data) {


                       // $.each(data.labelsede, function(i, item) {

                            var a = 'FIDEM1';
                            var d = 'FIDEM2';
                            labelsede.push(a);
                            labelsede.push(d);
                       // })

                        //$.each(data.cuentasxsede, function(i, item) {
                            var b = data.fidem1;
                            var c = data.fidem2;
                            datasede.push(b);
                            datasede.push(c);
                        //})


                        console.log(labelsede);
                        console.log(datasede);
                        //-------------
                        //- BAR CHART -
                        //-------------
                        var areaChartData = {
                            labels: labelsede,
                            datasets: [{
                                    label: 'Pago x Sede',
                                    backgroundColor: 'rgba(60,141,188,0.9)',
                                    borderColor: 'rgba(60,141,188,0.8)',
                                    pointRadius: false,
                                    pointColor: '#3b8bba',
                                    pointStrokeColor: 'rgba(60,141,188,1)',
                                    pointHighlightFill: '#fff',
                                    pointHighlightStroke: 'rgba(60,141,188,1)',
                                    data: datasede
                                },
                                // {
                                // label               : 'Electronics',
                                // backgroundColor     : 'rgba(210, 214, 222, 1)',
                                // borderColor         : 'rgba(210, 214, 222, 1)',
                                // pointRadius         : false,
                                // pointColor          : 'rgba(210, 214, 222, 1)',
                                // pointStrokeColor    : '#c1c7d1',
                                // pointHighlightFill  : '#fff',
                                // pointHighlightStroke: 'rgba(220,220,220,1)',
                                // data                : [65, 59, 80, 81, 56, 55, 40]
                                // },
                            ]
                        }
                        var barChartCanvas = $('#barChart').get(0).getContext('2d')
                        var barChartData = areaChartData
                        var temp0 = areaChartData.datasets[0]
                        //var temp1 = areaChartData.datasets[1]
                        barChartData.datasets[0] = temp0
                        //barChartData.datasets[1] = temp0

                        var barChartOptions = {
                            responsive: true,
                            maintainAspectRatio: false,
                            datasetFill: false
                        }

                        new Chart(barChartCanvas, {
                            type: 'bar',
                            data: barChartData,
                            options: barChartOptions
                        })




                    }
                })




            }


            function fill_graph_clasificacion(fechaini = '', fechafin = '') {

                var datasede = [];
                var labelsede = [];

                $.ajax({
                    url: "{{ route('informe') }}",
                    data: {
                        fechaini: fechaini,
                        fechafin: fechafin
                    },
                    dataType: "json",
                    success: function(data) {


                        $.each(data.clasificacion, function(i, item) {
                            var a = item.future5;
                            var b = item.pagoxclasificacion;
                            labelsede.push(a);
                            datasede.push(b);

                        })


                        console.log(labelsede);
                        console.log(datasede);
                        //-------------
                        //- BAR CHART -
                        //-------------
                        var areaChartData = {
                            labels: labelsede,
                            datasets: [{
                                    label: 'Clasificacion x Pago',
                                    backgroundColor: 'rgba(60,141,188,0.9)',
                                    borderColor: 'rgba(60,141,188,0.8)',
                                    pointRadius: false,
                                    pointColor: '#3b8bba',
                                    pointStrokeColor: 'rgba(60,141,188,1)',
                                    pointHighlightFill: '#fff',
                                    pointHighlightStroke: 'rgba(60,141,188,1)',
                                    data: datasede
                                },
                                // {
                                // label               : 'Electronics',
                                // backgroundColor     : 'rgba(210, 214, 222, 1)',
                                // borderColor         : 'rgba(210, 214, 222, 1)',
                                // pointRadius         : false,
                                // pointColor          : 'rgba(210, 214, 222, 1)',
                                // pointStrokeColor    : '#c1c7d1',
                                // pointHighlightFill  : '#fff',
                                // pointHighlightStroke: 'rgba(220,220,220,1)',
                                // data                : [65, 59, 80, 81, 56, 55, 40]
                                // },
                            ]
                        }
                        var barChartCanvas = $('#barChart1').get(0).getContext('2d')
                        var barChartData = areaChartData
                        var temp0 = areaChartData.datasets[0]
                        //var temp1 = areaChartData.datasets[1]
                        barChartData.datasets[0] = temp0
                        //barChartData.datasets[1] = temp0

                        var barChartOptions = {
                            responsive: true,
                            maintainAspectRatio: false,
                            datasetFill: false
                        }

                        new Chart(barChartCanvas, {
                            type: 'bar',
                            data: barChartData,
                            options: barChartOptions
                        })




                    }
                })




            }

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
