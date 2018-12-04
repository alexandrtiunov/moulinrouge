<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\OurResource;
use App\Http\Cart\ProductInCart;

class NevestyController extends Controller
{
    public function index(){

        $title = "Наши невесты";
        $ourResources = OurResource::all();
        $categories = Category::all();
        $productsFitting = ProductInCart::addFittingProduct();
        $productsCart = ProductInCart::addCartProduct();

        $date = self::date();

        return view('nashi-nevesty', [
            "title" => $title,
            "ourResources" => $ourResources,
            "productsFitting" => $productsFitting,
            'productsCart'=> $productsCart,
            "categories" => $categories,
            'date'=> $date,
        ]);
    }
}
