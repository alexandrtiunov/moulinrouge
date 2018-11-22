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
                                Sed ac neque massa cursus odio tincidunt volutpat, nibh quisque dapibus ad velit per aliquet taciti, porttitor integer nam condimentum sed curabitur tempus odio ultricies vestibulum
                            </p>
                            <h3 class="heading-left-custom">
                                Адрес
                            </h3>
                            <ul class="contact-info">
                                <li>132 Jefferson Avenue, Suite 22,Redwood City, CA 94872, USA</li>
                                <li>(00) 123 456 789</li>
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
                                            <input type="text" name="name" value="" size="40" class="wpcf7-form-control" placeholder="Name:"/>
                                        </div>
                                        <div class="wpcf7-form-control-wrap email">
                                            <input type="email" name="email" value="" size="40" class="wpcf7-form-control" placeholder="Email:"/>
                                        </div>
                                        <div class="wpcf7-form-control-wrap message">
                                            <textarea name="message" cols="40" rows="10" class="wpcf7-form-control" placeholder="Message"></textarea>
                                        </div>
                                        <div class="wpcf7-form-control-wrap">
                                            <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h3 class="heading-left-custom">Мы на карте</h3>
                            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6304.829986131271!2d-122.4746968033092!3d37.80374752160443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey+Ave%2C+San+Francisco%2C+CA+94129!5e0!3m2!1sen!2sus!4v1435826432051" width="600" height="420" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop