<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Cart\ProductInCart;
use App\Category;
use App\Resource;
use App\FittingRoom;

class FittingController extends Controller
{
    public function index(){

        $title = "Моя примерочная";

        $productsFitting = ProductInCart::addFittingProduct();
        $productsCart = ProductInCart::addCartProduct();
        $productName = ProductInCart::viewProduct($productsFitting);
        $productName = trim($productName, ", ");
        $date = self::date();

        $categories = Category::all();
        $resources = Resource::all();

        return view('fitting', [
            'categories'=> $categories,
            'title'=> $title,
            'productsFitting'=> $productsFitting,
            'productsCart'=> $productsCart,
            'resources'=> $resources,
            'productName'=> $productName,
            'date'=> $date,
        ]);
    }

    public function store(Request $request){

        $fitting = $this->validate(request(), [
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "date" => "required",
            "time" => "required",
            "dress_name" => "required",
        ]);

        if($fitting){
            FittingRoom::create($fitting);

            return back()->with('success', 'Спасибо, Вы записаны на примерку');
        }
        return back()->with('error', 'error');
    }
}
