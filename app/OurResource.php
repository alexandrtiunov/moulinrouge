<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurResource extends Model
{

    protected $fillable = ['category_id', 'img_path', 'img_preview_path'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
