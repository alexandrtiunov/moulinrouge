<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atribut extends Model
{
    public function product(){
        return $this->hasMany('App\Product');
    }
}
