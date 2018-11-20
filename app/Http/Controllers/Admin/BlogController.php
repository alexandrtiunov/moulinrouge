<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\BlogResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Product;

class BlogController extends Controller
{
    public function index(){

        $title = 'Блог';
        $articles = Blog::all();
        $resources = BlogResource::all();

        return view('admin.blog', [
            'articles' => $articles,
            'title' => $title,
            'resources' => $resources,
        ]);
    }

    public function store(Request $request){

        $article = $this->validate(request(), [
            "title" => "required",
            "short_name" => "required",
            "text" => "required",
            "img_path" => "required",
        ]);

        $article['text'] = htmlentities($article['text']);

        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $article['img_path'] = Product::getUniqueName($file); // получение уникального имени файла
            $file->move(public_path() . '/img/blog-photo/' . $article['short_name'], $article['img_path']);
        }


        $article['user_id'] = Auth::user()->id;

        if($article){}
        Blog::create($article);

        return back()->with('success', 'Новая запись добавлена');
    }

    public function edit(){

    }

    public function update(Request $request, $id){

        $article = Blog::find($id);

        $this->validate(request(), [
           "title" => "required",
           "short_name" => "required",
           "text" => "required",
           "status" => "required",
        ]);

        $oldPicture = public_path() . '/img/blog-photo/' . $article['short_name'] . '/' . $article->img_path;

        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $article['img_path'] = Product::getUniqueName($file); // получение уникального имени файла

            unlink(public_path() . '/img/blog-photo/' . $article['short_name'] . '/' . $oldPicture); // Удаляем старое фото

            $file->move(public_path() . '/img/blog-photo/' . $article['short_name'], $article['img_path']);
        }

        $article->title = $request->get('title');
        $article->short_name = $request->get('short_name');
        $article->text = $request->get('text');
        $article->status = $request->get('status');

        if(!isset($oldPicture)){
            $article->img_path = $request->get('img_path');
        }


        dd($article);
            $article->save();

        return redirect('admin/blog')->with('update', 'Статья обновлена');

    }
}
