<?php

namespace App\Http\Controllers\Admin;

use App\LogFile\LogFile;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AtributController extends Controller
{

    public function update(Request $request, $id){

        $product = Product::find($id);

        $this->validate(request(), [
           "atribut_id" => "required"
        ]);

        $product->atribut_id = $request->get('atribut_id');

        $method = __METHOD__;
        LogFile::ProductLog($product, $method);
        $product->save();

        return back()->with('update', 'Товар ' . $product->article . '-' . $product->name . ' возвращен из архива');
    }
}
