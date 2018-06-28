<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    public function rem(){
        return $this->belongsTo(Rem::class);
    }
}