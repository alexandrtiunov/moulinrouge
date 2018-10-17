<?php

namespace App\Http\Controllers;

use App\Product;
use App\Resource;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(){

        $products = Product::orderBy('id', 'desc')->get();
        $resources = Resource::all();

        return view('index', [
            'products' => $products,
            'resources'=> $resources
        ]);
    }

    public function catalog(){

        $products = Product::all();
        $resources = Resource::all();

        return view('products', [
            'products' => $products,
            'resources'=> $resources
            ]);
    }

    public function detail($short_name){

        $product = Product::where('short_name', $short_name)->first();
//        $productId = $product->id;

        return view('detail', compact('detail', 'short_name'), [
            'product' => $product,
//            'comments' => $comments,
//            'title' => $title,
//            'resources' => $resources
        ]);
    }

}
