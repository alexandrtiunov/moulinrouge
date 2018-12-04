@extends('layouts.main')

@section('breadcrumb')

    <div class="heading-container">
        <div class="container heading-standar">
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li>
                        <span>
                            <a class="home" href="/">
                                <span>Главная</span>
                            </a>
                        </span>
                    </li>
                    {{--@foreach($products as $product)--}}
                        @if(isset($product->category->name))
                            @if(strpos($product->category->name, "платья") != false)
                                <li>
                                    <span>
                                        <a class="home" href="{{action('IndexController@catalog')}}">
                                            <span>Платья</span>
                                        </a>
                                    </span>
                                </li>
                            @else
                                <li>
                                    <span>
                                        <a class="home" href="{{action('IndexController@aksessuary')}}">
                                            <span>Аксессуары</span>
                                        </a>
                                    </span>
                                </li>
                            @endif
                        @else
                            <li>
                                <span>Каталог</span>
                            </li>

                        @endif
                        <li>
                            <span>{{$product->category->name}}</span>
                            {{--@break--}}
                            {{--@endforeach--}}
                        </li>
                        <li>
                            <span>{{$product->name}}</span>
                        </li>
                </ul>
            </div>
        </div>
    </div>

@stop

@section('slider')

@stop

@section('content')

    <div class="content-container no-padding">
        <div class="container-full">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content">
                        <div class="commerce">
                            <div class="style-1 product">
                                <div class="container">
                                    <div class="row summary-container">
                                        <div class="col-md-7 col-sm-6 entry-image">
                                            <div class="single-product-images">
                                                <span class="onsale">Sale!</span>
                                                <div class="single-product-images-slider">
                                                    <div class="caroufredsel product-images-slider" data-synchronise=".single-product-images-slider-synchronise" data-scrollduration="500" data-height="variable" data-scroll-fx="none" data-visible="1" data-circular="1" data-responsive="1">
                                                        <div class="caroufredsel-wrap">
                                                            <ul class="caroufredsel-items">
                                                                @foreach($resources as $resource)
                                                                    @if($resource['product_id'] == $product['id'])
                                                                        <li class="caroufredsel-item">
                                                                            <a href="../../img/product/preview/{{$product['name']}}/617x769/{{$resource->img_preview_H769_path}}" data-rel="magnific-popup-verticalfit">
                                                                                <img  src="{{URL::to('/img/product/preview/' . $product['name'] . '/617x769/' . $resource->img_preview_H769_path)}}" alt=""/>
                                                                            </a>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                            <a href="#" class="caroufredsel-prev"></a>
                                                            <a href="#" class="caroufredsel-next"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product-thumbnails">
                                                    <div class="caroufredsel product-thumbnails-slider" data-visible-min="2" data-visible-max="4" data-scrollduration="500" data-direction="up" data-height="100%" data-circular="1" data-responsive="0">
                                                        <div class="caroufredsel-wrap">
                                                            <ul class="single-product-images-slider-synchronise caroufredsel-items">
                                                                @foreach($resources as $resource)
                                                                    @if($resource['product_id'] == $product['id'])
                                                                <li class="caroufredsel-item selected">
                                                                    <div class="thumb">
                                                                        <a href="{{URL::to('/img/product/preview/' . $product['name'] . '/167x250/' . $resource->img_preview_H250_path)}}" data-rel="0">
                                                                            <img  src="{{URL::to('/img/product/preview/' . $product['name'] . '/167x250/' . $resource->img_preview_H250_path)}}" alt=""/>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-6 entry-summary">
                                            <div class="summary">
                                                <h1 class="product_title entry-title">{{$product->name}}</h1>
                                                <p class="price">
                                                    {{--<del>--}}
                                                        {{--<span class="amount">&pound;20.50</span>--}}
                                                    {{--</del>--}}
                                                    <ins>
                                                        <span class="amount">&#8372; {{$product->price}},00</span>
                                                    </ins>
                                                </p>
                                                <div class="product-excerpt">
                                                    <p>
                                                        Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id metus eget nibh imperdiet fermentum non in metus.
                                                    </p>
                                                </div>
                                                <form class="cart">
                                                    <div class="add-to-cart-table">
                                                        {{--<div class="quantity">--}}
                                                            {{--<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4"/>--}}
                                                        {{--</div>--}}
                                                        <a href="{{action('CartController@index')}}" class="add_to_cart_button button" data-toggle="{{$product->name}}">
                                                            В примерочную
                                                        </a>
                                                        {{--<button type="submit" class="button">В примерочную</button>--}}
                                                    </div>
                                                </form>
                                                {{--<p><a href="#"><strong>Add to Wishlist</strong></a></p>--}}
                                                <div class="clear"></div>
                                                <div class="product_meta">
															<span class="posted_in">
																Категория:
																<a href="{{action('IndexController@catalog', $product->category->short_name)}}">{{$product->category->name}}</a></a>
															</span>
                                                    <span class="posted_in">
																Коллекция:
																<a href="#">{{$product->collection->name}}-{{$product->collection->year}}</a>
															</span>
                                                </div>
                                                <div class="share-links">
                                                    <div class="share-icons">
																<span class="facebook-share">
																	<a href="#" title="Share on Facebook">
																		<i class="fa fa-facebook"></i>
																	</a>
																</span>
                                                        <span class="twitter-share">
																	<a href="#" title="Share on Twitter">
																		<i class="fa fa-twitter"></i>
																	</a>
																</span>
                                                        <span class="google-plus-share">
																	<a href="#" title="Share on Google +">
																		<i class="fa fa-google-plus"></i>
																	</a>
																</span>
                                                        <span class="linkedin-share">
																	<a href="#" title="Share on Linked In">
																		<i class="fa fa-linkedin"></i>
																	</a>
																</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="commerce-tab-container">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="tabbable commerce-tabs">
                                                <ul class="nav nav-tabs">
                                                    <li class="vc_tta-tab active">
                                                        <a data-toggle="tab" href="#tab-1">Description</a>
                                                    </li>
                                                    <li class="vc_tta-tab">
                                                        <a data-toggle="tab" href="#tab-2">Reviews</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="tab-1" class="tab-pane fade in active">
                                                        <h2>Product Description</h2>
                                                        <h3>Nullam vulputate erat id enim lacinia</h3>
                                                        <h3></h3>
                                                        <p>Vel rutrum odio bibendum. Vestibulum quis metus euismod, porta odio et, lacinia eros. Vestibulum vel lobortis ligula, non mollis diam. Donec eu urna quis nibh consectetur pharetra eget vitae dolor. Duis volutpat orci at</p>
                                                        <p>Curabitur rutrum tristique arcu eget tincidunt. Nullam cursus viverra condimentum. Fusce vel nisi sem. Suspendisse sit amet mauris laoreet velit pretium tempus in quis purus.</p>
                                                        <h3></h3>
                                                        <p>Nullam molestie vulputate magna ac tempus. Quisque ac nibh finibus, tempor nunc a, euismod nunc. Nunc lectus magna, mattis eget libero eu, pharetra dapibus tellus. Aliquam dignissim lacus arcu, eu gravida purus rhoncus nec. Aenean porta tempus diam sit amet consequat. Morbi condimentum hendrerit aliquam. Sed at neque faucibus</p>
                                                        <h3></h3>
                                                        <h3></h3>
                                                        <h3>Aenean aliquet condimentum augue, ut tempor turpis sollicitudin in.</h3>
                                                        <p>Nunc vitae odio mollis, euismod mauris at, finibus felis. Phasellus vestibulum, sem at varius imperdiet, velit risus laoreet tortor, in feugiat massa augue sed nibh. Ut fermentum, ligula eget dictum vulputate, orci risus viverra nulla, non posuere metus orci quis mauris. Vivamus aliquam, purus sit amet ultricies dignissim, libero massa rhoncus mi, et imperdiet mauris mi in leo. Ut viverra, erat non rutrum suscipit, nunc purus porta odio, sit amet egestas ex tellus quis nisl. Nullam vitae egestas lectus. Duis faucibus sagittis nunc non porta. Ut eget tempus justo. Donec iaculis id nibh at rhoncus. Nam sed ex lectus. Sed aliquam imperdiet libero ut sollicitudin.</p>
                                                    </div>
                                                    <div id="tab-2" class="tab-pane fade">
                                                        <div id="comments" class="comments-area">
                                                            <h2 class="comments-title">There are <span>3</span> Comments</h2>
                                                            <ol class="comments-list">
                                                                <li class="comment">
                                                                    <div class="comment-wrap">
                                                                        <div class="comment-img">
                                                                            <img alt="" src="http://placehold.it/80x80" class='avatar' height='80' width='80'/>
                                                                        </div>
                                                                        <div class="comment-block">
                                                                            <header class="comment-header">
                                                                                <cite class="comment-author">
                                                                                    John Doe
                                                                                </cite>
                                                                                <div class="comment-meta">
                                                                                    <span class="time">10 days ago</span>
                                                                                </div>
                                                                            </header>
                                                                            <div class="comment-content">
                                                                                <p>
                                                                                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                                                                                </p>
                                                                                <span class="comment-reply">
																							<a class='comment-reply-link' href='#'>Reply</a>
																						</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ol class="children">
                                                                        <li class="comment">
                                                                            <div class="comment-wrap">
                                                                                <div class="comment-img">
                                                                                    <img alt="" src="http://placehold.it/80x80" class='avatar' height='80' width='80'/>
                                                                                </div>
                                                                                <div class="comment-block">
                                                                                    <header class="comment-header">
                                                                                        <cite class="comment-author">
                                                                                            Jane Doe
                                                                                        </cite>
                                                                                        <div class="comment-meta">
                                                                                            <span class="time">10 days ago</span>
                                                                                        </div>
                                                                                    </header>
                                                                                    <div class="comment-content">
                                                                                        <p>
                                                                                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                                                                                        </p>
                                                                                        <span class="comment-reply">
																									<a class='comment-reply-link' href='#'>Reply</a>
																								</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ol>
                                                                </li>
                                                                <li class="comment">
                                                                    <div class="comment-wrap">
                                                                        <div class="comment-img">
                                                                            <img alt="" src="http://placehold.it/80x80" class='avatar' height='80' width='80'/>
                                                                        </div>
                                                                        <div class="comment-block">
                                                                            <header class="comment-header">
                                                                                <cite class="comment-author">
                                                                                    David Platt
                                                                                </cite>
                                                                                <div class="comment-meta">
                                                                                    <span class="time">5 days ago</span>
                                                                                </div>
                                                                            </header>
                                                                            <div class="comment-content">
                                                                                <p>
                                                                                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                                                                                </p>
                                                                                <span class="comment-reply">
																							<a class='comment-reply-link' href='#'>Reply</a>
																						</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                            <div class="comment-respond">
                                                                <h3 class="comment-reply-title">
                                                                    <span>Leave your thought</span>
                                                                </h3>
                                                                <form class="comment-form">
                                                                    <div class="row">
                                                                        <div class="comment-form-author col-sm-12">
                                                                            <input id="author" name="author" type="text" placeholder="Your name" class="form-control" value="" size="30" />
                                                                        </div>
                                                                        <div class="comment-form-email col-sm-12">
                                                                            <input id="email" name="email" type="text" placeholder="email@domain.com" class="form-control" value="" size="30" />
                                                                        </div>
                                                                        <div class="comment-form-comment col-sm-12">
                                                                            <textarea class="form-control" placeholder="Comment" id="comment" name="comment" cols="40" rows="6" ></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-submit">
                                                                        <a class="btn btn-default-outline btn-outline" href="#">
                                                                            <span>Post Comment</span>
                                                                        </a>
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
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="related products">
                                                <div class="related-title">
                                                    <h3><span>We know you will love</span></h3>
                                                </div>
                                                <ul class="products columns-4" data-columns="4">
                                                    <li class="product col-md-3 col-sm-6">
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
                                                                                <a href="#">Cras rhoncus duis viverra</a>
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
                                                    <li class="product col-md-3 col-sm-6">
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
                                                                                <span style="width:60%"></span>
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
                                                                                <a href="#">Creamy Spring Pasta</a>
                                                                            </h3>
                                                                            <div class="info-price">
																						<span class="price">
																							<span class="amount">
																								&pound;321.00
																							</span>
																						</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                    </li>
                                                    <li class="product col-md-3 col-sm-6">
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
                                                                                <a href="#">Donec tincidunt justo</a>
                                                                            </h3>
                                                                            <div class="info-price">
																						<span class="price">
																							<del>
																								<span class="amount">
																									&pound;20.50
																								</span>
																							</del>
																							<ins>
																								<span class="amount">
																									&pound;19.00
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
                                                    <li class="product col-md-3 col-sm-6">
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
                                                                                <a href="#">Green Chile Burritos</a>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="woo-instagram">
                                <h3 class="heading-center-custom">
                                    <span>Instashop</span>
                                </h3>
                                <div class="instagram">
                                    <div class="instagram-wrap">
                                        <div class="caroufredsel caroufredsel-item-no-padding" data-height="variable" data-scroll-fx="scroll" data-scroll-item="1" data-visible-min="1" data-visible-max="4" data-responsive="1" data-infinite="1" data-autoplay="0" data-circular="1">
                                            <div class="caroufredsel-wrap">
                                                <ul class="caroufredsel-items row">
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T7HXbHJjB" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
                                                    </li>
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T7GdlHJi-" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
                                                    </li>
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T7F21HJi9" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
                                                    </li>
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T7E8jHJi6" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
                                                    </li>
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T7DlgnJi2" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
                                                    </li>
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T7CicnJi1" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
                                                    </li>
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T7AWbHJiz" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
                                                    </li>
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T6_MAnJix" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
                                                    </li>
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T6-PbnJiw" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
                                                    </li>
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T69ipHJit" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
                                                    </li>
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T68pOHJiq" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
                                                    </li>
                                                    <li class="caroufredsel-item col-sm-3 col-xs-6">
                                                        <a href="//instagram.com/p/6T672znJip" title="Instagram Image" target="_blank">
                                                            <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image"/>
                                                        </a>
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
            </div>
        </div>
    </div>

@stop