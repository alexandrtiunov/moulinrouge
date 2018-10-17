@extends('layouts.main')

@section('content')


    <!--start-carousel-block-->

    <div class="center">
        <div class="bx-wrapper" style="max-width: 1922px; margin: 0px auto;">
            <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 403px;">
                <ul class="bxslider"
                    style="width: 1215%; position: relative; transition-duration: 0s; transform: translate3d(-1547px, 0px, 0px);">
                    @foreach($products as $product)
                    <li style="float: left; list-style: none; position: relative; width: 312px; margin-right: 10px;">
                        <a href="svadebnye-platya/atelier-pronovias/index.html">
                            @foreach($resources as $resource)
                                @if($resource['product_id'] == $product['id'])
                                    <img src="../img/product/preview/{{$product['name']}}_{{$product['article']}}/322x405/{{$resource->img_preview_H405_path}}"
                                    alt="{{$product->name}} | Moulin Rouge" title="{{$product->name}}">
                                @endif
                            @endforeach
                            <span>{{$product->name}}</span>
                        </a>
                    </li>
                        @endforeach
                </ul>
            </div>
            <div class="bx-controls bx-has-controls-direction">
                <div class="bx-controls-direction">
                    <a class="bx-prev" href="">Prev</a>
                    <a class="bx-next disabled" href="">Next</a>
                </div>
            </div>
        </div>
    </div>

    <!--end-carousel-block-->

    <!--noindex-->
    <a class="button_fitting js_button_fitting" href="index.html#">
        <span></span>
        <div class="text_button">Записаться на примерку</div>
    </a>
    <!--/noindex-->
    <div class="holder-box">

        <!--start-holder-box-->

        <div class="main-box">
            {{--<iframe width="560" height="200" src="https://www.youtube.com/embed?listType=playlist&list=PLJBFx2xjUauhwdim9AwFeV-Nzg_gEIv3o&wmode=opaque&amp;autoplay=1&amp;controls=1&amp;rel=0&amp;showinfo=0&loop=1&mute=1" allowfullscreen id="video_main"></iframe>--}}
        </div>
        <!--<div href="#" class="box box_discounts">
    <a href="skidki/"><img src="/images/maket1234.jpg" style="width: 100%;" alt="Акция №1 здесь может быть длинное название | Fashion Bride" title="Акция №1 здесь может быть длинное название" /></a>
    <div class="discounts">
        <strong>-30%</strong>
                <span>на все платья pronovias</span>
                <em>с 12 по 18 ноября</em>
    </div>
    <div class="title">
        <a href="skidki/">Посмотреть все акции</a>
    </div>
</div>-->
        <div class="box box_discounts">
            <a href="o-nas/sobytie/skidki-do-50-sale-pronovias-v-svadebnyh-salonah/index.html"
               alt="28 fduecnf crblrf - 50% на 2 коллекции DOMINISS | Fasion
                Bride" title="DOMINISS Trunk-Show в Киеве 24-27.05.2017"></a>
            <img src="assets/images/pronovias_ukraine_sale.jpg">
            <div class="discounts">
                <div class="red_italic"><strong><span class="font_30"></span>
                    </strong></div>
                <span class="font_italic"></span>
            </div>
            <div class="title">
                <a href="skidki/index.html"></a>
            </div>
        </div>
        <a href="o-nas/nashi-vypusknicy/index.html" class="box">
            <img src="assets/cache/images/2504f2f11fc5e609903fa1d044846288.jpg" alt="Наши выпускницы | Fashion Bride" title="Наши выпускницы"/>
            <div class="title">
                <span>Наши выпускницы</span>
            </div>
        </a><a href="o-nas/nevesty-v-nashih-plyatyah/index.html" class="box">
            <img src="assets/cache/images/dda80b26896035cb279763c55fc3992d.jpg" alt="Наши невесты | Fashion Bride" title="Наши невесты"/>
            <div class="title">
                <span>Наши невесты</span>
            </div>
        </a>
        <div class="box box_t-b">
            <a href="o-nas/sobytie/dominiss-ukrainskij-brend-kotoryj-pokoril-milan/index.html" class="top">
                <img src="assets/cache/images/616ac2de4b2798bc97de0cf56a2278c6.jpg" alt="DOMINISS – украинский бренд, который покорил Милан | Fashion Bride" title="DOMINISS – украинский бренд, который покорил Милан"/>
                <div class="title">
                    <span>DOMINISS – украинский бренд, который покорил Милан</span>
                </div>
            </a>
            <div class="bottom">
                <img src="images/img12.jpg" alt="images"/>
                <a href="index.html#" class="sign_up js_button_fitting"><span>записаться на примерку</span></a>
            </div>
        </div>
    </div><!--end-holder-box-->
    <div class="about-salon"><!--start-about-salon-->
        <div class="left">
            <div class="alignleft">
                <img src="images/img13.jpg" alt="images"/>
            </div>
            <div class="alignright">
                <span>Наша история</span>
                <p>Шесть лет назад в самом центре Харькова был открыт эксклюзивный свадебный салон Fashion Bride, который представил невестам широкий ассортимент свaдебных и вечерних платьев известных мировых брендов.</p>
                <a class="more" href="o-nas/nasha-istoriya/index.html">подробнее</a>
            </div>
        </div>
        <div class="right">
            <span>Алиса:</span>
            <p>Покупала платье в городе Киеве)
                Помогала мне в этом милая и миниатюрная девушка,Светлана )
                Именно первое платье,которое она предложила-стало именно тем платьем,от которого дыхание перекрыло!) моё моё и ещё раз моё)
                Спасибо огромное!)</p>
            <a href="o-nas/otzyvy1/index.html">Читать все отзывы</a>
        </div>
    </div><!--end-about-salon-->
    <div class="block_blog"><!--start-block_blog-->
        <!--start-block_blog-->
        <div class="heading">
            <span>блог</span>
        </div>
        <div class="colums">
            <a href="o-nas/blog/bridal_story_dumrovsky_fashion_night_26_08_2018/index.html" class="colum">
                <img src="assets/cache/images/9b1d23cf16d48ced021a8c5eedf2bd5e.jpg" alt="Участие Bridal Story в показе 'Dubrovsky Fashion Night' 26.08.2018 | Fashion Bride" title="Участие Bridal Story в показе "Dubrovsky Fashion Night" 26.08.2018"/>
                <strong>Участие Bridal Story в показе "Dubrovsky Fashion Night" 26.08.2018</strong>
                <p></p>
            </a><a href="o-nas/blog/miss_ukraine_2019/index.html" class="colum">
                <img src="assets/cache/images/6a36070e561426871c284a7618991cd0.jpg" alt="Ми стали частиною грандіозної події «Міс Україна 2018» | Fashion Bride" title="Ми стали частиною грандіозної події «Міс Україна 2018»"/>
                <strong>Ми стали частиною грандіозної події «Міс Україна 2018»</strong>
                <p></p>
            </a><a href="o-nas/blog/generalnoe-sponsorstvo-filma-pod-otkrytym-nebom/index.html" class="colum">
                <img src="assets/cache/images/158b12b7ec934ba2e47a86d3380c0cb5.jpg" alt="Генеральное спонсорство фильма под открытым небом. | Fashion Bride" title="Генеральное спонсорство фильма под открытым небом."/>
                <strong>Генеральное спонсорство фильма под открытым небом.</strong>
                <p></p>
            </a>
        </div>
        <div class="more-article">
            <a href="o-nas/blog/index.html">читать все статьи</a>
        </div>
        <div class="text-main text_color_font">
            <h3 class="text_center" style="text-align: center;"><span style="font-size: 160%;">Свадебные салоны Fashion Bride в Харькове, Киеве, Днепре, Одессе, Запорожье</span></h3>
            <p>Свадебные салоны &laquo;Fashion Bride&raquo; представляют Вашему вниманию изысканные вечерние, выпускные и свадебные платья от всемирно известных испанских, американских брендов.</p>
            <p>В сети наших салонов представлены свадебные, вечерние и выпускные платья, которые, несомненно, будут самым важным украшением в самый ответственный для Вас день. На нашем сайте вы можете просмотреть каталог свадебных платье, в котором представлены самые изысканные и неповторимые платья от ведущих брендов из Испании, Америки и Украины: PRONOVIAS, SAN PATRICK, W 1, ATALIER DIAGONAL, ENZOANI, BLUE BY ENZOANI, DOMINISS. Также на сайте представлены выпускные и вечерние платья от таких известных испанских и американских брендов, как FIESTA - PRONOVIAS, IT.S MY PARTY - SAN PATRICK, LOVE, JOVANI, TARIK EDIZ, TONY BOWLS.</p>
            <p>Изысканные <a href="svadebnye-platya/index.html" title="Свадебные платья в Харькове">свадебные платья</a>, фото которых представлены на нашем сайте, не оставят равнодушной ни одну представительницу женского пола. Увидеть платья в живую, оценить их материал, качество кроя можно посетив наш свадебный салон &laquo;Fashion Bride&raquo;, который расположен в центре Харькова на улице Сумской, 24, в центре Днепра на проспекте Гагарина, 123 и в центре Запорожья на проспекте Ленина, 186, в Одессе на улице Греческой, 12 и в Киеве. В наших салонах есть VIP - зал, в котором вы без лишних глаз и спешки можете примерить все понравившиеся варианты платьев и выбрать самый лучший. Стилисты - консультанты &nbsp;нашего салона уделят Вам максимум внимания и помогут подобрать платье, которое скроет все недостатки и акцентирует внимание окружающих на Ваших достоинствах. Кроме того, у нас имеется огромный ассортимент аксессуаров &mdash; фаты, перчатки, обувь, диадемы, бижутерия &mdash; которые помогут подчеркнуть уникальность, неповторимость и чувство вкуса каждой невесты.</p>
            <p>Мы всегда рады предоставить нашим клиентам скидки на все брендовые платья из прошлых коллекций. В нашем салоне вы можете приобрести свадебные, вечерние и выпускные платья своей мечты .</p>
            <p>Подарите себе неповторимый праздник с платьями от &laquo;Fashion Bride&raquo;!</p>
        </div>
        <div class="slider-partners block_blog">
            <div class="heading">
                <span>Партнеры</span>
            </div>
            <ul class="bxslider_partners">
                <li><img src="images/partners_01.jpg" alt="images"/></li>
                <li><img src="images/partners_02.jpg" alt="images"/></li>
                <li><img src="images/partners_03.jpg" alt="images"/></li>
                <li><img src="images/partners_04.jpg" alt="images"/></li>
                <!--<li><img src="images/partners_05.jpg" alt="images"/></li>-->
                <li><img src="images/partners.jpg" alt="images"/></li>
            </ul>
        </div>
    </div>

    <!--end-block_blog-->

    <div class="h_footer"></div>
    </div>
    <footer id="footer" class="shadow">


    @stop