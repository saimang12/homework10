$(function () {


    $('.header .h_icon i').on('click', function () {
        $('.header .gnb_bar').toggleClass('on')
    })

    $('.header .gnb>ul>li>a').on('click', function () {
        $(this).siblings().toggleClass('on')
    })








    $('.mainVisual .main_slide').slick({
        arrows: false,
        dots: true,
        autoplay: true,
    });



    $('.storeInfo .store_slide').slick({
        slidesToShow: 4,
        arrows: false,
        responsive: [
            {
                breakpoint: 768, // 화면의 넓이가 768px 이하일 때
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480, // 화면의 넓이가 768px 이하일 때
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]

    });





    $('.storeInfo  .xi-angle-left').on('click', function () {
        $('.storeInfo .store_slide').slick('slickPrev')
    });

    $('.storeInfo  .xi-angle-right').on('click', function () {
        $('.storeInfo .store_slide').slick('slickNext')
    });



    $(window).on('scroll', function () {
        const sct = $(window).scrollTop()
        if (sct > 500) {
            $('.toTop').fadeIn();
        } else {
            $('.toTop').fadeOut();
        }
    });

    $('.toTop i').on('click', function () {
        $('html, body').animate({ scrollTop: 0 })
    });










})