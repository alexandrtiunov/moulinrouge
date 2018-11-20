<?php

namespace App\Http\Controllers\Admin;

use App\Collection;
use App\LogFile\LogFile;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CollectionController extends Controller
{
    public function index(){

        $title = "Коллекции";
        $collections = Collection::all();
        $products = Product::all();

        return view('admin.collections', [
            "title" => $title,
            "collections" => $collections,
            "products" => $products,
        ]);
    }

    public function store(Request $request){

        $collection = $this->validate(request(), [
           "name" => "required",
           "year" => "required",
           "short_name" => "required",
        ]);

        $collection['user'] = Auth::user()->name;

        if($collection){
            $method = __METHOD__;
            LogFile::collectionLog($collection, $method);die;
            Collection::create($collection);

            return back()->with('success', 'Коллекция добавлена');
        }

    }

    public function destroy ($id){

    }
}
