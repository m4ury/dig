<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $fillable = ['paciente_id', 'tipo_control', 'peso', 'talla', 'imc', 'rcv', 'observacion', 'proximo_control'];

    public function paciente()
    {
        $this->belongsTo(Paciente::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
