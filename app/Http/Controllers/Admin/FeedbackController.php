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

        $feedback->status = 1;

        $feedback->save();

//        $method = __METHOD__;
//        $categoryLog = $category;
//        $categoryLog['user'] = Auth::user()->name;
//        LogFile::categoryLog($categoryLog, $method);

        return back()->with('update', 'Отзыв опубликован');
    }

    public function destroy($id){

    }

}
