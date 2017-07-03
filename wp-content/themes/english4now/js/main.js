$(document).ready(function() {

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


