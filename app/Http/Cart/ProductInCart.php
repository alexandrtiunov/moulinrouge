<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 15.11.2018
 * Time: 13:25
 */

namespace App\Http\Cart;
use App\Product;


class ProductInCart
{

    /*
     *
     *
     */
    public static function addProduct(){

        $products = Product::all();

        $productsCart = [];
        foreach ($products as $value){

            if(isset($_COOKIE['product' . $value->name])){

                $product = Product::where('name', $value->name)->first();
                array_push($productsCart, $product);
            }
        }
        return $productsCart;
    }
}