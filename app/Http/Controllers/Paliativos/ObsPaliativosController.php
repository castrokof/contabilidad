<?php

namespace App\Http\Controllers\Paliativos;

use App\Http\Controllers\Controller;
use App\Models\Paliativos\BasePaliativos;
use App\Models\Paliativos\ObsPaliativos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ObsPaliativosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {



             $datas = ObsPaliativos::with('pacid')
             ->select('obspaliativos.*')
            ->whereIn('obspaliativos.type_obs',['ALERTA'])->get();

            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                    $button = '<button type="button" name="deletealertt" id="' . $datas->id . '" class="deletealertt btn btn-float btn-sm btn-warning tooltipsC" title="elminar alerta"  ><i class="fas fa-notes-medical "></i></button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('Paliativos.index');
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

        if ($request->ajax()) {

            $rules = array(

                'observacion' => 'required',
                'type_obs' => 'required',
                'pac_id' => 'required',
                'user_id' => 'required'
            );

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }


            ObsPaliativos::create($request->all());

            if ($request->type_obs == 'EGRESO') {
                $profesional = BasePaliativos::findOrFail($request->pac_id);
                $profesional->update([
                    'state' => $request->type_obs
                ]);

            }

            if ($request->type_obs == 'EGRESO') {
                return response()->json(['success' => 'okEgreso']);
            }

            return response()->json(['success' => 'ok']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paliativos\ObsPaliativos  $obsPaliativos
     * @return \Illuminate\Http\Response
     */
    public function show(ObsPaliativos $obsPaliativos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paliativos\ObsPaliativos  $obsPaliativos
     * @return \Illuminate\Http\Response
     */
    public function edit(ObsPaliativos $obsPaliativos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paliativos\ObsPaliativos  $obsPaliativos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ObsPaliativos $obsPaliativos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paliativos\ObsPaliativos  $obsPaliativos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ObsPaliativos $obsPaliativos)
    {
        //
    }

    public function deletealert($id)
    {
        ObsPaliativos::destroy($id);

        return response()->json(['repuesta'=>'delete']);
    }
}
