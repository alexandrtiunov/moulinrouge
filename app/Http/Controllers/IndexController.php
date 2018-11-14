<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Collection;
use App\Product;
use App\Resource;
use Illuminate\Http\Request;
use App\Category;

class IndexController extends Controller
{

    public function index(){

        $products = Product::orderBy('id', 'desc')->get();
        $articles = Blog::orderBy('id', 'desc')->get();
        $resources = Resource::all();
        $categories = Category::all();

        return view('index', [
            'products' => $products,
            'resources'=> $resources,
            'articles'=> $articles,
            'categories'=> $categories,
        ]);
    }

    public function catalog(Request $request, $categoryShortName = null){

        if($request->has('collection')){
            $w = $request->input('col-val');
//            $products = Product::where('content', 'like', '%' . $w . '%')->paginate(5);
            echo $w;
        }

        if ($categoryShortName) {
            $category = Category::where('short_name', $categoryShortName)->first();
            $catId = $category->id;
            $products = Product::where('category_id', $catId)->get();
        }
        else {
            $products = Product::orderBy('id', 'desc')->paginate(20)->toArray();
        }

        $resources = Resource::all();
        $categories = Category::all();
        $collections = Collection::all();

        return view('products', [
            'products' => $products,
            'resources'=> $resources,
            'category'=> $category,
            'categories'=> $categories,
            'collections'=> $collections,
            ]);
    }

    public function detail($category_short_name, $short_name){

        $product = Product::where('short_name', $short_name)->first();

        $categories = Category::all();
        $resources = Resource::all();

        return view('detail', compact('detail', 'short_name'), [
            'product' => $product,
            'categories'=> $categories,
            'resources'=> $resources,
        ]);
    }

}
