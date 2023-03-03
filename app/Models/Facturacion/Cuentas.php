<?php

namespace App\Models\Facturacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seguridad\Usuario;

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


    public function userId()
    {
        return $this->belongsTo(Usuario::class, 'user_id');
    }

    public function proveedorId(){
        return $this->belongsTo(Proveedores::class, 'proveedor_id');
    }

    public function pagos()
    {
        return $this->hasMany(Pagos::class, 'cuentasxpagar_id');
    }

    public function cuentaPorPagar()
    {
        return $this->belongsTo(Pagos::class, 'cuentasxpagar_id');
    }

}
