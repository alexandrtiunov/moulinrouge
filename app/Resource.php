<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{

    protected $fillable = ['product_id', 'type', 'img_path', 'img_preview_H250_path', 'img_preview_H405_path',
        'img_preview_H769_path', 'video_path'];

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
