<?php

namespace App\Imports;

use App\Models\Paliativos\Cosultaspe;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class UltimaAtencionPEImport implements ToCollection
{

    public $numRows = 0;

    // use Importable;
    /**
     * @param array $row
     *
     * @return Estados|null
     */




    public function collection(Collection $rows)
    {
        $numRows1 = 0;

        foreach ($rows as $row) {

            $numRows1++;

            $existe = Cosultaspe::where([['documento', $row[1]]])->count();


            if ($existe > 0) {

                if ($row[5] == 'NULL') {
                    $FECHA1 = null;
                } else {
                    $FECHA1 = $row[5];
                }


                if ($row[6] == 'NULL') {
                    $FECHA2 = null;
                } else {
                    $FECHA2 = $row[6];
                }


                if ($row[7] == 'NULL') {
                    $FECHA3 = null;
                } else {
                    $FECHA3 = $row[7];
                }


                if ($row[8] == 'NULL') {
                    $FECHA4 = null;
                } else {
                    $FECHA4 = $row[8];
                }


                if ($row[9] == 'NULL') {
                    $FECHA5 = null;
                } else {
                    $FECHA5 = $row[9];
                }

                Cosultaspe::where([['documento', $row[1]]])->update([
                    'tipo_documento' => $row[0],
                    'documento' => $row[1],
                    'paciente' => $row[2],
                    'dx_principal' => $row[3],
                    'dx_relacionado' => $row[4],
                    'paliativista1' => $FECHA1,
                    'paliativista2' => $FECHA2,
                    'paliativista3' => null,
                    'paliativista4' => null,
                    'paliativista5' => null,
                    'experto1' =>  $FECHA3,
                    'experto2' =>  $FECHA4,
                    'experto3' =>  $FECHA5,
                    'experto4' => null,
                    'experto5' => null
                ]);
            } else {
                if ($row[5] == 'NULL') {
                    $FECHA1 = null;
                } else {
                    $FECHA1 = $row[5];
                }


                if ($row[6] == 'NULL') {
                    $FECHA2 = null;
                } else {
                    $FECHA2 = $row[6];
                }


                if ($row[7] == 'NULL') {
                    $FECHA3 = null;
                } else {
                    $FECHA3 = $row[7];
                }


                if ($row[8] == 'NULL') {
                    $FECHA4 = null;
                } else {
                    $FECHA4 = $row[8];
                }


                if ($row[9] == 'NULL') {
                    $FECHA5 = null;
                } else {
                    $FECHA5 = $row[9];
                }

                Cosultaspe::create([
                    'tipo_documento' => $row[0],
                    'documento' => $row[1],
                    'paciente' => $row[2],
                    'dx_principal' => $row[3],
                    'dx_relacionado' => $row[4],
                    'paliativista1' => $FECHA1,
                    'paliativista2' => $FECHA2,
                    'paliativista3' => null,
                    'paliativista4' => null,
                    'paliativista5' => null,
                    'experto1' =>  $FECHA3,
                    'experto2' =>  $FECHA4,
                    'experto3' =>  $FECHA5,
                    'experto4' => null,
                    'experto5' => null
                ]);
            }
        }


        return $numRows1;
    }
}
