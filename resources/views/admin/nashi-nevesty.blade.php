@extends('layouts.admin.admin')

@section('content')

    <div id="nav">

        <div class="buttons">

            {{--Модальное окно добавления новой категории--}}
            <div class="add">

                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addFeedback">
                    Добавить фото
                </button>

                <div class="modal fade" id="addFeedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Добавить фото </h4>

                            </div>
                            <form action="{{action('Admin\PhotoController@nevestyStore')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="modal-body">

                                    <div class="form-group row">
                                        <label for="category_id" class="col-xs-2 col-form-label">Категория</label>
                                        <div class="col-xs-10">
                                            <select size="1" id="role" class="form-control" name="category_id" required>
                                                <option value="">Выбери категорию</option>
                                                @foreach($categories as $category)
                                                    @if($category['activity'] != 0)
                                                        @if(strpos($category->name, "платья") != false)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endif
                                                    @endif
                                                @endforeach
                                            </select>
                                            <a href="{{action('Admin\CategoryController@index')}}">Добавить новую категорю</a>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="image" class="col-xs-2 col-form-label">Фото</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="file" name="image[]" multiple >
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

        <div class="row-admin">
            @foreach($ourResources as $ourResource)
            <div class="our-nevesty photo-position">
                <div class="card">
                    <div class="item">
                        <img class="image"
                             src="{{URL::to('img/nashi-nevesty/' . $ourResource['img_preview_path'])}}"
                             data-full="{{URL::to('img/nashi-nevesty/' . $ourResource['img_path'])}}">
                    </div>
                </div>
                {{--<div class="checkPhoto">--}}
                    {{--<input class="choosePhoto" type="checkbox" name="delete[]" value="">--}}
                {{--</div>--}}
            </div>
            @endforeach
        </div>
    </div>

@stop
