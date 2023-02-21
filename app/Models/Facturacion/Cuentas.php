<?php

namespace App\Models\Facturacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuentas extends Model
{
    protected $table = 'cuentasxpagar';

    protected $fillable = [

        'numerofactura',
        'tipofactura',
        'formadepago',
        'fechafactura',
        'fechavencimiento',
        'ica',
        'valorica',
        'retefuente',
        'valorretefuente',
        'iva',
        'valoriva',
        'descuento',
        'valordescuento',
        'total',
        'observacion',
        'future1',
        'future2',
        'future3',
        'future4',
        'future5',
        'user_id',
        'proveedor_id'
    ];


    public function userid()
    {
        return $this->belongsTo(Usuario::class, 'id');
    }

    public function observacionadd(){
        return $this->hasMany(ObservacionesPsicologia::class, 'evo_id');
    }

}
