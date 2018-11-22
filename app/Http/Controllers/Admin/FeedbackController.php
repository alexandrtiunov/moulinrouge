<?php

namespace App\Http\Controllers\Admin;

use App\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{

    public function index(){

        $title = 'Отзывы';
        $feedbacks = Feedback::all();

        return view('admin.feedbacks', [
            "title" => $title,
            "feedbacks" => $feedbacks,
        ]);
    }

    public function store(Request $request){

//        dd($request);
        $feedback = $this->validate(request(), [
           "name" => "required",
           "surname" => "required",
           "email" => "required",
           "phone_number" => "required",
           "text" => "required",
        ]);

        if($feedback){
            Feedback::create($feedback);

            return back()->with('success', 'Отзыв создан');
        }
        return back()->with('error', 'error');
    }

    public function activ($id){

        $feedback = Feedback::find($id);

        if($feedback->status == 0){
            $feedback->status = 1;
            $feedback->save();
            return back()->with('update', 'Отзыв опубликован');
        }elseif($feedback->status == 1){
            $feedback->status = 0;
            $feedback->save();
            return back()->with('update', 'Отзыв снят с публикации');
        }
        return back()->with('error', 'error');
    }

    public function destroy($id){

    }

}
