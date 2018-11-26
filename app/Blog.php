<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title', 'short_name', 'text', 'img_path', 'status', 'user_id'];

    public function user (){
        return $this->belongsTo('App\User');
    }

    public function blogresource(){
        return $this->hasMany('App\BlogResource');
    }
}
