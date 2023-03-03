 <!-- Modal para ver la lista de pagos -->

<!-- Modal Pagos -->
<div class="modal fade" id="modalPagos" tabindex="-1" role="dialog" aria-labelledby="modalPagosLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPagosLabel">Pagos realizados para la cuenta por pagar <!-- <span id="modalPagosCuentaId"></span> --> - Factura N° <span id="modalNumFactura"></span> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="modalPagosTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Valor del Pago</th>
                            <th>Fecha del Pago</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

