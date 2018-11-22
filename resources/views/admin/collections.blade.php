@extends('layouts.admin.admin')

@section('title')
    <title>{{$title}}</title>
@stop

@section('content')

    <div id="nav">

        <div class="buttons">

            {{--Модальное окно добавления новой категории--}}
            <div class="add">

                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addCollection">
                    Добавить коллекцию
                </button>

                <div class="modal fade" id="addCollection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Добавить новую коллекцию </h4>

                            </div>
                            <form action="{{action('Admin\CollectionController@store')}}" method="post">
                                {{csrf_field()}}
                                <div class="modal-body">

                                    <div class="form-group row">
                                        <label for="text-input" class="col-xs-2 col-form-label">Название</label>
                                        <div class="col-xs-10">
                                            <input id="name" class="name-col form-control" type="text" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text-input" class="col-xs-2 col-form-label">Год</label>
                                        <div class="col-xs-10">
                                            <input id="name" class="year-col form-control" type="text" name="year" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text-input" class="col-xs-2 col-form-label">short_name</label>
                                        <div class="col-xs-10">
                                            <input id="short_name" class="short-name-col form-control" type="text" name="short_name" required>
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

            {{--Конец модального окна добавления коллекции--}}

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

        <table id="tablesorter" class="tablesorter table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Название коллекции</th>
                <th>Год коллекции</th>
                <th>Имя для URL</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($collections as $collection)
                <tr>
                    <td scope="row">{{$collection->id}}</td>
                    <td>{{$collection->name}}</td>
                    <td>{{$collection->year}}</td>
                    <td>{{$collection->short_name}}</td>
                    <td>

                        {{--Модальное окно обновления коллекции по id--}}

                        <a href="{{action('Admin\CollectionController@edit', $collection['id'])}}" class="settings" title="Edit" data-toggle="modal" data-target="#edit{{$collection['id']}}"><i class="material-icons">&#xE8B8;</i></a>

                        <div class="modal fade" id="edit{{$collection['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Обновить категорию: {{$collection->name}}</h4>

                                    </div>
                                    <form action="{{action('Admin\CollectionController@update', $collection['id'])}}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('PUT')}}
                                        {{--<input name="_method" value="PUT" type="hidden">--}}
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label for="name" class="col-xs-2 col-form-label">Название</label>
                                                <div class="col-xs-10">
                                                    <input id="nameEdit" class="name-col form-control" type="text" name="name" value="{{$collection->name}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="year" class="col-xs-2 col-form-label">Год</label>
                                                <div class="col-xs-10">
                                                    <input class="year-col form-control" type="text" name="year" value="{{$collection->year}}" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="text-input" class="col-xs-2 col-form-label">short_name</label>
                                                <div class="col-xs-10">
                                                    <input id="short_nameEdit" class="short-name-col form-control" type="text" name="short_name" value="{{$collection->short_name}}" required>
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

                        <?php
                        $w = [];
                        foreach($collection->product as $value){
                            $w[] = $value->id;
                        }
                        $count = count($w);
                        if($count == 1){
                            $prod = "товар";
                        }elseif($count > 1 && $count < 5){
                            $prod = "товара";
                        }else{
                            $prod = "товаров";
                        }
                        ?>

                        @if($collection->activity == 0)
                            <a href="{{action('Admin\CollectionController@activ', $collection['id'])}}" class="delete"
                               title="Активмровать коллекцию" data-toggle="tooltip"><i class="material-icons">&#xe86c;</i></a>
                        @elseif($count == 0)
                            <a href="{{action('Admin\CollectionController@destroy', $collection['id'])}}" class="delete"
                               title="Деактивмровать коллекцию" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                        @else
                            <a href="{{action('Admin\CollectionController@destroy', $collection['id'])}}" class="no-delete" title="Деактивация невозможна!"
                               data-toggle="{{$collection->id}}"><i class="material-icons">&#xE5C9;</i></a>
                            <p class="no-delete-text" data-toggle="{{$collection->id}}"><i>Внимание!!!</i><br>Деактивация невозможна!<br> У текущей категории есть {{$count}} {{$prod}}</p>
                        @endif

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop