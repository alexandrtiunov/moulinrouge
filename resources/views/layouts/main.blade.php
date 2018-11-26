<!doctype html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    @section('title')
        <title>Moulin Rouge | Свадебный салон</title>
    @show

    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="{{URL::to('css/main.css')}}" type="text/css">

    <link rel='stylesheet' href='{{ URL::to('css/main/settings.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::to('css/bootstrap.min.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::to('css/main/swatches-and-photos.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::to('css/main/prettyPhoto.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::to('css/main/jquery.selectBox.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::to('css/main/font-awesome.min.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel='stylesheet' href='{{ URL::to('css/main/elegant-icon.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::to('css/main/style.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::to('css/main/commerce.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::to('css/main/custom.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ URL::to('css/main/magnific-popup.css') }}' type='text/css' media='all'/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script type='text/javascript' src='{{ URL::to('js/jquery-3.0.0.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery-migrate.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery.themepunch.tools.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery.themepunch.revolution.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/easing.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/imagesloaded.pkgd.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/bootstrap.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/superfish-1.7.4.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery.appear.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/script.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/swatches-and-photos.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery.cookie.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery.prettyPhoto.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery.prettyPhoto.init.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery.selectBox.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery.touchSwipe.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery.transit.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery.carouFredSel.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/jquery.magnific-popup.js') }}'></script>

    <script type='text/javascript' src='{{ URL::to('js/main/extensions/revolution.extension.video.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/extensions/revolution.extension.slideanims.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/extensions/revolution.extension.actions.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/extensions/revolution.extension.layeranimation.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/extensions/revolution.extension.kenburn.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/extensions/revolution.extension.navigation.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/extensions/revolution.extension.migration.min.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/main/extensions/revolution.extension.parallax.min.js') }}'></script>

    <script type='text/javascript' src='{{ URL::to('js/site.js') }}'></script>
    <script type='text/javascript' src='{{ URL::to('js/jquery.cookie.js') }}'></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="offcanvas open">
    <div class="offcanvas-wrap">
        <div class="offcanvas-user clearfix">
            <a class="offcanvas-user-wishlist-link" href="{{action('CartController@index')}}">
                <i class="fas fa-person-booth" title="Моя примерочная" alt="Моя примерочная"></i> Примерочная
            </a>
        </div>
        <nav class="offcanvas-navbar">
            <ul class="offcanvas-nav">
                <li class="current-menu-item menu-item-has-children dropdown">
                    <a href="/" class="dropdown-hover">
                        <span class="underline">Главная</span>
                        {{--<span class="caret"></span>--}}
                    </a>
                </li>
                <li class="current-menu-item menu-item-has-children dropdown">
                    <a href="{{action('IndexController@catalog')}}" class="dropdown-hover">
                        <span class="underline">Платья</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            @if($category->activity == 1)
                                @if(strpos($category['name'], "платья") != false)
                                <li>
                                    <a href="{{action('IndexController@catalog', $category["short_name"])}}">{{$category["name"]}}</a>
                                </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="current-menu-item menu-item-has-children dropdown">
                    <a href="{{action('IndexController@aksessuary')}}" class="dropdown-hover">
                        <span class="underline">Аксессуары</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            @if($category->activity == 1)
                                @if(strpos($category['name'], "платья") == false)
                                    <li>
                                        <a href="{{action('IndexController@catalog', $category["short_name"])}}">{{$category["name"]}}</a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="{{action('BlogController@index')}}" class="dropdown-hover">Блог
                        {{--<span class="caret"></span>--}}
                    </a>
                </li>
                <li class="current-menu-item menu-item-has-children dropdown">
                    <a href="{{action('ContactController@index')}}" class="dropdown-hover">
                        <span class="underline">Контакты</span>
                        {{--<span class="caret"></span>--}}
                    </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">
                        <span class="underline">О нас</span>
                        {{--<span class="caret"></span>--}}
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div id="wrapper" class="wide-wrap">
    <div class="offcanvas-overlay"></div>
    <header class="header-container header-type-center header-navbar-center header-scroll-resize">
        <div class="navbar-container">
            <div class="navbar navbar-default navbar-scroll-fixed">
                <div class="navbar-default-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-default-col">
                                <div class="navbar-wrap">
                                    <div class="navbar-header">
                                        <div class="navbar-header-left">
                                            <div class="social">
                                                <a href="#" title="Facebook" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                                <a href="#" title="Instagram" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="navbar-header-center">
                                            <button type="button" class="navbar-toggle">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar bar-top"></span>
                                                <span class="icon-bar bar-middle"></span>
                                                <span class="icon-bar bar-bottom"></span>
                                            </button>
                                            <a class="navbar-search-button search-icon-mobile" href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <a class="cart-icon-mobile" href="{{action('CartController@index')}}">
                                                <i class="fas fa-person-booth"></i>
                                                <span>{{count($productsCart)}}</span>
                                            </a>
                                            <a class="navbar-brand" href="./">
                                                <img class="logo" alt="WOOW" src="{{URL::to('img/logoblack.png')}}">
                                                <img class="logo-fixed" alt="Moulin Rouge" src="{{URL::to('img/logoblack.png')}}">
                                                <img class="logo-mobile" alt="Moulin Rouge" src="{{URL::to('img/logoblack.png')}}">
                                            </a>
                                        </div>
                                        <div class="navbar-header-right">
                                            <div class="navbar-minicart navbar-minicart-topbar">
                                                <div class="navbar-minicart">
                                                    <a class="minicart-link" href="{{action('CartController@index')}}">
                                                        <span class="minicart-icon">
                                                            Моя примерочная
                                                            <i class="fas fa-person-booth" title="Моя примерочная" alt="Моя примерочная"></i>
                                                            <span class="count">{{count($productsCart)}}</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav class="collapse navbar-collapse primary-navbar-collapse">
                                        <ul class="nav navbar-nav primary-nav">
                                            <li class="current-menu-item menu-item-has-children dropdown">
                                                <a href="/" class="dropdown-hover">
                                                    <span class="underline">Главная</span> <span class="caret"></span>
                                                </a>
                                            </li>
                                            <li class="current-menu-item menu-item-has-children dropdown">
                                                <a href="{{action('IndexController@catalog')}}" class="dropdown-hover">
                                                    <span class="underline">Платья</span>
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    @foreach($categories as $category)
                                                        @if($category->activity == 1)
                                                            @if(strpos($category['name'], "платья") != false)
                                                        <li>
                                                            <a href="{{action('IndexController@catalog', $category["short_name"])}}">{{$category["name"]}}</a>
                                                        </li>
                                                             @endif
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="current-menu-item menu-item-has-children dropdown">
                                                <a href="{{action('IndexController@aksessuary')}}" class="dropdown-hover">
                                                    <span class="underline">Аксессуары</span>
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    @foreach($categories as $category)
                                                        @if($category->activity == 1)
                                                            @if(strpos($category['name'], "платья") == false)
                                                                <li>
                                                                    <a href="{{action('IndexController@catalog', $category["short_name"])}}">{{$category["name"]}}</a>
                                                                </li>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children dropdown">
                                                <a href="{{action('BlogController@index')}}" class="dropdown-hover">
                                                    <span class="underline">Блог</span>
                                                    {{--<span class="caret"></span>--}}
                                                </a>
                                            </li>
                                            <li class="current-menu-item menu-item-has-children dropdown">
                                                <a href="{{action('ContactController@index')}}" class="dropdown-hover">
                                                    <span class="underline">Контакты</span>
                                                    {{--<span class="caret"></span>--}}
                                                </a>
                                            </li>
                                            <li class="menu-item-has-children dropdown">
                                                <a href="#" class="dropdown-hover">
                                                    <span class="underline">О нас</span> <span class="caret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-search-overlay hide">
                    <div class="container">
                        <div class="header-search-overlay-wrap">
                            <form class="searchform">
                                <input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Search..."/>
                            </form>
                            <button type="button" class="close">
                                <span aria-hidden="true" class="fa fa-times"></span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="content-container no-padding">
        <div class="container-full">
            <div class="row row-fluid">
                <div class="col-sm-12">
                    @section('slider')
                    <div class="rev_slider_wrapper fullwidthbanner-container">
                        <div id="rev_slider" class="rev_slider fullwidthabanner">
                            <ul>
                                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-delay="6000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                    <img src="images/slideshow/dummy.png" alt="" width="1920" height="657" data-lazyload="images/slideshow/header-slide-img-1.jpg" />
                                    <div class="tp-caption home1-small-black tp-resizeme" data-x="125" data-y="135" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
                                        f/w new york 2015
                                    </div>
                                    <div class="tp-caption tp-resizeme" data-x="125" data-y="300" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on" data-elementdelay="0.05">
                                        <img src="images/slideshow/dummy.png" alt="" width="23" height="3" data-ww="23px" data-hh="3px" data-lazyload="images/slideshow/rev_home1_img3.png" />
                                    </div>
                                    <div class="tp-caption home1-small-black tp-resizeme" data-x="125" data-y="360" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
                                        [ discover the collection ]
                                    </div>
                                    <div class="tp-caption home3-big-black tp-resizeme" data-x="125" data-y="188" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
                                        New Fashion Week
                                    </div>
                                </li>
                                <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-delay="6000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                                    <img src="images/slideshow/dummy.png" alt="" width="1920" height="657" data-lazyload="images/slideshow/header-slide-img-2.jpg" />
                                    <div class="tp-caption home2-medium-white tp-resizeme" data-x="" data-y="200" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" data-end="8300">
                                        autumn comming
                                    </div>
                                    <div class="tp-caption home2-big-white tp-resizeme" data-x="-1" data-y="250" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" data-end="8300">
                                        sale up to 85%
                                    </div>
                                    <div class="tp-caption white-button rev-btn" data-x="" data-y="350" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;" data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" data-end="8300">
                                        discover the collection now
                                    </div>
                                    <div class="tp-caption Fashion-BigDisplay tp-resizeme" data-x="100" data-y="100" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;e:Power3.easeInOut;s:300;e:Power3.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on"></div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer tp-bottom"></div>
                        </div>
                    </div>
                    @show
                </div>
            </div>

            @yield('content')

        </div>
    </div>

    <footer id="footer" class="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="footer-newsletter-wrap">
                    <h3 class="footer-newsletter-heading">NEWSLETTER</h3>
                    <form class="mailchimp-form">
                        <div class="mailchimp-form-content clearfix">
                            <label for="subscribe_email" class="hide">Subscribe</label>
                            <input type="email" id="subscribe_email" class="form-control" required="required" placeholder="Enter your email..." name="email">
                            <button type="submit" class="btn mailchimp-submit">sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-featured">
            <div class="container">
                <div class="row">
                    <div class="footer-featured-col col-md-4 col-sm-6">
                        <i class="fa fa-money"></i>
                        <h4 class="footer-featured-title">
                            100% <br> возврат денег
                        </h4>
                        free return standard order in 30 days
                    </div>
                    <div class="footer-featured-col col-md-4 col-sm-6">
                        <i class="fa fa-globe"></i>
                        <h4 class="footer-featured-title">
                            world wide <br> delivery
                        </h4>
                        free ship for payment over $100
                    </div>
                    <div class="footer-featured-col col-md-4 col-sm-6">
                        <i class="fa fa-clock-o"></i>
                        <h4 class="footer-featured-title">
                            24h <br> shipment
                        </h4>
                        for standard package
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-widget">
            <div class="container">
                <div class="footer-widget-wrap">
                    <div class="row">
                        <div class="footer-widget-col col-md-3 col-sm-6">
                            <div class="widget widget_text">
                                <div class="textwidget">
                                    <ul class="address">
                                        <li>
                                            <i class="fa fa-home"></i>
                                            <h4>Адрес:</h4>
                                            <p>г. Краматорск, ул. Парковая, 20, Украина</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-mobile"></i>
                                            <h4>Телефон:</h4>
                                            <p>(099) 92-33-776</p>
                                            <p>(063) 258-20-25</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <h4>Email:</h4>
                                            <p><a href="mailto:email@domain.com">email@domain.com</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-widget-col col-md-3 col-sm-6">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title">
                                    <span>Информация</span>
                                </h3>
                                <div class="menu-infomation-container">
                                    <ul class="menu">
                                        <li><a href="#">О Нас</a></li>
                                        <li><a href="#">Контакты</a></li>
                                        <li><a href="#">Term &#038; Conditions</a></li>
                                        <li><a href="#">Gift Voucher</a></li>
                                        <li><a href="#">Топ продаж</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-widget-col col-md-3 col-sm-6">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title">
                                    <span>Customer Care</span>
                                </h3>
                                <div class="menu-customer-care-container">
                                    <ul class="menu">
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-widget-col col-md-3 col-sm-6">
                            <div class="widget widget_text">
                                <h3 class="widget-title">
                                    <span>Время работы</span>
                                </h3>
                                <div class="textwidget">
                                    <ul class="open-time">
                                        <li><span>Пн - Пт:</span><span>8am - 5pm</span> </li>
                                        <li><span>Сб:</span><span>8am - 11am</span> </li>
                                        <li><span>Вс: </span><span>Closed</span></li>
                                    </ul>
                                    <h3 class="widget-title">
                                        <span>payment Menthod</span>
                                    </h3>
                                    <div class="payment">
                                        <a href="#"><i class="fa fa-cc-mastercard"></i></a>
                                        <a href="#"><i class="fa fa-cc-visa"></i></a>
                                        <a href="#"><i class="fa fa-cc-paypal"></i></a>
                                        <a href="#"><i class="fa fa-cc-discover"></i></a>
                                        <a href="#"><i class="fa fa-credit-card"></i></a>
                                        <a href="#"><i class="fa fa-cc-amex"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center">
            © 2018 MoulinRouge | Свадебный салон
        </div>
    </footer>
</div>

<script type="text/javascript">

    var tpj=jQuery;

    var revapi7;
    tpj(document).ready(function() {
        if(tpj("#rev_slider").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider");
        }else{
            revapi7 = tpj("#rev_slider").show().revolution({
                sliderType:"standard",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"on",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"gyges",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:30,
                            v_offset:0
                        }
                    }
                    ,
                    bullets: {
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        style:"hephaistos",
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:30,
                        space:5,
                        tmp:''
                    }
                },
                gridwidth:1170,
                gridheight:600,
                lazyType:"smart",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });	/*ready*/
</script>
</body>
</html>