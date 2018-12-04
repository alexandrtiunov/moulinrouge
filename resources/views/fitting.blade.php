@extends('layouts.main')

@section('title')
    <title>{{$title}}</title>
@stop

@section('slider')

@stop

@section('content')

    @if(!empty($productsFitting))
        <div class="content-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-content">
                            <div class="commerce">
                                <form>
                                    <table class="table shop_table cart">
                                        <thead>
                                        <tr>
                                            <th class="product-remove hidden-xs">&nbsp;</th>
                                            <th class="product-thumbnail hidden-xs">&nbsp;</th>
                                            <th class="product-name">Товар</th>
                                            <th class="product-price text-center">Артикул</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($productsFitting as $product)
                                        <tr class="fitting_item {{$product->name}}" >
                                            <td class="product-remove hidden-xs">
                                                @foreach($resources as $resource)
                                                    @if($resource['product_id'] == $product['id'])
                                                        <a href="{{action('FittingController@index')}}" class="remove-fitting" title="Remove this item" data-toggle="{{$product->name}}">&times;</a>
                                                        @break
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td class="product-thumbnail hidden-xs">
                                                <a href="{{action('IndexController@detail', [$product->category->short_name, $product['short_name']])}}">
                                                    <img width="100" height="150"
                                                         src="{{URL::to('/img/product/preview/' . $product['name'] . '/167x250/' . $resource->img_preview_H250_path)}}" alt="Product-2"/>
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="{{action('IndexController@detail', [$product->category->short_name, $product['short_name']])}}" class="remove" title="Remove this item" data-toggle="{{$product->name}}">{{$product->name}}</a>
                                            </td>
                                            <td class="product-price text-center">
                                                <span class="amount">{{$product->article}}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <h4>Запланируйте время визита в салон и для Вас будет зарезервирована VIP-примерочная с выбранными платьями.</h4>
                                </form>
                                <div class="cart-collaterals">
                                    <div class="cart_totals">
                                        <div class="wc-proceed-to-checkout">
                                            <a href="#" class="checkout-button button alt wc-forward" data-toggle="modal" data-target="#fitting" data-whatever="{{$productName}}">Записаться на примерку</a>

                                            <div class="modal fade" id="fitting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <h4 class="modal-title" id="myModalLabel">Записаться на примерку</h4>

                                                        </div>
                                                        <form action="{{action('FittingController@store')}}" method="post">
                                                            {{csrf_field()}}
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="name" class="col-form-label">Ваше имя:</label>
                                                                    <input type="text" class="name form-control" name="name" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email" class="col-form-label">E-mail:</label>
                                                                    <input type="email" class="email form-control" name="email" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="phone" class="col-form-label">Телефон:</label>
                                                                    <input type="text" class="phone form-control" name="phone" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="date" class="date col-form-label">Дата:</label>
                                                                    <label for="time" class="time col-form-label">Время:</label>
                                                                    <input type="date" class="date form-control" name="date" value="{{$date}}" required>
                                                                    <select size="1" id="role" class="time form-control" name="time" required>
                                                                            <option selected value="10">10.00</option>
                                                                            <option  value="11">11.00</option>
                                                                            <option  value="12">12.00</option>
                                                                            <option  value="13">13.00</option>
                                                                            <option  value="14">14.00</option>
                                                                            <option  value="15">15.00</option>
                                                                            <option  value="16">16.00</option>
                                                                            <option  value="17">17.00</option>
                                                                            <option  value="18">18.00</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="dress_name" class="col-form-label">Название платья или ссылка на платье:</label>
                                                                    <input type="text" class="dress-name form-control" name="dress_name" required>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="fit-sbm btn btn-primary">Записаться</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else

    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content">
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
                        <div class="commerce empty">
                            <p class="cart-empty">В примерочной нет добавленых товаров.</p>
                            <p class="return-to-shop"><a class="button wc-backward" href="/">Вернуться к товарам</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    @endif

@stop