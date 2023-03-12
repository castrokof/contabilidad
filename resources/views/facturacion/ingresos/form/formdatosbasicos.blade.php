

        <div class="form-group row">
            <div class="col-lg-2">
                <label for="cuenta" class="col-xs-4 control-label requerido"><i class="fas fa-id-badge">Cuenta</i></label>

                <select name="cuenta" id="cuenta" class="form-control select2bs4" required>
                </select>
            </div>
            <div class="col-lg-2">
                <label for="documento" class="col-xs-4 control-label requerido"><i class="fas fa-hashtag"> Documento</i></label>
                <input type="text" name="documento" id="documento" class="form-control" value="{{ old('documento') }}"
                    minlength="6" required>
            </div>
            <div class="col-lg-3">
                <label for="nombre" class="col-xs-4 control-label requerido"><i class="far fa-address-card"> Nombre</i></label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
            </div>
            <div class="col-lg-2">
                <label for="direccion" class="col-xs-4 control-label "><i class="fas fa-map-pin"> Dirección</i> </label>
                <input type="text" name="direccion" id="direccion" class="form-control" value="{{ old('direccion') }}">
            </div>
            <div class="col-lg-3">
                <label for="telefono" class="col-xs-4 control-label requerido"><i class="fas fa-phone"> Telefono</i></label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono') }}"
                    required>
            </div>

        </div>

        <div class="form-group row">
            <div class="col-lg-3">
                <label for="pais" class="col-xs-4 control-label requerido"><i class="fas fa-globe"> Pais</i></label>
                <select name="pais" id="pais" class="form-control select2bs4" style="width: 100%;" required>
                </select>
            </div>
            <div class="col-lg-3">
                <label for="dpto" class="col-xs-4 control-label requerido"><i class="fas fa-map"> Dpto</i></label>
                <select name="dpto" id="dpto" class="form-control select2bs4" style="width: 100%;" required>
                </select>
            </div>
            <div class="col-lg-3">
                <label for="ciudad" class="col-xs-4 control-label requerido"><i class="fas fa-city"> Ciudad</i></label>
                <select name="ciudad" id="ciudad" class="form-control select2bs4" style="width: 100%;" required>
                </select>
            </div>

            <div class="col-lg-2">
                <label for="correo" class="col-xs-4 control-label requerido"><i class="fas fa-envelope"> Correo</i></label>
                <input type="correo" name="correo" id="correo" class="form-control" value="{{ old('correo') }}" required>
            </div>


        </div>
        <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{Session()->get('usuario_id')}}" >
