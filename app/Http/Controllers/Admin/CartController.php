<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){

        $title = "Размещенные заказы";
        $orders = Order::where('status', 1)->get();

        return view('admin.cart', [
            'title' => $title,
            'orders' => $orders,
        ]);
    }

    public function update(Request $request, $id){

        $order = Order::find($id);

        $order->status = 0;

        $order->save();

        return back()->with('success', 'Заказ выполнен');
    }
}
