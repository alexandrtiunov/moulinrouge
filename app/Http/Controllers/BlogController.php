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
        $productsFitting = ProductInCart::addFittingProduct();
        $productsCart = ProductInCart::addCartProduct();
        $date = self::date();

        return view('blog', [
            'articles' => $articles,
            'title' => $title,
            'categories' => $categories,
            'productsFitting' => $productsFitting,
            'productsCart' => $productsCart,
            'date'=> $date,
        ]);
    }

    public function detail($articleShortName){

        if($articleShortName){
            $article = Blog::where('short_name', $articleShortName)->first();
        }
        $title = $article->title;
        $categories = Category::all();
        $productsFitting = ProductInCart::addFittingProduct();
        $resources = BlogResource::all();
        $articles = Blog::orderBy('id', 'desc')->take(5)->get();
        $date = self::date();

        return view('article', [
            'article' => $article,
            'title' => $title,
            'categories' => $categories,
            'productsFitting' => $productsFitting,
            'resources' => $resources,
            'articles' => $articles,
            'date'=> $date,
        ]);

    }
}
