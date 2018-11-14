@extends('layouts.admin.admin')

@section('title')
    <title>{{$title}}</title>
@stop

@section('content')

    <div id="nav">

        <div class="buttons">

            {{--Модальное окно добавления новой статьи блога--}}
            <div class="add">

                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addArticle">
                    Добавить статью
                </button>

                <div class="modal fade" id="addArticle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Добавить новую статью </h4>

                            </div>
                            <form action="{{action('Admin\BlogController@store')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="modal-body">

                                    <div class="form-group row">
                                        <label for="text-input" class="col-xs-2 col-form-label">Заголовок</label>
                                        <div class="col-xs-10">
                                            <input class="name-col form-control" type="text" name="title" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="text-input" class="col-xs-2 col-form-label">short_name</label>
                                        <div class="col-xs-10">
                                            <input class="short-name-col form-control" type="text" name="short_name" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="text-input" class="col-xs-2 col-form-label">Текст статьи</label>
                                        <div class="col-xs-10">
                                            <textarea class="article-text form-control" type="text" name="text" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="img_path" class="col-xs-2 col-form-label">Фото/афиша</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="file" name="img_path" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status" class="col-xs-2 col-form-label">Статус</label>
                                        <div class="col-xs-10">
                                            <select size="1" id="role" class="form-control" name="status" required>
                                                <option selected value="0">Не опубликованно</option>
                                                <option value="1">Опубликованно</option>
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

            {{--Конец модального окна добавления категории--}}

            <div class="nav-buttons">
                <a href="{{action('Admin\AdminController@index')}}" class="btn btn-outline-info">Назад</a>
            </div>

            <div class="nav-buttons">
                <a href="/" class="btn btn-outline-info">Вернуться на сайт</a>
            </div>
        </div>
    </div>

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

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Заголовок</th>
                <th>Текст статьи</th>
                {{--<th>Имя для URL</th>--}}
                <th>Фото/афиша события</th>
                <th>Автор статьи</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    @if($article->status == 1)
                        <td style="background-color: greenyellow" scope="row">{{$article->id}}</td>
                    @else
                        <td style="background-color: red" scope="row">{{$article->id}}</td>
                    @endif
                    <td>{{$article->title}}</td>
                    <td>{{html_entity_decode($article->text)}}</td>
                    {{--<td>{{$article->short_name}}</td>--}}
                    <td><img style="width: 150px; height: 100px;" src="../img/blog-photo/{{$article->short_name}}/{{$article->img_path}}"> </td>
                    <td>{{$article->user->name}}</td>
                    <td>

                        {{--Модальное окно обновления статьи по id--}}

                        <a href="{{action('Admin\CategoryController@edit', $article['id'])}}" class="settings" title="Edit" data-toggle="modal" data-target="#edit{{$article['id']}}"><i class="material-icons">&#xE8B8;</i></a>

                        <div class="modal fade" id="edit{{$article['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Обновить статью: {{$article->title}}</h4>

                                    </div>
                                    <form action="#" method="post">
                                        {{csrf_field()}}
                                        {{--{{ method_field('PUT')}}--}}
                                        {{--<input name="_method" value="PUT" type="hidden">--}}
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label for="text-input" class="col-xs-2 col-form-label">Заголовок</label>
                                                <div class="col-xs-10">
                                                    <input class="name-col form-control" type="text" name="title" value="{{$article->title}}" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="text-input" class="col-xs-2 col-form-label">short_name</label>
                                                <div class="col-xs-10">
                                                    <input class="short-name-col form-control" type="text" name="short_name" value="{{$article->short_name}}" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="text-input" class="col-xs-2 col-form-label">Текст статьи</label>
                                                <div class="col-xs-10">
                                                    <input class="form-control" type="text" name="text" value="{{$article->text}}" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="file" class="col-xs-2 col-form-label">Фото/афиша</label>
                                                <div class="col-xs-10">
                                                    <input class="form-control" type="file" name="file" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Обновить товар</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{--Конец окна--}}

                        {{--Модальное окно просмотра существующих и добавления новых фотографий статьи по id--}}

                        <a href="{{action('Admin\PhotoController@addphoto', $article['id'])}}" class="settings" title="Edit" data-toggle="modal" data-target="#addPhoto{{$article['id']}}"><i class="material-icons">&#xe439;</i></a>

                        <div class="modal fade" id="addPhoto{{$article['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Добавление фото к {{$article->title}}</h4>
                                    </div>

                                    <div class="photo">
                                        <form action="{{action('Admin\PhotoController@destroy', $article['id'])}}" method="post">
                                            {{csrf_field()}}
                                            {{ method_field('PUT')}}
                                            <input type="hidden" name="_method" value="PUT">
                                            <span class="choose">Выбрать</span>
                                            <table>
                                                <td><img style="width: 150px; height: 200px;" src="../img/blog-photo/{{$article->short_name}}/{{$article->img_path}}"></td>
                                                {{--@foreach($resources as $resource)--}}
                                                    {{--@if($resource['product_id'] == $product['id'])--}}
                                                        {{--<td>--}}
                                                            {{--<div class="photo">--}}
                                                                {{--<img class="image"--}}
                                                                     {{--src="../img/product/preview/{{$product['name']}}_{{$product['article']}}/167x250/{{$resource->img_preview_H250_path}}"--}}
                                                                     {{--data-full="../img/product-foto-main/{{$resource->img_path}}">--}}
                                                                {{--<img id="image" hidden src="../img/product-foto-main/{{$resource->img_path}}">--}}
                                                            {{--</div>--}}
                                                            {{--<div class="checkPhoto">--}}
                                                                {{--<input class="choosePhoto" type="checkbox" name="delete[]" value="{{$resource['id']}}">--}}
                                                            {{--</div>--}}
                                                        {{--</td>--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                            </table>
                                            <div class="btn-delete">
                                                <input class="btn btn-outline-danger" type="submit" value="Удалить выбранные">
                                            </div>
                                        </form>
                                    </div>
                                    <form action="" method="post" enctype="multipart/form-data">
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


                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop