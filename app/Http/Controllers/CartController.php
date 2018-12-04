<?php

namespace App\Http\Controllers;

use App\FittingRoom;
use App\Http\Cart\ProductInCart;
use App\Order;
use App\Product;
use App\Resource;
use Illuminate\Http\Request;
use App\Category;

class CartController extends Controller
{

    public function index(){

        $title = "Моя корзина";

        $productsFitting = ProductInCart::addFittingProduct();
        $productsCart = ProductInCart::addCartProduct();
        $productName = ProductInCart::viewProduct($productsCart);
        $productName = trim($productName, ", ");
        $date = self::date();

        $categories = Category::all();
        $resources = Resource::all();

        return view('cart', [
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

//        dd($request);
        $order = $this->validate(request(), [
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "city" => "required",
            "text" => "required",
            "product" => "required",
        ]);

        if($order)
        {
            Order::create($order);

            return back()->with('success', 'Спасибо, Ваш заказ размещен. В ближайшее время с вами сяжется наш специалист');
        }
        return back()->with('error', 'error');
    }
}
