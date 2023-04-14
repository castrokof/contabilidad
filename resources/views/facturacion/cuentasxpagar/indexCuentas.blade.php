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
@include('facturacion.cuentasxpagar.modal.modalListPagos')

@endsection

@section("scriptsPlugins")
<script src="{{asset("assets/$theme/plugins/datatables/jquery.dataTables.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/$theme/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/$theme/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/jquery-select2/select2.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/gijgo-combined-1.9.13/js/gijgo.min.js")}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>


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
        /* const retefuenteInput = document.getElementById("retefuente"); */
        const valorretefuenteInput = document.getElementById("valorretefuente");
        const valoricaInput = document.getElementById("valorica");
        const ivaInput = document.getElementById("iva");
        const valorivaInput = document.getElementById("valoriva");
        const totalInput = document.getElementById("total");
        const subtotalTd = document.getElementById("subtotal");
        const ivaTd = document.getElementById("ivaFinal");
        const totalFinalTd = document.getElementById("totalFinal");
        const deduccionImpuestosTd = document.getElementById("deduccionImpuestos");
        const retencionesTd = document.getElementById("retenciones");

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

        // Agregar event listener para escuchar los cambios en los campos total e iva
        totalInput.addEventListener("input", calcularTotal);
        ivaInput.addEventListener("input", calcularTotal);

        function calcularTotal() {
            // Obtener el valor de iva y total
            const iva = ivaInput.value;
            const total = totalInput.value;

            // Calcular el valor del iva
            const valoriva = (iva * total) / 100;

            // Actualizar el campo de valor del iva
            valorivaInput.value = valoriva.toFixed(2);

            // Actualizar el campo de IVA en la tabla de resultados
            ivaTd.textContent = valoriva.toFixed(2);

            // Actualizar el campo de TOTAL en la tabla de resultados
            const subtotal = parseFloat(totalInput.value || 0);
            const totalFinal = subtotal + parseFloat(valorivaInput.value || 0);
            totalFinalTd.textContent = totalFinal.toFixed(2);

            // Actualizar el campo de SUBTOTAL en la tabla de resultados
            subtotalTd.textContent = subtotal.toFixed(2);

        }

        // Agregar event listener para escuchar los cambios en los campos valorretefuenteInput y valoricaInput
        valorretefuenteInput.addEventListener("input", calcularDeduccionImpuestos);
        valoricaInput.addEventListener("input", calcularDeduccionImpuestos);

        function calcularDeduccionImpuestos() {
            // Obtener los valores de retefuente, ica y total, sino trae valor se pondra predeterminado el 0, para poder calcular la deduccionImpuestos
            const retefuente = parseFloat(valorretefuenteInput.value || 0);
            const valorica = parseFloat(valoricaInput.value || 0);
            const totalFinal = parseFloat(totalFinalTd.textContent);

            // Calcular el valor de la deducción de impuestos
            const retencionesTotal = retefuente + valorica;
            const deduccionImpuestos = totalFinal - (retefuente + valorica);

            // Actualizar el campo de valor de la deducción de impuestos
            deduccionImpuestosTd.textContent = deduccionImpuestos.toFixed(2);

            // Actualiza campo retenciones
            retencionesTd.textContent = retencionesTotal.toFixed(2);
        }

        function limpiarModal() {
            const modal = document.getElementById("modal-add-cuentas");
            const form = modal.querySelector("form");
            form.reset();

            const tabla = document.getElementById("resultados").querySelectorAll("tbody td");
            tabla.forEach(td => {
                td.innerHTML = "";
            });
        }


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

        //Consulta de datos de la tabla lista-detalle para seleccionar la Sede
        $("#sede_id").select2({
            language: "es",
            theme: "bootstrap4",
            placeholder: 'Seleccione la Sede',
            allowClear: true,
            ajax: {
                url: "{{ route('selectlist') }}",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        id: 2
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

        //Consulta de datos de la tabla lista-detalle para seleccionar la Sede
        $("#clasificacion").select2({
            language: "es",
            theme: "bootstrap4",
            placeholder: 'Clasificacion',
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





        //Funcion que abre modal donde se debe registrar los datos de la factura o cuenta por pagar
        $('#create_cuenta').click(function() {
            $('#form-general')[0].reset();
            $('#proveedor_id').val('').trigger('change');
            $('#sede_id').val('').trigger('change');
            $('#clasificacion').val('').trigger('change');
            $('#action_button').val('Add');
            $('#action').val('Add');
            $('#form_result').html('');
            limpiarModal();
            $('#modal-add-cuentas').modal('show');
        });



        // Función que envían los datos de la factura al controlador
        $('#form-general').on('submit', function(event) {
            event.preventDefault();
            /* guardar($(this).serialize()); */
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
                url = "cuentasxpagar/" + updateid;
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
                                /* limpiarModal(); */
                                $('#pcuentas').DataTable().ajax.reload();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Cuenta por pagar creada correctamente',
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

        // Funcion para editar las cuentas por pagar
        $(document).on('click', '.edit_cuenta', function() {

            $('#form-general')[0].reset();
            var id = $(this).attr('id');

            $.ajax({
                url: "editcuentasxpagar/" + id,
                dataType: "json",
                success: function(data) {

                    // Primer form de información cuentas por pagar
                    $('#numerofactura').val(data.cuenta.numerofactura);
                    $('#tipofactura').val(data.cuenta.tipofactura);
                    $('#formadepago').val(data.cuenta.formadepago);
                    $('#fechafactura').val(moment(data.cuenta.fechafactura).format('YYYY-MM-DD'));
                    $('#fechavencimiento').val(moment(data.cuenta.fechavencimiento).format('YYYY-MM-DD'));
                    $('#ica').val(data.cuenta.ica);
                    $('#valorica').val(data.cuenta.valorica);
                    $('#retefuente').val(data.cuenta.retefuente);
                    $('#valorretefuente').val(data.cuenta.valorretefuente);
                    $('#iva').val(data.cuenta.iva);
                    $('#valoriva').val(data.cuenta.valoriva);
                    $('#descuento').val(data.cuenta.descuento);
                    $('#valordescuento').val(data.cuenta.valordescuento);
                    $('#total').val(data.cuenta.total);
                    $('#observacion').val(data.cuenta.observacion);
                    $('#porcentaje_gasto_fidem_1').val(data.cuenta.porcentaje_gasto_fidem_1);
                    $('#porcentaje_gasto_fidem_2').val(data.cuenta.porcentaje_gasto_fidem_2);

                    var newsede = new Option(data.cuenta.nombre, data.cuenta.id, true, true);
                    $('#sede_id').append(newsede).trigger('change');

                    var newinfra = new Option(data.cuenta.future5, data.cuenta.future5, true, true);
                    $('#clasificacion').append(newinfra).trigger('change');

                    $('#sede_fidem_1').val(data.cuenta.sede_fidem_1);
                    $('#sede_fidem_2').val(data.cuenta.sede_fidem_2);
                    $('#user_id').val(data.cuenta.user_id);

                    var newproveedor = new Option(data.cuenta.proveedor_id.nombre, data.cuenta.proveedor_id.id, true, true);
                    $('#proveedor_id').append(newproveedor).trigger('change');

                    $('#hidden_id').val(id)
                    $('.card-title').text("Editando cuenta por pagar: " + data.cuenta.numerofactura +
                        "-" + data.cuenta.nombre);
                    $('#action_button').val('Editar').removeClass('btn-sucess')
                    $('#action_button').addClass('btn-danger')
                    $('#action_button').val('Edit');
                    $('#action').val('Edit');
                    calcularTotal();
                    /* calcularDeduccionImpuestos();
                    $('#add_impuestos').prop('checked', true); */
                    $('#modal-add-cuentas').modal('show');

                },



            }).fail(function(jqXHR, textStatus, errorThrown) {

                if (jqXHR.status === 403) {

                    Manteliviano.notificaciones('No tienes permisos para realizar esta accion',
                        'Sistema cuentas por pagar', 'warning');

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
                    $('#pcuentas_parcial').DataTable().ajax.reload();
                    $('#pcuentas_canceladas').DataTable().ajax.reload();
                    Manteliviano.notificaciones(data.respuesta, data.titulo, data.icon);
                }
            });
        }


        $(function() {
            // Se llama a la función correspondiente al tab activo al cargar la página
            var activeTab = $(".nav-tabs .active");
            var activeTabId = activeTab.attr("id");
            callFunction(activeTabId);

            // Se llama a la función correspondiente al tab seleccionado al cambiar de tab
            $('a[data-toggle="pill"]').on("shown.bs.tab", function(e) {
                var target = $(e.target);
                var targetId = target.attr("id");
                callFunction(targetId);
            });

            function callFunction(tabId) {
                if (tabId === "custom-tabs-one-datos-del-paciente-tab") {
                    // Llamar a la función correspondiente al tab "Cuentas por Pagar"
                    /* console.log("Cuentas por Pagar"); */

                    // Destruir la tabla existente
                    if ($.fn.DataTable.isDataTable("#pcuentas")) {
                        $("#pcuentas").DataTable().destroy();
                    }
                    // Funcion para Inicializar la tabla de datos Cuentas por Pagar
                    var datatable = $("#pcuentas").DataTable({
                        language: idioma_espanol,
                        processing: true,
                        lengthMenu: [
                            [25, 50, 100, 500, -1],
                            [25, 50, 100, 500, "Mostrar Todo"],
                        ],
                        serverSide: true,
                        aaSorting: [
                            [1, "desc"]
                        ],
                        ajax: {
                            url: "{{route('cuentas_payless')}}",
                        },
                        columns: [{
                                data: "action",
                                orderable: false,
                            },
                            {
                                data: "id",
                            },
                            {
                                data: "numerofactura",
                            },
                            {
                                data: "tipofactura",
                            },
                            {
                                data: "formadepago",
                            },
                            {
                                data: "fechafactura",
                            },
                            {
                                data: "fechavencimiento",
                            },
                            {
                                data: "ica",
                            },
                            {
                                data: "valorica",
                            },
                            {
                                data: "retefuente",
                            },
                            {
                                data: "valorretefuente",
                            },
                            {
                                data: "iva",
                            },
                            {
                                data: "valoriva",
                            },
                            {
                                data: "descuento",
                            },
                            {
                                data: "valordescuento",
                            },
                            {
                                data: "total",
                            },
                            {
                                data: "observacion",
                            },
                            {
                                data: "porcentaje_gasto_fidem_1",
                            },
                            {
                                data: "porcentaje_gasto_fidem_2",
                            },
                            {
                                data: "sede_nombre",
                            },
                            {
                                data: "sede_fidem_1_nombre",
                            },
                            {
                                data: "sede_fidem_2_nombre",
                            },
                            {
                                data: "username",
                            },
                            {
                                data: "proveedor_nombre",
                            },
                        ],

                        //Botones----------------------------------------------------------------------

                        dom: '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',

                        buttons: [{
                                extend: "copyHtml5",
                                titleAttr: "Copiar Registros",
                                title: "Control de horas",
                                className: "btn  btn-outline-primary btn-sm",
                            },
                            {
                                extend: "excelHtml5",
                                titleAttr: "Exportar Excel",
                                title: "Control de horas",
                                className: "btn  btn-outline-success btn-sm",
                            },
                            {
                                extend: "csvHtml5",
                                titleAttr: "Exportar csv",
                                className: "btn  btn-outline-warning btn-sm",
                            },
                            {
                                extend: "pdfHtml5",
                                titleAttr: "Exportar pdf",
                                className: "btn  btn-outline-secondary btn-sm",
                            },
                        ],
                    });
                } else if (tabId === "custom-tabs-one-datos-agendados-tab") {
                    // Llamar a la función correspondiente al tab "Pagos Parciales"
                    /* console.log("Pagos Parciales"); */

                    // Destruir la tabla existente
                    if ($.fn.DataTable.isDataTable("#pcuentas_parcial")) {
                        $("#pcuentas_parcial").DataTable().destroy();
                    }
                    // Funcion para Inicializar la tabla de datos Pagos Parciales
                    var datatable = $("#pcuentas_parcial").DataTable({
                        language: idioma_espanol,
                        processing: true,
                        lengthMenu: [
                            [25, 50, 100, 500, -1],
                            [25, 50, 100, 500, "Mostrar Todo"],
                        ],
                        processing: true,
                        serverSide: true,
                        aaSorting: [
                            [1, "desc"]
                        ],
                        ajax: {
                            url: "{{route('cuentas_parciales')}}",
                        },
                        columns: [{
                                data: "action",
                                orderable: false,
                            },
                            {
                                data: "id",
                            },
                            {
                                data: "numerofactura",
                            },
                            {
                                data: "tipofactura",
                            },
                            {
                                data: "formadepago",
                            },
                            {
                                data: "fechafactura",
                            },
                            {
                                data: "fechavencimiento",
                            },
                            {
                                data: "ica",
                            },
                            {
                                data: "valorica",
                            },
                            {
                                data: "retefuente",
                            },
                            {
                                data: "valorretefuente",
                            },
                            {
                                data: "iva",
                            },
                            {
                                data: "valoriva",
                            },
                            {
                                data: "descuento",
                            },
                            {
                                data: "valordescuento",
                            },
                            {
                                data: "total",
                            },
                            {
                                data: "observacion",
                            },
                            {
                                data: "porcentaje_gasto_fidem_1",
                            },
                            {
                                data: "porcentaje_gasto_fidem_2",
                            },
                            {
                                data: "sede_nombre",
                            },
                            {
                                data: "sede_fidem_1_nombre",
                            },
                            {
                                data: "sede_fidem_2_nombre",
                            },
                            {
                                data: "username",
                            },
                            {
                                data: "proveedor_nombre",
                            },
                        ],

                        //Botones----------------------------------------------------------------------

                        dom: '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',

                        buttons: [{
                                extend: "copyHtml5",
                                titleAttr: "Copiar Registros",
                                title: "Control de horas",
                                className: "btn  btn-outline-primary btn-sm",
                            },
                            {
                                extend: "excelHtml5",
                                titleAttr: "Exportar Excel",
                                title: "Control de horas",
                                className: "btn  btn-outline-success btn-sm",
                            },
                            {
                                extend: "csvHtml5",
                                titleAttr: "Exportar csv",
                                className: "btn  btn-outline-warning btn-sm",
                            },
                            {
                                extend: "pdfHtml5",
                                titleAttr: "Exportar pdf",
                                className: "btn  btn-outline-secondary btn-sm",
                            },
                        ],
                    });
                } else if (tabId === "custom-tabs-one-datos-seguimiento-tab") {
                    // Llamar a la función correspondiente al tab "Cuentas Canceladas"
                    /* console.log("Cuentas Canceladas"); */

                    // Destruir la tabla existente
                    if ($.fn.DataTable.isDataTable("#pcuentas_canceladas")) {
                        $("#pcuentas_canceladas").DataTable().destroy();
                    }
                    // Funcion para Inicializar la tabla de datos "Cuentas Canceladas"
                    var datatable = $("#pcuentas_canceladas").DataTable({
                        language: idioma_espanol,
                        processing: true,
                        lengthMenu: [
                            [25, 50, 100, 500, -1],
                            [25, 50, 100, 500, "Mostrar Todo"],
                        ],
                        processing: true,
                        serverSide: true,
                        aaSorting: [
                            [1, "desc"]
                        ],
                        ajax: {
                            url: "{{route('cuentas_canceladas')}}",
                        },
                        columns: [{
                                data: "action",
                                orderable: false,
                            },
                            {
                                data: "id",
                            },
                            {
                                data: "numerofactura",
                            },
                            {
                                data: "tipofactura",
                            },
                            {
                                data: "formadepago",
                            },
                            {
                                data: "fechafactura",
                            },
                            {
                                data: "fechavencimiento",
                            },
                            {
                                data: "ica",
                            },
                            {
                                data: "valorica",
                            },
                            {
                                data: "retefuente",
                            },
                            {
                                data: "valorretefuente",
                            },
                            {
                                data: "iva",
                            },
                            {
                                data: "valoriva",
                            },
                            {
                                data: "descuento",
                            },
                            {
                                data: "valordescuento",
                            },
                            {
                                data: "total",
                            },
                            {
                                data: "observacion",
                            },
                            {
                                data: "porcentaje_gasto_fidem_1",
                            },
                            {
                                data: "porcentaje_gasto_fidem_2",
                            },
                            {
                                data: "sede_nombre",
                            },
                            {
                                data: "sede_fidem_1_nombre",
                            },
                            {
                                data: "sede_fidem_2_nombre",
                            },
                            {
                                data: "username",
                            },
                            {
                                data: "proveedor_nombre",
                            },
                        ],

                        //Botones----------------------------------------------------------------------

                        dom: '<"row"<"col-xs-1 form-inline"><"col-md-4 form-inline"l><"col-md-5 form-inline"f><"col-md-3 form-inline"B>>rt<"row"<"col-md-8 form-inline"i> <"col-md-4 form-inline"p>>',

                        buttons: [{
                                extend: "copyHtml5",
                                titleAttr: "Copiar Registros",
                                title: "Control de horas",
                                className: "btn  btn-outline-primary btn-sm",
                            },
                            {
                                extend: "excelHtml5",
                                titleAttr: "Exportar Excel",
                                title: "Control de horas",
                                className: "btn  btn-outline-success btn-sm",
                            },
                            {
                                extend: "csvHtml5",
                                titleAttr: "Exportar csv",
                                className: "btn  btn-outline-warning btn-sm",
                            },
                            {
                                extend: "pdfHtml5",
                                titleAttr: "Exportar pdf",
                                className: "btn  btn-outline-secondary btn-sm",
                            },
                        ],
                    });
                }
            }
        });

        $(document).on('click', '.paylist', function() {
            var cuenta_id = $(this).attr('id');
            $('#modalPagosCuentaId').text(cuenta_id);
            $('#modalPagosTable tbody').empty();

            $('#modalPagos').modal('show');
            $.ajax({
                url: 'pagos/cuenta/' + cuenta_id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#modalNumFactura').text(data.result.numFactura); // Esta funcion captura el numero de la factura numFactura que envia la respuesta JSON de la funcion getPagos de CuentasxPagarController

                    var totalPago = 0; // Variable totalPago inicializada en cero que suma en cada iteración el valor de pago.valordelpago
                    $.each(data.result.pagos, function(index, pago) {
                        /* console.log(pago.valordelpago); */
                        var valordelpagoFormatted = parseFloat(pago.valordelpago).toLocaleString('es-CO', {
                            style: 'currency',
                            currency: 'COP'
                        }); // Formatea el valor de pago como moneda colombiana
                        var row = '<tr><td>' + pago.id + '</td><td>' + valordelpagoFormatted + '</td><td>' + pago.fechadepago + '</td></tr>';
                        $('#modalPagosTable tbody').append(row);
                        totalPago += parseFloat(pago.valordelpago);
                    });
                    /* var totalPagoEntero = totalPago.toFixed(0); */ // Redondea el valor de un campo al entero más cercano

                    // Agrega una fila con el total de los pagos
                    var totalPagoFormatted = totalPago.toLocaleString('es-CO', {
                        style: 'currency',
                        currency: 'COP'
                    }); // Formatea el valor totalPago como moneda peso colombiano
                    var rowTotal = '<tr><td><b>Total:</b></td><td><b>' + totalPagoFormatted + '</b></td><td></td></tr>';
                    $('#modalPagosTable tbody').append(rowTotal);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });

        //Función para abrir modal del detalle de la cuenta por pagar para registrar un pago total o parcial
        $(document).on('click', '.payment', function() {
            var id = $(this).attr('id');
            var nivel_idp2 = $(this).attr('id');

            if (nivel_idp2 != '') {
                /* $('#tniveles').DataTable().ajax.destroy(); */
                if ($.fn.DataTable.isDataTable('#tniveles')) {
                    $('#tniveles').DataTable().destroy();
                }
                fill_datatable_f(nivel_idp2);
            }

            $.ajax({
                url: "paycuentasxpagar/" + id + "/addpay",
                dataType: "json",
                success: function(data) {
                    const currencyFormatter = new Intl.NumberFormat('es-CO', {
                        style: 'currency',
                        currency: 'COP'
                    });
                    const valorica = data.result.valorica != null ? currencyFormatter.format(data.result.valorica) : "$0.0";
                    const valorretefuente = data.result.valorretefuente != null ? currencyFormatter.format(data.result.valorretefuente) : "$0.0";
                    const valordescuento = data.result.valordescuento != null ? currencyFormatter.format(data.result.valordescuento) : "$0.0";

                    $('#numerofactura_n').val(data.result.numerofactura);
                    $('#gasto_fidem_1_n').val(data.result.porcentaje_gasto_fidem_1);
                    $('#gasto_fidem_2_n').val(data.result.porcentaje_gasto_fidem_2);
                    $('#sede_fidem_1_n').val(data.result.sede_fidem_1);
                    $('#sede_fidem_2_n').val(data.result.sede_fidem_2);
                    $('#sede_id_n').val(data.result.sede_id);
                    $('#total_n').val(data.result.total.toLocaleString('es-CO', {
                        style: 'currency',
                        currency: 'COP'
                    }));

                    $('#iva_n').val(data.result.valoriva.toLocaleString('es-CO', {
                        style: 'currency',
                        currency: 'COP'
                    }));
                    $('#valorica_n').val(valorica);
                    $('#valorretefuente_n').val(valorretefuente);
                    $('#valordescuento_n').val(valordescuento);
                    $('#sede_ips_n').val(data.result.sede_nombre);
                    $('#fidem_1_nombre_n').val(data.result.sede_fidem_1_nombre);
                    $('#fidem_2_nombre_n').val(data.result.sede_fidem_2_nombre);
                    $('#saldo_p').val(data.saldo_pendiente.toLocaleString('es-CO', {
                        style: 'currency',
                        currency: 'COP'
                    })); // Agregamos el saldo pendiente que se calcula dentro de la funcion addpay
                    $('#valordelpago').val(data.saldo_pendiente);
                    /* $('#valordelpago').attr('data-value',data.saldo_pendiente); */

                    $('#cuentasxpagar_id').val(id);
                    //$('.card-title').text('Registrar Pago');
                    $('#titleNumFact').text("Registrar Pago - Factura N° " + data.result.numerofactura);
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
                text = "Estás por actualizar un Pago"
                var updateid = $('#id_eps_niveles').val();
                url = "eps_niveles/" + updateid;
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
                                $('#tniveles').DataTable().ajax.reload();
                                $('#pcuentas_parcial').DataTable().ajax.reload();
                                $('#pcuentas_canceladas').DataTable().ajax.reload();

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
                                $('#pcuentas_parcial').DataTable().ajax.reload();
                                $('#pcuentas_canceladas').DataTable().ajax.reload();
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'NIVEL actualizado correctamente',
                                    showConfirmButton: false,
                                    timer: 1500

                                })

                            } else if (data.error1 == 'post1') {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Advertencia',
                                    text: 'No se encontró información de la cuenta por pagar',
                                });
                            } else if (data.error2 == 'post2') {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Advertencia',
                                    text: 'El valor del pago no puede ser mayor al Valor a Pagar o la Factura ya fue cancelada en su totalidad',
                                });
                            }

                            $('#form_result_p').html(html)
                        }


                    });
                }
            });


        });

        //--------------------------------Tabla relacion Cuentas por Pagar y los Pagos realizados----------------------------//
        function fill_datatable_f(nivel_idp2 = '') {
            var tniveles = $('#tniveles').DataTable({
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
                    url: "{{ route('pagos_cuenta')}}",
                    //type: "get",
                    data: {
                        id: nivel_idp2
                    }
                },
                columns: [{
                        data: 'actionlv',
                        name: 'actionlv',
                        orderable: false
                    },
                    {
                        data: 'fechadepago',
                        name: 'fechadepago'
                    },
                    {
                        data: 'valordelpago',
                        name: 'valordelpago'
                    },
                    {
                        data: 'tipodepago',
                        name: 'tipodepago'
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
                ],

            });

        }

        //-- Funcion para Eliminar un pago seleccionado
        $(document).on('click', '.eliminarlv', function() {
            var id = $(this).attr('id');

            var text = "Estás por Eliminar un pago registrado a esta Cuenta por Pagar"
            var url = "rel_pago_cuenta/" + id;
            var method = 'delete';

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
                            "_token": $("meta[name='csrf-token']").attr("content")
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.success == 'ok5') {

                                $('#tniveles').DataTable().ajax.reload();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Pago ha sido eliminado correctamente',
                                    showConfirmButton: false,
                                    timer: 1000

                                })

                            }
                        }
                    });

                }
            })

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
-->
<script>
    $(document).ready(function() {
        //función de validación en JavaScript para mostrar una alerta si el valor ingresado en el campo "valordelpago" es mayor que el valor del campo "total_n"
        /* function validarPago() {
            var total = parseFloat($('#total_n').val());
            var valoriva = parseFloat($('#iva_n').val());
            var valorica = parseFloat($('#valorica_n').val());
            var valorretefuente = parseFloat($('#valorretefuente_n').val());

            var pago = parseFloat($('#valordelpago').val());
            if (pago > ((total + valoriva)-(valorica + valorretefuente))) {
                alert('El valor del pago no puede ser mayor que el Valor a Pagar:.');
                $('#valordelpago').val('');
                return false;
            }
            return true;
        } */

        //funcion que va ocultar o mostrar los campos futuro1 y futuro2 siempre y cuando en el campo futuro 3 se seleccionar la opcion FIDEMCOMPARTIDO
        function mostrarOcultarCampos() {
            var sede_ips = $('#sede_id option:selected');
            /* se utiliza sede_ips.options[sede_ips.selectedIndex] para obtener el option seleccionado dentro del select.
               Finalmente, se utiliza la propiedad innerText de ese option para obtener su texto. Si el texto es igual a "FIDEMC" */
            var sede_texto = sede_ips.text();
            var futuro1 = $('#futuro1');
            var futuro2 = $('#futuro2');
            var input1 = $('#porcentaje_gasto_fidem_1');
            var input2 = $('#porcentaje_gasto_fidem_2');

            if (sede_texto == "FIDEMC") {
                futuro1.show();
                futuro2.show();
                // Adicionar listener al input porcentaje_gasto_fidem_1
                input1.on('input', function() {
                    var porcentaje1 = parseInt(input1.val());
                    var porcentaje2 = parseInt(input2.val());
                    var porcentajes = 100;
                    // Validar que la suma de los porcentajes sea igual a 100
                    if (porcentaje1 + porcentaje2 !== porcentajes) {
                        // Si el porcentaje ingresado es menor a 100, calcular el faltante y asignar a porcentaje_gasto_fidem_2
                        if (porcentaje1 < porcentajes) {
                            input2.val(porcentajes - porcentaje1);
                        }
                    }
                });
            } else {
                futuro1.hide();
                futuro2.hide();
                input1.val('');
                input2.val('');
                // Eliminar listener del input porcentaje_gasto_fidem_1
                input1.off('input');
            }
        }

        /* function validPorcentajes() {
            var porcentaje = 100;
            var fidem_1 = parseFloat($('#porcentaje_gasto_fidem_1').val());
            var fidem_2 = parseFloat($('#porcentaje_gasto_fidem_2').val());
            if ((fidem_1 + fidem_2) = porcentaje) {

            }

        } */



        function mostrarDescuento() {
            var descuentos_check = $('#descuentos_check');
            var add_descuento = $('#add_descuento');
            var input1 = $('#descuento');
            var input2 = $('#valordescuento');

            if (add_descuento.prop('checked')) {
                descuentos_check.show();
            } else {
                descuentos_check.hide();
                input1.val('');
                input2.val('');
            }
        }

        /* function limpiarDeduccionImpuestos() {
            if (!$("#add_impuestos").prop("checked")) {
                $("#deduccionImpuestos").text("0.00");
            }
        } */

        function mostrarImpuestos() {
            var impuestos_check = $('#impuestos_check');
            var add_impuestos = $('#add_impuestos');
            var input1 = $('#retefuente');
            var input2 = $('#valorretefuente');
            var input3 = $('#ica');
            var input4 = $('#valorica');
            var retencionesTd = $('#retenciones');
            var deduccionImpuestosTd = $('#deduccionImpuestos');

            if (add_impuestos.prop('checked')) {
                impuestos_check.show();
            } else {
                impuestos_check.hide();
                input1.val('');
                input2.val('');
                input3.val('');
                input4.val('');
                retencionesTd.text('0.00');
                deduccionImpuestosTd.text('0.00'); //Limpia el campo deduccionImpuestos
                /* limpiarDeduccionImpuestos(); */ // Aquí se llama a la función que limpiar el campo deduccionImpuestos
            }
        }

        function mostrarDetalleSede() {
            var detailSede = $('#detailSede');
            if (detailSede.css('display') === 'none') {
                detailSede.show();
            } else {
                detailSede.hide();
            }
        }

        /* $('#valordelpago').blur(validarPago); */
        $('#sede_id').change(mostrarOcultarCampos);
        $('#add_descuento').click(mostrarDescuento);
        $('#add_impuestos').click(mostrarImpuestos);
        $('#detallesede_btn').click(mostrarDetalleSede);
    });
</script>


@endsection
