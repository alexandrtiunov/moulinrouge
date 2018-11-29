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
                        <div class="col-sm-6">
                            <h3 class="heading-left-custom">
                                СВЯЗАТЬСЯ С НАМИ
                            </h3>
                            <p>
                                Свадебный салон в Краматорске Moulin Rouge <br>
                                Если вы ищете изысканное, элегантное и стильное свадебное платье, добро пожаловать в наш свадебный салон в Краматорске! Мы предлагаем широкий ассортимент модных моделей от известных мировых брендов: Dominiss в которых каждая невеста будет выглядеть неотразимо.<br>

                                Посетите наш свадебный салон в Краматорске – выберите красивое и стильное платье для самого счастливого дня в своей жизни!
                            </p>
                            <h3 class="heading-left-custom">
                                Адрес
                            </h3>
                            <ul class="contact-info">
                                <li>ул. Парковая, 20, город Краматорск, 84300, Украина</li>
                                <li>+38 (095) 602-58-45</li>
                                <li><a href="mailto:email@domain.com">email@domain.com</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h3 class="heading-left-custom">
                                Отправить сообщение
                            </h3>
                            <div class="row row-fluid">
                                <div class="col-sm-12">
                                    <form action="" method="post">
                                        <div class="wpcf7-form-control-wrap name">
                                            <input type="text" name="name" value="" size="40" class="wpcf7-form-control" placeholder="Имя:"/>
                                        </div>
                                        <div class="wpcf7-form-control-wrap email">
                                            <input type="email" name="email" value="" size="40" class="wpcf7-form-control" placeholder="Email:"/>
                                        </div>
                                        <div class="wpcf7-form-control-wrap message">
                                            <textarea name="message" cols="40" rows="10" class="wpcf7-form-control" placeholder="Сообщение"></textarea>
                                        </div>
                                        <div class="wpcf7-form-control-wrap">
                                            <input type="submit" value="Отправить" class="wpcf7-form-control wpcf7-submit"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h3 class="heading-left-custom">Мы на карте</h3>
                            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d657.9711249836631!2d37.59642159194796!3d48.72679859182709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40df96f853058d61%3A0x5167ce7f146d462a!2z0YPQuy4g0J_QsNGA0LrQvtCy0LDRjywgMjAsINCa0YDQsNC80LDRgtC-0YDRgdC6LCDQlNC-0L3QtdGG0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA4NDMwMA!5e0!3m2!1sru!2sua!4v1543392046698" width="600" height="420" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop