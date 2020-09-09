<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darbuotojas extends Model
{
    public $fillable = ['darbuotojai', 'projektas_id'];

    public function pojektas(){
        return $this->belongsTo('App\Pojektas');

    }

}
