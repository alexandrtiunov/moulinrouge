jQuery('document').ready(function () {

    // Добавление в примерочную товара
    //При клике на кнопку, в куки записывается имя товара и отправляется в контроллер
    //В контроллере из куки получаем имя продукта и делаем выборку из БД
    $('a.add_to_cart_button').click(function (e) {

        e.preventDefault();
        var name = $(this).attr('data-toggle'); // получаем имя продукта
        var data = $('.product.' + name); // получаем блок с товаром
        var url = $(this).attr('href'); // получаем ссылку

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

       $.cookie("product" + productName, null, {path: '/', expires: -1});

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

    $('#fitting').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipient = button.data('whatever');
        console.log(recipient);
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

});//end ready