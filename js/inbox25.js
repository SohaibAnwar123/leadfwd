$(document).ready(function($) {

    $('.stories__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        focusOnSelect: true,
        prevArrow: "<",
        nextArrow: ">",
        mobileFirst: true,
        cssEase: 'linear',
        adaptiveHeight: true,
    });


    $('.p11-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        focusOnSelect: true,
        arrows: false,
        mobileFirst: true,
        cssEase: 'linear'
    });

    $('a[data-slide]').click(function(e) {
        e.preventDefault();
        var slideno = $(this).data('slide');
        $('.p11-slider').slick('slickGoTo', slideno - 1);
        $('.active-tab').removeClass('active-tab');
        $(this).addClass('active-tab');
    });


    $('.p11-slider').on('swipe', function(event, slick, direction) {
        var currentSlide = $('.p11-slider').slick('slickCurrentSlide');
    });


    $('.p11-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        var currentSlide = $('.p11-slider').slick('slickCurrentSlide');
        const NodeList = document.querySelectorAll(".slider__link");
    });

    $('.partner-nav').children('li').on('click', function() {
        $('.partner-nav').children('li').removeClass('active');
        $(this).addClass('active');
        var target = $(this).attr('data-target');
        $('ul.partner-content:not(.partner-content[data-target="'+target+'"])').slideUp();
        $('ul.partner-content[data-target="'+target+'"]').slideDown();
    });

    // In automation.php file:
    $('.presentation-19').find('li').on('click', function() {
        $('.presentation-19').find('li').removeClass('active');
        $(this).addClass('active');
        var target = $(this).attr('data-target');
        $('ul.team-table').slideUp();
        $('ul.team-table[data-target="'+target+'"]').slideDown();
    });

    $('#resource-show-more').on('click', function() {
        $('.resource-hidden').removeClass('resource-hidden');
        $(this).hide();
    });

    $('#expand-navbar').on('click', function() {
        $('.navbar__overlay').toggle();
        $(this).toggleClass('active-link');
    });

    // Rows have equal height in table
    $('.startup-table').find('tr:not(.title-top, .professional)').css('height', calculateRowHeight());

    $('html').on('click', function(event) {
        var menuOpen = $('.navbar__overlay').is(':visible');
        if(!$(event.target).closest('.navbar__overlay').length & !$(event.target).is('#expand-navbar')) {
            if (menuOpen) {
                $('.navbar__overlay').hide();
                $('.active-link').removeClass('active-link');
            }
        }
    });

    if (document.getElementById('header-video') !== null) {
        document.getElementById('header-video').play();
    }
    $(".play_video").click(function(e) {
        var selection = $(this).attr("data-selection");
        $("#vdc").attr("src",selection+"?theme=light&amp;autoplay=1&amp;modestbranding=1&amp;rel=0");
        calculateVideoScreenSize();
        //mobileMenu.close();
        $('#video_modal').show();
    });
    $(".video-modal-close").click(function(e) {
        $(this).siblings("iframe").attr("src","");
        $('#video_modal').hide();
    });
    $('.request_demo').on('click', function() {
        //mobileMenu.close();
    });
    $('.year').on('click', function(event) {
        var target = $(this).attr('data-target');
        $('html, body').animate({
            scrollTop: $(target).offset().top - 100
        }, 500);
    });
    $('.main-header').find('.btn').on('click', function() {
        var target = $(this).attr('data-target');
        console.log(target);
        if (target == '') {
            return;
        }
        $('html, body').animate({
            scrollTop: $(target).offset().top - 100
        }, 500);
    });
});

function calculateVideoScreenSize() {
    var w = $(window), d = $(document);
    var winH = w.height(), winW = w.width();
    $("#video_modal .modal-dialog, #video_modal #vdc").height(winH);
    $("#video_modal .modal-dialog, #video_modal #vdc").width(winW);
    $("#vdc").width(winW);
    $("#vdc").height(winH);
}

function calculateRowHeight() {
    var rowHeight = 0;
    $('.startup-table').find('tr:not(.title-top, .professional)').each(function() {
        var height = parseInt($(this).css('height'));
        if (height > rowHeight) {
            rowHeight = height;
        }
    });
    return rowHeight;
}

function sendEmail() {
    var valE = $('#vision-email').val();
    var valH = $('#vision-csrf').val();
    $.ajax({
        url : '/vision/insights_process.php',
        method : 'POST',
        data : 'vision_email=' + encodeURIComponent(valE) + '&vision_hdn=' + valH,
        success: function(response) {
            if (response=='') {
                // alert('It worked!');
                $('#vision-email').removeClass('error-vision');
                greenCheckSuccess();
            } else {
                // alert(response);
                $('#vision-email').addClass('error-vision');
            }
        },
        error: function(response) {
            // alert('It failed');
            $('#vision-email').addClass('error-vision');
        }
    });
}

function greenCheckSuccess() {
    var top = $('.presentation-27-new__submit').position().top;
    var left = $('.presentation-27-new__submit').position().left;
    var width = $('.presentation-27-new__submit').css('width');
    var height = $('.presentation-27-new__submit').css('height');
    // $('.presentation-27-new__submit').hide();
    $('.success-vision').css({
        'top' : top,
        'left' : left,
        'width' : width,
        'height' : height,
    });
    $('.success-vision').show();
}
