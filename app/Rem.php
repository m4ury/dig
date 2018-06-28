<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Serie;

class Rem extends Model
{
    public function serie(){
        return $this->belongsTo(Serie::class, 'serie_id');
    }

    public function seccions(){
        return $this->hasMany(Seccion::class);
    }
}
