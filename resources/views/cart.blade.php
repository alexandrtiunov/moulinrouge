@extends('layouts.main')

@section('title')
    <title>{{$title}}</title>
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
                                            <th class="product-price text-center">Артикул</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($productsCart as $product)
                                        <tr class="cart_item {{$product->name}}" >
                                            <td class="product-remove hidden-xs">
                                                @foreach($resources as $resource)
                                                    @if($resource['product_id'] == $product['id'])
                                                        <a href="{{action('CartController@index')}}" class="remove" title="Remove this item" data-toggle="{{$product->name}}">&times;</a>
                                                        @break
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td class="product-thumbnail hidden-xs">
                                                <a href="{{action('IndexController@detail', [$product->category->short_name, $product['short_name']])}}">
                                                    <img width="100" height="150"
                                                         src="{{URL::to('/img/product/preview/' . $product['name'] . '_' . $product['article'] . '/167х250/' . $resource->img_preview_H250_path)}}" alt="Product-2"/>
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
                                            <a href="#" class="checkout-button button alt wc-forward">Записаться на примерку</a>
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
                        <div class="commerce empty">
                            <p class="cart-empty">В примерочной нет добавленых товаров.</p>
                            <p class="return-to-shop"><a class="button wc-backward" href="/">Вернуться к товарам</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif

@stop