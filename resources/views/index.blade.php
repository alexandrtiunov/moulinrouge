@extends('layouts.main')

@section('content')

    <div class="main-content">
        <div class="container">
            <div class="row row-fluid mb-6 pt-6">
                <div class="col-sm-4">
                    <div class="caroufredsel product-slider box_border nav-position-right" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                        <div class="product-slider-title">
                            <h3 class="el-heading">Новинки</h3>
                        </div>
                        <div class="caroufredsel-wrap">
                            <div class="commerce columns-1">
                                <ul class="products columns-1">
                                    @foreach($products as $product)
                                        @if($product['atribut_id'] == 3)
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
                            <a href="#" class="caroufredsel-prev"></a>
                            <a href="#" class="caroufredsel-next"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="caroufredsel product-slider box_border nav-position-right" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                        <div class="product-slider-title">
                            <h3 class="el-heading">Прокат</h3>
                        </div>
                        <div class="caroufredsel-wrap">
                            <div class="commerce columns-1">
                                <ul class="products columns-1">
                                    @foreach($products as $product)
                                        @if($product['atribut_id'] == 4)
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
                                                                <span style="width:100%"></span>
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
                            <a href="#" class="caroufredsel-prev"></a>
                            <a href="#" class="caroufredsel-next"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="caroufredsel product-slider box_border nav-position-right" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                        <div class="product-slider-title">
                            <h3 class="el-heading">Скидки</h3>
                        </div>
                        <div class="caroufredsel-wrap">
                            <div class="commerce columns-1">
                                <ul class="products columns-1" data-columns="1">
                                    @foreach($products as $product)
                                        @if($product['atribut_id'] != 1 && $product['atribut_id'] != 5)
                                        @if($product->discount_id != null)
                                    <li class="product {{$product->name}}">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <span class="onsale">Sale!</span>
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            @foreach($resources as $resource)
                                                                @if($resource['product_id'] == $product['id'])
                                                                    <img  src="{{URL::to('/img/product/preview/' . $product['name'] . '_' . $product['article'] . '/322x405/' . $resource->img_preview_H405_path)}}" alt=""/>
                                                                    @break
                                                                @endif
                                                            @endforeach
                                                        </div>
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
                                                                <span style="width:100%"></span>
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
                                                                    <del>
                                                                        <span class="amount">
                                                                            &#8372; {{$product->price}},00
                                                                        </span>
                                                                    </del>
                                                                    <ins>
                                                                        <span class="amount">
                                                                            &#8372; {{$product->discount->new_price}},00
                                                                        </span>
                                                                    </ins>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                        @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                            <a href="#" class="caroufredsel-prev"></a>
                            <a href="#" class="caroufredsel-next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-fluid mb-7">
                <div class="col-sm-6">
                    <div class="box-ft box-ft-1">
                        <img src="{{URL::to('img/nashi_nevesty.jpg')}}" alt="">
                        <a href="#">
                            <span class="bof-tf-title-wrap">
                                <span class="bof-tf-title-wrap-2">
                                    {{--<span class="bof-tf-sub-title">New Comming</span>--}}
                                    <span class="bof-tf-title">Наши невесты</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="holder-box"><!--start-holder-box-->
                        <div class="main-box">
                            {{--<iframe width="1200" height="675" src="https://www.youtube.com/embed?listType=playlist&list=PLJBFx2xjUauhwdim9AwFeV-Nzg_gEIv3o&wmode=opaque&amp;autoplay=1&amp;controls=1&amp;rel=0&amp;showinfo=0&loop=1&mute=1" allowfullscreen id="video_main"></iframe>--}}
                            {{--<iframe width="620" height="349" src="https://www.youtube.com/embed/D4HFKRI72x8?&playlist=D4HFKRI72x8&amp;&wmode=opaque&amp;autoplay=1&amp;controls=1&amp;rel=0&amp;showinfo=0&loop=1&mute=1" allowfullscreen id="video_main"></iframe>--}}
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/duMeHPx1-Ik?&playlist=D4HFKRI72x8&amp;&wmode=opaque&amp;autoplay=0&amp;controls=1&amp;rel=0&amp;showinfo=0&loop=1&mute=1" allowfullscreen id="video_main"></iframe>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container">
            <div class="row row-fluid mb-10">
                <div class="col-sm-12">
                    <div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                        <div class="product-slider-title">
                            <h3 class="el-heading">ТОП ПРОДАЖ</h3>
                        </div>
                        <div class="caroufredsel-wrap">
                            <div class="commerce columns-4">
                                <ul class="products columns-4" data-columns="4">
                                    @foreach($products as $product)
                                        @if($product['atribut_id'] != 1 && $product['atribut_id'] != 5)
                                    <li class="product">
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
                                                                <span style="width:100%"></span>
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
                            <a href="#" class="caroufredsel-prev"></a>
                            <a href="#" class="caroufredsel-next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row row-fluid mb-0 row-no-padding">
                <div class="col-sm-12 p-0">
                    <div class="post-grid-wrap">
                        <ul class="row list">
                            @foreach($articles as $article)
                            <li class="col-sm-12">
                                <article class="hentry">
                                    <div class="hentry-wrap">
                                        <div class="entry-featured">
                                            <a href="{{action('BlogController@detail', $article['short_name'])}}">
                                                <img width="700" height="450" src="{{URL::to('/img/blog-photo/' . $article->short_name . '/' . $article->img_path)}}" alt="" />
                                            </a>
                                        </div>
                                        <div class="entry-info">
                                            <div class="entry-header">
                                                <h3 class="entry-title">
                                                    <a href="{{action('BlogController@detail', $article['short_name'])}}">
                                                        {{$article->title}}
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="entry-content">
                                                <p>
                                                    {{htmlspecialchars_decode($article->text)}}
                                                </p>
                                            </div>
                                            <div class="entry-meta">
																<span class="meta-date">
																	Дата:
																	<time datetime="2015-08-11T06:27:49+00:00">{{$article->created_at}}</time>
																</span>
                                                <span class="meta-author">
																	Автор:
																	<a href="#">{{$article->user->name}}</a>
																</span>
                                                {{--<span class="meta-category">--}}
																	{{--Category:--}}
																	{{--<a href="#">Aliquam</a>, <a href="#">Nunc</a>--}}
																{{--</span>--}}
                                            </div>
                                            <a class="read-more btn btn-outline" href="blog-detail.html">
                                                Подробнее <i>+</i>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-fluid mt-10 mb-10">
                <div class="col-sm-12">
                    <div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                        <div class="product-slider-title">
                            <h3 class="el-heading">New Arrivals</h3>
                        </div>
                        <div class="caroufredsel-wrap">
                            <div class="commerce columns-4">
                                <ul class="products columns-4" data-columns="4">
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="shop-detail-1.html">Quisque libero sagittis</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;17.50
																					</span>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="shop-detail-1.html">Creamy Spring Pasta</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;32.10
																					</span>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <span class="onsale">Sale!</span>
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="shop-detail-1.html">Donec tincidunt justo</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<del>
																						<span class="amount">
																							&pound;23.00
																						</span>
																					</del>
																					<ins>
																						<span class="amount">
																							&pound;20.00
																						</span>
																					</ins>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="shop-detail-1.html">Cras rhoncus duis viverra</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;12.00
																					</span>
																					&ndash;
																					<span class="amount">
																						&pound;20.00
																					</span>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="shop-detail-1.html">Nunc lacus sem</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;10.95
																					</span>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="shop-detail-1.html">Mauris egestas</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;14.95
																					</span>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="shop-detail-1.html">Morbi fermentum</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;17.45
																					</span>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="#">Morbi fermentum</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<del>
																						<span class="amount">
																							&pound;23.00
																						</span>
																					</del>
																					<ins>
																						<span class="amount">
																							&pound;20.00
																						</span>
																					</ins>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="shop-detail-1.html">Ut quis Aenean</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;10.95
																					</span>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="shop-detail-1.html">Pesto Cauliflower</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;15.05
																					</span>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="shop-detail-1.html">Jalapeno Dressing Salad</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;17.75
																					</span>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442.jpg" alt=""/>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="shop-loop-quickview">
                                                                <a title="Quick view" href="#">
                                                                    Quick view
                                                                </a>
                                                            </div>
                                                            <div class="loop-add-to-cart">
                                                                <a href="#" class="add_to_cart_button">
                                                                    Add to cart
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-meta clearfix">
                                                            <div class="star-rating">
                                                                <span style="width:100%"></span>
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
                                                                <a href="shop-detail-1.html">Green Chile Burritos</a>
                                                            </h3>
                                                            <div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;10.75
																					</span>
																				</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="caroufredsel-prev"></a>
                            <a href="#" class="caroufredsel-next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="container-full">--}}
            {{--<div class="row row-fluid custom-bg-1 mb-0 pt-9 pb-10">--}}
                {{--<div class="col-sm-12">--}}
                    {{--<h3 class="text-uppercase mb-2 white text-center">--}}
                        {{--the one for you--}}
                    {{--</h3>--}}
                    {{--<div class="mb-6">--}}
                        {{--<p class="text-center white">We offer a range of models to accommodate a variety body shapes and sizes</p>--}}
                    {{--</div>--}}
                    {{--<a class="btn btn-white-outline btn-align-center" href="#">--}}
                        {{--<span>find your leather coats</span>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="container">
            <div class="row row-fluid mb-0 pt-10">
                <div class="col-sm-12">
                    <h3 class="text-center heading-center-custom mb-3">
                        ОТЗЫВЫ
                    </h3>
                    {{--<div class="mb-7">--}}
                        {{--<p class="text-center">--}}
                            {{--Platea hac egestas himenaeos mi non libero lacus mollis, a lacinia dapibus turpis curae neque ut fringilla lacinia--}}
                        {{--</p>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="row row-fluid mb-7">
                <div class="col-sm-12">
                    <div class="testimonial mb-3">
                        <div class="caroufredsel" data-visible-min="1" data-visible-max="2" data-scroll-fx="scroll" data-speed="5000" data-responsive="1" data-infinite="1" data-autoplay="0">
                            <div class="caroufredsel-wrap">
                                <ul class="caroufredsel-items">
                                    @foreach($fedbacks as $fedback)
                                    <li class="caroufredsel-item col-sm-6">
                                        <div class="testimonial-wrap">
                                            <div class="testimonial-text">
                                                <span>&ldquo;</span>
                                                {{$fedback->text}}
                                                <span>&rdquo;</span>
                                            </div>
                                            <div class="clearfix">
                                                <div class="testimonial-avatar">
                                                    <img src="images/avatar/thumb_50x50.jpg" alt=""/>
                                                </div>
                                                <span class="testimonial-author">{{$fedback->name}} {{$fedback->surname}}</span>
                                                {{--<span class="testimonial-company">CEO/Founder Sitesao</span>--}}
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <a href="#" class="caroufredsel-prev hide"></a>
                                <a href="#" class="caroufredsel-next hide"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-fluid mb-0 pb-5">
                <div class="col-sm-12">
                    <div class="client client-slider">
                        <div class="caroufredsel" data-height="variable" data-visible-min="1" data-visible-max="4" data-responsive="1" data-infinite="1" data-autoplay="1" data-speed="15000">
                            <div class="caroufredsel-wrap">
                                <ul class="caroufredsel-items row">
                                    <li class="caroufredsel-item col-md-3">
                                        <img alt="" src="images/client/client_270x100.png">
                                    </li>
                                    <li class="caroufredsel-item col-md-3">
                                        <img alt="" src="images/client/client_270x100.png">
                                    </li>
                                    <li class="caroufredsel-item col-md-3">
                                        <img alt="" src="images/client/client_270x100.png">
                                    </li>
                                    <li class="caroufredsel-item col-md-3">
                                        <img alt="" src="images/client/client_270x100.png">
                                    </li>
                                    <li class="caroufredsel-item col-md-3">
                                        <img alt="" src="images/client/client_270x100.png">
                                    </li>
                                    <li class="caroufredsel-item col-md-3">
                                        <img alt="" src="images/client/client_270x100.png">
                                    </li>
                                </ul>
                                <a href="#" class="caroufredsel-prev"></a>
                                <a href="#" class="caroufredsel-next"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @stop