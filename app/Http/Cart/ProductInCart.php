<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 15.11.2018
 * Time: 13:25
 */

namespace App\Http\Cart;
use App\Category;
use App\Product;


class ProductInCart
{

    /*
     *
     *
     */
    public static function addFittingProduct(){

        $products = Product::all();

        $productsFitting = [];
        foreach ($products as $value){

            if(isset($_COOKIE['fitting' . $value->name])){

                $product = Product::where('name', $value->name)->first();
                array_push($productsFitting, $product);
            }
        }
        return $productsFitting;
    }

    public static function addCartProduct(){

        $products = Product::all();

        $productsCart = [];
        foreach ($products as $value){

            if(isset($_COOKIE['cart' . $value->name])){

                $product = Product::where('name', $value->name)->first();
                array_push($productsCart, $product);
            }
        }
        return $productsCart;
    }

    public static function viewProduct ($productsCart){

        $productName = "";
        foreach ($productsCart as $item){
            $productName .= $item->name . ", ";
        }
        return $productName;
    }
}