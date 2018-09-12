@extends('layouts.main')


@section('content')

        <div class="my-5" id="feelings">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2>Добро пожаловать</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="feelings-content">
                            <img class="img-fluid" src="img/looks/look-1.jpg">
                            <h3>Красота</h3>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                                mazim.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feelings-content">
                            <img class="img-fluid" src="img/looks/look-3.jpg">
                            <h3>Женственность</h3>
                            <p>Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                laoreet.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feelings-content">
                            <img class="img-fluid " src="img/looks/look-1.jpg">
                            <h3>Изысканность</h3>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                                mazim.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feelings-content">
                            <img class="img-fluid" src="img/looks/look-3.jpg">
                            <h3>Нежность</h3>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod
                                mazim.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-5" id="wedding-dresses">
            <div class="container">
                {{--<div class="col text-center">--}}
                    {{--<h2 class="part">ПЛАТЬЯ</h2>--}}
                {{--</div>--}}
                <div class="row">
                    <div class="col text-center">
                        <h2>Новинки</h2>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                {{--<div class="carusel-sale">--}}
                    <div class="multiple-slide">
                        <div>
                            <div class="card">
                                <div class="item">
                                    <img class="card-img-top img-fluid" src="img/dresses/wedding/w-dress-1.jpg" alt="Item-1">
                                    <div class="item-content text-center">
                                        <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                        <span>артикул: </span>
                                        <span>wd-110011</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="item">
                                    <img class="card-img-top img-fluid" src="img/dresses/wedding/w-dress-2.jpg" alt="Item-1">
                                    <div class="item-content text-center">
                                        <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                        <span>артикул: </span>
                                        <span>wd-110011</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="item">
                                    <img class="card-img-top img-fluid" src="img/dresses/wedding/w-dress-3.jpg" alt="Item-1">
                                    <div class="item-content text-center">
                                        <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                        <span>артикул: </span>
                                        <span>wd-110011</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="item">
                                    <img class="card-img-top img-fluid" src="img/dresses/wedding/w-dress-4.jpg" alt="Item-1">
                                    <div class="item-content text-center">
                                        <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                        <span>артикул: </span>
                                        <span>wd-110011</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{--</div>--}}

                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="card">
                            <div class="item">
                                <img class="card-img-top img-fluid" src="img/dresses/wedding/w-dress-1.jpg" alt="Item-1">
                                <div class="item-content text-center">
                                    <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                    <span>артикул: </span>
                                    <span>wd-110011</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="card">
                            <div class="item">
                                <img class="card-img-top img-fluid" src="img/dresses/wedding/w-dress-2.jpg" alt="Item-2">
                                <div class="item-content text-center">
                                    <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="card">
                            <div class="item">
                                <img class="card-img-top img-fluid" src="img/dresses/wedding/w-dress-3.jpg" alt="Item-3">
                                <div class="item-content text-center">
                                    <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="card">
                            <div class="item">
                                <img class="card-img-top img-fluid" src="img/dresses/wedding/w-dress-4.jpg" alt="Item-4">
                                <div class="item-content text-center">
                                    <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="card">
                            <div class="item">
                                <img class="card-img-top img-fluid" src="img/dresses/wedding/w-dress-5.jpg" alt="Item-5">
                                <div class="item-content text-center">
                                    <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>

        <div class="pb-5" id="shares">
            <div class="container-fluid">
                <div class="row">
                    <div class="col text-center">
                        <h2>АКЦИОННЫЕ ТОВАРЫ</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="card">
                            <div class="item">
                                <img class="card-img-top img-fluid" src="img/dresses/wedding/w-dress-3.jpg" alt="Item-3">
                                <div class="item-content text-center">
                                    <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                </div>
                                <div class="shares-value">
                                    <span>-15%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="card">
                            <div class="item">
                                <img class="card-img-top img-fluid" src="img/dresses/wedding/w-dress-4.jpg" alt="Item-4">
                                <div class="item-content text-center">
                                    <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                </div>
                                <div class="shares-value">
                                    <span>-45%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="card">
                            <div class="item">
                                <img class="card-img-top img-fluid" src="img/corsets/corset-2.jpg" alt="Item-2">
                                <div class="item-content text-center">
                                    <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                </div>
                                <div class="shares-value">
                                    <span>-17%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="card">
                            <div class="item">
                                <img class="card-img-top img-fluid" src="img/gloves/gloves-1.jpg" alt="Item-1">
                                <div class="item-content text-center">
                                    <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                </div>
                                <div class="shares-value">
                                    <span>-35%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="card">
                            <div class="item">
                                <img class="card-img-top img-fluid" src="img/shoes/shoes-2.jpg" alt="Item-2">
                                <div class="item-content text-center">
                                    <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                </div>
                                <div class="shares-value">
                                    <span>-75%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="card">
                            <div class="item">
                                <img class="card-img-top img-fluid" src="img/shoes/shoes-3.jpg" alt="Item-3">
                                <div class="item-content text-center">
                                    <a class="read-more" href="javascript:void(0);">EDINBURG</a>
                                </div>
                                <div class="shares-value">
                                    <span>-50%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-5" id="about-us">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2>О нас</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/bmnHBLTnx60?list=PLJBFx2xjUauhwdim9AwFeV-Nzg_gEIv3o"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-7 m-auto">
                        <p>
                            Qisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip
                            ex ea commodo consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt
                            saepius claritas. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in
                            futurum.
                        </p>
                        <ul>
                            <li>Nam liber tempor cum soluta nobis eleifend option;</li>
                            <li>Option congue nihil imperdiet doming id quod mazim placerat facer;</li>
                            <li>Eodem modo typi, qui nunc nobis videntur parum futurum;</li>
                            <li>Investigationes demonstraverunt lectores</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="pb-5" id="section-brand">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>Наши портнеры</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-lg col-sm-6 m-auto pb-3">
                        <img class="img-fluid" src="img/brands/brand-1.gif" alt="brand-1">
                    </div>
                    <div class="col-lg col-sm-6 m-auto pb-3">
                        <img class="img-fluid" src="img/brands/brand-2.png" alt="brand-2">
                    </div>
                    <div class="col-lg col-sm-6 m-auto pb-3">
                        <img class="img-fluid" src="img/brands/brand-3.png" alt="brand-3">
                    </div>
                    <div class="col-lg col-sm-6 m-auto pb-3">
                        <img class="img-fluid" src="img/brands/brand-4.png" alt="brand-4">
                    </div>
                </div>
            </div>
        </div>

        <div id="contacts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col text-center">
                        <h2>Где мы находимся</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col px-0">
                        <div id="map">
                            <div id="info-window">
                                <h4>-Fashionbride-</h4>
                                <img class="img-fluid" src="img/info-window-img.jpg" alt="fashionbride">
                                <p>Добро пожаловать:)</p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col">-->
                    <!--<form action="javascript:void(0);" method="post">-->

                    <!--</form>-->
                    <!--</div>-->
                </div>
            </div>
        </div>

@stop