@extends('layouts.main')

@section('title')
    <title>{{$title}}</title>
@stop

@section('breadcrumb')

@stop

@section('slider')

@stop

@section('content')

    @if(!empty($productsCart))
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
                                        <th class="product-price text-center">Цена</th>
                                        <th class="product-quantity text-center">Количество</th>
                                        <th class="product-subtotal text-center hidden-xs">Сумма</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productsCart as $product)
                                        <tr class="cart_item {{$product->name}}">
                                            <td class="product-remove hidden-xs">
                                                @foreach($resources as $resource)
                                                    @if($resource['product_id'] == $product['id'])
                                                        <a href="{{action('CartController@index')}}" class="remove-cart" title="Remove this item" data-toggle="{{$product->name}}">&times;</a>
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
                                                <a href="{{action('IndexController@detail', [$product->category->short_name, $product['short_name']])}}" class="remove-cart" title="Remove this item" data-toggle="{{$product->name}}">{{$product->name}}</a>
                                            </td>
                                            <td class="product-price text-center">
                                                @if($product->discount_id == null)
                                                    <span>&#8372;</span>
                                                    <span class="amount-product"> {{$product->price}}</span>
                                                    <span>,00</span>
                                                @else
                                                    <span>&#8372;</span>
                                                    <span class="amount-product">{{$product->discount->new_price}}</span>
                                                    <span>,00</span>
                                                @endif
                                            </td>
                                            <td class="product-quantity text-center">
                                                <div class="quantity">
                                                    <p class="input-text qty text">1</p>
                                                    {{--<form action="{{action('CartController@countProduct')}}" method="get">--}}
                                                        {{--<input type="number" step="1" min="0" max="4" name="{{$product->name}}" value="1" title="Qty" class="input-text qty text" size="4"/>--}}
                                                    {{--</form>--}}
                                                </div>
                                            </td>
                                            <td class="product-subtotal hidden-xs text-center">
                                                @if($product->discount_id == null)
                                                    <span>&#8372;</span>
                                                    <span class="amount-total-product">{{$product->price}}</span>
                                                    <span>,00</span>
                                                @else
                                                    <span>&#8372;</span>
                                                    <span class="amount-total-product">{{$product->discount->new_price}}</span>
                                                    <span>,00</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </form>
                            <div class="cart-collaterals">
                                <div class="cart_totals">
                                    {{--<h2>Cart Totals</h2>--}}
                                    <table>
                                        {{--<tr class="cart-subtotal">--}}
                                            {{--<th>Subtotal</th>--}}
                                            {{--<td><span class="amount">&#36;56.00</span></td>--}}
                                        {{--</tr>--}}
                                        {{--<tr class="shipping">--}}
                                            {{--<th>Shipping</th>--}}
                                            {{--<td><span class="amount">&#36;0.00</span></td>--}}
                                        {{--</tr>--}}
                                        <tr class="order-total">
                                            <th>Общая сумма заказа</th>
                                            <td>
                                                @if($product->discount_id == null)
                                                    <span>&#8372;</span>
                                                    <span class="amount-total-products">{{$product->price}}</span>
                                                    <span>,00</span>
                                                @else
                                                    <span>&#8372;</span>
                                                    <span class="amount-total-products">{{$product->discount->new_price}}</span>
                                                    <span>,00</span>
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                    {{--<div class="wc-proceed-to-checkout">--}}
                                        {{--<a href="#" class="checkout-button button alt wc-forward">Оформить заказ</a>--}}
                                    {{--</div>--}}


                                    <div class="cart-collaterals">
                                        <div class="cart_totals">
                                            <div class="wc-proceed-to-checkout">
                                                <a href="#" class="checkout-button button alt wc-forward" data-toggle="modal" data-target="#fitting" data-whatever="{{$productName}}">Оформить заказ</a>

                                                <div class="modal fade" id="fitting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel">Подтверждение заказа</h4>

                                                            </div>
                                                            <form action="{{action('CartController@store')}}" method="post">
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
                                                                        <label for="city" class="col-form-label">Город:</label>
                                                                        <input type="text" class="form-control" name="city" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="text" class="col-form-label">Примечание:</label>
                                                                        <textarea type="text" class="form-control" name="text"></textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="product" class="col-form-label">Товар:</label>
                                                                        <input type="text" class="dress-name form-control" name="product" value="{{$productName}}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="cart-sbm btn btn-primary">Подтвердить заказ</button>
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
                                <p class="cart-empty">В корзине нет добавленых товаров.</p>
                                <p class="return-to-shop"><a class="button wc-backward" href="/">Вернуться к товарам</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif

@stop