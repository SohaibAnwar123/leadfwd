
var canvasPlayed = false;

function isMobile() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        return true;
    }

    return false;
}

function showAll() {
    $('.section-1 .container .col-lg-6.text-right').show();
    $('.section-1 .container .col-lg-6.text-left').show();
    $('.section-1 .container .col-lg-6 > div > div').css({opacity: 1});

    $('.content-section').each(function() {
        $(this).find('.container .col-lg-6.text-right').show();
        $(this).find('.container .col-lg-6.text-left').show();
        $(this).find('article').css({opacity: 1});
    });

    $('.image-content .carousel').show();
    $('.image-content').each(function() {
        $(this).find('.col-lg-7 .col-inner').show();
        $(this).find('.col-lg-5 .col-inner').show();
    });

    $('.section-5 .col-lg-4 .col-inner').show();

    $('.notebook-layer-elements').show();

    $('.reports-first-row').show();
}

function animateChart() {
    //console.log ( ($('.section-9').offset().top - $(window).scrollTop()) );
    if (($('.section-9').offset().top - $(window).scrollTop()) <= 400 && $('.reports-first-row').css('display') === 'none') {
        $('.reports-first-row').show('slide', {direction: 'right'});
    }
    
    if (($('.section-9').offset().top - $(window).scrollTop()) <= -200 && canvasPlayed === false) {
        canvasPlayed = true;
        playCanvas();
    }
}

function animateTimeline() {
    
    $('#content-circle-3').tooltip({
        container: 'body',
        placement: 'top',
        title: '<h2>1,829</h2><p>TARGETS MATCHED</p><i></i>',
        trigger: 'manual',
        html: true,
        template: '<div class="tooltip timeline-tooltip"><div class="tooltip-inner"></div><div class="tooltip-arrow"></div></div>'
    });
    
    $('.timeline-row').each(function() {
        var st = $(window).scrollTop();
        var topLine = st + (($(window).height() / 2) - 50);
        var bottomLine = topLine + 50;
        var rowOffsetTop = $(this).offset().top;
        var rowOffsetBottom = rowOffsetTop + $(this).height();
        if (bottomLine > rowOffsetTop && topLine < rowOffsetBottom) {
            $(this).find('span').css('color', '#ffa200');
            $(this).find('span').css('opacity', '1');
            $(this).find('img').attr('src', 'http://www.inbox25.com/images/old/timeline-left-icon-active.png');
            $(this).find('span').addClass('active');
            $($(this).attr('data-target')).css('background-color', '#ffa200');
            $($(this).attr('data-target')).addClass('active');

            if ( $(this).attr('data-target') === '#content-circle-3' ) {
                $('#content-circle-3').tooltip('show');
            }

        } else {
            $(this).find('span').css('color', '#fff');
            $(this).find('img').attr('src', 'http://www.inbox25.com/images/old/timeline-left-icon.png');
            $(this).find('span').removeClass('active');
            $($(this).attr('data-target')).css('background-color', '#94979a');
            $($(this).attr('data-target')).removeClass('active');
            
            
            if ( $(this).attr('data-target') === '#content-circle-3' ) {
                $('#content-circle-3').tooltip('hide');
            }
        }
    });
}

function showSectionContent() { 
    if ($(window).scrollTop() >= 50 && $('.section-1 .container .col-lg-6 > div > div').css('opacity') !== '1') {
        $('.section-1 .container .col-lg-6.text-right').show('slide', {direction: 'left'});
        $('.section-1 .container .col-lg-6.text-left').show('slide', {direction: 'right'});
        $('.section-1 .container .col-lg-6 > div > div').animate({opacity: 1}, 1000);
    }

    $('.content-section').each(function() {
        if (($(this).offset().top - $(window).scrollTop()) <= 400 && $(this).find('article.left-col').css('opacity') !== '1') {
            $(this).find('.container .col-lg-6.text-right').show('slide', {direction: 'down'});
            $(this).find('.container .col-lg-6.text-left').show('slide', {direction: 'up'});
            $(this).find('article').animate({opacity: 1}, 1);
        }
    });

    $('.image-content').each(function() {
        if (($(this).offset().top - $(window).scrollTop()) <= 400 && $(this).find('.col-lg-5 .col-inner').css('display') === 'none') {
            $('.image-content .carousel').show();
            $(this).find('.col-lg-7 .col-inner').show('slide', {direction: 'right'}, 600);
            $(this).find('.col-lg-5 .col-inner').show('slide', {direction: 'left'}, 600);
            //$(this).find('article').animate({opacity: 1}, 1);
        }
    });

    if (($('.section-3').offset().top - $(window).scrollTop()) <= 400 && $('.notebook-layer-elements').css('display') === 'none') {
        $('.notebook-layer-elements').fadeIn(2000);
    }

    if (($('.section-5').offset().top - $(window).scrollTop()) <= 400 && $('.section-5 .col-lg-4 .col-inner').css('display') === 'none') {
        $('.section-5 .col-lg-4 .col-inner').show('slide', {direction: 'left'});
    }
}

function init() {
    $('header p').show('slide', {direction: "left"}, 500, function() {
        $('header h1').show('slide', {direction: "left"}, 500, function() {
            $('header h2').show('slide', {direction: "left"}, 500, function() {
                $('.watch-video').animate({opacity: 1});
            });
        });
    });

    if (!isMobile()) {
        //showSectionContent();
    } else {
        showAll();
    }
}

function initListeners() {

    $(window).scroll(function() {
        if (!isMobile()) {
            showSectionContent();
        }

        animateTimeline();

        animateChart();
    });
}

function initCanvas() {
//    playCanvas();
    $(window).resize(respondCanvas);

//    var c = $('#canvas');
//
//    var container = c.parent();

    function respondCanvas() {
//        c.attr('width', $(container).width()); //max width
//        c.attr('height', $(container).height() - 50); //max height
        if (canvasPlayed === true) {
            playCanvas();
        }
        //Call a function to redraw other content (texts, images etc)
    }

    //respondCanvas();
}

function playCanvas() {

    $($("#canvas svg circle").get(2)).tooltip('hide');
    $($("#canvas svg circle").get(4)).tooltip('hide');

    $('#canvas').empty();

    var canvas = Raphael('canvas');

    var canvasWidth = $('#canvas').width();

    var points = [];

    var divider = 7.6;

    if ($(window).width() <= 980)
        divider = 8;

    if ($(window).width() <= 590)
        divider = 8.5;

    if ($(window).width() <= 402)
        divider = 8.8;

    var pointsY = [
        {y: 150, label: '0'},
        {y: 200, label: '10'},
        {y: 130, label: '20'},
        {y: 135, label: '40'},
        {y: 60, label: '50'},
        {y: 132, label: '65'},
        {y: 230, label: '99'}
    ];

    for (var i = 0; i < 7; i++) {
//        console.log(canvasWidth/7.5);
        points.push({
            x: ((i + 1) * (canvasWidth / divider)) + 50,
            y: pointsY[i].y,
            label: pointsY[i].label
        });
    }

    var currentPoint = 0;

    canvas.clear();

    var drawCircle = function(canvas, colorNumber, x, y) {
        var circle = canvas.circle(x, y, 10);
        // Sets the fill attribute of the circle to red (#f00)
        circle.attr("stroke-width", 7);
        circle.attr("fill", '#232528');
        // Sets the stroke attribute of the circle to white
        circle.attr("stroke", colorNumber);
        return circle;
    };
    var animateLine = function(canvas, colorNumber) {
        var x = points[currentPoint].x;
        var y = points[currentPoint].y;
        var prevX = 50;
        var prevY = 240;
        if (currentPoint > 0) {
            prevX = points[currentPoint - 1].x;
            prevY = points[currentPoint - 1].y;
        } else {
            drawCircle(canvas, colorNumber, prevX, prevY);
        }

        var p = canvas.path("M" + prevX + " " + prevY).attr({
            stroke: colorNumber,
            'stroke-width': 6
        });
        p.toBack();

        canvas.text(prevX, 320, points[currentPoint].label)
                .attr('font-size', '28px')
                .attr('font-family', 'Rokkitt')
                .attr('fill', '#fff');

        p.animate({path: "M" + prevX + " " + prevY + " L" + x + " " + y}, 900, function() {
            currentPoint++;
            drawCircle(canvas, colorNumber, x, y);
            if (typeof (points[currentPoint]) !== 'undefined') {
                animateLine(canvas, "#66ad00");
            } else {
                canvas.text(x, 320, '100')
                        .attr('font-size', '28px')
                        .attr('font-family', 'Rokkitt')
                        .attr('fill', '#fff');
            }
        });

    };

    var bottomLine = canvas.path("M 40 300").attr({
        stroke: '#323232',
        'stroke-width': 3
    });

    bottomLine.animate({path: "M 40 300 L " + (canvasWidth - 10) + " 300"}, 6300, function() {
        console.log('anim end');
        $($("#canvas svg circle").get(2)).tooltip({
            container: 'body',
            placement: 'top',
            title: '<h2>612</h2><p>TARGETS ENGAGED &lt; 20%</p><i></i>',
            trigger: 'manual',
            html: true
        });

        $($("#canvas svg circle").get(4)).tooltip({
            container: 'body',
            placement: 'top',
            title: '<h2>929</h2><p>TARGETS ENGAGED &lt; 50%</p><i></i>',
            trigger: 'manual',
            html: true
        });

        $($("#canvas svg circle").get(2)).tooltip('show');
        $($("#canvas svg circle").get(4)).tooltip('show');
    });

    animateLine(canvas, "#66ad00");
}

$(window).on('load', function(){
    init();

    initListeners();

    initCanvas();

});

