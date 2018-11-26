<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\OurResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NevestyController extends Controller
{
    public function index(){

        $categories = Category::all();
        $ourResources = OurResource::all();

        return view('admin.nashi-nevesty', [
            "categories" => $categories,
            "ourResources" => $ourResources,
        ]);
    }
}
