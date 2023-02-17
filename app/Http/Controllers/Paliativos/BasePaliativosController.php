<?php

namespace App\Http\Controllers\Paliativos;

use App\Http\Controllers\Controller;
use App\Imports\Pacientesimport;
use App\Models\Paliativos\BasePaliativos;
use App\Models\Paliativos\ObsPaliativos;
use App\Models\Seguridad\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class BasePaliativosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        if ($request->ajax()) {

            if ($request->state != '') {


            $estadomax =  DB::table('estados')
            ->select(DB::raw('MAX(id_estado) as last_id_estado'))
            ->groupBy('documento');

        $estadomaxc = DB::table('estados')
            ->rightJoinSub($estadomax, 'last_ids', function ($join) {
                $join->on('estados.id_estado', '=', 'last_ids.last_id_estado');
            });



        $datas = DB::table('bdpaliativos')
            ->leftJoinSub($estadomaxc, 'last_ids2', function ($join) {
                $join->on('bdpaliativos.document', '=', 'last_ids2.documento');
            })->orderBy('bdpaliativos.state')->where('bdpaliativos.state',$request->state)->get();


        return  DataTables()->of($datas)
            ->addColumn('action', function ($datas) {
                    $button = '<button type="button" name="novedad" id="' . $datas->id . '" class="novedad btn btn-float btn-sm btn-success tooltipsC" title="Adicionar novedad"  ><i class="fas fa-notes-medical "></i></button>' .
                    $button = '<button type="button" name="estado" id="' . $datas->id . '" class="addestado btn btn-float btn-sm btn-warning tooltipsC" title="Adicionar estado"  ><i class="fas fa-user-check"></i></button><br>' .
                    $button = '<button type="button" name="fallecido" id="' . $datas->id . '" class="addfallecido btn btn-float btn-sm btn-danger tooltipsC" title="Adicionar fallecido"  ><i class="fas fa-bible"></i></button>' .
                    $button = '<button type="button" name="asociarpro" id="' . $datas->id . '" class="asociarpro btn btn-float btn-sm btn-info tooltipsC" title="Asociar a profesional"  ><i class="fas fa-clinic-medical"></i></button>'
                    // . $button = '<button type="button" name="agendar" class="agenda btn btn-app bg-warning tooltipsC" title="Clic para agendar" value="' . $datas->id . '" ><span class="badge bg-teal">Psico</span><i class="fas fa-file-medical"></i> Agendar </button>'
                    // . $button = '<button type="button" name="seguimiento" class="seguimientoadd btn btn-app bg-danger tooltipsC" title="Add seguimiento" value="' . $datas->id . '" ><span class="badge bg-teal">Seguimiento</span><i class="fas fa-laptop-medical"></i> Seguimiento </button>'
                ;

                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);

            }else{


            $estadomax =  DB::table('estados')
            ->select(DB::raw('MAX(id_estado) as last_id_estado'))
            ->groupBy('documento');

        $estadomaxc = DB::table('estados')
            ->rightJoinSub($estadomax, 'last_ids', function ($join) {
                $join->on('estados.id_estado', '=', 'last_ids.last_id_estado');
            });



        $datas = DB::table('bdpaliativos')
            ->leftJoinSub($estadomaxc, 'last_ids2', function ($join) {
                $join->on('bdpaliativos.document', '=', 'last_ids2.documento');
            })->orderBy('bdpaliativos.state')->get();


        return  DataTables()->of($datas)
            ->addColumn('action', function ($datas) {
                $button = '<button type="button" name="novedad" id="' . $datas->id . '" class="novedad btn btn-float btn-sm btn-success tooltipsC" title="Adicionar novedad"  ><i class="fas fa-notes-medical "></i></button>' .
                    $button = '<button type="button" name="estado" id="' . $datas->id . '" class="addestado btn btn-float btn-sm btn-warning tooltipsC" title="Adicionar estado"  ><i class="fas fa-user-check"></i></button><br>' .
                    $button = '<button type="button" name="fallecido" id="' . $datas->id . '" class="addfallecido btn btn-float btn-sm btn-danger tooltipsC" title="Adicionar fallecido"  ><i class="fas fa-bible"></i></button>' .
                    $button = '<button type="button" name="asociarpro" id="' . $datas->id . '" class="asociarpro btn btn-float btn-sm btn-info tooltipsC" title="Asociar a profesional"  ><i class="fas fa-clinic-medical"></i></button>'
                    // . $button = '<button type="button" name="agendar" class="agenda btn btn-app bg-warning tooltipsC" title="Clic para agendar" value="' . $datas->id . '" ><span class="badge bg-teal">Psico</span><i class="fas fa-file-medical"></i> Agendar </button>'
                    // . $button = '<button type="button" name="seguimiento" class="seguimientoadd btn btn-app bg-danger tooltipsC" title="Add seguimiento" value="' . $datas->id . '" ><span class="badge bg-teal">Seguimiento</span><i class="fas fa-laptop-medical"></i> Seguimiento </button>'
                ;

                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);


            }

        }


        return view('Paliativos.index');
    }

    public function indexsin(Request $request)
    {


        if ($request->ajax()) {



            $datas = BasePaliativos::where('state', 'SIN CONTACTO')->orderBy('id')->get();

            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                    $button = '<button type="button" name="novedad" id="' . $datas->id . '" class="novedad btn btn-float btn-sm btn-success tooltipsC" title="Adicionar novedad"  ><i class="fas fa-notes-medical "></i></button>' .
                        $button = '<button type="button" name="estado" id="' . $datas->id . '" class="addestado btn btn-float btn-sm btn-warning tooltipsC" title="Adicionar estado"  ><i class="fas fa-user-check"></i></button><br>' .
                        $button = '<button type="button" name="fallecido" id="' . $datas->id . '" class="addfallecido btn btn-float btn-sm btn-danger tooltipsC" title="Adicionar fallecido"  ><i class="fas fa-bible"></i></button>' .
                        $button = '<button type="button" name="asociarpro" id="' . $datas->id . '" class="asociarpro btn btn-float btn-sm btn-info tooltipsC" title="Asociar a profesional"  ><i class="fas fa-clinic-medical"></i></button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('Paliativos.index');
    }

    public function indexdomi(Request $request)
    {


        if ($request->ajax()) {



            $datas = BasePaliativos::where('type', 'DOMICILIARIO')->orderBy('id')->get();

            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                        $button = '<button type="button" name="novedad" id="' . $datas->id . '" class="novedad btn btn-float btn-sm btn-success tooltipsC" title="Adicionar novedad"  ><i class="fas fa-notes-medical "></i></button>' .
                        $button = '<button type="button" name="estado" id="' . $datas->id . '" class="addestado btn btn-float btn-sm btn-warning tooltipsC" title="Adicionar estado"  ><i class="fas fa-user-check"></i></button><br>' .
                        $button = '<button type="button" name="fallecido" id="' . $datas->id . '" class="addfallecido btn btn-float btn-sm btn-danger tooltipsC" title="Adicionar fallecido"  ><i class="fas fa-bible"></i></button>' .
                        $button = '<button type="button" name="asociarpro" id="' . $datas->id . '" class="asociarpro btn btn-float btn-sm btn-info tooltipsC" title="Asociar a profesional"  ><i class="fas fa-clinic-medical"></i></button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('Paliativos.index');
    }


    public function indexupe(Request $request)
    {


        if ($request->ajax()) {


            $fechaini = new Carbon(now());
            $fechaini = $fechaini->toDateString();



            $datas = BasePaliativos::join('cosultaspes', 'bdpaliativos.document', '=', 'cosultaspes.documento')->whereIn('bdpaliativos.state', ['ATENDIO', 'ASIGNADO', 'ATENDIDO', 'PACIENTE NO ACEPTA CITA'])
                ->select(
                    'bdpaliativos.surname',
                    'bdpaliativos.ssurname',
                    'bdpaliativos.fname',
                    'bdpaliativos.sname',
                    'bdpaliativos.type_document',
                    'bdpaliativos.document',
                    DB::raw('DATEDIFF(now(), cosultaspes.paliativista1) as diasp1'),
                    'cosultaspes.paliativista1 as paliativista1',
                    DB::raw('DATEDIFF(now(), cosultaspes.paliativista2) as diasp2'),
                    'cosultaspes.paliativista2 as paliativista2',
                    DB::raw('DATEDIFF(now(), cosultaspes.experto1) as diase1'),
                    'cosultaspes.experto1 as experto1',
                    DB::raw('DATEDIFF(now(), cosultaspes.experto3) as diase3'),
                    'cosultaspes.experto3 as experto3',
                    DB::raw('DATEDIFF(now(), cosultaspes.experto2) as diase2'),
                    'cosultaspes.experto2 as experto2',
                    'bdpaliativos.state',
                    'bdpaliativos.type',
                    'bdpaliativos.id as id'
                )
                ->orderBy('bdpaliativos.id')->get();


            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                    $button = '<button type="button" name="novedad" id="' . $datas->id . '" class="novedad btn btn-float btn-sm btn-success tooltipsC" title="Adicionar novedad"  ><i class="fas fa-notes-medical "></i></button>' .
                        $button = '<button type="button" name="estado" id="' . $datas->id . '" class="addestado btn btn-float btn-sm btn-warning tooltipsC" title="Adicionar estado"  ><i class="fas fa-user-check"></i></button><br>' .
                        $button = '<button type="button" name="fallecido" id="' . $datas->id . '" class="addfallecido btn btn-float btn-sm btn-danger tooltipsC" title="Adicionar fallecido"  ><i class="fas fa-bible"></i></button>' .
                        $button = '<button type="button" name="asociarpro" id="' . $datas->id . '" class="asociarpro btn btn-float btn-sm btn-info tooltipsC" title="Asociar a profesional"  ><i class="fas fa-clinic-medical"></i></button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view('Paliativos.index');
    }


    public function indexupef(Request $request)
    {


        if ($request->ajax()) {


            $fechaini = new Carbon(now());
            $fechaini = $fechaini->toDateString();



            $datas1 = DB::table('bdpaliativos')->join('cosultaspes', 'bdpaliativos.document', '=', 'cosultaspes.documento')->whereIn('bdpaliativos.state', ['ATENDIO', 'ASIGNADO', 'ATENDIDO', 'PACIENTE NO ACEPTA CITA'])
                ->select(
                    'bdpaliativos.document',
                    DB::raw('DATEDIFF(now(), cosultaspes.paliativista1) as diasp1'),
                    'cosultaspes.paliativista1 as paliativista1',
                    DB::raw('DATEDIFF(now(), cosultaspes.paliativista2) as diasp2'),
                    'cosultaspes.paliativista2 as paliativista2',
                    DB::raw('DATEDIFF(now(), cosultaspes.experto1) as diase1'),
                    'cosultaspes.experto1 as experto1',
                    DB::raw('DATEDIFF(now(), cosultaspes.experto3) as diase3'),
                    'cosultaspes.experto3 as experto3',
                    DB::raw('DATEDIFF(now(), cosultaspes.experto2) as diase2'),
                    'cosultaspes.experto2 as experto2'
                );



                $datas = DB::table('bdpaliativos')
                ->JoinSub($datas1, 'paliativos', function ($join) {
                $join->on('bdpaliativos.document', '=', 'paliativos.document');
                })->where(function ($query) {
                    $query->where('paliativos.diasp1', '>', 30)
                          ->orWhere('paliativos.diasp1', '=', null);
                })->where(function ($query) {
                    $query->where('paliativos.diasp2', '>', 30)
                          ->orWhere('paliativos.diasp2', '=', null);
                })->where(function ($query) {
                    $query->where('paliativos.diase1', '>', 30)
                          ->orWhere('paliativos.diase1', '=', null);
                })->where(function ($query) {
                    $query->where('paliativos.diase3', '>', 30)
                          ->orWhere('paliativos.diase3', '=', null);
                })->where(function ($query) {
                    $query->where('paliativos.diase2', '>', 30)
                          ->orWhere('paliativos.diase2', '=', null);
                })->orderBy('bdpaliativos.state')->get();


            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                        $button = '<button type="button" name="novedad" id="' . $datas->id . '" class="novedad btn btn-float btn-sm btn-success tooltipsC" title="Adicionar novedad"  ><i class="fas fa-notes-medical "></i></button>' .
                        $button = '<button type="button" name="estado" id="' . $datas->id . '" class="addestado btn btn-float btn-sm btn-warning tooltipsC" title="Adicionar estado"  ><i class="fas fa-user-check"></i></button><br>' .
                        $button = '<button type="button" name="fallecido" id="' . $datas->id . '" class="addfallecido btn btn-float btn-sm btn-danger tooltipsC" title="Adicionar fallecido"  ><i class="fas fa-bible"></i></button>' .
                        $button = '<button type="button" name="asociarpro" id="' . $datas->id . '" class="asociarpro btn btn-float btn-sm btn-info tooltipsC" title="Asociar a profesional"  ><i class="fas fa-clinic-medical"></i></button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


    }


    public function indexua(Request $request)
    {


        if ($request->ajax()) {


            $fechaini = new Carbon(now());
            $fechaini = $fechaini->toDateString();



            $datas1 = DB::table('bdpaliativos')->join('consulta_auxiliars', 'bdpaliativos.document', '=', 'consulta_auxiliars.documento')->whereIn('bdpaliativos.state', ['ATENDIO', 'ASIGNADO', 'ATENDIDO', 'PACIENTE NO ACEPTA CITA'])
                ->select(
                    'bdpaliativos.document',
                    DB::raw('DATEDIFF(now(), consulta_auxiliars.auxiliar1) as diasa1'),
                    'consulta_auxiliars.auxiliar1 as auxiliar1',
                    DB::raw('DATEDIFF(now(), consulta_auxiliars.auxiliar2) as diasa2'),
                    'consulta_auxiliars.auxiliar2 as auxiliar2',
                    DB::raw('DATEDIFF(now(), consulta_auxiliars.auxiliar3) as diasa3'),
                    'consulta_auxiliars.auxiliar3 as auxiliar3',
                    DB::raw('DATEDIFF(now(), consulta_auxiliars.auxiliar4) as diasa4'),
                    'consulta_auxiliars.auxiliar4 as auxiliar4',
                    DB::raw('DATEDIFF(now(), consulta_auxiliars.auxiliar5) as diasa5'),
                    'consulta_auxiliars.auxiliar5 as auxiliar5',
                    DB::raw('DATEDIFF(now(), consulta_auxiliars.auxiliar6) as diasa6'),
                    'consulta_auxiliars.auxiliar6 as auxiliar6'
                );



                $datas = DB::table('bdpaliativos')
                ->JoinSub($datas1, 'auxiliares', function ($join) {
                $join->on('bdpaliativos.document', '=', 'auxiliares.document');
                })->where(function ($query) {
                    $query->where('auxiliares.diasa1', '>', 15)
                          ->orWhere('auxiliares.diasa1', '=', null);
                })->where(function ($query) {
                    $query->where('auxiliares.diasa2', '>', 15)
                          ->orWhere('auxiliares.diasa2', '=', null);
                })->where(function ($query) {
                    $query->where('auxiliares.diasa3', '>', 15)
                          ->orWhere('auxiliares.diasa3', '=', null);
                })->where(function ($query) {
                    $query->where('auxiliares.diasa4', '>', 15)
                          ->orWhere('auxiliares.diasa4', '=', null);
                })->where(function ($query) {
                    $query->where('auxiliares.diasa5', '>', 15)
                          ->orWhere('auxiliares.diasa5', '=', null);
                })
                ->where(function ($query) {
                    $query->where('auxiliares.diasa6', '>', 15)
                          ->orWhere('auxiliares.diasa6', '=', null);
                })->orderBy('bdpaliativos.state')->get();


            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                        $button = '<button type="button" name="novedad" id="' . $datas->id . '" class="novedad btn btn-float btn-sm btn-success tooltipsC" title="Adicionar novedad"  ><i class="fas fa-notes-medical "></i></button>' .
                        $button = '<button type="button" name="estado" id="' . $datas->id . '" class="addestado btn btn-float btn-sm btn-warning tooltipsC" title="Adicionar estado"  ><i class="fas fa-user-check"></i></button><br>' .
                        $button = '<button type="button" name="fallecido" id="' . $datas->id . '" class="addfallecido btn btn-float btn-sm btn-danger tooltipsC" title="Adicionar fallecido"  ><i class="fas fa-bible"></i></button>' .
                        $button = '<button type="button" name="asociarpro" id="' . $datas->id . '" class="asociarpro btn btn-float btn-sm btn-info tooltipsC" title="Asociar a profesional"  ><i class="fas fa-clinic-medical"></i></button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($idp)
    {
        $data = Usuario::with('roles1')->get();

        $pacientebd = BasePaliativos::with('obspaliativos')->where('id', $idp)->get();

        //where('id',$idp)->whit()->get();

        return response()->json([['pacientebd' => $pacientebd], ['usuario' => $data]]);
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
                'surname' => 'required',
                'fname' => 'required',
                'type_document' => 'required',
                'document' => 'required',
                'state' => 'required',
                'type' => 'required',
                'user_id' => 'required'
            );

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            BasePaliativos::create($request->all());

            return response()->json(['success' => 'ok']);
        }
    }

    public function actualizarpro(Request $request)
    {
        if ($request->ajax()) {

            $rules = array(
                'profesional' => 'required'
            );

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }


            $profesional = BasePaliativos::findOrFail($request->id);
            $profesional->update($request->all());

            return response()->json(['success' => 'ok1']);
        }
    }

    public function actualizarestado(Request $request)
    {
        if ($request->ajax()) {

            $rules = array(
                'state' => 'required',
                'type' => 'required',
            );

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $profesional = BasePaliativos::findOrFail($request->id);

            if ($profesional->state == 'FALLECIDO') {

                return response()->json(['success' => 'dead']);
            } else {

                $profesional = BasePaliativos::findOrFail($request->id);
                $profesional->update($request->all());

                return response()->json(['success' => 'ok1']);
            }
        }
    }

    public function actualizarfallecido(Request $request)
    {
        if ($request->ajax()) {

            $rules = array(
                'date_dead' => 'required'

            );

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }


            $profesional = BasePaliativos::findOrFail($request->id);

            if ($profesional->state == 'FALLECIDO') {

                return response()->json(['success' => 'dead']);
            } else {

                $profesional = BasePaliativos::findOrFail($request->id);
                $profesional->update($request->all());

                return response()->json(['success' => 'ok1']);
            }
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paliativos\BasePaliativos  $basePaliativos
     * @return \Illuminate\Http\Response
     */
    public function edit(BasePaliativos $basePaliativos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paliativos\BasePaliativos  $basePaliativos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasePaliativos $basePaliativos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paliativos\BasePaliativos  $basePaliativos
     * @return \Illuminate\Http\Response
     */
    public function informes(Request $request)
    {

        if ($request->ajax()) {

            $fechaini = new Carbon($request->fechaini);
            $fechaini = $fechaini->toDateString();

            $fechafin = new Carbon($request->fechafin);
            $fechafin = $fechafin->toDateString();

            $usuario = $request->usuario;
            $valor_hora_add = 0;

            //Consulta de fallecidos
            $dead = BasePaliativos::where('state', 'FALLECIDO')->count();

            //Consulta de total de pacientes en paliativos
            $totalBdPaliativos = BasePaliativos::count();

            //consulta de ambulatorios
            $totalBdAmbulatorio = BasePaliativos::where([['type', 'AMBULATORIO']])->whereIn('state', ['ATENDIO', 'ASIGNADO', 'ATENDIDO'])->count();

            //consulta de Domiciliarios
            $totalDomi = BasePaliativos::where([['type', 'DOMICILIARIO']])->whereIn('state', ['ATENDIO', 'ASIGNADO', 'ATENDIDO'])->count();

            //Consulta de pacientes activos

            $totalBdActivos = BasePaliativos::whereIn('state', ['ATENDIO', 'ASIGNADO', 'ATENDIDO'])->count();


            //Consulta de pacientes activos

            $totalBdSincontacto = BasePaliativos::whereIn('state', ['SIN CONTACTO'])->count();

            //Consulta de pacientes No quieren la consulta

            $totalBdNoaceptancitas = BasePaliativos::whereIn('state', ['PACIENTE NO ACEPTA CITA'])->count();

            //Consulta total de alarmas

            $totalAlarmas = ObsPaliativos::whereIn('type_obs', ['ALERTA'])->count();

            //Consulta total Agresadod

            $totalEgresados = BasePaliativos::whereIn('state', ['FALLECIDO', 'EGRESADO'])->count();




            return response()->json([
                'sinc' => $totalBdSincontacto, 'result' => $dead, 'result1' => $totalBdPaliativos, 'result2' => $totalBdAmbulatorio,
                'result3' => $totalBdActivos, 'alarmas' => $totalAlarmas, 'domiciliarios' => $totalDomi, 'egresados' => $totalEgresados, 'noacepta' => $totalBdNoaceptancitas
            ]);
        }
    }


    public function import(Request $request)
    {

        if ($request->ajax()) {
            $file = $request->file('file2');

            if ($file == null) {

                return response()->json(['mensaje' => 'vacio']); //return redirect('admin/archivo')->with('mensaje', 'No seleccionaste ningun archivo');


            } else {

                $this->importaExcel($request);




                return response()->json(['mensaje' => 'ok']); //return redirect('admin/archivo')->with('mensaje', 'Archivo cargado exitosamente');


            }
        }
    }


    public function importaExcel(Request $request)
    {

        // Guardo la colección en $file

        $file = $request->file('file2');

        $name = time() . $file->getClientOriginalName();


        $destinationPath = public_path('importbd/');

        $file->move($destinationPath, $name);

        $path = $destinationPath . $name;

        // $import = new EstadosImport();

        Excel::import(new Pacientesimport, $path);
    }
}
