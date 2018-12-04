<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Cart\ProductInCart;
use App\Category;

class ContactController extends Controller
{
    public function index(){

        $title = "Контакты";
        $productsFitting = ProductInCart::addFittingProduct();
        $productsCart = ProductInCart::addCartProduct();
        $categories = Category::all();
        $date = self::date();

        return view('contact', [
           "title" => $title,
           "productsFitting" => $productsFitting,
            'productsCart'=> $productsCart,
            'categories'=> $categories,
            'date'=> $date,
        ]);
    }
}
