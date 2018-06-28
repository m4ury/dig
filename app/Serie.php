<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rem;

class Serie extends Model
{
    public function rems(){
        return $this->hasMany(Rem::class);
    }
}
