<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\BlogResource;
use App\LogFile\LogFile;
use App\Product;
use App\Resource;
use App\UploadResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{

    public function addPhoto(){

    }

    public function store(Request $request, $id){

        $product = Product::find($id);

        $resources = $this->validate(request(), [
            'image' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $resource['img_path'] = Product::getUniqueName($file); // получение уникального имени файла
            $file->move(public_path() . '/img/product-foto-main', $resource['img_path']);
        }

        $pathToPreview = UploadResource::pathToPreview($resource, $product); //Создание и запись первью загружаемого фото

        if($pathToPreview){
            //получение данных для записи в БД
            $resources['type'] = $_FILES['image']['type'];
            $resources['img_path'] = $resource['img_path'];
            $resources['img_preview_H250_path'] = $pathToPreview['img_preview_H250_path'];
            $resources['img_preview_H405_path'] = $pathToPreview['img_preview_H405_path'];
            $resources['img_preview_H769_path'] = $pathToPreview['img_preview_H769_path'];
            $resources['product_id'] = $product->id;
        }

        if ($resources) {
            $method = __METHOD__;
            LogFile::ProductLog($product, $method, $resources);
            Resource::create($resources);// Запись в БД данных о созданном первью

            return back()->with('success', 'Фото товара добавлено');
        }
        return back()->with('error', 'error');
    }

    public function destroy(Request $request, $id){

        $product = Product::find($id);

        $this->validate(request(), [
            "delete" => "required"
        ]);

        $resourcesId = $request->get('delete');
        foreach ($resourcesId as $value) {
            $resources = Resource::where('id', $value)->first();

            $method = __METHOD__;
            LogFile::ProductLog($product, $method, $resources);
            $resources->delete();

            $oldPicture = $resources->img_path;
            $oldPreviewH250 = $resources->img_preview_H250_path;
            $oldPreviewH405 = $resources->img_preview_H405_path;
            $oldPreviewH769 = $resources->img_preview_H769_path;
            if ($oldPicture && $oldPreviewH250 && $oldPreviewH405 && $oldPreviewH769) {
                unlink(public_path() . '/img/product-foto-main/' . $oldPicture); //удаляем старую картинку товара
                unlink(public_path() . '/img/product/preview/' . $product->name . '_' .
                    $product->article . '/167x250/' . $oldPreviewH250); //удаляем старую картинку товара
                unlink(public_path() . '/img/product/preview/' . $product->name . '_' .
                    $product->article . '/322x405/' . $oldPreviewH405); //удаляем старую картинку товара
                unlink(public_path() . '/img/product/preview/' . $product->name . '_' .
                    $product->article . '/617x769/' . $oldPreviewH769); //удаляем старую картинку товара
            }
        }
        return back()->with('success', 'Фото товара удалено');
    }

    public function articleStore(Request $request, $id){

        $article = Blog::find($id);

        $resources = $this->validate(request(), [
            'image' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $resource['img_path'] = Product::getUniqueName($file); // получение уникального имени файла
            $file->move(public_path() . '/img/blog-photo/' . $article['short_name'] . '/article-photo', $resource['img_path']);
        }

        $pathToArticleImage = UploadResource::pathToArticleImage($resource, $article); //Создание и запись первью загружаемого фото

        if($pathToArticleImage){
            //получение данных для записи в БД
            $resources['type'] = $_FILES['image']['type'];
            $resources['img_path'] = $pathToArticleImage;
            $resources['blog_id'] = $article->id;
        }

        if ($resources) {
//            $method = __METHOD__;
//            LogFile::ProductLog($product, $method, $resources);
            BlogResource::create($resources);// Запись в БД данных о созданном первью

            return back()->with('success', 'Фото товара добавлено');
        }
        return back()->with('error', 'error');
    }
}
