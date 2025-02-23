
window.onload = function () {

    $("ul.v2-subnav li").click(function () {
        var i = $(this).index();
        $('.v2-side-bar-text, .v2-side-bar-graph li').hide();
        $('.v2-side-bar-text:nth-of-type(' + (i + 1) + '), .v2-side-bar-graph li:nth-of-type(' + (i + 1) + ')').fadeIn();
        $('.v2-subnav li').removeClass('on');
        $(this).addClass('on');
    });


    $("ul.v2-subnavsub li").click(function () {
        $('ul.v2-subnavsub li').removeClass('active');
        $(this).addClass('active');
        var i = $(this).index();
        $('.v2-sns-txt').hide();
        $('.v2-sns-txt:nth-of-type(' + (i + 1) + ')').fadeIn();
        $('.hasNav video').hide();
        $('.hasNav video:nth-of-type(' + (i + 1) + ')').fadeIn();

    });

    $("ul.v2-list1 li").click(function () {
        var i = $(this).index();
        $('.v2-ai-graph img').hide();
        $('.v2-ai-graph img:nth-of-type(' + (i + 1) + ')').fadeIn();
        $('.v2-list1 li').removeClass('on');
        $(this).addClass('on');
    });


    //Pricing modal
    $('body').on('click', '#see_pricing', function () {
        $(".modal-container-v2").fadeIn(300);
    });

    $('body').on('click', '.modal-close', function () {
        $(".modal-container-v2").fadeOut(300);
    });


    $('body').on('click', '.modal-nav li', function () {
        $(".modal-nav li").removeClass('on');
        $(this).addClass('on');
    });

    $('.modal-switch input').on('change', function () {
        $('.pro-monthly, .team-monthly').toggle();
        $('.pro-yearly, .team-yearly').toggle();
    });

    $('body').on('click', '.modal-tabs button', function () {
        $('.modal-tabs button').removeClass('active');
        $(this).addClass('active');
    });

    $('body').on('click', '.modal-tabs button', function () {
        $('.modal-tabs button').removeClass('active');
        $(this).addClass('active');
    });

    /*$('body').on('click', '.modal-tabs button.startup', function () {
        $('.modal-price .t2').hide();
        $('.modal-price .t2.startup').show();
    });*/

    $('body').on('click', '.modal-tabs button', function () {
        var i = $(this).index();
        $('.modal-price .t2').hide();
        $('.modal-price p span:nth-of-type(' + (i + 1) + ')').show();
        $('.modal-table').hide();
        $('.modal-table:nth-of-type(' + (i + 1) + ')').show();
    });

    //Pricing plans select
    $('body').on('click', '.pp-link', function () {
        $(this).addClass('hide');
        $(this).next('select').removeClass('hide');
    });
    $(document).mouseup(function (e) {
        var container = $("select.pp-select");
        // If the target of the click isn't the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('select.pp-select').addClass('hide');
            $('.pp-link').removeClass('hide');
        }
    });



    //Subrow open
    $('body').on('click', '.subrow-open', function () {
        $(this).parent().parent().next('dt').slideToggle(600);
        $(this).hide();
        $(this).next('a').fadeIn(200);
    });
    $('body').on('click', '.subrow-close', function () {
        $(this).parent().parent().next('dt').slideToggle(600);
        $(this).hide();
        $(this).parent().find('.subrow-open').fadeIn(200);
    });

    $('body').on('click', '.subrow-open.v2', function () {
        $(this).parent().parent().parent().next('dt').slideToggle(600);
        $(this).hide();
        $(this).next('a').fadeIn(200);
    });
    $('body').on('click', '.subrow-close.v2', function () {
        $(this).parent().parent().parent().next('dt').slideToggle(600);
        $(this).hide();
        $(this).parent().find('.subrow-open').fadeIn(200);
    });

    //FAQ
    $("ul.faq li a.toggle.open").click(function () {
        $('.faq-answers').slideUp(600);
        $('.close').hide();
        $('.open').show();
        $(this).parent().find('.faq-answers').slideDown(600);
        $(this).hide();
        $(this).next('a').show();
    });
    $("ul.faq li a.toggle.close").click(function () {
        $(this).parent().find('.faq-answers').slideUp(600);
        $(this).hide();
        $(this).prev('a').show();
    });

    //Sales outreach list
    $(".v2-g7-list li span").click(function () {
        $('.v2-g7-list li').removeClass('open');
        $(this).parent().toggleClass('open');
        var i = $(this).parent().index();
        $('.v2-g7-video video').hide();
        $('.v2-g7-video video:nth-of-type(' + (i + 1) + ')').fadeIn();
    });

    //list 7/8 
    $(".list-7 li").click(function () {
        $('.list-7 li').removeClass('active');
        $(this).addClass('active');
        var i = $(this).index();
        $('ul.list-8 li').hide();
        $('ul.list-8 li:nth-of-type(' + (i + 1) + ')').fadeIn();
    });

    //Lightbox
    $(".l8-lightbox-open").click(function () {
        $(this).parent().next('.lightbox').fadeIn(300).css("display", "flex");
        $(this).parent().next('.lightbox').find('video')[0].play();
    });
    $(".ht5-play").click(function () {
        $(this).parent().find('.lightbox').fadeIn(300).css("display", "flex");
        $(this).parent().find('.lightbox').find('video')[0].play();
    });

    $(".lightbox .close").click(function () {
        $(this).parent().fadeOut(300);
        $(this).parent().find('video')[0].pause();
    });

    AOS.init({
        once: true,
        duration: 300,
    });
}

$('.target_slider').slick({
    infinite: true,
    dots: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    fadeSpeed: 1000,

    nextArrow: '.slick-next',
    prevArrow: '.slick-prev',

    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 1,
            centerMode: false,
        }

    }, {
        breakpoint: 800,
        settings: {
            slidesToShow: 1,
        }
    }, {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }]
});

