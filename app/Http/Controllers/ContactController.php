<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Cart\ProductInCart;
use App\Category;

class ContactController extends Controller
{
    public function index(){

        $title = "Контакты";
        $productsCart = ProductInCart::addProduct();
        $categories = Category::all();

        return view('contact', [
           "title" => $title,
           "productsCart" => $productsCart,
            'categories'=> $categories,
        ]);
    }
}
