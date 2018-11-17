<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Collection;
use App\Product;
use App\Resource;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Cart\ProductInCart;

class IndexController extends Controller
{

    public function index(){

        $products = Product::orderBy('id', 'desc')->get();
        $articles = Blog::orderBy('id', 'desc')->get();
        $resources = Resource::all();
        $categories = Category::all();

        $productsCart = ProductInCart::addProduct();

        return view('index', [
            'products' => $products,
            'resources'=> $resources,
            'articles'=> $articles,
            'categories'=> $categories,
            'productsCart'=> $productsCart,
        ]);
    }

    public function catalog(Request $request, $categoryShortName = null, $collectionShortName = null){

        $resources = Resource::all();
        $categories = Category::all();
        $collections = Collection::all();
        $productsCart = ProductInCart::addProduct();


        if ($categoryShortName) {
            $category = Category::where('short_name', $categoryShortName)->first();
            $catId = $category->id;
            $products = Product::where('category_id', $catId)->get();

            $title = $categoryShortName;

                if (isset($collectionShortName)){

                    $collection = Collection::where('short_name', $collectionShortName)->first();
                    $collectionId = $collection->id;
                    $products = Product::where('collection_id', $collectionId)->get();

//                    dump($products, $collectionId);
                    return view('products', [
                        'products' => $products,
                        'resources'=> $resources,
                        'category'=> $category,
                        'categories'=> $categories,
                        'collections'=> $collections,
                        'productsCart'=> $productsCart,
                        'title'=> $title,
                    ]);
                }

            return view('products', [
                'products' => $products,
                'resources'=> $resources,
                'category'=> $category,
                'categories'=> $categories,
                'collections'=> $collections,
                'productsCart'=> $productsCart,
                'title'=> $title,
            ]);
        }else {
            $products = Product::orderBy('id', 'desc')->paginate(20);

            $title = "Каталог товаров";

            return view('catalog', [
                'products' => $products,
                'resources'=> $resources,
                'title'=> $title,
                'categories'=> $categories,
                'collections'=> $collections,
                'productsCart'=> $productsCart,
            ]);
        }
    }

    public function detail($category_short_name, $short_name){

        $product = Product::where('short_name', $short_name)->first();

        $categories = Category::all();
        $resources = Resource::all();
        $productsCart = ProductInCart::addProduct();

        return view('detail', compact('detail', 'short_name'), [
            'product' => $product,
            'categories'=> $categories,
            'resources'=> $resources,
            'productsCart'=> $productsCart,
        ]);
    }

}
