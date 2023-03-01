<?php

namespace App\Models\Facturacion;

use App\Models\Facturacion\Cuentas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $table = 'proveedores';

    protected $fillable = [

            'tipodocumento',
            'documento',
            'nombre',
            'direccion',
            'telefono',
            'pais',
            'ciudad',
            'dpto',
            'correo',
            'user_id'
    ];


    public function userid()
    {
        return $this->belongsTo(Usuario::class, 'id');
    }



    public function cuentas()
    {
        return $this->hasMany(Cuentas::class, 'id');
    }


}
