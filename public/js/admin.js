$('document').ready(function () {

    // открывает модальное окно по тегу "а"
    $('a[data-toggle="modal"]').on('hidden', function () {
        $(this).data('modal').$element.removeData();
    });

    // дублирует input название товара в input short_name, меняет пробелы на нижне подчеркивание "_" (для создания товара, категории, коллекции)
    $('#name').on('keyup', function () {
        var productName = $(this).val();
       $('#short_name').val(productName.replace(/ /g, "_").toLowerCase()).liTranslit();
    });

    // дублирует input название товара в input short_name, меняет пробелы на нижне подчеркивание "_" (для обновления товара)
    $('.nameEdit').on('keyup', function () {
        var productName = $(this).val();
        $('.short_nameEdit').val(productName.replace(/ /g, "_").toLowerCase()).liTranslit();
    });

    // дублирует input название товара в input short_name, меняет пробелы на нижне подчеркивание "_" (для обновления категории)
    $('.category-name').on('keyup', function () {
        var productName = $(this).val();
        $('.category-short_name').val(productName.replace(/ /g, "_").toLowerCase()).liTranslit();
    });

    // дублирует input название коллекции в input short_name, меняет пробелы на нижне подчеркивание "_" (для добавления колекции)
    $('.name-col').on('keyup', function () {
        var productName = $(this).val().replace(/ /g, "_").toLowerCase();
        $('.short-name-col').val(productName).liTranslit();
        $('.year-col').keyup(function () {
            var year = $(this).val();  // получаем данные из поля year
            $('.short-name-col').val(productName + '_' + year); // добавляем к названию коллекции год
        });
    });

    // меняетт css кнопки на видимо в модальном окне загрузки/удалении фото
    $('.choosePhoto').on('click', function (e) {
        var targetValues=$('input:checkbox:checked').map(function() {
            return this.value;
        }).get(); // в массив записуем все value отмеченых checkbox фото
        if(e.target.checked === true || targetValues.length >= 1){  // Если отмечено >= 1 checkbox кнопка удаления остается активной
            $('.btn.btn-outline-danger').css('display', 'block');
        }else if(e.target.checked === false){ // Если checkbox не отмечены, кнопка скрывается
            $('.btn.btn-outline-danger').css('display', 'none');
        }

    });

    // при создании, обновлении товара, создании/обновлении скидки, добавлении/удалении фото
    // спрашивает подтверждение
    $('.btn.btn-primary, .btn-outline-danger').on('click', function () {
            if (confirm('Вы подтверждаете действие?')){
                submit();
            }else{
                 return false;
            }
    });
    // при удалении категории спрашивает подтверждение
    $('.delete').on('click', function () {
        if (confirm('Вы подтверждаете действие?')){
            submit();
        }else{
            return false;
        }
    });

    // input ввод цены - разрешено вводить только цифры и точку
    $('.price.form-control').bind("change keyup input click", function() {
        if (this.value.match(/[^0-9\.]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
    });

    // по клику на фото открывается оригинал фото
    $('.image').click(function () {
        var img = $(this);
        var src = img.attr('data-full'); // в data-full прописан путь к оригиналу
        $(".modal.fade.in").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
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

    $('.atribut').on('click', function(){
        $('.note').css('display', 'block');
    });

    // меняет курсор
    $('.choose').css( 'cursor', 'pointer' );
    // при клике отрывает checkbox для выбора на удаление
    $('.choose').on('click', function (e) {
        e.preventDefault();

        $('.checkPhoto').css('display', 'block');
    });

    // форма поиска при нажатии кнопки "Поиск"
    $('.search-pr').on('submit', function (e) {
        e.preventDefault();
        var form = $(this);
        var data = form.serialize();

        $.ajax({
            url: form.attr('action'),
            method: 'GET',
            data: data,
            success: function (response) {
                console.log(response);
                var new_blog = $(response).find('.product-table.table.table-bordered').html();
                $('.product-table.table.table-bordered').html(new_blog);

            }
        });
    });

    // простой фильтр по атрибуту товара
    // при выборе какого-либо атрибута отображает только его
    $("input:radio[name='selectAtribut']").on('change', function () {
        var selAtr = $(this).val(); // значение выбраного атрибута
        var atrProduct = $('.atribut-product'); //получаем массив с имеющимися атрибутами в таблице товаров

        // перебирием массив атрибутов
        for(var i = 0; i < atrProduct.length; i++) {

            if(selAtr === "Нет в наличии"){
                var atrName = atrProduct[i].innerText;
            }else{
                var atrName = atrProduct[i].innerText.replace(/ /g, "\.");
            }

            var tr = $('.atribut-table-product.' + atrName); // в переменную записываем название класса тега "tr"

            // Если значение выбранного атрибута не совпадает со значение атрибута из таблицы, строка с товаром
            // скрывается оставляя только товары, которые совпали
            if(selAtr !== atrName){
                tr.hide();
            }
        }
        // при повторном выборе другого селектора скрытно происходит сброс предыдущего нажатия и выбирается новое
        $("input:radio[name='selectAtribut']").on('change', function () {
            $('.atribut-table-product').show();

            var selAtr = $(this).val();
            var atrProduct = $('.atribut-product');

            for(var i = 0; i < atrProduct.length; i++) {

                if(selAtr === "Нет в наличии"){
                    var atrName = atrProduct[i].innerText;
                }else{
                    var atrName = atrProduct[i].innerText.replace(/ /g, "\.");
                }

                var tr = $('.atribut-table-product.' + atrName);

                if(selAtr !== atrName){
                    tr.hide();
                }
            }
        });
    });

    // кнопка сбросить, возвращает все элементы
    $('.reset-select').on('click', function () {
        $('.atribut-table-product').fadeIn(500);
    });

    // текстовый редактор
    $('.article-text, .feedback-text, .edit-article-text').markItUp(mySettings);


    // по клику на кнопку удаления/неактивности категории, если к категории привязаны какие-либо товары
    // всплывает уведомление о невозможности произвести действие
    $('.no-delete').click(function (e) {
        e.preventDefault();
        var comparison = $(this).attr('data-toggle'); //
        var arr = $('.no-delete-text');

        for (var i = 0; i <= arr.length; i++){

            var className = arr[i];
            var compartionText = $(arr[i]).attr('data-toggle');
            if (comparison === compartionText){
                $(className).show();
            }
        }
        // нажатие на уведомление, закрывает его
        $(arr).click(function () {
            arr.hide();
        });
    });

    // // Меняет в тексте блога &lt на < и &gt на >, для выделения текста и т.д
    // $('.entry-content').each(function(){
    //     var $this = $(this);
    //     var t = $this.text();
    //     $this.html(t.replace('&lt','<').replace('&gt', '>'));
    // });

});