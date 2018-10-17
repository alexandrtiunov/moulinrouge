@extends('layouts.admin.admin')

@section('title')
    <title>{{$title}}</title>
@stop

@section('content')

    <div id="nav">

        <div class="buttons">

            {{--Модальное окно добавления новой категории--}}
            <div class="add">

                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addFeedback">
                    Добавить отзыв
                </button>

                <div class="modal fade" id="addFeedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Добавить новый отзыв </h4>

                            </div>
                            <form action="#" method="post">
                                {{csrf_field()}}
                                <div class="modal-body">

                                    <div class="form-group row">
                                        <label for="text-input" class="col-xs-2 col-form-label">Имя</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="text" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text-input" class="col-xs-2 col-form-label">Фамилия</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="text" name="surname" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text-input" class="col-xs-2 col-form-label">Email</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="email" name="email" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="text-input" class="col-xs-2 col-form-label">Телефон</label>
                                        <div class="col-xs-10">
                                            <input class="form-control" type="text" name="phone" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="text-input" class="col-xs-2 col-form-label">Отзыв</label>
                                        <div class="col-xs-10">
                                            <textarea class="feedback-text form-control" name="text" required></textarea>
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

        <table id="tablesorter" class="tablesorter table table-bordered">
            <thead>
            <tr>
                <th>id</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Email</th>
                <th>Номер телефона</th>
                <th>Текст отзыва</th>
                <th>Статус</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feedbacks as $feedback)
                <tr>
                    <td scope="row">{{$feedback->id}}</td>
                    <td>{{$feedback->name}}</td>
                    <td>{{$feedback->surname}}</td>
                    <td>{{$feedback->email}}</td>
                    <td>{{$feedback->phone_number}}</td>
                    <td>{{$feedback->text}}</td>
                    <td>{{$feedback->status}}<input type="checkbox" class="checkStatus"></td>
                    <td>

                        {{--Модальное окно обновления коллекции по id--}}



                        {{--Конец окна--}}

                        <a href="{{action('Admin\CategoryController@destroy', $category['id'])}}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop