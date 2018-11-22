<?php

namespace App\Http\Controllers\Admin;

use App\LogFile\LogFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Discount;
use App\Http\Controllers\Controller;

class DiscountController extends Controller
{
    public function index(){

    }

    public function store(Request $request, $id){

        $product = Product::find($id);

        $discount = $this->validate(request(), [
            'percent' => 'required',
//            'date' => 'required'
        ]);
        $discount['user_id'] = Auth::user()->id;
        $discount['date'] = date('Y-m-d');
        $discount['product_id'] = $product->id;
        $discount['new_price'] = round($product->price - ($product->price * $discount['percent']) / 100, 0, PHP_ROUND_HALF_DOWN);;

        $method = __METHOD__;

        if ($discount) {
            Discount::create($discount);

            $discount = Discount::where('product_id', $id)->first()->toArray();

            $product->discount_id = $discount['id'];
            $product->save();
            LogFile::ProductLog($product, $method);

            return back()->with('success', 'Дисконт установлен');
        }
        return back()->with('error', 'error');
    }

    public function edit(){

    }

    public function update(Request $request, $id){

        $product = Product::find($id);
        $discount = Discount::where('product_id', $id)->first();

        $this->validate(request(), [
           "percent" => "required",
//           "date" => "required",
        ]);

        $discount['date'] = date('Y-m-d');
        $discount['percent'] = $request->get('percent');
        // Если значение дисконта = 0, цена равняется 0
        // В остальном производится подсчет новой цены на товар с округлением
        if($discount['percent'] == 0){
            $discount['new_price'] = 0;
        }else{
            $discount['new_price'] = round($product->price - ($product->price * $discount['percent']) / 100, 0, PHP_ROUND_HALF_DOWN);;
        }

        //Если новая цена  = 0, убираем связь товар => id дисконта и удаляем запись из дисконтов
        // В остальном обновляем запись дисконта
        if($discount['new_price'] == 0){
            $discount = Discount::where('product_id', $id)->first();

            $method = __METHOD__;
            LogFile::ProductLog($product, $method, $request->get('percent'));

            $product->discount_id = null;
            $product->save();
            $discount->delete();
            return redirect('admin/products')->with('success', 'Дисконт удален');
        }else{
            $discount->percent = $request->get('percent');
            $discount->date = $request->get('date');
            $discount->new_price = $discount['new_price'];

            $method = __METHOD__;
            LogFile::ProductLog($product, $method);
            $discount->save();

            return redirect('admin/products')->with('update', 'Дисконт обновлен');

        }
//        return back('admin/products')->with('error', 'Дисконт не обновлен');

    }
}
