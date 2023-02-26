<?php

namespace App\Http\Controllers\Facturacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Facturacion\Cuentas;
use App\Models\Facturacion\Pagos;

class CuentasxPagarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $datas = Cuentas::orderBy('id')->get();
            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                    $button = '<button type="button" name="payment" id="' . $datas->id . '" class="payment btn btn-app bg-success tooltipsC" title="Agregar Pago"  ><span class="badge bg-teal">Add Pago</span><i class="fas fa-notes-medical"></i> Detalle </button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('facturacion.cuentasxpagar.indexCuentas');
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
            'future1' => 'max:255',
            'future2' => 'max:255',
            'future3' => 'max:255',
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

    public function addpay($id)
    {
        if (request()->ajax()) {

            $datas2 = Cuentas::where('id', $id)->first();

            return response()->json(['result' => $datas2]);
        }
        return view('facturacion.cuentasxpagar.indexCuentas');
    }

    public function guardarpago(Request $request)
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
