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
            $img->crop(167, 250, 50);
        }
        $img->basename = $img->filename . '_W-167_' . 'H-250' . '.jpg';
        $pathToPreview ['img_preview_H250_path'] =  $img->basename;
        $productPathPreview = str_replace(' ', '_', $product['name'] . '_' . $product['article'] . '/' . '167x250');
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
        if($width > 322){
            $img->crop(322, 405, 50);
        }
        $img->basename = $img->filename . '_W-322_' . ' H-405' . '.jpg';
        $pathToPreview ['img_preview_H405_path'] =  $img->basename;
        $productPathPreview = str_replace(' ', '_', $product['name'] . '_' . $product['article'] . '/' . '322x405');
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
            $img->crop(617, 769, 50);
        }
        $img->basename = $img->filename . '_W-617_' . ' H-769' . '.jpg';
        $pathToPreview ['img_preview_H769_path'] =  $img->basename;
        $productPathPreview = str_replace(' ', '_', $product['name'] . '_' . $product['article'] . '/' . '617x769');
        if (!file_exists(public_path('/img/product/preview/' . $productPathPreview))) {
            mkdir(public_path('/img/product/preview/' . $productPathPreview), 777, true);
        }
        $img->save(public_path('/img/product/preview/' . $productPathPreview . '/' . $img->basename));

        return $pathToPreview;
    }
}