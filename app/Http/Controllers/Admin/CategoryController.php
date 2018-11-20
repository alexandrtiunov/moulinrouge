<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\LogFile\LogFile;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){

        $title = 'Категории';
        $categories = Category::all();
        $products = Product::all();

        return view('admin.categories', [
            'title' => $title,
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function store(Request $request){

        $category = $this->validate(request(), [
           "name" => 'required',
           "short_name" => 'required',
        ]);

        if($category){
            $method = __METHOD__;
            $categoryLog = $category;
            $categoryLog['user'] = Auth::user()->name;

            LogFile::categoryLog($categoryLog, $method);
            Category::create($categoryLog);

            return back()->with('success', 'Категория создана');
        }

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

        $category = Category::where('id', $id)->first();

        $this->validate(request(), [
           "name" => "required",
           "short_name" => "required",
        ]);

        $post = $_POST;
        $post['user_id'] = Auth::user()->name;
        $method = __METHOD__;
        LogFile::categoryLog($category, $method, $post);

        $category->name = $request->get('name');
        $category->short_name = $request->get('short_name');

        $category->save();

        return back()->with('update', 'Категория обновлена');
    }

    public function destroy($id){

        $category = Category::find($id);

        $category->activity = 0;

        $category->save();

        $method = __METHOD__;
        $categoryLog = $category;
        $categoryLog['user'] = Auth::user()->name;
        LogFile::categoryLog($categoryLog, $method);

        return back()->with('update', 'Категория не активна');
    }

    public function activ($id){

        $category = Category::find($id);

        $category->activity = 1;

        $category->save();

        $method = __METHOD__;
        $categoryLog = $category;
        $categoryLog['user'] = Auth::user()->name;
        LogFile::categoryLog($categoryLog, $method);

        return back()->with('update', 'Категория активна');
    }
}
