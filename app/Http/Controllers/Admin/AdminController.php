<?php

namespace App\Http\Controllers\Admin;

use App\Atribut;
use App\Category;
use App\Collection;
use App\Discount;
use App\Product;
use App\Resource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\UploadResource;
use App\LogFile\LogFile;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->has('product-search')) {
            $search = $request->input('product-search');
            $products = Product::where('name', 'like', '%' . $search . '%')->paginate(5);
        }else{
            $products = Product::orderBy('id', 'desc')->paginate(10);
        }

        $discounts = Discount::all();
        $categories = Category::all();
        $collections = Collection::all();
        $atributs = Atribut::all();
        $resources = Resource::all();
        $date = date('d.m.Y');

        return view('admin.index', [
            'products' => $products,
            'discounts' => $discounts,
            'categories' => $categories,
            'collections' => $collections,
            'atributs' => $atributs,
            'resources' => $resources,
            'date' => $date,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $this->validate(request(), [
            'category_id' => 'required',
            'name' => 'required',
            'short_name' => 'required',
            'article' => 'required',
            'price' => 'required',
            'collection_id' => 'required',
            'atribut_id' => 'required',
        ]);
        $product ['user_id'] = Auth::user()->id;

        $method = __METHOD__;
        if ($product) {
            LogFile::ProductLog($product, $method);
            Product::create($product);//Запись в БД данных о добавляемом продукте

            return back()->with('success', 'Товар добавлен');
        }
        return back()->with('error', 'error');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $resource = Resource::where('product_id', $id)->first();

        $this->validate(request(), [
            'category_id' => 'required',
            'name' => 'required',
            'short_name' => 'required',
            'article' => 'required',
            'price' => 'required',
            'collection_id' => 'required',
            'atribut_id' => 'required',
        ]);

        $product->category_id = $request->get('category_id');
        $product->name = $request->get('name');
        $product->short_name = $request->get('short_name');
        $product->article = $request->get('article');
        $product->price = $request->get('price');
        $product->collection_id = $request->get('collection_id');
        $product->atribut_id = $request->get('atribut_id');

        $method = __METHOD__;
        LogFile::ProductLog($product, $method);
        $product->save(); //Сохраняем изменения продукта

        return redirect('admin/products')->with('update', 'Продукт обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
