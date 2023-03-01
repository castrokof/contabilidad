<?php

namespace App\Models\Facturacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    protected $table = 'cuentasxpagas';

    protected $fillable = [

        'fechadepago',
        'valordelpago',
        'tipodepago',
        'numerotransaccion',
        'observacion',
        'cuentasxpagar_id'
    ];


    public function cuentasxpagarId()
    {
        return $this->belongsTo(Cuentas::class, 'cuentasxpagar_id');
    }

}
