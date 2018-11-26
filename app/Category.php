<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'short_name', 'activity'];

    public function product(){
        return $this->hasMany('App\Product');
    }

    public function ourResorce(){
        return $this->hasMany('App\OurResource');
    }
}
