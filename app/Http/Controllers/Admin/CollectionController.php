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

    public function edit(){

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
            LogFile::collectionLog($collection, $method);
            Collection::create($collection);

            return back()->with('success', 'Коллекция добавлена');
        }
        return back()->with('error', 'error');
    }

    public function update(Request $request, $id){

        $collection = Collection::find($id);

        $this->validate(request(), [
           "name" => "required",
           "year" => "required",
           "short_name" => "required",
        ]);

        $post = $_POST;
        $post['user_id'] = Auth::user()->name;
        $method = __METHOD__;
        LogFile::collectionLog($collection, $method, $post);

        $collection->name = $request->get('name');
        $collection->year = $request->get('year');
        $collection->short_name = $request->get('short_name');

        $collection->save();

        return back()->with('update', 'Коллекция обновлена');
    }

    public function destroy($id){

        $collection = Collection::find($id);

        $collection->activity = 0;

        $collection->save();

        $method = __METHOD__;
        $collectionLog = $collection;
        $collectionLog['user'] = Auth::user()->name;
        LogFile::collectionLog($collectionLog, $method);

        return back()->with('update', 'Коллекция не активна');
    }

    public function activ($id){

        $collection = Collection::find($id);

        $collection->activity = 1;

        $collection->save();

        $method = __METHOD__;
        $collectionLog = $collection;
        $collectionLog['user'] = Auth::user()->name;
        LogFile::collectionLog($collectionLog, $method);

        return back()->with('update', 'Коллекция активна');
    }
}
