@extends('layouts.main')

@section('slider')

    @stop

@section('content')

    <div class="content-container commerce page-layout-left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-9 main-wrap">
                    <div class="main-content">
                        <div class="shop-toolbar">
                            <form class="commerce-ordering clearfix">
                                <div class="commerce-ordering-select">
                                    <label class="hide">Sorting:</label>
                                    <div class="form-flat-select">
                                        <select name="orderby" class="orderby">
                                            <option value="" selected='selected'>Default sorting</option>
                                            <option value="">Sort by popularity</option>
                                            <option value="">Sort by average rating</option>
                                            <option value="">Sort by newness</option>
                                            <option value="">Sort by price: low to high</option>
                                            <option value="">Sort by price: high to low</option>
                                        </select>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="commerce-ordering-select">
                                    <label class="hide">Show:</label>
                                    <div class="form-flat-select">
                                        <select name="per_page" class="per_page">
                                            <option value="" selected='selected'>12</option>
                                            <option value="">24</option>
                                            <option value="">36</option>
                                        </select>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="shop-loop grid">
                            <ul class="products">
                                @foreach($products as $product)
                                    @if($product->category_id == $category['id'])
                                <li class="product col-md-3 col-sm-6">
                                    <div class="product-container">
                                        <figure>
                                            <div class="product-wrap">
                                                <div class="product-images">
                                                    <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                        @foreach($resources as $resource)
                                                            @if($resource['product_id'] == $product['id'])
                                                                <img  src="../img/product/preview/{{$product['name']}}_{{$product['article']}}/322x405/{{$resource->img_preview_H405_path}}" alt=""/>
                                                                @break
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    {{--<div class="shop-loop-thumbnail shop-loop-back-thumbnail">--}}
                                                        {{--<img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>--}}
                                                    {{--</div>--}}
                                                    <div class="loop-action">
                                                        <div class="shop-loop-quickview">
                                                            <a title="Quick view" href="{{action('IndexController@detail', [$product->category->short_name, $product['short_name']])}}">
                                                                Подробнее
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
                                                            <a href="shop-detail-1.html">{{$product->name}}</a>
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
                                    <a name="collection" class="collection_id" href="#">
                                        {{$collection->name}}-{{$collection->year}}</a><small class="count">{{count($collection->product)}}</small>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_product_categories">
                            <h4 class="widget-title"><span>Категории</span></h4>
                            <ul class="product-categories">
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{action('IndexController@catalog', $category["short_name"])}}">{{$category->name}}</a>
                                </li>
                                    @endforeach

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @stop