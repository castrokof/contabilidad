<?php

namespace App\Models\Nomina;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nominaliquid extends Model
{
    protected $fillable = [
        'date_turn',
        'date_hour_initial_turn',
        'date_hour_end_turn',
        'working_type',
        'day_work',
        'hours',
        'observation',
        'supervisor',
        'quincena',
        'user_id',
        'ips',
        'position',
        'eps',
        'arl',
        'afp',
        'fc',
        'salary',
        'value_hour',
        'value_patient_attended',
        'value_add_security_social',
        'value_transporte',
        'value_salary_add',
        'name_bank',
        'account',
        'type_account',
        'type_contrat',
        'type_salary',
        'date_in',
        'date_out',
        'date_incontrat',
        'date_endcontrat',
        'empleado_id',
        'activo'
    ];


    public function userid()
    {
        return $this->belongsTo(Usuario::class, 'id');
    }

    public function empleadoid()
    {
        return $this->belongsTo(Empleados::class, 'empleado_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
