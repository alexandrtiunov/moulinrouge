@extends('layouts.main')

@section('slider')

    @stop

@section('content')

    <div class="content-container commerce page-layout-left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-9 main-wrap">
                    <div class="main-content">
                        <div class="shop-loop grid">
                            <ul class="products">
                                @foreach($products as $product)
                                    @if($product['atribut_id'] != 1 && $product['atribut_id'] != 5)
                                    @if($product->category_id == $category['id'])
                                <li class="product {{$product->name}}">
                                    <div class="product-container">
                                        <figure>
                                            <div class="product-wrap">
                                                <div class="product-images">
                                                    @if($product->discount_id != null)
                                                        <span class="onsale">Sale!</span>
                                                    @endif
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
                                                    <div class="info-content-wrap">
                                                        <h3 class="product_title">
                                                            <a href="{{action('IndexController@detail', [$product->category->short_name, $product['short_name']])}}">{{$product->name}}</a>
                                                        </h3>
                                                        @if($product->discount_id == null)
                                                            <div class="info-price">

                                                                <span class="price">
                                                                    <span class="amount">
                                                                        &#8372; {{$product->price}},00
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            @else
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
                                                        @endif
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
                        <nav class="commerce-pagination">
                            <p class="commerce-result-count">
                                Showing 1&ndash;12 of 14 results
                            </p>
                            <div class="paginate">
                                <div class="paginate_links">
                                    <span class='page-numbers current'>1</span>
                                    <a class='page-numbers' href='#'>2</a>
                                    <a class="next page-numbers" href="#">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 sidebar-wrap">
                    <div class="main-sidebar">

                        <div class="widget widget_layered_nav">
                            <h4 class="widget-title"><span>Коллекция</span></h4>
                            <ul>
                                @foreach($collections as $collection)
                                <li>
                                    <?php
                                    $countProducts = [];
                                    foreach ($collection->product as $item){
                                        if($item->category_id == $category->id){
                                            if($item->atribut_id != 1 && $item->atribut_id != 5){
                                                $countProducts[] .= $item;
                                            }
                                        }
                                    }?>

                                    <a name="collection" class="collection_id" href="{{action('IndexController@catalog', [$category->short_name, $collection->short_name])}}">
                                    {{$collection->name}}-{{$collection->year}}</a><small class="count">{{count($countProducts)}}</small>

                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_product_categories">
                            <h4 class="widget-title"><span>Категории</span></h4>
                            <ul class="product-categories">
                                @foreach($categories as $category)
                                    @if($category->activity == 1)
                                <li>
                                    <a href="{{action('IndexController@catalog', $category["short_name"])}}">{{$category->name}}</a>
                                </li>
                                    @endif
                                    @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @stop