<?php

namespace App\Http\Controllers\Facturacion;

use App\Http\Controllers\Controller;
use App\Models\Facturacion\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->ajax()){

                $datas = Proveedores::orderBy('id')->get();
                return DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                $button = '<button type="button" name="resumen" id="' . $datas->id . '" class="edit_proveedor btn btn-app bg-info tooltipsC" title="Editar proveedor"  ><span class="badge bg-teal">Editar</span><i class="fas fa-pen"></i> Editar </button>';

            return $button;
        })->rawColumns(['action'])
        ->make(true);

        }

        return view('facturacion.proveedores.index');
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

            'tipodocumento'=> 'required',
            'documento'=> 'required|unique:proveedores|max:99999999999',
            'nombre'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required|max:255',
            'pais'=> 'required',
            'ciudad'=> 'required',
            'dpto'=> 'required',
            'correo'=> 'required',
            'user_id' => 'required|numeric'


        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }else{

        Proveedores::create($request->all());
            return response()->json(['success' => 'ok']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function select(Request $request)
    {


        $array=[];


        if($request->has('q'))
        {
            $term = $request->get('q');


            array_push($array, Proveedores::orderBy('nombre')->where('nombre', 'LIKE', '%' . $term . '%')
            ->get());

            return response()->json(['array'=>$array]);

        }
        else {



                array_push($array, Proveedores::orderBy('nombre')
                ->get());


                return response()->json(['array'=>$array]);



        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax()){
            $proveedor = Proveedores::where('id', '=', $id)->first();
            return response()->json(['proveedor'=>$proveedor]);
        }

        return view('facturacion.proveedores.index');
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

            'tipodocumento'=> 'required',
            'documento'=> 'required',
            'nombre'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required|max:255',
            'pais'=> 'required',
            'ciudad'=> 'required',
            'dpto'=> 'required',
            'correo'=> 'required',
            'user_id' => 'required|numeric'


        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        if(request()->ajax()){
        Proveedores::findOrFail($id)
        ->update($request->all());

        }
        return response()->json(['success' => 'ok1']);
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
