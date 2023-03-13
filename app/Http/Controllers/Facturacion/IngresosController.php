<?php

namespace App\Http\Controllers\Facturacion;

use App\Http\Controllers\Controller;
use App\Models\Facturacion\Ingresos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Seguridad\Usuario;
use App\Models\Facturacion\Proveedores;
use App\Models\Facturacion\CuentasIng;

class IngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $datas = Ingresos::orderBy('id')->with('userId', 'proveedorId','cuentas')
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
        return view('facturacion.ingresos.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(

            'numeroingreso'=> 'required',
            'tipoingreso'=> 'required',
            'formadepago'=> 'required',
            'fechadeingreso'=> 'required',
            'totalingreso'=> 'required|numeric|min:99999',
            'observacion'=> 'required',
            'proveedor_id'=> 'required|numeric',
            'cuenta_id'=> 'required|numeric',
            'user_id' => 'required|numeric'


        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }else{

        Ingresos::create($request->all());
            return response()->json(['success' => 'ok']);
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
