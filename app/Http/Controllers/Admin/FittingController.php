<?php

namespace App\Http\Controllers\Admin;

use App\FittingRoom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FittingController extends Controller
{
    public function index(){

        $title = "Запись на примерку";

        $fittingRoom = FittingRoom::all();

        return view('admin.fitting', [
            "title" => $title,
            "fittingRoom" => $fittingRoom,
        ]);
    }

    public function update(Request $request, $id){

        $fitting = FittingRoom::find($id);

        $fitting->status = 0;

        $fitting->save();

        return back()->with('success', 'Примерка выполнена');
    }
}
