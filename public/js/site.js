jQuery('document').ready(function () {

    // Добавление в примерочную товара
    //При клике на кнопку, в куки записывается имя товара и отправляется в контроллер
    //В контроллере из куки получаем имя продукта и делаем выборку из БД
    $('a.add_to_fitting_button').click(function (e) {
        e.preventDefault();
        var name = $(this).attr('data-toggle'); // получаем имя продукта
        var data = $('.product.' + name); // получаем блок с товаром
        var url = $(this).attr('href'); // получаем ссылку

        $.cookie("fitting" + name, name, {path: '/' })  ; // записываем в куки имя товара

        // отправляем аяксом на полученную ссылку
        $.ajax({
            url: url,
            method: 'GET',
            data: data,
            success: function (response) {
                var new_blog = data.html();
                $(response).find('.main-content').html(new_blog); // при успешном запросе меняем верстку

                //Отправляем повторный запрос на количество товаров в корзине после добавления и меняем значение
                $.ajax({
                    url: url,
                    method: 'GET',
                    data: data,
                    success: function (response) {
                        var new_blog = $(response).find('.count-fitting').html();
                        $('.count-fitting').html(new_blog);
                    }
                });
            }
        });
    });
    // Добавление в корзину товара
    //При клике на кнопку, в куки записывается имя товара и отправляется в контроллер
    //В контроллере из куки получаем имя продукта и делаем выборку из БД
    $('a.add_to_cart_button').click(function (e) {
        e.preventDefault();
        var name = $(this).attr('data-toggle'); // получаем имя продукта
        var data = $('.product.' + name); // получаем блок с товаром
        var url = $(this).attr('href'); // получаем ссылку

        $.cookie("cart" + name, name, {path: '/' })  ; // записываем в куки имя товара

        // отправляем аяксом на полученную ссылку
        $.ajax({
            url: url,
            method: 'GET',
            data: data,
            success: function (response) {
                var new_blog = data.html();
                $(response).find('.main-content').html(new_blog); // при успешном запросе меняем верстку

                //Отправляем повторный запрос на количество товаров в корзине после добавления и меняем значение
                $.ajax({
                    url: url,
                    method: 'GET',
                    data: data,
                    success: function (response) {
                        var new_blog = $(response).find('.count-cart').html();
                        $('.count-cart').html(new_blog);
                    }
                });
            }
        });
    });

    /*В примерочной при нажатии на удаление добавленного товара, происходит удаление из куки имя товара
    * и удаляется блок html из верстки
    * */
    $('a.remove-fitting').click(function (e) {
       e.preventDefault();
       var name = $(this).attr('data-toggle');
       var url = $(this).attr('href');
       var productName = $(this).attr('data-toggle');
       var cart = $('.count-fitting');

       $.cookie("fitting" + productName, null, {path: '/', expires: -1});

        $.ajax({
            url: url,
            method: 'GET',
            data: cart,
            success: function (response) {
                $('.fitting_item.' + name).remove();
            },
            complete: function (response) {
                //Отправляем повторный запрос на количество товаров в корзине после удаления и меняем значение
                $.ajax({
                    url: url,
                    method: 'GET',
                    data: cart,
                    success: function (response) {
                        var new_blog = $(response).find('.count-fitting').html();
                        $('.count-fitting').html(new_blog);
                        if(new_blog === "0"){
                            var empty = $(response).find('.commerce.empty').html();
                            $('.commerce').html(empty);
                        }
                    }
                });
            }
        });
    });

    // после отпраки формы записи на примерку, удаляет куки товара
    $('.fit-sbm').click(function () {
       var products = $('a.remove-fitting');
       for(var i = 0; i< products.length; i++){
           console.log(products[i].getAttribute('data-toggle'));
           var productName = products[i].getAttribute('data-toggle');

           $.cookie("fitting" + productName, null, {path: '/', expires: -1});
       }
    });
    // после отпраки формы заказа из корзины, удаляет куки товара
    $('.cart-sbm').click(function () {
        var products = $('a.remove-cart');
        for(var i = 0; i< products.length; i++){
            console.log(products[i].getAttribute('data-toggle'));
            var productName = products[i].getAttribute('data-toggle');

            $.cookie("cart" + productName, null, {path: '/', expires: -1});
        }
    });

    /*В корзине при нажатии на удаление добавленного товара, происходит удаление из куки имя товара
     * и удаляется блок html из верстки
     * */
    $('a.remove-cart').click(function (e) {
        e.preventDefault();
        var name = $(this).attr('data-toggle');
        var url = $(this).attr('href');
        var productName = $(this).attr('data-toggle');
        var cart = $('.count-cart');

        $.cookie("cart" + productName, null, {path: '/', expires: -1});

        $.ajax({
            url: url,
            method: 'GET',
            data: cart,
            success: function (response) {
                $('.cart_item.' + name).remove();
            },
            complete: function (response) {
                //Отправляем повторный запрос на количество товаров в корзине после удаления и меняем значение
                $.ajax({
                    url: url,
                    method: 'GET',
                    data: cart,
                    success: function (response) {
                        var new_blog = $(response).find('.count-cart').html();
                        $('.count-cart').html(new_blog);
                        if(new_blog === "0"){
                            var empty = $(response).find('.commerce.empty').html();
                            $('.commerce').html(empty);
                        }
                    }
                });
            }
        });
    });

    // подсчитывает общую сумму товаров в корзине
    $(function () {
        var price = $('.amount-product');
        var qty = 1;
        console.log(qty);

        var total = 0;
        for(var i = 0; i < price.length; i++){
            var sum = qty * price[i].innerHTML;
            total += sum
        }
        console.log(total);
        $('.amount-total-products').html(total);
    });

    // // Корзина изменение общей стоимости товара и всех товаров при увеличении колличества
    // $('.input-text.qty').change(function (e) {
    //     var qty = $(this).val();
    //     var price = $('.amount-product');
    //     var url = $(this).attr('action');
    //
    //     var total = 0;
    //     for(var i = 0; i < price.length; i++){
    //         var sum = qty * price[i].innerHTML;
    //         total += sum
    //     }
    //     console.log(total);
    //     $('.amount-total-products').html(total);
    //
    //     $.ajax({
    //         url: url,
    //         method: 'GET',
    //         data: total,
    //         success: function (response) {
    //             // var new_blog = $(response).find('.amount-total-product').html();
    //             $('.amount-total-product').html(sum);
    //         }
    //
    //     });
    // });

    // На странице примерочной, при добавленных товарах в примерочную, после нажатия кнопки "записатся на примерку",
    // форма открывается уже со вписанными названиями товара
    $('#fitting').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipient = button.data('whatever');
        var modal = $(this);
        modal.find('.dress-name').text(recipient);
        modal.find('.modal-body .dress-name').val(recipient);
    });

    // input ввод имени - разрешено вводить только цифры и буквы и точку
    $('.name.form-control').bind("change keyup input click", function() {
        if (this.value.match(/[^A-Za-zА-Яа-я]/g)) {
            this.value = this.value.replace(/[^A-Za-zА-Яа-я]/g, '');
        }
    });
    // input ввод email - регулярное выражение
    $('.email.form-control').bind("change keyup input click", function() {
        if (this.value.match(/[^A-Za-z0-9@\.]/g)) {
            this.value = this.value.replace(/[^A-Za-z0-9@\.]/g, '');
        }
    });
    // input ввод email - регулярное выражение
    $('.phone.form-control').bind("change keyup input click", function() {
        if (this.value.match(/[^0-9-\(\)\.]/g)) {
            this.value = this.value.replace(/[^0-9-\(\)\.]/g, '');
        }
    });

    // Меняет в тексте блога &lt на < и &gt на >, для выделения текста и т.д
    $('.text, .text1, .testimonial-text').each(function(){
        var $this = $(this);
        var t = $this.text();
        $this.html(t.replace('&lt','<').replace('&gt', '>'));
    });

    // по клику на фото открывается оригинал фото
    $('.image').click(function () {
        var img = $(this);
        var src = img.attr('data-full'); // в data-full прописан путь к оригиналу
        $(".row-site").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
            "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
            "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
            "</div>");
        $(".popup").fadeIn(800);
        $(".popup_bg").click(function () {
            $('.popup').fadeOut(800);
            setTimeout(function () {
                $('.popup').remove()
            }, 800);
        });
    });

});//end ready