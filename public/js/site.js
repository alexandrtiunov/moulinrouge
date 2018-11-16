jQuery('document').ready(function () {

    // Добавление в примерочную товара
    //При клике на кнопку, в куки записывается имя товара и отправляется в контроллер
    //В контроллере из куки получаем имя продукта и делаем выборку из БД
    $('a.add_to_cart_button').click(function (e) {

        e.preventDefault();
        var name = $(this).attr('data-toggle'); // получаем имя продукта
        var data = $('.product.' + name); // получаем блок с товаром
        var url = $(this).attr('href'); // получаем ссылку

        // for(var i = 0; i < data.length; i++){
        //     console.log(data[i]);
        // }

        $.cookie("product" + name, name, {path: '/' })  ; // записываем в куки имя товара

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
                        var new_blog = $(response).find('.count').html();
                        $('.count').html(new_blog);
                    }
                });
            }
        });
    });

    /*В примерочной при нажатии на удаление добавленного товара, происходит удаление из куки имя товара
    * и удаляется блок html из верстки
    * */
    $('a.remove').click(function (e) {
       e.preventDefault();
       var name = $(this).attr('data-toggle');
       var url = $(this).attr('href');
       var productName = $(this).attr('data-toggle');
       var cart = $('.count');

       $.cookie("product" + productName, null, {expires: -1});

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
                        var new_blog = $(response).find('.count').html();
                        $('.count').html(new_blog);
                        if(new_blog === "0"){
                            var empty = $(response).find('.commerce.empty').html();
                            $('.commerce').html(empty);
                        }
                    }
                });
            }
        });
    });

});//end ready