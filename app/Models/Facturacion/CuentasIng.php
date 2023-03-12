<?php

namespace App\Models\Facturacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentasIng extends Model
{
   protected $table = 'cuentas';

   protected $fillable = [
   'nombrecuenta',
   'tipodecuenta',
   'observacion',
   'future4',
   'future5',
   'user_id',
   'sede_id'
   ];

   public function userId1()
   {
       return $this->belongsTo(Usuario::class, 'user_id');
   }

   public function sede_id()
   {
       return $this->hasMany(Ingresos::class, 'id');
   }

}
