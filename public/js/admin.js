$('document').ready(function () {

    // открывает модальное окно по тегу "а"
    $('a[data-toggle="modal"]').on('hidden', function () {
        $(this).data('modal').$element.removeData();
    });

    // дублирует input название товара в input short_name, меняет пробелы на нижне подчеркивание "_" (для создания товара)
    $('#name').on('keyup', function () {
        var productName = $(this).val();
       $('#short_name').val(productName.replace(/ /g, "_").toLowerCase()).liTranslit();
    });

    // дублирует input название товара в input short_name, меняет пробелы на нижне подчеркивание "_" (для обновления товара)
    $('#nameEdit').on('keyup', function () {
        var productName = $(this).val();
        $('#short_nameEdit').val(productName.replace(/ /g, "_").toLowerCase()).liTranslit();
    });

    // меняетт css кнопки на видимо в модальном окне загрузки/удалении фото
    $('.choosePhoto').on('click', function () {
        console.log($(this));
       $('.btn.btn-outline-danger').css('display', 'block');
    });

    // при создании, обновлении товара, создании/обновлении скидки, добавлении/удалении фото
    // спрашивает подтверждение
    $('.btn.btn-primary').on('click', function () {
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


});