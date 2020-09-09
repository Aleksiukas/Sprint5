<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pojektas extends Model
{
    public $fillable = ['pojektas'];

    public function darbuotojas(){
        return $this->hasMany('App\Darbuotojas');
    }
}
