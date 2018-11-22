<?php
/**
 * Created by PhpStorm.
 * User: HOME
 * Date: 02.10.2018
 * Time: 14:21
 */

namespace App\LogFile;

use App\Product;
use App\User;


class LogFile
{

    public static function ProductLog($product, $method, $variable = false){

        $user = User::find($product['user_id']);

        date_default_timezone_set('Europe/Kiev');
        $date = date('d-m-Y H:i:s');
        $path = public_path() . '/log/product/';
        $file = 'log.txt';

        // Запись в Log файл при добавлении нового товара
        if($method == "App\Http\Controllers\Admin\AdminController::store"){
            $log = '[' . $date . ']' . " - добавлен продукт " . "артикул: " . $product['article'] . ", модель: " .
                $product['name'] . ", пользователь: " . $user->name . PHP_EOL;
        }

        // Запись в Log файл при обновлении товара и отправки товара в архив
        if($method == "App\Http\Controllers\Admin\AdminController::update" && $product->atribut->type == "Архив"){
            $log = '[' . $date . ']' . " - продукт " . "артикул: " . $product['article'] . ", модель: " .
                $product['name'] . " отправлен в архив. пользователь: " . $user->name . PHP_EOL;

        }elseif($method == "App\Http\Controllers\Admin\AdminController::update"){
            $log = '[' . $date . ']' . " - обновлен продукт " . "артикул: " . $product['article'] . ", модель: "
                . $product['name'] . " статус " . $product->atribut->type . ", пользователь: " . $user->name . PHP_EOL;
        }

        // Запись в Log файл при добавлении дисконта к товару
        if($method == "App\Http\Controllers\Admin\DiscountController::store"){
            $log = '[' . $date . ']' . " - добавлен дисконт к продукту артикул: " . $product['article'] . ", модель: " .
                $product['name'] . " в размере " . $product->discount->percent . "%, пользователь: " . $user->name . PHP_EOL;
        }

        // Запись в Log файл при обновлении ил удалении дисконта (если 0 - удаление)
        if($method == "App\Http\Controllers\Admin\DiscountController::update" && $variable == "0"){
            $log = '[' . $date . ']' . " - дисконт к продукту артикул: " . $product['article'] . ", модель: " .
                $product['name'] . " удален, пользователь: " . $user->name . PHP_EOL;

        }elseif($method == "App\Http\Controllers\Admin\DiscountController::update"){
            $log = '[' . $date . ']' . " - обновлен дисконт к продукту артикул: " . $product['article'] . ", модель: " .
                $product['name'] . " на " . $product->discount->percent . "%, пользователь: " . $user->name . PHP_EOL;
        }

        // Запись в Log файл при добавлени/удалении фото товара
        if($method == "App\Http\Controllers\Admin\PhotoController::store"){
            $log = '[' . $date . ']' . " - добавлено фото " . $variable['img_path'] . " к продукту артикул: " .
                $product['article'] . ", модель: " . $product['name'] . ", пользователь: " . $user->name . PHP_EOL;

        }elseif ($method == "App\Http\Controllers\Admin\PhotoController::destroy"){
            $log = '[' . $date . ']' . " - удалено фото " . $variable['img_path'] . " к продукту артикул: " .
                $product['article'] . ", модель: " . $product['name'] . ", пользователь: " . $user->name . PHP_EOL;
        }

        // Запись в Log файл при возврате товара из архива
        if($method == "App\Http\Controllers\Admin\AtributController::update"){
            $log = '[' . $date . ']' . " - продукт " . "артикул: " . $product['article'] . ", модель: " .
                $product['name'] . " возвращен из архива. пользователь: " . $user->name . PHP_EOL;
        }

        if(!is_dir($path)){
            mkdir($path, 777, true);
        }
        file_put_contents($path . $file, $log, FILE_APPEND | LOCK_EX);
    }

    public static function categoryLog($category, $method, $variable = false){

        date_default_timezone_set('Europe/Kiev');
        $date = date('d-m-Y H:i:s');
        $path = public_path() . '/log/category/';
        $file = 'log.txt';

        if($method == "App\Http\Controllers\Admin\CategoryController::store"){
            $log = '[' . $date . ']' . " - добавлена категория, название: " . $category['name'] . ", пользователь: " . $category['name'] . PHP_EOL;
        }elseif ($method == "App\Http\Controllers\Admin\CategoryController::update" && $variable['name'] != $category->name) {
            $log = '[' . $date . ']' . " - обновлено название категории с " . $category['name'] . "на " . $variable['name'] . ", пользователь: " . $variable['user_id'] . PHP_EOL;
        }elseif($method == "App\Http\Controllers\Admin\CategoryController::update" && $variable['short_name'] != $category->short_name){
            $log = '[' . $date . ']' . " - обновлено название URL с " . $category['short_name'] . " на " . $variable['short_name'] . ", пользователь: " . $variable['user_id'] . PHP_EOL;
        }


        if($method == "App\Http\Controllers\Admin\CategoryController::destroy"){
            $log = '[' . $date . ']' . " - категория, название: " . $category['name'] . "перенесена в раздел НЕ АКТИВНА, пользователь: " . $category['user'] . PHP_EOL;
        }
        if($method == "App\Http\Controllers\Admin\CategoryController::activ"){
            $log = '[' . $date . ']' . " - категория, название: " . $category['name'] . " АКТИВНА для пользования, пользователь: " . $category['user'] . PHP_EOL;
        }

        if(!is_dir($path)){
            mkdir($path, 777, true);
        }
        file_put_contents($path . $file, $log, FILE_APPEND | LOCK_EX);
    }

    public static function collectionLog($collection, $method, $variable = false){

        date_default_timezone_set('Europe/Kiev');
        $date = date('d-m-Y H:i:s');
        $path = public_path() . '/log/collection/';
        $file = 'log.txt';

        if($method == "App\Http\Controllers\Admin\CollectionController::store"){
            $log = '[' . $date . ']' . " - добавлена коллекция, название: " . $collection['name'] . " год: " .
                $collection['year'] . ", пользователь: " . $collection['user'] . PHP_EOL;
        }elseif ($method == "App\Http\Controllers\Admin\CollectionController::update" && $variable['name'] != $collection->name) {
            $log = '[' . $date . ']' . " - обновлено название коллекции с " . $collection['name'] . "на " . $variable['name'] . ", пользователь: " . $variable['user_id'] . PHP_EOL;
        }elseif($method == "App\Http\Controllers\Admin\CollectionController::update" && $variable['short_name'] != $collection->short_name){
            $log = '[' . $date . ']' . " - обновлено название URL с " . $collection['short_name'] . " на " . $variable['short_name'] . ", пользователь: " . $variable['user_id'] . PHP_EOL;
        }


        if($method == "App\Http\Controllers\Admin\CollectionController::destroy"){
            $log = '[' . $date . ']' . " - коллекция, название: " . $collection['name'] . '-' . $collection['year'] . "перенесена в раздел НЕ АКТИВНА, пользователь: " . $collection['user'] . PHP_EOL;
        }
        if($method == "App\Http\Controllers\Admin\CollectionController::activ"){
            $log = '[' . $date . ']' . " - категория, название: " . $collection['name'] . '-' . $collection['year'] . " АКТИВНА для пользования, пользователь: " . $collection['user'] . PHP_EOL;
        }

        if(!is_dir($path)){
            mkdir($path, 777, true);
        }
        file_put_contents($path . $file, $log, FILE_APPEND | LOCK_EX);
    }
}