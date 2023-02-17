<?php

namespace App\Imports;

use App\Models\Paliativos\Estados;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class EstadosImport implements ToCollection
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

            $existe = Estados::where([['documento',$row[1]],['id_estado', $row[4]]])->count();


            if ($existe>0) {
                Estados::where([['documento',$row[1]],['id_estado', $row[4]]])->update([
                    'tipo_documento' => $row[0],
                    'documento'=> $row[1],
                    'paciente' => $row[2],
                    'estado_pac' => $row[3],
                    'id_estado' => $row[4]
                ]);
            }else{
                Estados::create([
                    'tipo_documento' => $row[0],
                    'documento'=> $row[1],
                    'paciente' => $row[2],
                    'estado_pac' => $row[3],
                    'id_estado' => $row[4]
                ]);
            }




        }


       return $numRows1;
    }


    public function getRowCount(): int
    {
        return $this->numRows;
    }


}
