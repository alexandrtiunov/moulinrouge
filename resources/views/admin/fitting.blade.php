@extends('layouts.admin.admin')

@section('title')
    <title>{{$title}}</title>
@stop

@section('content')

    <div id="nav">

        <div class="buttons">

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
                <th>Имя</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Дата/время</th>
                <th>Название платья</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fittingRoom as $value)
                @if($value->status == 1)
                    <tr>
                        <td scope="row">{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->phone}}</td>
                        <td>{{$value->date}} в {{$value->time}}.00</td>
                        <td>{{$value->dress_name}}</td>
                        <td>
                            <a href="{{action('Admin\FittingController@update', $value->id)}}" class="delete"
                               title="Выполнить" name="status" value="0" data-toggle="tooltip"><i class="material-icons">&#xe86c;</i></a>
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>

@stop