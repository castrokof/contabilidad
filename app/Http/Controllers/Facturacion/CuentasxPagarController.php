<?php

namespace App\Http\Controllers\Facturacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Facturacion\Cuentas;
use App\Models\Facturacion\Pagos;
use App\Models\Seguridad\Usuario;

class CuentasxPagarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $idlist = $request->id;

        if ($request->ajax()) {

            $datas = Cuentas::orderBy('cuentasxpagar.id')->with('userId:usuario,id', 'proveedorId', 'pagos')
                ->get();


            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                    $button = '<button type="button" name="payment" id="' . $datas->id . '" class="payment btn btn-app bg-success tooltipsC" title="Agregar Pago"  ><span class="badge bg-teal">Add Pago</span><i class="fas fa-notes-medical"></i> Detalle </button>';
                    $button2 = '<button type="button" name="edit_cuenta" id="' . $datas->id . '" class="edit_cuenta btn btn-app bg-info tooltipsC" title="Editar"  ><span class="badge bg-teal">Editar</span><i class="fas fa-pencil-alt"></i> Editar </button>';
                    return $button . ' ' . $button2;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('facturacion.cuentasxpagar.indexCuentas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (request()->ajax()) {
            $cuenta = Cuentas::where('id', '=', $id)->first();
            return response()->json(['cuenta' => $cuenta]);
        }
        return view('facturacion.cuentasxpagar.indexCuentas');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(

            'numerofactura' => 'required',
            'tipofactura' => 'required',
            'formadepago' => 'required',
            'fechafactura' => 'required|date',
            'fechavencimiento' => 'required|date',
            'ica',
            'valorica',
            'retefuente',
            'valorretefuente',
            'iva',
            'valoriva',
            'descuento',
            'valordescuento',
            'total' => 'required|numeric',
            'observacion' => 'max:500',
            'porcentaje_gasto_fidem_1',
            'porcentaje_gasto_fidem_2',
            'sede_ips' => 'max:255',
            'future4' => 'max:255',
            'future5' => 'max:255',
            'user_id' => 'required|numeric',
            'proveedor_id' => 'required|numeric'


        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        if (request()->ajax()) {
            Cuentas::findOrFail($id)
                ->update($request->all());
        }
        return response()->json(['success' => 'ok1']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $rules = array(
            'numerofactura' => 'required',
            'tipofactura' => 'required',
            'formadepago' => 'required',
            'fechafactura' => 'required|date',
            'fechavencimiento' => 'required|date',
            'ica',
            'valorica',
            'retefuente',
            'valorretefuente',
            'iva',
            'valoriva',
            'descuento',
            'valordescuento',
            'total' => 'required|numeric',
            'observacion' => 'max:500',
            'porcentaje_gasto_fidem_1',
            'porcentaje_gasto_fidem_2',
            'sede_ips' => 'max:255',
            'future4' => 'max:255',
            'future5' => 'max:255',
            'user_id' => 'required|numeric',
            'proveedor_id' => 'required|numeric'


        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {

            return response()->json(['errors' => $error->errors()->all()]);
        }

        Cuentas::create($request->all());
        return response()->json(['success' => 'ok']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function getPagosList(Request $request)
    {
        $idlist = $request->id;

        if (request()->ajax()) {

            $datast = DB::table('cuentasxpagas')
                ->join('cuentasxpagar', 'cuentasxpagas.cuentasxpagar_id', '=', 'cuentasxpagar.id')
                ->select(
                    'cuentasxpagas.id as idd',
                    'cuentasxpagas.fechadepago',
                    'cuentasxpagas.valordelpago',
                    'cuentasxpagas.tipodepago',
                    'cuentasxpagar.numerofactura as numFactura'
                )
                ->where('cuentasxpagas.cuentasxpagar_id', '=', $idlist)
                ->get();

            return DataTables()->of($datast)
                ->addColumn('actionlv', function ($datast) {
                    $button = '<button type="button" name="eliminarlv" id="' . $datast->idd . '"
                class = "eliminarlv btn-float  bg-gradient-danger btn-sm tooltipsC"  title="Eliminar Pago"><i class=""><i class="fa fa-trash"></i></i></a>';

                    return $button;
                })
                ->rawColumns(['actionlv'])
                ->make(true);
        }

        return view('facturacion.cuentasxpagar.indexCuentas');
    }

    /* public function getPagos($id)
    {
        if (request()->ajax()) {

            $datas = DB::table('cuentasxpagas')
                ->Join('cuentasxpagar', 'cuentasxpagar_id', '=' , 'cuentasxpagar.id')
                ->selectRaw('cuentasxpagas.*, cuentasxpagar.numerofactura as numFactura')
                ->where('cuentasxpagar_id', $id)
                ->orderBy('cuentasxpagar.id')
                ->first();

                return response()->json(['result' => $datas]);
        }
        return view('facturacion.cuentasxpagar.indexCuentas');
    } */

    public function getPagos($id)
    {
        if (request()->ajax()) {
            /* $cuenta = Cuentas::findOrFail($id); */
            /* $pagos = Pagos::where('cuentasxpagar_id', $id)->get(); */
            $cuenta = Cuentas::with('pagos')->findOrFail($id);
            $numFactura = $cuenta->numerofactura; // Aquí se obtiene el número de factura

            $data = [
                'pagos' => $cuenta->pagos,
                'numFactura' => $numFactura // Aquí se agrega el número de factura a la respuesta JSON
            ];

            return response()->json(['result' => $data]);
        }

        return view('facturacion.cuentasxpagar.indexCuentas');
    }



    public function addpay($id)
    {
        if (request()->ajax()) {

            $cuenta = Cuentas::where('id', $id)->first();
            if (!$cuenta) {
                return response()->json(['error' => 'No se encontró la cuenta por pagar'], 404);
            } else {
                /*  Este código, después de calcular $saldo_pendiente, se devuelve un resultado JSON con $cuenta y $saldo_pendiente incluidos en la respuesta json*/
                $total_pagos = DB::table('cuentasxpagas')
                    ->where('cuentasxpagar_id', $id)
                    ->sum('valordelpago');

                $total_factura = DB::table('cuentasxpagar')
                    ->where('id', $id)
                    ->value('total');

                $saldo_pendiente = $total_factura - $total_pagos;

                return response()->json([
                    'result' => $cuenta,
                    'saldo_pendiente' => $saldo_pendiente
                ]);
            }
        }

        return view('facturacion.cuentasxpagar.indexCuentas');
    }


    public function validpay(Request $request)
    {


        if (request()->ajax()) {
            $id = $request->input('cuentasxpagar_id');
            $cuenta = Cuentas::findOrFail($id);
            if (!$cuenta) {
                return response()->json(['error1' => 'post1']);
            }

            /* Esta variable guarda la consulta a la bd con una funcion sum para agrupar todos los pagos realizados a una cuenta filtrando por su cuentasxpagar_id = $id */
            $total_pagos = DB::table('cuentasxpagas')
                ->where('cuentasxpagar_id', $id)
                ->sum('valordelpago');

            $cuenta_pagas = Pagos::where('cuentasxpagar_id', $id)->first();
            $valordelpago = $request->input('valordelpago');

            if (!$cuenta_pagas) {
                /* Si no existe un registro en la tabla Pagos para la cuenta por pagar,
                se crea uno nuevo con el valor del pago ingresado en el formulario */
                $cuenta_pagas = new Pagos;
                $cuenta_pagas->cuentasxpagar_id = $id;
                $cuenta_pagas->fechadepago = $request->input('fechadepago');
                $cuenta_pagas->valordelpago = $valordelpago;
                $cuenta_pagas->tipodepago = $request->input('tipodepago');
                $cuenta_pagas->numerotransaccion = $request->input('numerotransaccion');
                $cuenta_pagas->observacion = $request->input('observacion');
                $cuenta_pagas->save();
            } else {
                /* Si ya existe un registro en la tabla Pagos para la cuenta por pagar,
                se valida el valor del pago ingresado en el formulario con el valor existente
                para evitar que se ingresen mas pagos que excedan el valor total de la cuenta por pagar */
                /* $saldo_pendiente = $cuenta->total - $cuenta_pagas->valordelpago; */
                $saldo_pendiente = $cuenta->total - $total_pagos;
                if ($valordelpago + $total_pagos > $cuenta->total) {
                    /* return response()->json(['error2' => 'post2'], 422); */
                    return response()->json(['error2' => 'post2']);
                } else {
                    $cuenta_pagas = new Pagos;
                    $cuenta_pagas->cuentasxpagar_id = $id;
                    $cuenta_pagas->fechadepago = $request->input('fechadepago');
                    $cuenta_pagas->valordelpago = $valordelpago;
                    $cuenta_pagas->tipodepago = $request->input('tipodepago');
                    $cuenta_pagas->numerotransaccion = $request->input('numerotransaccion');
                    $cuenta_pagas->observacion = $request->input('observacion');
                    $cuenta_pagas->save();
                }
            }

            return response()->json(['success' => 'okn1']);
        }
    }

    public function indexPayment(Request $request)
    {

        if ($request->ajax()) {
            /*
            ** Se agrega una subconsulta adicional a la consulta existente. La subconsulta seleccionará todas las cuentas por pagar que no tienen ningún registro en la tabla cuentasxpagas con el mismo cuentasxpagar_id. Con la cláusula whereNotIn
            ** se usa para filtrar los resultados por 'cuentasxpagar.id' que no estén presentes en los resultados de la subconsulta.
            */
            $subquery = DB::table('cuentasxpagas')
                ->select('cuentasxpagas.cuentasxpagar_id')
                ->groupBy('cuentasxpagas.cuentasxpagar_id');

            $datas = DB::table('cuentasxpagar')
                ->leftJoin('proveedores', 'cuentasxpagar.proveedor_id', '=', 'proveedores.id')
                ->leftJoin('usuario', 'cuentasxpagar.user_id', '=', 'usuario.id')
                ->select('cuentasxpagar.*', 'proveedores.nombre as proveedor_nombre', 'usuario.usuario as username')
                ->whereNotIn('cuentasxpagar.id', $subquery)
                ->orderBy('cuentasxpagar.id')
                ->get();

            /* DD($datas); */

            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                    $button = '<button type="button" name="payment" id="' . $datas->id . '" class="payment btn btn-app bg-success tooltipsC" title="Agregar Pago"  ><span class="badge bg-teal">Add Pago</span><i class="fas fa-notes-medical"></i> Detalle </button>';
                    $button2 = '<button type="button" name="edit_cuenta" id="' . $datas->id . '" class="edit_cuenta btn btn-app bg-info tooltipsC" title="Editar"  ><span class="badge bg-teal">Editar</span><i class="fas fa-pencil-alt"></i> Editar </button>';
                    return $button . ' ' . $button2;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('facturacion.cuentasxpagar.indexCuentas');
    }


    public function indexParcial(Request $request)
    {

        if ($request->ajax()) {
            /* Esta consulta selecciona todas las columnas de la tabla cuentasxpagar y agrega una columna adicional llamada total_pagos que es la suma de los valores de pago (valordelpago)
            ** en la tabla cuentasxpagas para la cuenta por pagar correspondiente (cuentasxpagar_id). Luego, la consulta filtra los resultados por el ID de la cuenta por pagar (c.id) y utiliza
            ** la cláusula HAVING(havingRaw) para asegurarse de que la suma de los valores de pago (total_pagos) sea menor que el total (total) de la cuenta por pagar correspondiente.
            ** Luego se crea la subconsulta ($subquery) como una instancia separada de la clase DB, y la almacena en una variable $subquery. Luego, dentro de la función whereExists,
            ** usa el método fromSub para referise a la subconsulta que se creo previamente.
            */
            $subquery = DB::table('cuentasxpagas')
                ->selectRaw('SUM(cuentasxpagas.valordelpago) as total_pagos, cuentasxpagas.cuentasxpagar_id')
                ->groupBy('cuentasxpagas.cuentasxpagar_id');

            $datas = DB::table('cuentasxpagar')
                ->join('proveedores', 'cuentasxpagar.proveedor_id', '=', 'proveedores.id')
                ->join('usuario', 'cuentasxpagar.user_id', '=', 'usuario.id')
                ->selectRaw('cuentasxpagar.*, proveedores.nombre as proveedor_nombre, usuario.usuario as username')
                ->whereExists(function ($query) use ($subquery) {
                    $query->select(DB::raw(1))
                        ->fromSub($subquery, 'subquery')
                        ->whereRaw('subquery.cuentasxpagar_id = cuentasxpagar.id')
                        ->whereRaw('subquery.total_pagos < cuentasxpagar.total');
                })
                ->orderBy('cuentasxpagar.id')
                ->get();

            /* DD($datas); */

            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                    $button = '<button type="button" name="payment" id="' . $datas->id . '" class="payment btn btn-app bg-success tooltipsC" title="Agregar Pago"  ><span class="badge bg-teal">Add Pago</span><i class="fas fa-notes-medical"></i> Detalle </button>';
                    /* $button2 = '<button type="button" name="edit_cuenta" id="' . $datas->id . '" class="edit_cuenta btn btn-app bg-info tooltipsC" title="Editar"  ><span class="badge bg-teal">Editar</span><i class="fas fa-pencil-alt"></i> Editar </button>'; */
                    return $button /* . ' ' . $button2 */;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('facturacion.cuentasxpagar.indexCuentas');
    }

    public function indexTotales(Request $request)
    {

        if ($request->ajax()) {
            /* Esta consulta selecciona todas las columnas de la tabla cuentasxpagar y agrega una columna adicional llamada total_pagos que es la suma de los valores de pago (valordelpago)
            ** en la tabla cuentasxpagas para la cuenta por pagar correspondiente (cuentasxpagar_id). Luego, la consulta filtra los resultados por el ID de la cuenta por pagar (c.id) y utiliza
            ** la cláusula HAVING(havingRaw) para asegurarse de que la suma de los valores de pago (total_pagos) sea igual que el total (total) de la cuenta por pagar correspondiente.
            ** Luego se crea la subconsulta ($subquery) como una instancia separada de la clase DB, y la almacena en una variable $subquery. Luego, dentro de la función whereExists,
            ** usa el método fromSub para referise a la subconsulta que se creo previamente.
            */
            $subquery = DB::table('cuentasxpagas')
                ->selectRaw('SUM(cuentasxpagas.valordelpago) as total_pagos, cuentasxpagas.cuentasxpagar_id')
                ->groupBy('cuentasxpagas.cuentasxpagar_id');

            $datas = DB::table('cuentasxpagar')
                ->join('proveedores', 'cuentasxpagar.proveedor_id', '=', 'proveedores.id')
                ->join('usuario', 'cuentasxpagar.user_id', '=', 'usuario.id')
                ->selectRaw('cuentasxpagar.*, proveedores.nombre as proveedor_nombre, usuario.usuario as username')
                ->whereExists(function ($query) use ($subquery) {
                    $query->select(DB::raw(1))
                        ->fromSub($subquery, 'subquery')
                        ->whereRaw('subquery.cuentasxpagar_id = cuentasxpagar.id')
                        ->whereRaw('subquery.total_pagos = cuentasxpagar.total');
                })
                ->orderBy('cuentasxpagar.id')
                ->get();

            /* DD($datas); */

            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                    /* $button = '<button type="button" name="payment" id="' . $datas->id . '" class="payment_1 btn btn-app bg-success tooltipsC" title="Agregar Pago"  ><span class="badge bg-teal">Add Pago</span><i class="fas fa-notes-medical"></i> Detalle </button>'; */
                    $button3 = '<button type="button" name="paylist" id="' . $datas->id . '" class="paylist btn btn-app bg-success tooltipsC" title="Lista de Pagos"  ><span class="badge bg-teal">Ver Pagos</span><i class="fas fa-notes-medical"></i> Detalle </button>';
                    /* $button2 = '<button type="button" name="edit_cuenta" id="' . $datas->id . '" class="edit_cuenta btn btn-app bg-info tooltipsC" title="Editar"  ><span class="badge bg-teal">Editar</span><i class="fas fa-pencil-alt"></i> Editar </button>'; */
                    return /* $button . ' ' . */ $button3;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('facturacion.cuentasxpagar.indexCuentas');
    }


    // Deprecated
    /* public function guardarpago(Request $request)
    {

        if ($request->ajax()) {

            $rules = array(
                'fechadepago' => 'required',
                'valordelpago' => 'required',
                'tipodepago' => 'required',
                'numerotransaccion' => 'required',
                'observacion' => 'required',
                'cuentasxpagar_id' => 'required|numeric'

            );

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            Pagos::create($request->all());
            return response()->json(['success' => 'okn1']);
        }
    } */

    public function eliminar(Request $request, $id)
    {
        if($request->ajax()){

            Pagos::where('id', $id)->delete();

        return response()->json(['success' => 'ok5']);
        }
    }
}
