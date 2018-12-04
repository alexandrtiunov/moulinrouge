<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Collection;
use App\Feedback;
use App\Product;
use App\Resource;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Cart\ProductInCart;

class IndexController extends Controller
{

    public function index(){

        $products = Product::orderBy('id', 'desc')->get();
        $articles = Blog::orderBy('id', 'desc')->take(2)->get();
        $resources = Resource::all();
        $categories = Category::all();
        $fedbacks = Feedback::orderBy('id', 'desc')->get();

        $productsFitting = ProductInCart::addFittingProduct();
        $productsCart = ProductInCart::addCartProduct();
        $date = self::date();

        return view('index', [
            'products' => $products,
            'resources'=> $resources,
            'articles'=> $articles,
            'categories'=> $categories,
            'productsFitting'=> $productsFitting,
            'productsCart'=> $productsCart,
            'fedbacks'=> $fedbacks,
            'date'=> $date,
        ]);
    }

    public function catalog(Request $request, $categoryShortName = null, $collectionShortName = null){

        $resources = Resource::all();
        $categories = Category::all();
        $collections = Collection::all();
        $productsFitting = ProductInCart::addFittingProduct();
        $productsCart = ProductInCart::addCartProduct();
        $date = self::date();

        if ($categoryShortName) {
            $category = Category::where('short_name', $categoryShortName)->first();
            $catId = $category->id;
            $products = Product::where('category_id', $catId)->get();

            $title = $categoryShortName;

                if (isset($collectionShortName)){

                    $collection = Collection::where('short_name', $collectionShortName)->first();
                    $collectionId = $collection->id;
                    $products = Product::where('collection_id', $collectionId)->get();

                    return view('products', [
                        'products' => $products,
                        'resources'=> $resources,
                        'category'=> $category,
                        'categories'=> $categories,
                        'collections'=> $collections,
                        'productsFitting'=> $productsFitting,
                        'productsCart'=> $productsCart,
                        'title'=> $title,
                        'date'=> $date,
                    ]);
                }

            return view('products', [
                'products' => $products,
                'resources'=> $resources,
                'category'=> $category,
                'categories'=> $categories,
                'collections'=> $collections,
                'productsFitting'=> $productsFitting,
                'productsCart'=> $productsCart,
                'title'=> $title,
                'date'=> $date,
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
                'productsFitting'=> $productsFitting,
                'productsCart'=> $productsCart,
                'date'=> $date,
            ]);
        }
    }

    public function aksessuary(){
        $resources = Resource::all();
        $categories = Category::all();
        $collections = Collection::all();
        $productsFitting = ProductInCart::addFittingProduct();
        $productsCart = ProductInCart::addCartProduct();
        $date = self::date();

        $products = Product::orderBy('id', 'desc')->paginate(20);

        $title = "Каталог товаров";

        return view('aksessuary', [
            'products' => $products,
            'resources'=> $resources,
            'title'=> $title,
            'categories'=> $categories,
            'collections'=> $collections,
            'productsFitting'=> $productsFitting,
            'productsCart'=> $productsCart,
            'date'=> $date,
        ]);
    }

    public function detail($category_short_name, $short_name){

        $product = Product::where('short_name', $short_name)->first();

        $categories = Category::all();
        $resources = Resource::all();
        $productsFitting = ProductInCart::addFittingProduct();
        $productsCart = ProductInCart::addCartProduct();
        $date = self::date();

        return view('detail', compact('detail', 'short_name'), [
            'product' => $product,
            'categories'=> $categories,
            'resources'=> $resources,
            'productsFitting'=> $productsFitting,
            'productsCart'=> $productsCart,
            'date'=> $date,
        ]);
    }
}
