@extends('layouts.main')

@section('title')
    <title>{{$title}}</title>
@stop

@section('slider')

@stop

@section('content')

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

        <div class="row-site">
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