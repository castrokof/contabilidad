<?php

namespace App\Models\Facturacion;
use App\Models\Seguridad\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingresos extends Model
{
    protected $table = 'ingresos';


    protected $fillable = [
            'numeroingreso',
            'tipoingreso',
            'formadepago',
            'fechadeingreso',
            'totalingreso',
            'observacion',
            'sede_ips',
            'future4',
            'future5',
            'cuenta_id',
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

    public function cuentas()
    {
        return $this->belongsTo(CuentasIng::class, 'cuenta_id');
    }


}
