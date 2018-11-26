<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogResource extends Model
{
    protected $fillable = ['blog_id', 'type', 'img_path'];

    public function blog(){
        return $this->belongsTo('App\Blog');
    }
}
