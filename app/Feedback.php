<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'phone_number', 'text', 'status'];
}
