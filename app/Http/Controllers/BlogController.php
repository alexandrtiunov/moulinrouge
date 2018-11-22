<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogResource;
use App\Category;
use App\Http\Cart\ProductInCart;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $title = "Блог | Moulin Rouge";
        $articles = Blog::all();
        $categories = Category::all();
        $productsCart = ProductInCart::addProduct();

        return view('blog', [
            'articles' => $articles,
            'title' => $title,
            'categories' => $categories,
            'productsCart' => $productsCart,
        ]);
    }

    public function detail($articleShortName){

        if($articleShortName){
            $article = Blog::where('short_name', $articleShortName)->first();
        }
        $title = $article->title;
        $categories = Category::all();
        $productsCart = ProductInCart::addProduct();
        $resources = BlogResource::all();
        $articles = Blog::orderBy('id', 'desc')->take(5)->get();

        return view('article', [
            'article' => $article,
            'title' => $title,
            'categories' => $categories,
            'productsCart' => $productsCart,
            'resources' => $resources,
            'articles' => $articles,
        ]);

    }
}
