<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $fillable = ['name', 'year', 'short_name'];

    public function product(){
        return $this->hasMany('App\Product');
    }
}
