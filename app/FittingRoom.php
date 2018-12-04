<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FittingRoom extends Model
{

    protected $fillable = ['name', 'email', 'phone', 'date', 'time', 'dress_name'];
}
