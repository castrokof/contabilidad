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
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>
                                <p>New Orders</p>
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
                                <h3>53<sup style="font-size: 20px">%</sup></h3>
                                <p>Bounce Rate</p>
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
                                <h3>44</h3>
                                <p>User Registrations</p>
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
                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>


                <div class="row">

                    <section class="col-lg-7 connectedSortable ui-sortable">

                        <div class="card" style="position: relative; left: 0px; top: 0px;">
                            <div class="card-header ui-sortable-handle" style="cursor: move;">
                                <h3 class="card-title">
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Ingresos
                                </h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Ingresos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#sales-chart" data-toggle="tab">Clasificacion</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
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
                                            class="chartjs-render-monitor" width="845"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </section>


                    <section class="col-lg-5 connectedSortable ui-sortable">


                        <div class="card bg-gradient-info">
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

                            <div class="card-footer bg-transparent">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <div style="display:inline;width:60px;height:60px;"><canvas width="60"
                                                height="60"></canvas><input type="text" class="knob"
                                                data-readonly="true" value="20" data-width="60" data-height="60"
                                                data-fgcolor="#39CCCC" readonly="readonly"
                                                style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                                        </div>
                                        <div class="text-white">Mail-Orders</div>
                                    </div>

                                    <div class="col-4 text-center">
                                        <div style="display:inline;width:60px;height:60px;"><canvas width="60"
                                                height="60"></canvas><input type="text" class="knob"
                                                data-readonly="true" value="50" data-width="60" data-height="60"
                                                data-fgcolor="#39CCCC" readonly="readonly"
                                                style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                                        </div>
                                        <div class="text-white">Online</div>
                                    </div>

                                    <div class="col-4 text-center">
                                        <div style="display:inline;width:60px;height:60px;"><canvas width="60"
                                                height="60"></canvas><input type="text" class="knob"
                                                data-readonly="true" value="30" data-width="60" data-height="60"
                                                data-fgcolor="#39CCCC" readonly="readonly"
                                                style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                                        </div>
                                        <div class="text-white">In-Store</div>
                                    </div>

                                </div>

                            </div>

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
    <script src="{{ asset("assets/$theme/plugins/jqvmap/jquery.vmap.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/jqvmap/maps/jquery.vmap.usa.js") }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery-select2/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/jquery-knob/jquery.knob.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/moment/moment.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/daterangepicker/daterangepicker.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/summernote/summernote-bs4.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/$theme/dist/js/pages/dashboard.js") }}" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>



    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
@endsection
