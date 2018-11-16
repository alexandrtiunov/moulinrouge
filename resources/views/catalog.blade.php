@extends('layouts.main')

@section('title')
    <title>{{$title}}</title>

@stop
@section('slider')

@stop

@section('content')

    <div class="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content">
                        <div class="commerce columns-4">
                            <ul class="products columns-4" data-columns="4">
                                @foreach($products as $product)
                                    @if($product['atribut_id'] != 1 && $product['atribut_id'] != 5)
                                        <li class="product {{$product->name}}">
                                            <div class="product-container">
                                                <figure>
                                                    <div class="product-wrap">
                                                        <div class="product-images">
                                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                @foreach($resources as $resource)
                                                                    @if($resource['product_id'] == $product['id'])
                                                                        <img  src="{{URL::to('/img/product/preview/' . $product['name'] . '_' . $product['article'] . '/322x405/' . $resource->img_preview_H405_path)}}" alt=""/>
                                                                        @break
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            {{--<div class="shop-loop-thumbnail shop-loop-back-thumbnail">--}}
                                                            {{--<img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>--}}
                                                            {{--</div>--}}
                                                            <div class="loop-action">
                                                                <div class="shop-loop-quickview">
                                                                    <a title="Detail" href="{{action('IndexController@detail', [$product->category->short_name, $product['short_name']])}}">
                                                                        Подробнее
                                                                    </a>
                                                                </div>
                                                                <div class="loop-add-to-cart">
                                                                    <a href="{{action('CartController@index')}}" class="add_to_cart_button" data-toggle="{{$product->name}}">
                                                                        В примерочную
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="shop-loop-product-info">
                                                            <div class="info-meta clearfix">
                                                                <div class="star-rating">
                                                                    <span style="width:80%"></span>
                                                                </div>
                                                                <div class="loop-add-to-wishlist">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <div class="yith-wcwl-add-button">
                                                                            <a href="#" class="add_to_wishlist">
                                                                                Add to Wishlist
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="info-content-wrap">
                                                                <h3 class="product_title">
                                                                    <a href="{{action('IndexController@detail', [$product->category->short_name, $product['short_name']])}}">{{$product->name}}</a>
                                                                </h3>
                                                                <div class="info-price">
                                                                <span class="price">
                                                                    <span class="amount">
                                                                        &#8372; {{$product->price}},00
                                                                    </span>
                                                                    {{--&ndash;--}}
                                                                    {{--<span class="amount">--}}
                                                                    {{--&pound;20.00--}}
                                                                    {{--</span>--}}
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="paginate">
                            <div class="paginate_links">
                                <span class='page-numbers current'>1</span>
                                <a class='page-numbers' href='#'>2</a>
                                <a class="next page-numbers" href="#">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop