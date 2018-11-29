<?php

namespace App\Http\Controllers;

use App\Http\Cart\ProductInCart;
use App\Product;
use App\Resource;
use Illuminate\Http\Request;
use App\Category;

class CartController extends Controller
{

    public function index(){

        $title = "Моя примерочная";

        $productsCart = ProductInCart::addProduct();
        $productName = ProductInCart::viewProduct($productsCart);
        $productName = trim($productName, ", ");
        $date = self::date();

        $categories = Category::all();
        $resources = Resource::all();

        return view('cart', [
            'categories'=> $categories,
            'title'=> $title,
            'productsCart'=> $productsCart,
            'resources'=> $resources,
            'productName'=> $productName,
            'date'=> $date,
        ]);
    }

    public function store(Request $request){

        dd($request);
    }
}
