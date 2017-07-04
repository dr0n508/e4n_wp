$(document).ready(function() {


    //youtube

    $(function() {
        $(".youtube").each(function() {
            // Зная идентификатор видео на YouTube, легко можно найти его миниатюру
            $(this).css('background-image', 'url(http://i.ytimg.com/vi/' + this.id + '/sddefault.jpg)');

            // Добавляем иконку Play поверх миниатюры, чтобы было похоже на видеоплеер
            $(this).append($('<div/>', {'class': 'play'}));

            $(document).delegate('#'+this.id, 'click', function() {
                // создаем iframe со включенной опцией autoplay
                var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
                if ($(this).data('params')) iframe_url+='&'+$(this).data('params');

                // Высота и ширина iframe должны быть такими же, как и у родительского блока
                var iframe = $('<iframe/>', {'frameborder': '0', 'src': iframe_url, 'width': $(this).width(), 'height': $(this).height() })

                // Заменяем миниатюру HTML5 плеером с YouTube
                $(this).replaceWith(iframe);
            });
        });
    });



    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp', //  ID элемента
            topDistance: '300', // расстояние после которого появится кнопка (px)
            topSpeed: 500, // скорость переноса (миллисекунды)
            animation: 'fade', // вид анимации: fade, slide, none
            animationInSpeed: 200, // скорость разгона анимации (миллисекунды)
            animationOutSpeed: 200, // скорость торможения анимации (миллисекунды)
            scrollText: 'dfs', // текст
            scrollImg: true, // Set true to use image
            activeOverlay: false // задать CSS цвет активной точке scrollUp, например: '#00FFFF'
        });
    });

    // faq
    $(function(){
        $('.answer').hide();
        $('.question').click(function(){
            $(this).next().slideToggle('slow').addClass('active').siblings('.answer:visible').slideUp('slow');
        });
    });

    //хедер

    $(window).scroll(function() {
        if ($(this).scrollTop() > 10){
            $('.header-top').addClass("none");
        }
        else{
            $('.header-top').removeClass("none");
        }
    });

    // слайдер отзывы

    // var owl = $("#testimonials-carousel");
    //
    // owl.owlCarousel({
    //
    //     itemsCustom : [
    //         [0, 1],
    //         [450, 1],
    //         [600, 1],
    //         [700, 1],
    //         [1000, 1],
    //         [1200, 2],
    //         [1400, 2],
    //         [1600, 2]
    //     ],
    //     navigation : true
    //
    // });


    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    $('.carousel').carousel ({
        interval: isMobile.any() ? false : 5000
    });


    // учителя


    $('.wrap-teacher').hover(
        function() {
            $(this).children('.cv-teacher').stop(false,true).fadeIn(200); // Добавляем класс bounce

        },
        function() {
            $(this).children('.cv-teacher').stop(false,true).fadeOut(200); // Убираем класс

        }
    );
});




//blog same hight

maintainSameHeight($('[data-same-height="blog-info"]'));

function maintainSameHeight($list) {
    var height = 0;

    $list.each(function () {
        var $this = $(this);
        if ($this.outerHeight() > height) {
            height = $this.outerHeight();
        }
    });

    $list.css("height", height);
}



// закрепляем меню

$(document).ready(function(){

        var $menu = $(".navbar");

        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100){
                $menu.addClass("navbar-fixed-top");
            } else if($(this).scrollTop() <= 100) {
                $menu.removeClass("navbar-fixed-top");
            }
        });//scroll
    });

$('.form-contact').on('submit', function(){
    alert('Ваше сообщение отправлено.');
});

$('.free-call').on('submit', function(){
    alert('Cпасибо за обращение, наш менеджер в ближайшее время свяжется с вами.');
})

$('.form-free-lesson').on('submit', function(){
    alert('Спасибо за заявку, менеджеры в ближайшее время обработают ее и свяжутся с вами.');
});


