

        <div class="form-group row">
            <div class="col-lg-3">
                <label for="cuenta" class="col-xs-4 control-label requerido"><i class="fas fa-home">Cuenta</i></label>

                <select name="cuenta_id" id="cuenta" class="form-control select2bs4" required>
                </select>
            </div>
            <div class="col-lg-3">
                <label for="proveedor_id" class="col-xs-4 control-label requerido"><i class="fas fa-shipping-fast">Proveedor</i></label>
                <select name="proveedor_id" id="proveedor_id" class="form-control select2bs4" style="width: 100%;" required>
                </select>
            </div>
            <div class="col-lg-2">
                <label for="numeroingreso" class="col-xs-4 control-label requerido"><i class="far fa-address-card"> # Ingreso</i></label>
                <input type="text" name="numeroingreso" id="numeroingreso" class="form-control" value="{{ old('numeroingreso') }}" required>
            </div>
            <div class="col-lg-2">
                <label for="tipoingreso" class="col-xs-4 control-label requerido"><i class="fas fa-date"> Tipo ingreso</i></label>
                <select name="tipoingreso" id="tipoingreso" class="form-control select2bs4" style="width: 100%;" required>
                </select>
            </div>
            <div class="col-lg-2">
                <label for="fechadeingreso" class="col-xs-4 control-label requerido"><i class="fas fa-date"> Fecha ingreso</i></label>
                <input type="date" name="fechadeingreso" id="fechadeingreso" class="form-control" value="{{ old('fechadeingreso') }}"
                    required>
            </div>

        </div>

        <div class="form-group row">
            <div class="col-lg-3">
                <label for="totalingreso" class="col-xs-4 control-label requerido"><i class="fas fa-comment-dollar"> Total ingreso</i></label>
                <input type="number" name="totalingreso" id="totalingreso" class="form-control validanumericos" value="{{ old('totalingreso') }}"
                required>
            </div>
            <div class="col-lg-3">
                <label for="formadepago" class="col-xs-4 control-label requerido"><i class="fas fa-map"> Forma de pago</i></label>
                <select name="formadepago" id="formadepago" class="form-control select2bs4" style="width: 100%;" required>
                </select>
            </div>
            <div class="col-lg-6">
                <label for="observacion" class="col-xs-8 control-label ">Observación</label>
            <textarea name="observacion" id="observacion" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>




        </div>
        <input type="hidden" name="user_id" id="user_ids" class="form-control" value="{{Session()->get('usuario_id')}}" >
