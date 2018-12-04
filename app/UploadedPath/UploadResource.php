<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 22.06.2018
 * Time: 10:05
 */

namespace App;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class UploadResource
{

    /*
     * Get path to upload file
     *
     * @return string
     */
    public static function pathToPreview($resource, $product){

        $pathToPreview = [];

        // первью размером 167х250

        $img = Image::make(public_path() . '/img/product-foto-main/' . $resource['img_path'])->resize(null, 250, function ($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $width = $img->width();
        if($width > 167){
            $img->crop(167, 250);
        }
        $img->basename = $img->filename . '_W-167_' . 'H-250' . '.jpg';
        $pathToPreview ['img_preview_H250_path'] =  $img->basename;
        $productPathPreview = str_replace(' ', '_', $product['name'] . '/' . '167x250');
        if (!file_exists(public_path('/img/product/preview/' . $productPathPreview))) {
            mkdir(public_path('/img/product/preview/' . $productPathPreview), 777, true);
        }
        $img->save(public_path('/img/product/preview/' . $productPathPreview . '/' . $img->basename));

        // первью размером 322х405

        $img = Image::make(public_path() . '/img/product-foto-main/' . $resource['img_path'])->resize(null, 405, function ($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $width = $img->width();
        if($width > 270){
            $img->crop(270, 405);
        }
        $img->basename = $img->filename . '_W-322_' . ' H-405' . '.jpg';
        $pathToPreview ['img_preview_H405_path'] =  $img->basename;
        $productPathPreview = str_replace(' ', '_', $product['name'] . '/' . '322x405');
        if (!file_exists(public_path('/img/product/preview/' . $productPathPreview))) {
            mkdir(public_path('/img/product/preview/' . $productPathPreview), 777, true);
        }
        $img->save(public_path('/img/product/preview/' . $productPathPreview . '/' . $img->basename));

        // первью размером 617х769

        $img = Image::make(public_path() . '/img/product-foto-main/' . $resource['img_path'])->resize(null, 769, function ($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $width = $img->width();
        if($width > 617){
            $img->crop(617, 769);
        }
        $img->basename = $img->filename . '_W-617_' . ' H-769' . '.jpg';
        $pathToPreview ['img_preview_H769_path'] =  $img->basename;
        $productPathPreview = str_replace(' ', '_', $product['name'] . '/' . '617x769');
        if (!file_exists(public_path('/img/product/preview/' . $productPathPreview))) {
            mkdir(public_path('/img/product/preview/' . $productPathPreview), 777, true);
        }
        $img->save(public_path('/img/product/preview/' . $productPathPreview . '/' . $img->basename));

        return $pathToPreview;
    }

    public static function pathToArticleImage($resource, $article){

//        $pathToArticleImage = [];

        // первью размером 500x500

        $img = Image::make(public_path() . '/img/blog-photo/' . $article['short_name'] . '/article-photo/' . $resource['img_path'])
            ->resize(null, 500, function ($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->basename = $img->filename . '_H-500' . '.jpg';
        $pathToArticleImage =  $img->basename;
        $pathArticleImage = str_replace(' ', '_', $article['short_name']);
        if (!file_exists(public_path('/img/blog-photo/' . $pathArticleImage . '/article-photo/'))) {
            mkdir(public_path('/img/blog-photo/' . $pathArticleImage . '/article-photo/'), 777, true);
        }
        $img->save(public_path('/img/blog-photo/' . $pathArticleImage. '/article-photo/' . $img->basename));

        return $pathToArticleImage;
    }

    public static function pathToNevestyImage($resource, $photo){

        $img = Image::make(public_path() . '/img/nashi-nevesty/' . $resource['img_path'])->resize(null, 405, function ($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $width = $img->width();
        if($width > 270){
            $img->crop(270, 405);
        }
        $img->basename = $img->filename . 'H-405' . '.jpg';
        $pathToPreview =  $img->basename;

        if (!file_exists(public_path() . '/img/nashi-nevesty/')) {
            mkdir(public_path('/img/nashi-nevesty/'), 777, true);
        }
        $img->save(public_path() . '/img/nashi-nevesty/' . $pathToPreview );

        return $pathToPreview;
    }
}