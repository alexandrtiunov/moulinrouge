<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{

    protected $fillable = ['product_id', 'date', 'percent', 'new_price', 'user_id'];

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function users(){
        return $this->hasMany('App\User');
    }
}
