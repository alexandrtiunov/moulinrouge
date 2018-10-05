@extends('layouts.admin.admin')

@section('content')

<div id="nav">


    <div class="buttons">

        {{--Модальное окно добавления нового товара--}}
        <div class="addproduct">

            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal">
                Добавить товар
            </button>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Добавить новый товар</h4>

                        </div>
                        <form action="{{action('Admin\AdminController@store')}}" method="post"  enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="category_id" class="col-xs-2 col-form-label">Категория</label>
                                    <div class="col-xs-10">
                                        <select size="1" id="role" class="form-control" name="category_id" required>
                                            <option value="">Выбери категорию</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="text-input" class="col-xs-2 col-form-label">Название</label>
                                    <div class="col-xs-10">
                                        <input id="name" class="form-control" type="text" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="text-input" class="col-xs-2 col-form-label">short_name</label>
                                    <div class="col-xs-10">
                                        <input id="short_name" class="form-control" type="text" name="short_name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="article" class="col-xs-2 col-form-label">Артикул</label>
                                    <div class="col-xs-10">
                                        <input class="form-control" type="text" name="article" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="price" class="col-xs-2 col-form-label">Цена, грн.</label>
                                    <div class="col-xs-10">
                                        <input  class="price form-control" type="text" name="price" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="collection_id" class="col-xs-2 col-form-label">Коллекция</label>
                                    <div class="col-xs-10">
                                        <select size="1" id="role" class="form-control" name="collection_id" required>
                                            <option value="">Выбери коллекцию</option>
                                            @foreach($collections as $collection)
                                                <option value="{{$collection->id}}">{{$collection->name}} - {{$collection->year}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-password-input" class="col-xs-2 col-form-label">Статус</label>
                                    <div class="col-xs-10">
                                        <select size="1" id="role" class="form-control" name="atribut_id" required>
                                            {{--<option value="">Выбери атрибут</option>--}}
                                            <option disabled value="1">Модерация</option>
                                            @foreach($atributs as $atribut)
                                                <option value="{{$atribut->id}}">{{$atribut->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{--Конец модального окна добавления товара--}}

        <div class="editproduct">
            <a href="{{action('Admin\CategoryController@index')}}" class="btn btn-outline-info">Категории</a>
        </div>

        <div class="back">
            <a href="/" class="btn btn-outline-info">Вернуться на сайт</a>
        </div>
    </div>
</div>
<div id="main-content">

    <div class="product-table">
        <div class="info">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
            @endif
                @if (\Session::has('update'))
                    <div class="alert alert-info">
                        <p>{{ \Session::get('update') }}</p>
                    </div><br />
                @endif
        </div>

        <table id="tablesorter" class="tablesorter table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Категория</th>
                <th>Название</th>
                <th>Артикул</th>
                <th>Цена, грн.</th>
                <th>Коллекция/Год</th>
                <th>Атрибут</th>
                <th>Пользователь</th>
                <th>Цена с дисконтом</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
        @foreach($products as $product)
            <tr>
                <td scope="row"><a href="http:\\moulinrouge\catalog\{{$product->short_name}}">{{$product->id}}</a></td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->article}}</td>
                    @if(!isset($product->discount->new_price))
                        <td style="background: #dcf7b3;">{{$product->price}}</td>
                    @else
                        <td>{{$product->price}}</td>
                    @endif
                <td>{{$product->collection->name}}/<br />{{$product->collection->year}}</td>
                    @if($product->atribut->type == "Архив")
                        <td style="background-color: #efb8b8">{{$product->atribut->type}}</td>
                    @elseif($product->atribut->type == "Модерация")
                        <td style="background-color: #c3c1c1">{{$product->atribut->type}}</td>
                    @elseif($product->atribut->type == "Активно" || $product->atribut->type == "Новое")
                        <td style="background-color: #93e293">{{$product->atribut->type}}</td>
                    @elseif($product->atribut->type == "Прокат")
                        <td style="background-color: yellow">{{$product->atribut->type}}</td>
                    @elseif($product->atribut->type == "В пути" || $product->atribut->type == "Ожидается поставка")
                        <td style="background-color: blue">{{$product->atribut->type}}</td>
                    @endif
                <td>{{$product->user->name}}</td>
                    @if(isset($product->discount->new_price) && $product->discount->new_price != '0')
                        <td style="background: #dcf7b3;">{{$product->discount->new_price}}</td>
                    @else
                        <td>Скидка не установлена</td>
                    @endif
                <td>

                    {{--Модальное окно обновления продукта по id--}}

                    @if($product->atribut->type != "Архив")
                    <a href="{{action('Admin\AdminController@edit', $product['id'])}}" class="settings" title="Edit" data-toggle="modal" data-target="#edit{{$product['id']}}"><i class="material-icons">&#xE8B8;</i></a>

                    <div class="modal fade" id="edit{{$product['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Обновить {{$product->name}} - {{$product->article}}</h4>

                                </div>
                                <form action="{{action('Admin\AdminController@update', $product['id'])}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {{ method_field('PUT')}}
                                    <input name="_method" value="PUT" type="hidden">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="category_id" class="col-xs-2 col-form-label">Категория</label>
                                            <div class="col-xs-10">
                                                <select size="1" id="role" class="form-control" name="category_id" required>
                                                    <option value="{{$product->category_id}}">{{$product->category->name}}</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text-input" class="col-xs-2 col-form-label">Название</label>
                                            <div class="col-xs-10">
                                                <input id="nameEdit" class="form-control" type="text" name="name" value="{{$product->name}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="text-input" class="col-xs-2 col-form-label">short_name</label>
                                            <div class="col-xs-10">
                                                <input id="short_nameEdit" class="form-control" type="text" name="short_name" value="{{$product->short_name}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="article" class="col-xs-2 col-form-label">Артикул</label>
                                            <div class="col-xs-10">
                                                <input class="form-control" type="text" name="article" value="{{$product->article}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="price" class="col-xs-2 col-form-label">Цена, грн.</label>
                                            <div class="col-xs-10">
                                                <input class="price form-control" type="text" name="price" value="{{$product->price}}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="collection_id" class="col-xs-2 col-form-label">Коллекция</label>
                                            <div class="col-xs-10">
                                                <select size="1" id="role" class="form-control" name="collection_id" required>
                                                    {{--<option value="{{$product->collection_id}}">{{$product->collection->name}}</option>--}}
                                                    @foreach($collections as $collection)
                                                        <option value="{{$collection->id}}">{{$collection->name}} - {{$collection->year}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-password-input" class="col-xs-2 col-form-label">Статус</label>
                                            <div class="col-xs-10">
                                                <select size="1" id="role" class="form-control" name="atribut_id" required>
                                                    {{--<option value="">Выбери атрибут</option>--}}
                                                    <option selected disabled value="{{$product->atribut_id}}">{{$product->atribut->type}}</option>
                                                    @foreach($atributs as $atribut)
                                                        <option value="{{$atribut->id}}">{{$atribut->type}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Обновить товар</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @else
                        <a href="{{action('Admin\AdminController@edit', $product['id'])}}" class="settings" title="Edit" data-toggle="modal" data-target="#editAtribut{{$product['id']}}"><i class="material-icons">&#xE8B8;</i></a>

                        <div class="modal fade" id="editAtribut{{$product['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Вернуть из архива {{$product->name}} - {{$product->article}}</h4>

                                    </div>
                                    <form action="{{action('Admin\AtributController@update', $product['id'])}}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('PUT')}}
                                        <input name="_method" value="PUT" type="hidden">
                                        <div>
                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-xs-2 col-form-label">Статус</label>
                                                <div class="col-xs-10">
                                                    <select size="1" id="role" class="form-control" name="atribut_id" required>
                                                        <option selected value="1">Модерация</option>
                                                        {{--<option selected disabled value="{{$product->atribut_id}}">{{$product->atribut->type}}</option>--}}
                                                        {{--@foreach($atributs as $atribut)--}}
                                                            {{--<option disabled value="{{$atribut->id}}">{{$atribut->type}}</option>--}}
                                                        {{--@endforeach--}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Вернуть из архива</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{--Конец модального окна обновления продукта--}}

                    {{--Модальное окно просмотра существующих и добавления новых фотографий товара по id--}}

                    <a href="{{action('Admin\PhotoController@addphoto', $product['id'])}}" class="settings" title="Edit" data-toggle="modal" data-target="#addPhoto{{$product['id']}}"><i class="material-icons">&#xe439;</i></a>

                    <div class="modal fade" id="addPhoto{{$product['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Добавление фото к {{$product->name}} - {{$product->article}}</h4>
                                </div>

                                <div class="photo">
                                    <form action="{{action('Admin\PhotoController@destroy', $product['id'])}}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('PUT')}}
                                        <input type="hidden" name="_method" value="PUT">
                                        <table>
                                            @foreach($resources as $resource)
                                                @if($resource['product_id'] == $product['id'])
                                                    <td>
                                                        <div class="photo">
                                                            <img class="image"
                                                                 src="../img/product/preview/{{$product['name']}}_{{$product['article']}}/167x250/{{$resource->img_preview_H250_path}}"
                                                                 data-full="../img/product-foto-main/{{$resource->img_path}}">
                                                            {{--<img id="image" hidden src="../img/product-foto-main/{{$resource->img_path}}">--}}
                                                        </div>
                                                        <div class="checkPhoto">
                                                            <input class="choosePhoto" type="checkbox" name="delete[]" value="{{$resource['id']}}">
                                                        </div>
                                                    </td>
                                                @endif
                                            @endforeach
                                        </table>
                                        <div class="btn-delete">
                                            <input class="btn btn-outline-danger" type="submit" value="Удалить выбранные">
                                        </div>
                                    </form>
                                </div>
                                <form action="{{action('Admin\PhotoController@store', $product['id'])}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label for="image" class="col-xs-2 col-form-label">Фото</label>
                                            <div class="col-xs-10">
                                                <input class="form-control" type="file" name="image" >
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Добавить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{--Конец модального окна--}}

                    {{--Модальное окно установки скидки на товар по id--}}

                    <a href="{{action('Admin\DiscountController@edit', $product['id'])}}" class="settings" title="Скидка" data-toggle="modal" data-target="#discount{{$product['id']}}"><i class="material-icons">&#xe227;</i></a>

                    @if(!empty($discounts) && isset($product->discount->new_price) && $product->discount->new_price != '0')

                        <div class="modal fade" id="discount{{$product['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Дисконт на товар: {{$product->name}} - {{$product->article}} уже установлен!</h4>

                                    </div>

                                        <div class="modal-body">

                                            <div class="form-group row">
                                                <label for="text-input" class="col-xs-2 col-form-label">Название</label>
                                                <div class="col-xs-10">
                                                    <input class="form-control" value="{{$product->name}}" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="article" class="col-xs-2 col-form-label">Артикул</label>
                                                <div class="col-xs-10">
                                                    <input class="form-control" value="{{$product->article}}" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="price" class="col-xs-2 col-form-label">Цена, грн.</label>
                                                <div class="col-xs-10">
                                                    <input class="form-control" value="{{$product->price}}" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-password-input" class="col-xs-2 col-form-label">Статус</label>
                                                <div class="col-xs-10">
                                                    <input class="form-control" value="{{$product->atribut->type}}" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="percent" class="col-xs-2 col-form-label">Скидка, %</label>
                                                <div class="col-xs-10">
                                                    <input class="form-control" value="{{$product->discount->percent}}% - {{$product->discount->new_price}} грн." disabled>
                                                </div>
                                            </div>

                                            <form action="{{action('Admin\DiscountController@update', $product['id'])}}" method="post" id="form2">
                                                {{csrf_field()}}
                                                {{ method_field('PUT')}}
                                                <input name="_method" value="PUT" type="hidden">

                                                <div class="form-group row">
                                                    <label for="percent" class="col-xs-2 col-form-label">Скидка, %</label>
                                                    <div class="col-xs-10">
                                                        <input  class="price form-control" type="text" name="percent" placeholder="Введите % дисконта к основной цене" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="date" class="col-xs-2 col-form-label">Дата</label>
                                                    <div class="col-xs-10">
                                                        <input class="form-control" type="date" name="date" >
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>

                    @else

                    <div class="modal fade" id="discount{{$product['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Добавить скидку на товар: {{$product->name}} - {{$product->article}}</h4>

                                </div>
                                <form action="{{action('Admin\DiscountController@store', $product{"id"})}}" method="post" id="form1">
                                    {{csrf_field()}}

                                    <div class="modal-body">

                                        <div class="form-group row">
                                            <label for="text-input" class="col-xs-2 col-form-label">Название</label>
                                            <div class="col-xs-10">
                                                <input class="form-control" value="{{$product->name}}" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="article" class="col-xs-2 col-form-label">Артикул</label>
                                            <div class="col-xs-10">
                                                <input class="form-control" value="{{$product->article}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="price" class="col-xs-2 col-form-label">Цена, грн.</label>
                                            <div class="col-xs-10">
                                                <input class="form-control" value="{{$product->price}}" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-password-input" class="col-xs-2 col-form-label">Статус</label>
                                            <div class="col-xs-10">
                                                <input class="form-control" value="{{$product->atribut->type}}" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="percent" class="col-xs-2 col-form-label">Скидка, %</label>
                                            <div class="col-xs-10">
                                                <input  class="form-control" type="text" name="percent" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="date" class="col-xs-2 col-form-label">Дата</label>
                                            <div class="col-xs-10">
                                                <input class="form-control" type="date" name="date" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Применть скидку</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif

                    {{--Коней модального окна добавления скидки--}}

                </td>
            </tr>
        @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop