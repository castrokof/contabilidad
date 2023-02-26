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
        'porcentaje_gasto_fidem_1',
        'porcentaje_gasto_fidem_2',
        'sede_ips',
        'future4',
        'future5',
        'user_id',
        'proveedor_id'
    ];


    public function userid()
    {
        return $this->belongsTo(Usuario::class, 'id');
    }

    public function proveedorId(){
        return $this->hasMany(Proveedores::class, 'id');
    }

}
