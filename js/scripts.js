

    




function preload(imgArray) {
    $(imgArray).each(function () {
        $('<img />').attr('src', this).appendTo('body').hide();
    });
}

/*
function prevNextCarousel(sz) {
    var n = 0;
    $('ul.guided-carousel-timeline li').each(function (index, value) {
        if (index>0 && index<(sz-1) && $(this).hasClass('active')) {
           n = index + 1;
        }
    });
    return n;
}


$(document).ready(function() {
    
    
    //preload images
    preload([
        'images/guided-carousel-screen-1.png',
        'images/guided-carousel-screen-2.png',
        'images/guided-carousel-screen-3.png',
        '../images/header-office.png'
    ]);
    
    

    // guided carousel timeline
    $('body').on('click', 'ul.guided-carousel-timeline li', function () {
        $('.guided-carousel-screen').fadeOut(1000);
        if ($(this).hasClass('gct-prev') || $(this).hasClass('gct-next')) {
            //
        } else {
            $('ul.guided-carousel-timeline li').removeClass('active');
            $(this).addClass('active');
            var idx = $(this).index() + 1;
            $('#gcs-' + idx).fadeIn(1000);
        }
    });
    
    //previous - next carousel elements
    var sz = $('ul.guided-carousel-timeline li').length;
    $('body').on('click', 'ul.guided-carousel-timeline li.gct-prev', function () {
        var carouselIndex = prevNextCarousel(sz) - 1;
        if (carouselIndex<2) { //it's the first li
           carouselIndex = sz - 1;
        }
        $('ul.guided-carousel-timeline li:nth-child(' + carouselIndex + ')').click();
    });
    $('body').on('click', 'ul.guided-carousel-timeline li.gct-next', function () {
        var carouselIndex = prevNextCarousel(sz) + 1;
        if (carouselIndex==sz) { //it's the last li
            carouselIndex = 2;
        }
        $('ul.guided-carousel-timeline li:nth-child(' + carouselIndex + ')').trigger('click');
    });

});
*/
